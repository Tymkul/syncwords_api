<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Organization;
use Illuminate\Database\Seeder;

class AuthorizationSeeder extends Seeder
{
    public function run()
    {
        Organization::factory()->count(10)->create();
    }
}
