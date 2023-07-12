<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    protected $model = Organization::class;

    public function definition()
    {
        return [
            'organization_name' => $this->faker->company(),
            'description' => $this->faker->text(),
            'employees_count' => $this->faker->numberBetween(5, 100),
            'phone_number' => $this->faker->phoneNumber()
        ];
    }
}
