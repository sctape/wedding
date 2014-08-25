<?php

class Table extends \Eloquent {
	protected $fillable = ['name'];

    protected $table = 'tables';

    /**
     * Return the guests attached to this table
     *
     * @return mixed
     */
    public function guests()
    {
        return $this->hasMany('Guest');
    }
}