<?php
declare(strict_types=1);

class NumberValidationHandler extends ValidationHandler
{

    protected function execValidation($input)
    {
        return (preg_match('/^[0-9]*$/', $input) > 0);
    }

    protected function getErrorMessage()
    {
        return '半角数字で入力してください';
    }
}