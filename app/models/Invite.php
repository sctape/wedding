<?php


class Invite extends Eloquent {

	protected $fillable = [
        'name',
        'address',
        'address2',
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
    protected $table = 'invites';


    /**
     * An invite has many guests
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function guests()
    {
        return $this->hasMany('Guest');
    }
}