# Laravel Phone Validation

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/KielD-01/laravel-phone-validation/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/KielD-01/laravel-phone-validation/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/KielD-01/laravel-phone-validation/badges/build.png?b=master)](https://scrutinizer-ci.com/g/KielD-01/laravel-phone-validation/build-status/master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/KielD-01/laravel-phone-validation/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)


## Installation

`composer require kield-01/laravel-phone-validation`

## Auto-Discovery

If You would like not to auto-discover this packages' ServiceProvider, You need to put this line into Your
composer.json:

```json
{
	"extra": {
		"laravel": {
			"dont-discover": [
				"kield-01/laravel-phone-validation"
			]
		}
	}
}
```

## Provider registration (optional)
If You have this package to be non-discoverable, then You would need to register its ServiceProvider in the `app.php`:

```php
<?php

return [
    'providers' => [
        KielD01\PhoneValidation\Providers\ValidationServiceProvider::class,    
    ]   
];

```

## Available Validation rules

- [x] [phone_world](src/Providers/ValidationServiceProvider.php#L23)     
- [x] [phone_cis](src/Providers/ValidationServiceProvider.php#L30)   
