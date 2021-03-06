<?php


class Guest extends Eloquent {

    use Laracasts\Presenter\PresentableTrait;

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
        'attending'
    ];

    /**
     * The database table used by this model
     *
     * @var string
     */
    protected $table = 'guests';

    /** @var string View presenter to store view logic */
    protected $presenter = 'GuestPresenter';

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