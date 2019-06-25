<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits


class Appointment extends Eloquent {

    use SoftDeletes;

    protected $fillable = [
       'name', 'about', 'student_id', 'schedule_id'
    ];

    public function schedule() {
        return $this->belongsTo(Schedule::class);
    }


    public function getDateFormat()
{
     return 'Y-m-d H:i:s.u';
}

}