<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = Conference::where('date', '>=', date('Y-m-d'))->get();

        return view('client.conference-list', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::find($id);

        if (!$conference) {
            abort(404);
        }

        return view('client.conference-view', compact('conference'));
    }

    public function register(Request $request)
    {
        $conference = Conference::find($request->input('conference_id'));

        if (!$conference) {
            abort(404);
        }

        if (auth()->user()->conferences()->where('conference_id', $conference->id)->exists()) {
            return redirect()->route('client.conferences')->with('error', __('client.already_registered'));
        }

        auth()->user()->conferences()->attach($conference->id);

        return redirect()->route('client.conferences')->with('success', __('client.registration_successful'));
    }
}
