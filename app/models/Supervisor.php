<?php 

use Illuminate\Database\Eloquent\Model as Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits


class Supervisor extends Eloquent {


    protected $fillable = [
        'title', 'firstname', 'lastname', 'staff_id', 'password', 'email', 'phone'
    ];

    public function setPasswordAttribute($value){

        $this->attributes['password'] = password_hash($value, PASSWORD_DEFAULT);
    }

    public function students () {
        return $this->hasMany(Student::class);
    }

    public function schedules () {
        return $this->hasMany(Schedule::class);
    }

    public function fullname() {
        return $this->title . " ".$this->firstname. " ". $this->lastname;
    }

}