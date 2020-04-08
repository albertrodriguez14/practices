<?php

namespace App\Models\Dni;

use Illuminate\Database\Eloquent\Model;

class Dni extends Model
{
    //
    protected $table = "dnis";

    protected $primarykey = "id";

    protected $fillable = ['dni'];


    
    public function student()
    {
        return $this->hasMany('App\Student', 'dni_id');
    }

    public function contact()
    {
        return $this->hasMany('App\Contact', 'id');
    }

}
