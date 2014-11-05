<?php namespace Wedding\Forms;

use Laracasts\Validation\FormValidator;

class LoginForm extends FormValidator
{
    /**
     * Validation rules for the sign in form
     *
     * @var array
     */
    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];
}