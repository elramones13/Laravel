<?php

namespace Database\Factories;
 
use App\Models\Receta;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class RecetaFactory extends Factory
{
    protected $model = Receta::class;
 
    public function definition()
    {

        return [
            'nombre'        => $this->faker->name(),
            'descripcion'   => $this->faker->text(),
            'precio'        => $this->faker->numberBetween($min = 1, $max = 1000),
            'calorias'      => $this->faker->numberBetween($min = 1, $max = 5000),
            'f_alta'        => $this->faker->date()
        ];
    }
}