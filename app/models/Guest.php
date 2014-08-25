<?php


class Guest extends Eloquent {

	protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'address2',
        'address3',
        'city',
        'state',
        'zip',
        'email',
    ];

    /**
     * The database table used by this model
     *
     * @var string
     */
    protected $table = 'guests';

    /**
     * Register a new user
     *
     * @param array $fields
     * @return static
     */
    public static function register(array $fields)
    {
        $user = new static($fields);

        return $user;
    }
}