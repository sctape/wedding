<?php

use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\UserTrait;

class Guest extends \Eloquent {
    use UserTrait, RemindableTrait;

	protected $fillable = [
        'first_name',
        'last_name',

    ];

    protected $table = 'guests';
}