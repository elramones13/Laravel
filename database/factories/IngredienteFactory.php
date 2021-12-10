<?php

namespace Database\Factories;

use App\Models\Ingrediente;
use App\Models\Receta;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredienteFactory extends Factory
{
    protected $model = Ingrediente::class;
 
    public function definition()
    {

        return [
            'nombre'        => $this->faker->jobTitle(),
            'color'         => $this->faker->colorName(),
            'id_receta'     => Receta::all()->random()->id,
        ];
    }
}