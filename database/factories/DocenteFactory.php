<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocenteFactory extends Factory
{
        /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Docente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->firstName,
            'apellidos' => $this->faker->lastName,
            'ci' => $this->faker->ean8,
            'celular' => $this->faker->ean8,
            'correo' => $this->faker->freeEmail
        ];
    }
}
