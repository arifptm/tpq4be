<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Student extends Model
{
    use Sluggable;

    protected $guarded = ['id'];
    public function sluggable(){ return ['slug' => ['source' => 'fullname']]; }  

    public function profile(){
    	return $this->hasOne('App\Profile');
    }

    public function scopeActive(){
    	return $this->where('stop_date', '=', null);
    }

    // public function achievements(){
    // 	return $this->hasMany('App\Achievement');
    // }
}
