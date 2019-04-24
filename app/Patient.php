<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $dates = [
        'dob' => 'datetime:d/m/Y'
    ];
}
