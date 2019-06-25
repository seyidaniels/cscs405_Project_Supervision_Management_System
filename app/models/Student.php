<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits

class Student extends Eloquent {


    protected $fillable = [
        'firstname', 'lastname', 'email', 'phone', 'matric_number', 'password', 'supervisor_id'
    ];


    protected $hidden = [
        'password', 'deleted_at'
    ];

        public function setPasswordAttribute($value){

        $this->attributes['password'] = password_hash($value, PASSWORD_DEFAULT);
    }


    public function supervisor () {
        return $this->belongsTo(Supervisor::class);
    }

    public function appointments() {
        return $this->hasMany(Appointment::class);
    }

    public function fullname() {
        return $this->firstname. " ". $this->lastname;
    }
}