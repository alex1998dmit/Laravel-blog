<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
    public function user(){

        return $this->belongsTo('App\User');
    }

    protected $fillable = ['user_id', 'avatar', 'youtube', 'facebook', 'about'];
}
