<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function create()
{
    return view('subscriptions.create');
}

public function store()
{
    $user = auth()->user();
    $user->subscriptions()->create();
    return redirect()->back()->with('success', 'Subscribed successfully!');
}
}
