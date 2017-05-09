# Unique Key Generator

[![Latest Stable Version](https://poser.pugx.org/danrovito/uniquekeygenerator/v/stable)](https://packagist.org/packages/danrovito/uniquekeygenerator) [![Total Downloads](https://poser.pugx.org/danrovito/uniquekeygenerator/downloads)](https://packagist.org/packages/danrovito/uniquekeygenerator) [![License](https://poser.pugx.org/danrovito/uniquekeygenerator/license)](https://packagist.org/packages/danrovito/uniquekeygenerator) [![StyleCI](https://styleci.io/repos/90751899/shield?branch=master)](https://styleci.io/repos/90751899)

This package is designed to create a unique key (WGDL2U-HF3DH7-FYP5DT-RVT5T6-P5FFXX) to use as a possible identity or token.

## Installation

You can install this package via composer using the following command

```
composer require danrovito/uniquekeygenerator
```

## Usage

To use this package you'll need to set the namespace first

```php
use GenerateKey\GenerateKey;
```

Then call the class

```php
$key = new GenerateKey();
```

From there you can call the `makeKey` function.  There are 3 ways to generate a unique key

You can send an empty request

```php
$key->makeKey();
```

You can send an IP address

```php
$key->makeKey('192.168.1.1');
```

or you can send a numeric string

```php
$key->makeKey('12345678');
```

If you send an IP or string, the last section of your key will be the same each time if the value you input is the same.

The generated key will look like this

```
WGDL2U-HF3DH7-FYP5DT-RVT5T6-P5FFXX
```
