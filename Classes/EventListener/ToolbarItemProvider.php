<?php

declare(strict_types=1);

/*
 * This file is part of the "jobrouter_data" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\JobRouterData\EventListener;

use Brotkrueml\JobRouterData\Extension;
use TYPO3\CMS\Backend\Backend\Event\SystemInformationToolbarCollectorEvent;
use TYPO3\CMS\Backend\Toolbar\Enumeration\InformationStatus;
use TYPO3\CMS\Core\Localization\LanguageService;
use TYPO3\CMS\Core\Registry;

/**
 * @internal
 */
final class ToolbarItemProvider
{
    private $commandNames = [
        'syncCommand',
        'transmitCommand',
    ];

    /** @var array|null */
    private $lastRunInformation;

    /** @var LanguageService */
    private $languageService;

    /** @var Registry */
    private $registry;

    public function __construct(LanguageService $languageService, Registry $registry)
    {
        $this->languageService = $languageService;
        $this->registry = $registry;
    }

    public function __invoke(SystemInformationToolbarCollectorEvent $event): void
    {
        $systemInformationToolbarItem = $event->getToolbarItem();

        foreach ($this->commandNames as $commandName) {
            $this->lastRunInformation = $this->registry->get(Extension::REGISTRY_NAMESPACE, $commandName . '.lastRun');
            $systemInformationToolbarItem->addSystemInformation(
                $this->languageService->sL(
                    \sprintf('%s:%s.lastRunLabel', Extension::LANGUAGE_PATH_TOOLBAR, $commandName)
                ),
                $this->getMessage($commandName),
                'jobrouter-data-toolbar',
                $this->getSeverity()
            );
        }
    }

    protected function getMessage(string $commandName): string
    {
        if ($this->lastRunInformation === null) {
            return $this->languageService->sL(
                \sprintf('%s:%s.neverRun', Extension::LANGUAGE_PATH_TOOLBAR, $commandName)
            );
        }

        if ($this->isWarning()) {
            $status = $this->languageService->sL(Extension::LANGUAGE_PATH_TOOLBAR . ':status.warning');
        } elseif ($this->isOverdue()) {
            $status = $this->languageService->sL(Extension::LANGUAGE_PATH_TOOLBAR . ':status.overdue');
        } else {
            $status = $this->languageService->sL(Extension::LANGUAGE_PATH_TOOLBAR . ':status.success');
        }

        return \sprintf(
            $this->languageService->sL(
                \sprintf('%s:%s.lastRunMessage', Extension::LANGUAGE_PATH_TOOLBAR, $commandName)
            ),
            \date($GLOBALS['TYPO3_CONF_VARS']['SYS']['ddmmyy'], $this->lastRunInformation['start']),
            \date($GLOBALS['TYPO3_CONF_VARS']['SYS']['hhmm'], $this->lastRunInformation['start']),
            $status
        );
    }

    protected function isWarning(): bool
    {
        return $this->lastRunInformation['exitCode'] > 0;
    }

    protected function isOverdue(): bool
    {
        return $this->lastRunInformation['start'] < \time() - 86400;
    }

    protected function getSeverity(): string
    {
        if ($this->lastRunInformation === null) {
            return InformationStatus::STATUS_WARNING;
        }

        if ($this->isWarning() || $this->isOverdue()) {
            $severity = InformationStatus::STATUS_WARNING;
        } else {
            $severity = InformationStatus::STATUS_OK;
        }

        return $severity;
    }
}
