<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posmitems extends Model
{
    protected $table = 'posmitems';
    protected $fillable = ['itemname','amount'];
}
