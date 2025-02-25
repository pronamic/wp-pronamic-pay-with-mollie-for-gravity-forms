# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.7.1] - 2025-02-25

### Changed

- Improved Mollie error handling when updating subscription mandate. ([8f03de5](https://github.com/pronamic/wp-pronamic-pay-mollie/commit/8f03de511ccf3ebb0223919dd7fcf6185e4e9c3c))

### Composer

- Changed `wp-pay-gateways/mollie` from `v4.14.0` to `v4.14.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.14.1

Full set of changes: [`1.7.0...1.7.1`][1.7.1]

[1.7.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.7.0...v1.7.1

## [1.7.0] - 2025-02-17

### Changed

- Fixed early registration of payment methods for loading translations. ([75aed83](https://github.com/pronamic/wp-pay-core/commit/75aed831f46f32d1c5e01eced8b521fe8e331faf))
- Added fixed iDEAL issuers as fallback options in the issuers field. ([3dd8453](https://github.com/pronamic/wp-pronamic-pay-gravityforms/commit/3dd8453de20f27a24d6dc5e304ec25ca63eed033))
- Removed Mollie iDEAL issuers support for iDEAL 2.0 migration. ([eebbad1](https://github.com/pronamic/wp-pronamic-pay-mollie/commit/eebbad1ba21ec7d55862d40925efc1e1ea7035ef))

### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.8` to `v3.1.3`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.1.3
- Changed `composer/installers` from `v2.2.0` to `v2.3.0`.
	Release notes: https://github.com/composer/installers/releases/tag/v2.3.0
- Changed `woocommerce/action-scheduler` from `3.8.0` to `3.9.2`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.9.2
- Changed `wp-pay-extensions/gravityforms` from `v4.8.0` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.9.0
- Changed `wp-pay-gateways/mollie` from `v4.12.0` to `v4.14.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.14.0
- Changed `wp-pay/core` from `v4.20.0` to `v4.25.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.25.0

Full set of changes: [`1.6.1...1.7.0`][1.7.0]

[1.7.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.6.1...v1.7.0

## [1.6.1] - 2024-06-19

### Commits

- Requires PHP: 8.1. ([bec899d](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/bec899d49070eeff8f5182015412caff79763d7e))

### Composer

- Changed `wp-pay/core` from `v4.19.0` to `v4.20.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.20.0

Full set of changes: [`1.6.0...1.6.1`][1.6.1]

[1.6.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.6.0...v1.6.1

## [1.6.0] - 2024-06-12

### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.7` to `v3.0.8`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.8
- Changed `wp-pay-extensions/gravityforms` from `v4.7.0` to `v4.8.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.8.0
- Changed `wp-pay-gateways/mollie` from `v4.11.0` to `v4.12.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.12.0
- Changed `wp-pay/core` from `v4.18.0` to `v4.19.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.19.0

Full set of changes: [`1.5.0...1.6.0`][1.6.0]

[1.6.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.5.0...v1.6.0

## [1.5.0] - 2024-05-27

### Composer

- Changed `php` from `>=8.0` to `>=8.1`.
- Changed `woocommerce/action-scheduler` from `3.7.4` to `3.8.0`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.8.0
- Changed `wp-pay-gateways/mollie` from `v4.10.3` to `v4.11.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.11.0
- Changed `wp-pay/core` from `v4.17.0` to `v4.18.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.18.0

Full set of changes: [`1.4.3...1.5.0`][1.5.0]

[1.5.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.4.3...v1.5.0

## [1.4.3] - 2024-05-15

### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.6` to `v3.0.7`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.7
- Changed `wp-pay-extensions/gravityforms` from `v4.6.1` to `v4.7.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.7.0
- Changed `wp-pay/core` from `v4.16.0` to `v4.17.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.17.0

Full set of changes: [`1.4.2...1.4.3`][1.4.3]

[1.4.3]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.4.2...v1.4.3

## [1.4.2] - 2024-05-06

### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.5` to `v3.0.6`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.6
- Changed `wp-pay-gateways/mollie` from `v4.10.2` to `v4.10.3`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.10.3

Full set of changes: [`1.4.1...1.4.2`][1.4.2]

[1.4.2]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.4.1...v1.4.2

## [1.4.1] - 2024-04-22

### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.4` to `v3.0.5`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.5
- Changed `woocommerce/action-scheduler` from `3.7.3` to `3.7.4`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.4
- Changed `wp-pay-gateways/mollie` from `v4.10.0` to `v4.10.2`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.10.2

Full set of changes: [`1.4.0...1.4.1`][1.4.1]

[1.4.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.4.0...v1.4.1

## [1.4.0] - 2024-03-26

### Commits

- Tested up to: 6.5. ([37fbe26](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/37fbe26aa161f6a84f0327c3de735b09f0c3dd4f))
- Removed Mollie signup link. ([70e274e](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/70e274e0c449499833d73cc41fcb15e4af52776c))

### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.2` to `v3.0.4`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.4
- Changed `woocommerce/action-scheduler` from `3.7.1` to `3.7.3`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.3
- Changed `wp-pay-extensions/gravityforms` from `v4.6.0` to `v4.6.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.6.1
- Changed `wp-pay-gateways/mollie` from `v4.9.0` to `v4.10.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.10.0
- Changed `wp-pay/core` from `v4.15.0` to `v4.16.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.16.0

Full set of changes: [`1.3.0...1.4.0`][1.4.0]

[1.4.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.3.0...v1.4.0

## [1.3.0] - 2024-02-08

### Changed

- Optimize performance by reusing instances of `PayFeed` from memory. ([fa89eab](https://github.com/pronamic/wp-pronamic-pay-gravityforms/commit/fa89eaba746000d5c432b480f1b4f0b4b8e07994))
- The HTTP timeout option is increased when connecting to Mollie via WP-Cron, WP-CLI or the Action Scheduler library. [pronamic/wp-pay-core#170](https://github.com/pronamic/wp-pay-core/issues/170)

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.12.0` to `v3.0.2`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.0.2
- Changed `woocommerce/action-scheduler` from `3.7.1` to `3.7.1`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.1
- Changed `wp-pay-extensions/gravityforms` from `v4.5.8` to `v4.6.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.6.0
- Changed `wp-pay-gateways/mollie` from `v4.8.1` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.9.0
- Changed `wp-pay/core` from `v4.14.3` to `v4.15.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.15.0

Full set of changes: [`1.2.1...1.3.0`][1.3.0]

[1.3.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.2.1...v1.3.0

## [1.2.1] - 2023-12-18

### Composer

- Changed `woocommerce/action-scheduler` from `3.6.4` to `3.7.1`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.7.1
- Changed `wp-pay/core` from `v4.14.2` to `v4.14.3`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.3

Full set of changes: [`1.2.0...1.2.1`][1.2.1]

[1.2.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.2.0...v1.2.1

## [1.2.0] - 2023-11-09

### Changed

- Requires PHP 8. ([b811fce](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/b811fce525604af985a12cb2a5172c33d3857cc8))

### Composer

- Changed `php` from `>=7.4` to `>=8.0`.
- Changed `wp-pay-gateways/mollie` from `v4.7.11` to `v4.8.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.8.1
- Changed `wp-pay/core` from `v4.14.1` to `v4.14.2`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.2

Full set of changes: [`1.1.0...1.2.0`][1.2.0]

[1.2.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.1.0...v1.2.0

## [1.1.0] - 2023-11-07

### Commits

- Added `if ( ! defined( 'ABSPATH' ) )`. ([43a5192](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/43a51929eda3d23e1e06de450148a7b9ebd6c647))

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.22` to `v2.12.0`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.12.0
- Changed `woocommerce/action-scheduler` from `3.6.2` to `3.6.4`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.4
- Changed `wp-pay-extensions/gravityforms` from `v4.5.6` to `v4.5.8`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.5.8
- Changed `wp-pay/core` from `v4.12.0` to `v4.14.1`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.14.1

Full set of changes: [`1.0.6...1.1.0`][1.1.0]

[1.1.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.0.6...v1.1.0

## [1.0.6] - 2023-09-11

### Commits

- Updated composer.lock ([58f5744](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/58f5744d4aedaf4ed264b68e15c06e5b015d42a8))
- Removed "?" from "how to" title (fix #2). ([897f769](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/897f7691327b1f3be4a25cec371d4a5c1f4ae173))
- Updated installation manual URL (fix #2). ([eafee95](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/eafee9591ef20088d2bf8212032c0200d6b0a12c))

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.21` to `v2.11.22`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.22
- Changed `woocommerce/action-scheduler` from `3.6.1` to `3.6.2`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.2
- Changed `wp-pay-gateways/mollie` from `v4.7.8` to `v4.7.11`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.11
- Changed `wp-pay/core` from `v4.10.1` to `v4.12.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.12.0

Full set of changes: [`1.0.5...1.0.6`][1.0.6]

[1.0.6]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.0.5...v1.0.6

## [1.0.5] - 2023-07-19

### Fixed

- Fixed fatal error after plugin activation.

### Composer

- Changed `wp-pay/core` from `v4.10.0` to `v4.10.1`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.10.1

Full set of changes: [`1.0.4...1.0.5`][1.0.5]

[1.0.5]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.0.4...v1.0.5

## [1.0.4] - 2023-07-18

### Composer

- Changed `wp-pay/core` from `v4.9.4` to `v4.10.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.10.0

Full set of changes: [`1.0.3...1.0.4`][1.0.4]

[1.0.4]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.0.3...v1.0.4

## [1.0.3] - 2023-07-12

### Commits

- Also replace `pronamic-money` text domain. ([821805e](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/821805e125ae55bde61f1ec9f52b792623764333))

### Composer

- Changed `woocommerce/action-scheduler` from `3.6.0` to `3.6.1`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.1
- Changed `wp-pay-extensions/gravityforms` from `v4.5.5` to `v4.5.6`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.5.6
- Changed `wp-pay-gateways/mollie` from `v4.7.7` to `v4.7.8`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.8
- Changed `wp-pay/core` from `v4.9.3` to `v4.9.4`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.9.4

Full set of changes: [`1.0.2...1.0.3`][1.0.3]

[1.0.3]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.0.2...v1.0.3

## [1.0.2] - 2023-06-01

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.17` to `v2.11.21`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.21
- Changed `woocommerce/action-scheduler` from `3.5.4` to `3.6.0`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.6.0
- Changed `wp-pay-extensions/gravityforms` from `v4.5.3` to `v4.5.5`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.5.5
- Changed `wp-pay-gateways/mollie` from `v4.7.6` to `v4.7.7`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.7
- Changed `wp-pay/core` from `v4.9.0` to `v4.9.3`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.9.3

Full set of changes: [`1.0.1...1.0.2`][1.0.2]

[1.0.2]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.0.1...v1.0.2

## [1.0.1] - 2023-03-29

### Commits

- Updated translations. ([0bfe032](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/0bfe0329ae59be71a91c6a8428c01033d5ca0a4e))
- Tested up to 6.2. ([0fb19ff](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/0fb19ffa279f1a89b628a91da285490e7dc645bd))
- Use class as integration key. ([55f9379](https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/commit/55f9379dba93edea0b871d74106452fa1b32ffcb))

### Composer

- Changed `automattic/jetpack-autoloader` from `v2.11.16` to `v2.11.17`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v2.11.17
- Changed `wp-pay-extensions/gravityforms` from `v4.5.2` to `v4.5.3`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-gravityforms/releases/tag/v4.5.3
- Changed `wp-pay-gateways/mollie` from `v4.7.4` to `v4.7.6`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-mollie/releases/tag/v4.7.6
- Changed `wp-pay/core` from `v4.7.3` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.9.0
Full set of changes: [`1.0.0...1.0.1`][1.0.1]

[1.0.1]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/compare/v1.0.0...v1.0.1

## [1.0.0] - 2023-02-24

- First release.

[1.0.0]: https://github.com/pronamic/wp-pronamic-pay-with-mollie-for-gravity-forms/releases/tag/v1.0.0
