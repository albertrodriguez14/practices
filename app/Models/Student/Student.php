<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $table="students";

    protected $primarykey = "id";

    protected $fillable = ['dni_id','dni_number','nombre','apellido',
                           'cumpleaños','direccion','telefono','e-mail','eps','contact_id'];



     public function dni()
     {
         return $this->belongsTo('App\Dni', 'id');
     }        
     
     public function contacto()
     {
         return $this->belongsTo('App\Contact', 'id');
     }
}
