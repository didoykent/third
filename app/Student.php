<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Recording;
use App\Schedule;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;



class Student extends Model implements AuthenticatableContract
{

  use Authenticatable;

  protected $table = 'students';


  protected $fillable = ['en_name', 'kr_name', 'email', 'password'];



  protected $hidden = ['password', 'remember_token'];


public function recording(){

return $this->hasMany(Recording::class);

}


public function schedule(){

  return $this->hasMany(Schedule::class);
}

}
