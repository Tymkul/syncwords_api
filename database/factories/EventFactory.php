<?php

namespace Database\Factories;

use App\Models\Authorization;
use App\Models\Event;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        $authorizationIds = Organization::pluck('id');

        return [
            'event_title' => $this->faker->title(),
            'event_start_date' => $this->faker->dateTime(),
            'event_end_date' => $this->faker->dateTime(),
            'organization_id' => $this->faker->randomElement($authorizationIds),
        ];
    }
}
