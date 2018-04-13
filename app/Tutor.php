<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Schedule;
use App\Student;
class Tutor extends Model
{

    protected $table = 'tutors';

    protected $fillable = ['name', 'email', 'password'];


    protected $hidden = ['password', 'remember_token'];


public function schedule(){

  return $this->hasMany(Schedule::class);
}

public function student(){

  return $this-hasMany(Student::class);
}

}
