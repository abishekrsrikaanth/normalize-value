# normalize-value

![Last version](https://img.shields.io/github/tag/abishekrsrikaanth/normalize-value.svg?style=flat-square)
[![Donate](https://img.shields.io/badge/donate-paypal-blue.svg?style=flat-square)](https://paypal.me/abishekrsrikaanth)

> Normalizes a value according to the specified steps, using [feature scaling](https://en.m.wikipedia.org/wiki/Feature_scaling).

## Install

```bash
$ composer require abishekrsrikaanth/normalize-value
```

## Usage

```php
$normalizedValue = normalize_value(500, [
        ["value" => 0, "norm" => 1],
        ["value" => 1000, "norm" => 0]
    ]);

echo $normalizedValue; //0.5
```


## License

**normalize-value** © [Technicaliti](https://technicaliti.me), Released under the MIT License.<br>