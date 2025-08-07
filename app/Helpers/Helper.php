<?php

namespace App\Helpers;

class Helper
{
	/**
	 * Validate a Brazilian ZIP code (CEP).
	 *
	 * @param string $cep The ZIP code to validate.
	 * @return bool Returns true if the ZIP code is valid, false otherwise.
	 */
    public static function isValidCep(string $cep): bool
    {
		$CEP_LENGTH = 8;

		if (empty($cep)) {
			return false;
		}

		if (!is_numeric($cep)) {
			return false;
		}

		if (strlen($cep) !== $CEP_LENGTH) {
			return false;
		}

		return true;
    }
}