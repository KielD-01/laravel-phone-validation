# Laravel Phone Validation

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
        KielD01\PhoneValidation\ValidationServiceProvider::class,    
    ]   
];

```

## Available Validation rules

[x] [phone_world](src/Providers/ValidationServiceProvider.php#L23)     
[x] [phone_cis](src/Providers/ValidationServiceProvider.php#L30)   
