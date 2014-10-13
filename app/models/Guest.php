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
        'table_id',
        'invite_id',
    ];

    /**
     * The database table used by this model
     *
     * @var string
     */
    protected $table = 'guests';


    /**
     * Return the table that this user is assigned to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function myTable()
    {
        return $this->belongsTo('Table');
    }

    /**
     * Return the invite that this guest belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function myInvite()
    {
        return $this->belongsTo('Invite');
    }

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