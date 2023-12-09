<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Venda;

class VendaFactory extends Factory
{
    protected $model = Venda::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => function () {
                return \App\Models\Usuario::factory()->create()->id;
            },
            'valor' => $this->faker->numberBetween(1, 10),
        ];
    }
}
