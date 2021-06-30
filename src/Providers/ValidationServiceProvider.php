<?php

declare(strict_types=1);

namespace KielD01\PhoneValidation;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use KielD01\PhoneValidation\Enum\PhoneRegex;
use KielD01\PhoneValidation\Enum\PhoneRules;

class ValidationServiceProvider extends ServiceProvider
{
	public function register()
	{
		Log::info(sprintf('%s has been registered', __CLASS__));
	}

	public function boot()
	{
		Validator::extend(
			PhoneRules::WORLD,
			static function ($attribute, $value) {
				return preg_match(PhoneRegex::WORLD, $value);
			}
		);

		Validator::extend(
			PhoneRules::CIS,
			static function ($attribute, $value) {
				return preg_match(PhoneRegex::CIS, $value);
			}
		);
	}
}
