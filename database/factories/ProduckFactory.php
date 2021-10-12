<?php

namespace Database\Factories;

use App\Models\Produck;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduckFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produck::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->word(4,true),
            "deskripsi"=> $this->faker->paragraph(),
            "user_id"=> $this->faker->randomNumber(2)
        ];
    }
}
