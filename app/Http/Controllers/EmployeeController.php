<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('employee.conference-list', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::find($id);

        if (!$conference) {
            abort(404);
        }

        $registeredClients = $conference->users;

        return view('employee.conference-details', compact('conference', 'registeredClients'));
    }
}
