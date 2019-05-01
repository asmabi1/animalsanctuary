<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $table = 'adoptions';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(App\User);
    }
}