<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Travel extends Model
{
    use SoftDeletes;

    public $table = 'travels';
    protected $fillable = ['destination', 'commercial_name', 'duration', 'departure_date', 'description', 'price'];

}
