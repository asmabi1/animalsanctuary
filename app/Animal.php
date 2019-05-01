<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(App\User);
    }
}
