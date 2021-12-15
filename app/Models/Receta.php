<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Receta extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'recetas'; //la tabla de este modelo ya no es clientes, ahora es clientes2
    public $timestamps = false; //no se usan los campos created_at y updated_at
    //protected $fillable = ['codigo', 'empresa', 'contacto', 'direccion', 'ciudad']; //campos que se pueden rellenar
    protected $guarded = ['id']; //campos que no se pueden rellenar
    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at', 'updated_at'];
    public function posts()
    {
    return $this->belongsTo(Receta::class);
    }
}


