<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'user';
    protected $fillable = ['user_name', 'first_name', 'chat_id', 'status', 'room_number'];

}