<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class america extends Model
{
    protected $table = 'americanadas';

    public function place()
    {
        return $this->hasMany(place::class);
    }

}
