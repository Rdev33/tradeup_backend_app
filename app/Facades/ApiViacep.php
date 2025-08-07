<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ApiViacep extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'api-viacep';
	}
}