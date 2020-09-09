<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $table = 'places';

    public function america()
    {
        return $this->belongsTo(america::class);
    }
}
