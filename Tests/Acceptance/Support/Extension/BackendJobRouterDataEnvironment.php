<?php

declare(strict_types=1);

/*
 * This file is part of the "jobrouter_data" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\JobRouterData\Tests\Acceptance\Support\Extension;

use TYPO3\TestingFramework\Core\Acceptance\Extension\BackendEnvironment;

/**
 * Load various core extensions and jobrouter_connector
 */
class BackendJobRouterDataEnvironment extends BackendEnvironment
{
    /**
     * Load a list of core extensions and styleguide
     *
     * @var array
     */
    protected $localConfig = [
        'coreExtensionsToLoad' => [
            'core',
            'extbase',
            'fluid',
            'backend',
            'about',
            'install',
            'frontend',
            'recordlist',
            'form',
        ],
        'testExtensionsToLoad' => [
            'typo3conf/ext/jobrouter_base',
            'typo3conf/ext/jobrouter_connector',
            'typo3conf/ext/jobrouter_data',
        ],
        'xmlDatabaseFixtures' => [
            'PACKAGE:typo3/testing-framework/Resources/Core/Acceptance/Fixtures/be_users.xml',
            'PACKAGE:typo3/testing-framework/Resources/Core/Acceptance/Fixtures/be_sessions.xml',
            'PACKAGE:typo3/testing-framework/Resources/Core/Acceptance/Fixtures/be_groups.xml',
            'EXT:jobrouter_data/Tests/Acceptance/Fixtures/tx_jobrouterconnector_domain_model_connection.xml',
        ],
        'pathsToLinkInTestInstance' => [
            'typo3conf/ext/jobrouter_data/Tests/Acceptance/Fixtures/jobrouterkey' => '.jobrouterkey',
        ],
    ];
}
