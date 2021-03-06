<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    public $table = 'room';
    /**
     * Return seances, thouse goes in this room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function seances()
    {
        return $this->hasMany('App\Seance');
    }
}
