<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumbValidation implements Rule
{

    private $gsm_codes = [];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($gsm_codes)
    {
        $this->gsm_codes = $gsm_codes;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $gsmCode = str_split($value, 5)[0];
        if (in_array( $gsmCode, $this->gsm_codes)) return true;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
