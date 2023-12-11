<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sender = rand(1,10);
        $reciver = rand(1,10);

        while ($sender == $reciver) {
            $reciver = rand(1,10);
        }

        return [
            'content' => $this->faker->realText(),
            'from'  => $sender,
            'to'    =>  $reciver,
        ];
    }
}
