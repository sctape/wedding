<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 10/14/2014
 * Time: 11:52 PM
 */

class GuestPresenter extends Laracasts\Presenter\Presenter {
    public function fullName()
    {
        return $this->first_name . " " . $this->last_name;
    }
} 