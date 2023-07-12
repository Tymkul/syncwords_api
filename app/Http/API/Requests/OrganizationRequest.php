<?php

namespace App\Http\API\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'organization_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'employees_count' => 'required|integer',
            'phone_number' => 'nullable|string|max:25',
        ];
    }
}
