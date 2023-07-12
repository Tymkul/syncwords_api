<?php

namespace App\Http\API\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrganizationResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'organization_name' => $this->organization_name,
            'description' => $this->description,
            'employees_count' => $this->employees_count,
            'phone_number' => $this->phone_number,
        ];
    }
}
