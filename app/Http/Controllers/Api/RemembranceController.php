<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Remembrance;
use Illuminate\Http\Request;

class RemembranceController extends Controller
{
    public function index(Request $request)
    {
        $soldiers = Remembrance::with('page')->orderBy('full_name', 'asc')->get();
        return response()->json($soldiers);
    }

    public function search(Request $request)
    {
        $name =  $request->input('full_name', '');

        if (empty($name)) {
        return response()->json([]);
    }

        //Filter: full text search on soldier's full name
        $soldiers = Remembrance::searchByName($name)->with('page')->orderBy('full_name', 'asc')->get();

        return response()->json($soldiers);
    }

     /**
     * Show a specific soldier with its details
     * 
     * @param Remembrance $remembrance The soldier to show (route model binding)
     * @return Remembrance The soldier details as JSON response
     */
    public function show(Remembrance $remembrance)
    {
        $remembrance->load('page');
        return response()->json($remembrance);
    }

    /**
     * Create a new soldier remembrance entry
     * 
     * @param Request $request
     * @return Remembrance The created soldier remembrance entry as JSON response
     */
    public function store(Request $request) {
        $remembrance = Remembrance::make([
            'full_name' => $request->input('full_name'),
            'rank_title' => $request->input('rank_title', null),
            'branch' => $request->input('branch', null),
            'squadron' => $request->input('squadron', null),
            'page_id' => $request->input('page_id', null),
        ]);

       $remembrance->save();

       return response()->json($remembrance, 201);
    }   

    /**
     * Update an existing soldier remembrance entry
     * 
     * @param Request $request
     * @param Remembrance $remembrance the soldier remembrance entry to update. (route model binding)
     * @return Remembrance The updated soldier remembrance entry as JSON response
     */

    public function update(Request $request, Remembrance $remembrance) {
        if ($request->has('full_name')) {
            $remembrance->full_name = $request->input('full_name');            
        }
        if ($request->has('rank_title')) {
            $remembrance->rank_title = $request->input('rank_title');            
        }
        if ($request->has('branch')) {
            $remembrance->branch = $request->input('branch');            
        }
        if ($request->has('squadron')) {
            $remembrance->squadron = $request->input('squadron');            
        }
        if ($request->has('page_id')) {
            $remembrance->page_id = $request->input('page_id');            
        }

        $remembrance->save();

        return response()->json($remembrance->load('page'));
    }
    
     /**
     * Delete a soldier remembrance entry (soft delete)
     * 
     * @param Remembrance $remembrance The soldier remembrance entry to delete (route model binding)
     * @return void
     */
    public function destroy(Remembrance $remembrance)
    {
        $remembrance->delete();

        return response()->json(['message' => 'Soldier remembrance entry deleted successfully']);
    }

     /**
    * Admin endpoint to list all soldiers including soft-deleted ones
    * 
    * @return Collection of Soldiers
    */

    public function adminIndex()
    {
        $soldiers = Remembrance::withTrashed()->with('page')->orderBy('full_name', 'asc')->get();

        return response()->json($soldiers);
    }

    /**
     * Restore a soft-deleted soldier remembrance entry
     * 
     * @param int $id The ID of the soldier remembrance entry to restore
     * @return Remembrance The restored soldier remembrance entry as JSON response, or error message if not found or not deleted
     */
    public function restore($id)
    {
        $remembrance = Remembrance::withTrashed()->findOrFail($id);
        
        if ($remembrance->trashed()) {
            $remembrance->restore();
            return response()->json($remembrance);
        } else {
            return response()->json(['message' => 'Soldier entry is not deleted'], 400);
        }
    }
}