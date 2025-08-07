<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/** depois consertar isso...
 * //static \Illuminate\Http\Client\Response get(string $url, array $query = [])
 */

class ApiViacep extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'api-viacep';
	}
}