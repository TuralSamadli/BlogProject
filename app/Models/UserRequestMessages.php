<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class user_messages extends Model
{
    protected $table='user_messages';
    protected $guarded=['id'];
    public $timestamps=false;
}
