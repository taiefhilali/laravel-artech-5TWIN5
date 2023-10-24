<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;

use Auth;
use Illuminate\Http\Request;

class Participant extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $userId = $user->id;
        $userr = User::find($userId);

        if (!$userr) {
            return response()->json(['message' => 'User not found'], 404);
        }
        
        $favoriteParticipants = $userr->participations; // Assuming you have a relationship defined

        return view('Event.indexpart', ['favoriteParticipants' => $favoriteParticipants]);
    }

    public function participate($eventId)
    {
        $user = Auth::user();
        $userId = $user->id;    
        $userr = User::find($userId);
        $event = Event::find($eventId);
    
        if (!$userr || !$event) {
            return response()->json(['message' => 'User or event not found'], 404);
        }
    
        if (!$userr->participations()->where('event_id', $eventId)->exists()) {
            $userr->participations()->attach($eventId);
                return redirect()->route('Event.indexpart', ['userId' => $userId]);
        } else {
            return redirect()->route('Event.indexpart', ['userId' => $userId]);
        }
    }

    public function unparticipate($eventId)
    {
        $user = Auth::user();
    $userId = $user->id;    
    $userr = User::find($userId);
    $event = Event::find($eventId);

    if (!$userr || !$event) {
        return response()->json(['message' => 'User or event not found'], 404);
    }

    if ($userr->participations()->where('event_id', $eventId)->exists()) {
        $userr->participations()->detach($eventId);

        return redirect()->route('Event.indexpart', ['userId' => $userId]);
    } else {
        return response()->json(['message' => 'Event is not in favorites']);
    }
    }

}
