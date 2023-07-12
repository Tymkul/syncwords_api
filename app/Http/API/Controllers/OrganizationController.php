<?php

namespace app\Http\API\Controllers;

use App\Http\API\Requests\OrganizationRequest;
use App\Http\API\Resources\OrganizationResource;
use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class OrganizationController extends Controller
{
    private const DEFAULT_PAGINATION = 15;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        return OrganizationResource::collection(
            Organization::paginate($request->input('paginate', self::DEFAULT_PAGINATION))
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization): OrganizationResource
    {
        return new OrganizationResource($organization);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationRequest $request, Organization $organization)
    {
        $organization->updateOrFail($request->validated());

        return new OrganizationResource($organization);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization): Response
    {
        DB::transaction(function () use (&$organization) {
            $organization->events()->delete();
            $organization->deleteOrFail();
        });

        return response()->noContent();
    }
}
