<?php


class Invite extends Eloquent {

    use Laracasts\Presenter\PresentableTrait;

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

    /** @var string View presenter to store view logic */
    protected $presenter = 'InvitePresenter';

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