<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Requests\ApiPostRequest;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class ApiController extends Controller
{

    /**
     * @var User $userModel
     */
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    function getUser()
    {
        return response()->json(['user' => Auth::user()->toArray()]);
    }

    function getEvents()
    {
        $events = Auth::user()->scheduledEvents->event_content;
        $events = json_decode($events, true);
        return response()->json($events);
    }

    function storeEvent(ApiPostRequest $request)
    {
        $userId = Auth::user()->id;
        $events = $request->get('events');
        try {
            $event = Event::where('user_id', '=', $userId)->firstOrFail();
            $event->event_content = $events;
        } catch (\Exception $e) {
            $event = new Event;
            $event->user_id = $userId;
            $event->event_content = $events;
        }
        $event->save();
        return response()->json(['message' => 'Saved successfully.'], 204); // Resource updated successfully
    }

    function getTestEvents()
    {
        return response()->json(
            [
                ['id' => 1, 'title' => 'Birthday', 'daysOfWeek' => ['0', '1', '5'], 'startRecur' => '2020-12-04', 'endRecur' => '2020-12-30'],
                ['id' => 2, 'title' => 'Covid', 'daysOfWeek' => ['2'], 'startRecur' => '2021-01-01', 'endRecur' => '2021-01-30']
            ]
        );
    }

}


