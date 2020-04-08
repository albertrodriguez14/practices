<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table ="contacts";

    protected $primarykey = "id";

    protected $fillable = ['Nombre_contacto','apellido_contacto','dni_id','cedula_contacto','telefono_contacto']; 
     

     public function dni()
     {
         return $this->belongsTo('App\Models\Dni\Dni', 'dni_id');
     }

     public function student()
     {
         return $this->hasMany('App\Student', 'contact_id');
     }

}
