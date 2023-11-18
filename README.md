# yocLib - Netstring (PHP)

This yocLibrary enables your project to encode and decode Netstring values in PHP.

## Status

[![CI](https://github.com/yocto/yoclib-netstring-php/actions/workflows/ci.yml/badge.svg)](https://github.com/yocto/yoclib-netstring-php/actions/workflows/ci.yml)

## Installation

`composer require yocto/yoclib-netstring`

## Use

### Encoding

```php
use YOCLIB\Netstring\Netstring;

$string = 'abc';

$netstring = Netstring::encode($string);
```

### Decoding

```php
use YOCLIB\Netstring\Netstring;

$netstring = '3:abc,';

$string = Netstring::decode($netstring);
```