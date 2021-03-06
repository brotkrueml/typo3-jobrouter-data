# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Changed
- Rename "own table" to "custom table"
- Use table handle instead of uid as argument in SyncCommand

## [0.13.0] - 2021-03-14

### Added
- Show number of days for available transfers in status widget

### Updated
- TYPO3 JobRouter Connector to version 1.0
- TYPO3 JobRouter Base to version 1.0

### Fixed
- Set crdate in transfer table correctly

## [0.12.3] - 2021-03-07

### Added
- Dashboard widget "JobData Transmission Errors"

## [0.12.2] - 2021-03-02

### Changed
- TYPO3 form extension is no longer a requirement

## [0.12.1] - 2021-02-12

### Changed
- Raise minimum required version to TYPO3 10.4.11
- Throw DatasetNotAvailableException in JobDataRepository when querying a non-existing jrid

## [0.12.0] - 2020-10-19

### Added
- Form finisher to transmit form fields to a JobData table
- Dashboard widget for JobData transmission status

### Changed
- Use log table from TYPO3 JobRouter Base extension
- Rename "transfer identifier" to "correlation id" in transfer table

### Fixed
- Store jrid correctly in transfer table after transmission
- Lazy load client in JobDataRepository to avoid errors on initialisation

### Removed
- Report

## [0.11.0] - 2020-09-01

### Added
- Description field to table record
- Introduce the JobDataRepository

### Updated
- TYPO3 JobRouter Connector to version 0.11

### Removed
- RestClientFactory is not available anymore, use from connector extension instead

## [0.10.0] - 2020-06-06

### Added
- Support for TYPO3 v10 LTS
- Prepare for upcoming major PHP versions
- Introduce a handle field for table links
- Add last run of sync and transmit command to system information toolbar

### Changed
- Rename DeleteOldTransfersCommand to CleanUpTransfersCommand

### Removed
- Support for TYPO3 v9 LTS

## [0.9.0] - 2020-02-24

### Added
- Command for deleting old transfers
- Use own user agent addition

### Updated
- TYPO3 JobRouter Connector to version 0.9

## [0.8.0] - 2020-02-17

### Fixed
- Only one command (sync, transmit) can run at a time

## [0.7.0] - 2020-02-09

### Added
- Implement reports for synchronisation and transfers

### Changed
- Remove plugin in favour of content element
- Use log table from TYPO3 JobRouter Connector

## [0.6.0] - 2020-01-27

### Added
- Command for transmitting datasets to JobData tables
- Documentation

### Changed
- Renamed table column (local_table => own_table) in table tx_jobrouterdata_domain_model_table
- Revise logging and enable logging into table

### Updated
- TYPO3 JobRouter Connector to version 0.7

### Removed
- Switchable controller actions in plugin

### Fixed
- Sync other tables when one table throws error on synchronisation

## [0.5.0] - 2020-01-11

### Updated
- TYPO3 JobRouter Connector to version 0.6

## [0.4.0] - 2020-01-02

### Updated
- TYPO3 JobRouter Connector to version 0.5

### Fixed
- Delete datasets from simple synchronisation when table is deleted (#6)
- Clear cache of a page with plugin after synchronisation (#7)

## [0.3.1] - 2019-11-24

### Updated
- TYPO3 JobRouter Connector to version 0.4

## [0.3.0] - 2019-11-24

### Added
- DatasetRepository
- Possibility to add tables for other usage in module

### Changed
- Dataset model

## [0.2.0] - 2019-10-26

### Changed
- Adjust package name

## [0.1.0] - 2019-10-25

Initial pre-release

[Unreleased]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.13.0...HEAD
[0.13.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.12.3...v0.13.0
[0.12.3]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.12.2...v0.12.3
[0.12.2]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.12.1...v0.12.2
[0.12.1]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.12.0...v0.12.1
[0.12.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.11.0...v0.12.0
[0.11.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.10.0...v0.11.0
[0.10.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.9.0...v0.10.0
[0.9.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.8.0...v0.9.0
[0.8.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.7.0...v0.8.0
[0.7.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.6.0...v0.7.0
[0.6.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.5.0...v0.6.0
[0.5.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.4.0...v0.5.0
[0.4.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.3.1...v0.4.0
[0.3.1]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.3.0...v0.3.1
[0.3.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/brotkrueml/typo3-jobrouter-data/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/brotkrueml/typo3-jobrouter-data/releases/tag/v0.1.0
