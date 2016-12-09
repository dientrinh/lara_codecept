<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    protected $table='targets';
    // protected $primaryKey='id';
    // public $timestamps = false;
    protected $fillable =  ['name', 'type', 'notes'];
	
	/**
     * Map relation between 2 tables
     *
     */
    public function targetDetails()
    {
        return $this->hasMany('App\Models\TargetDetail');
    }

    public function getAgeAttribute($age)
    {
        return $age+5;
    }

}

