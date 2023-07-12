<?php

namespace Tests\Feature\Api;

use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class OrganizationControllerTest extends TestCase
{
    public function test_we_can_get_list()
    {
        $response = $this->get('http://localhost:8000/api/organization');

        $response->assertOk()
            ->assertJson(
                fn(AssertableJson $json) => $json
                    ->has(
                        'data',
                        fn($data) => $data->first(fn($productOption) => $productOption->hasAll([
                            'id', 'organization_name', 'description', 'employees_count', 'phone_number'
                        ])
                        )->etc()
                    )->etc()
            );

        $this->assertJson($response->getContent());
    }
}
