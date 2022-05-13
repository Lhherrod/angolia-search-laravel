<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectCreator>
 */
class ProjectCreatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'project_creator_name' => $this->faker->name(),
            'number_of_projects' => $this->faker->numberBetween(1, 20),
            'number_of_completed_projects' => $this->faker->numberBetween(1, 20),
            'number_of_non_completed_projects' => $this->faker->numberBetween(1, 20),
            'number_of_deployed_projects' => $this->faker->numberBetween(1, 20),
            'number_of_current_projects_in_production' => $this->faker->numberBetween(1, 20),
            'number_of_current_projects_in_development' => $this->faker->numberBetween(1, 20)
        ];
    }
}

