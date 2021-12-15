<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $table = 'vuelos'; //la tabla de este modelo ya no es clientes, ahora es clientes2
    public $timestamps = false; //no se usan los campos created_at y updated_at
    protected $guarded = ['id']; //campos que no se pueden rellenar
    protected $dates = ['deleted_at'];

    public function pasajes()
    {
    	return $this->hasMany(Pasaje::class,'vuelo_id');
    }

}
