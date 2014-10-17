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
        'rsvp'
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

    public function notAttending()
    {
        //If the invite hasn't responded, then we don't know they're not attending
        if ($this->rsvp == false) {
            return true;
        }

        foreach($this->guests() as $guest) {
            if ($guest->attending) {
                //If at least one guest is attending, then we'll return false
                return false;
            }
        }

        return true;
    }

}