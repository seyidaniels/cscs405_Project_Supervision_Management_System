<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

use Illuminate\Database\Eloquent\SoftDeletes; //<--- use the softdelete traits


class Message extends Eloquent {


    protected $fillable = [
       'text', 'appointment_id'
    ];

    
}