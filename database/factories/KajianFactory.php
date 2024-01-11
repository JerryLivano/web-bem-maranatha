<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kajian>
 */
class KajianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'member_id' =>$this->mt_rand(1,5),
            'slug' =>$this->faker->slug(),
            'title'=>$this->faker->sentence(mt_rand(1,2)),
            'cover'=>$this->faker->sentence(1,1),
        ];
    }

    
}
