<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $events = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end', '<=', $request->end)
                ->get();

            return response()->json($events);
        }
        
        return view('calendario.index');
    }

    public function create(Request $request)
    {
        $input = $request->only(['title', 'image', 'start', 'end']);

        $request_data = [
            'title' => 'required',
            'image' => 'required',
            'start' => 'required',
            'end' => 'required'
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, please check all parameters',
            ]);
        }

        $event = Event::create([
            'title' => $input['title'],
            'image' => $input['image'],
            'start' => $input['start'],
            'end' => $input['end'],
        ]);

        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    public function edit(Request $request)
    {
        $input = $request->only(['id', 'title', 'start', 'end']);

        $request_data = [
            'id' => 'required',
            'title' => 'required',
            'start' => 'required',
            'end' => 'required'
        ];

        $validator = Validator::make($input, $request_data);

        // invalid request
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong, please check all parameters',
            ]);
        }

        $event = Event::where('id', $input['id'])
            ->update([
                'title' => $request['title'],
                'start' => $request['start'],
                'end' => $request['end'],
            ]);

        return response()->json([
            'success' => true,
            'data' => $event
        ]);
    }

    public function destroy(Request $request)
    {
        Event::where('id', $request->id)
            ->delete();

        return response()->json([
            'success' => true,
            'message' => 'Event removed successfully.'
        ]);
    }
}
