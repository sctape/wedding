<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 10/14/2014
 * Time: 11:52 PM
 */

class InvitePresenter extends Laracasts\Presenter\Presenter {
    public function guestSummary()
    {
        $guests = [];

        foreach($this->entity->guests()->get() as $guest) {
            $guests[] = $guest->present()->fullName;
        }

        if (count($guests) <= 2) {
            return implode(' & ', $guests);
        } else {
            $lastItem = array_pop($guests);
            return implode(', ', $guests) . ' & ' . $lastItem;
        }
    }

    public function addressSummary()
    {

        $addressPieces[] = $this->email;
        $addressPieces[] = $this->address;
        $addressPieces[] = $this->city . ", " . $this->state . " " . $this->zip;

        return implode('<br />', $addressPieces);
    }
} 