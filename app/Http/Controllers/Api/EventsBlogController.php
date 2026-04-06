<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\EventsBlog;
use Illuminate\Http\Request;

class EventsBlogController extends Controller
{
    public function index(Request $request)
    {
        $title =  $request->input('title', '');

        $eventsBlogQuery = EventsBlog::query();

        //Filter: partial text search on event/blog title
        if(!empty($title)) {
            $eventsBlogQuery->where('title', 'LIKE', '%' . $title . '%');
        }

        if ($request->filled('post_type')) {
            $eventsBlogQuery->where('post_type',$request->input('post_type'));
        }

        $eventsBlog = $eventsBlogQuery->orderBy('created_at', 'desc')->get();

        return response()->json($eventsBlog);
    }

    /**
     * Show a specific event/blog with its details
     * 
     * @param EventsBlog $eventsBlog The event/blog to show (route model binding)
     * @return EventsBlog The event/blog details as JSON response
     */

    public function show(EventsBlog $eventsBlog) 
    {

        return response()->json($eventsBlog);
    }

    public function featured()
    {
    $posts = EventsBlog::orderBy('created_at', 'desc')
        ->limit(2)
        ->get();

    return response()->json($posts);
    }

    /**
     * Create a new event/blog
     * 
     * @param Request $request
     * @return EventsBlog
     */
    public function store(Request $request) {

        $eventsBlog = EventsBlog::create([
            'title' => $request->input('title'),
            'post_type' => $request->input('post_type', null),
            'event_date' => $request->input('event_date', null),
            'event_time' => $request->input('event_time', null),
            'location' => $request->input('location', null),
            'description' => $request->input('description', null),
            'content' => $request->input('content', null),
            'image_path' => $request->input('image_path', null),

        ]);

        return response()->json($eventsBlog, 201);
    }  

       /**
     * Update an existing event/blog
     * 
     * @param Request $request
     * @param EventsBlog $eventsBlog the event/blog to update. (route model binding)
     * @return EventsBlog the updated event/blog as JSON response
     */

    public function update(Request $request, EventsBlog $eventsBlog) {

        //Only update fields that are present in the request
        if ($request->has('title')) {
            $eventsBlog->title = $request->input('title');            
        }

        if ($request->has('post_type')) {
            $eventsBlog->post_type = $request->input('post_type');
        }

        if ($request->has('event_date')) {
            $eventsBlog->event_date = $request->input('event_date');
        }

        if ($request->has('event_time')) {
            $eventsBlog->event_time = $request->input('event_time');
        }

        if ($request->has('location')) {
            $eventsBlog->location = $request->input('location');
        }

        if ($request->has('description')) {
            $eventsBlog->description = $request->input('description');
        }

        if ($request->has('content')) {
            $eventsBlog->content = $request->input('content');
        }

        if ($request->has('image_path')) {
        $eventsBlog->image_path = $request->input('image_path');
        }

        $eventsBlog->save();

        return response()->json($eventsBlog);
    }

     /**
     * Delete an event/blog
     * 
     * @param EventsBlog $eventsBlog The event/blog to delete (route model binding)
     * @return void
     */
    public function destroy(EventsBlog $eventsBlog)
    {
        $eventsBlog->delete();
        return response()->json(['message' => 'Event/Blog deleted']);
    }

    /**
    * Admin endpoint to list all events/blogs including soft-deleted ones
    * 
    * @return Collection of EventsBlogs
    */

        public function adminIndex()
    {
        $eventsBlogs = EventsBlog::withTrashed()->orderBy('created_at', 'desc')->get();

        return response()->json($eventsBlogs);
    }

     /**
     * Restore a soft-deleted event/blog
     * 
     * @param int $id The ID of the event/blog to restore
     * @return EventsBlog The restored event/blog as JSON response, or error message if not found or not deleted
     */
    public function restore($id)
    {
        $eventsBlog = EventsBlog::withTrashed()->findOrFail($id);

        if ($eventsBlog->trashed()) {
            $eventsBlog->restore();
            return response()->json($eventsBlog);
        } else {
            return response()->json(['message' => 'Event/Blog is not deleted'], 400);
        }
    }

}
