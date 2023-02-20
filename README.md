# Cyprus vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Cyprus vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/cy-vat-format-validator
```

## Usage example

Valid Cyprus vat number:

```php
$validator = new CYVatFormatValidator();
$validator->isValid('12345678A');
$validator->isValid('12345678B');
$validator->isValid('CY12345678Q');
```

Returns:

```shell
true
true
true
```

Invalid Cyprus vat number:

```php
$validator = new CYVatFormatValidator();
$validator->isValid('123456789X');
$validator->isValid('1234567X');
$validator->isValid('CY1234567X');
$validator->isValid('CY123456789X');
```

```shell
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
