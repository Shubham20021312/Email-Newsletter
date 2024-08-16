<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AnnouncementNotification;
use App\Models\User;
class AnnouncementController extends Controller
{
    public function create()
{
    return view('announcements.create');
}

public function store(Request $request)
{
    $announcement = auth()->user()->announcements()->create([
        'content' => $request->input('content'),
    ]);

    $subscribedUsers = User::has('subscriptions')->get();
    // dd($subscribedUsers);
    foreach ($subscribedUsers->chunk(100) as $chunk) {
        Notification::send($chunk, new AnnouncementNotification($announcement));
    }

    return redirect()->back()->with('success', 'Announcement created!');
}

}
