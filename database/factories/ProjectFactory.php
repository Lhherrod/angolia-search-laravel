<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_name' => $this->faker->name,
            'project_start_date' => (string)$this->faker->date(),
            'project_end_date' => (string)$this->faker->date(),
            'project_status' => 'completed',
            'project_env_status' => 'production'
        ];

    }
}
