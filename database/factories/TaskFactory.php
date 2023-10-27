<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{

    public function definition(): array
    {
        $user = User::all()->random();  //insere a chave aleatoriamente

        while(count($user->categories) == 0 ) { //usando o relacionamento
            $user = User::all()->random();
        }

        return [
            'is_done' => $this->faker->boolean(),
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(60),
            'due_date' => $this->faker->dateTime(),
            'category_id' => Category::all()->random(), //insere a chave aleatoriamente 
            'user_id' => $user,
        ];
    }
}
