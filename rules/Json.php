<?php namespace Zaxbux\WebAppMeta\Rules;

use Lang;
use Illuminate\Contracts\Validation\Rule;

class Json implements Rule {

	/**
	 * Determine if a valid JSON string
	 * 
	 * @param string $attribute
	 * @param mixed  $value
	 * @return bool
	 */
	public function passes($attribute, $value) {
		if (!empty($value)) {
			@\json_decode($value);

			return json_last_error() === JSON_ERROR_NONE;
		}

		return false;
	}

	/**
	 * Validation callback.
	 * 
	 * @param string $attribute
	 * @param mixed  $value
	 * @param array  $params
	 * @return bool
	 */
	public function validate($attribute, $value, $params) {
		return $this->passes($attribute, $value);
	}

	/**
	 * Get the validation error message.
	 * 
	 * @return string
	 */
	public function message() {
		return Lang::get('zaxbux.webappmeta::lang.rule.json');
	}
}
