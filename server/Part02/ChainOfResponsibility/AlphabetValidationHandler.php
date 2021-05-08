<?php
declare(strict_types=1);

class AlphabetValidationHandler extends ValidationHandler
{

    protected function execValidation($input)
    {
        return preg_match('/^[a-z]*$/i', $input);
    }

    protected function getErrorMessage()
    {
        return '半角英字で入力してください';
    }
}
