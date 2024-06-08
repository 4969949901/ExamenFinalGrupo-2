<?php

namespace Database\Factories;

use App\Models\ExamenFinal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $ExamenFinal = ExamenFinal::class;
    public function definition()
    {
        return [
            'nombre_alumno' => $this->faker->name,
            'correo_institucional' => $this->faker->email,
            'telefono' => $this->faker->phoneNumber

        ];
    }
}
