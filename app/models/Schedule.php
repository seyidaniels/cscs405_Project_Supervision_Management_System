<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits




class Schedule extends Eloquent {


    protected $fillable = [
        'day', 'start_time', 'end_time', 'max_no_students', 'supervisor_id'
    ];


    public function appointments () {
        return $this->hasMany(Appointment::class);
    }


    public function supervisor () {
        return $this->belongsTo(Supervisor::class);
    }

    public function print () {
        return $this->day . " | " . $this->start_time . " to ". $this->end_time . " | ". $this->max_no_students . " students allowed, " . count($this->appointments) . " booked";
    }




}