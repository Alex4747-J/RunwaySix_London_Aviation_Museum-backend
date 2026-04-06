<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artifact;
use Illuminate\Http\Request;

class ArtifactController extends Controller
{
    public function index(Request $request)
    {
        $name =  $request->input('name', '');

        $artifactsQuery = Artifact::query();

        //Filter: partial text search on artifact name
        if(!empty($name)) {
            $artifactsQuery->where('name', 'LIKE', '%' . $name . '%');

        }

        $artifacts = $artifactsQuery->ordered()->get();

        return response()->json($artifacts);
    }

    /**
     * Show a specific artifact with its details
     * 
     * @param Artifact $artifact The artifact to show (route model binding)
     * @return Artifact
     */

    public function show(Artifact $artifact) {

        return response()->json($artifact);
    }

     /**
     * Create a new artifact
     * 
     * @param Request $request
     * @return Artifact
     */
    public function store(Request $request) {

        $artifact = Artifact::make([
            'name' => $request->input('name'),
            'object_type' => $request->input('object_type', null),
            'period' => $request->input('period', null),
            'origin' => $request->input('origin', null),
            'material' => $request->input('material', null),
            'description' => $request->input('description', null),
            'image_path' => $request->input('image_path', null),

        ]);

       $artifact->save();

        return response()->json($artifact, 201);
    }  

    /**
     * Update an existing artifact
     * 
     * @param Request $request
     * @param Artifact $artifact the artifact to update. (route model binding)
     * @return Artifact
     */

    public function update(Request $request, Artifact $artifact) {

        //Only update fields that are present in the request
        if ($request->has('name')) {
            $artifact->name = $request->input('name');            
        }

        if ($request->has('object_type')) {
            $artifact->object_type = $request->input('object_type');
        }

        if ($request->has('period')) {
            $artifact->period = $request->input('period');
        }

        if ($request->has('origin')) {
            $artifact->origin = $request->input('origin');
        }

        if ($request->has('material')) {
            $artifact->material = $request->input('material');
        }

        if ($request->has('description')) {
            $artifact->description = $request->input('description');
        }

        if ($request->has('image_path')) {
        $artifact->image_path = $request->input('image_path');
        }

        $artifact->save();

        return response()->json($artifact);
    }

     /**
     * Delete an artifact
     * 
     * @param Artifact $artifact The artifact to delete (route model binding)
     * @return void
     */
    public function destroy(Artifact $artifact)
    {
        $artifact->delete();
        return response()->json(['message' => 'Artifact deleted']);
    }

    /**
    * Admin endpoint to list all artifacts including soft-deleted ones
    * 
    * @return Collection of Artifacts
    */

        public function adminIndex()
    {
        $artifacts = Artifact::withTrashed()->ordered()->get();

        return response()->json($artifacts);
    }

     /**
     * Restore a soft-deleted artifact
     * 
     * @param int $id The ID of the artifact to restore
     * @return Artifact
     */
    public function restore($id)
    {
        $artifact = Artifact::withTrashed()->findOrFail($id);

        if ($artifact->trashed()) {
            $artifact->restore();
            return response()->json($artifact);
        } else {
            return response()->json(['message' => 'Artifact is not deleted'], 400);
        }
    }
}
