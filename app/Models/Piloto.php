<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piloto extends Model
{
    use HasFactory;
    protected $table = 'pilotos'; //la tabla de este modelo ya no es clientes, ahora es clientes2
    public $timestamps = false; //no se usan los campos created_at y updated_at
    protected $guarded = ['id']; //campos que no se pueden rellenar
    protected $dates = ['deleted_at'];

    public function vuelos()
    {
    	return $this->hasMany(Vuelo::class,'piloto_id');
    }

}