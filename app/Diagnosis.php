<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    //
    protected $table='patient_diagnosis';

    public function user(){

        return $this->belongsTo('App\User');
    }

    // public function user_diagnosis(){
    //     return $this->hasMany('App\User','id','user_id');
    // }
}
