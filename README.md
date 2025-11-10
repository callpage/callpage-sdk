# PHP wrapper for CallPage REST API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/callpage/callpage-sdk.svg?style=flat-square)](https://packagist.org/packages/callpage/callpage-sdk)
[![Tests](https://img.shields.io/github/actions/workflow/status/callpage/callpage-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/callpage/callpage-sdk/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/callpage/callpage-sdk.svg?style=flat-square)](https://packagist.org/packages/callpage/callpage-sdk)

PHP wrapper for CallPage REST API.

Go to [CallPage](https://callpage.io) to get your API Key.

## Installation

You can install the package via composer:

```bash
composer require callpage/callpage-sdk
```

## Usage

```php
use CallPage\CallPage\CallPage;

$callpage = new CallPage("Your API Key");
$callpage->widget($id)->call($phone);
```

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
