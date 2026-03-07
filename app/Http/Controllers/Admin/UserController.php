<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Jonas',
                'surname' => 'Petrauskas',
                'email' => 'jonas.p@example.com'
            ],
            [
                'id' => 2,
                'name' => 'Anna',
                'surname' => 'Kovalenko',
                'email' => 'anna.k@example.com'
            ],
            [
                'id' => 3,
                'name' => 'Tomas',
                'surname' => 'Vasiliauskas',
                'email' => 'tomas.v@example.com'
            ],
            [
                'id' => 4,
                'name' => 'Elena',
                'surname' => 'Butkus',
                'email' => 'elena.b@example.com'
            ],
            [
                'id' => 5,
                'name' => 'Petras',
                'surname' => 'Jankauskas',
                'email' => 'petras.j@example.com'
            ]
        ];

        return view('admin.user-list', compact('users'));
    }

    public function edit($id)
    {
        $users = [
            1 => [
                'id' => 1,
                'name' => 'Jonas',
                'surname' => 'Petrauskas',
                'email' => 'jonas.p@example.com'
            ],
            2 => [
                'id' => 2,
                'name' => 'Anna',
                'surname' => 'Kovalenko',
                'email' => 'anna.k@example.com'
            ],
            3 => [
                'id' => 3,
                'name' => 'Tomas',
                'surname' => 'Vasiliauskas',
                'email' => 'tomas.v@example.com'
            ],
            4 => [
                'id' => 4,
                'name' => 'Elena',
                'surname' => 'Butkus',
                'email' => 'elena.b@example.com'
            ],
            5 => [
                'id' => 5,
                'name' => 'Petras',
                'surname' => 'Jankauskas',
                'email' => 'petras.j@example.com'
            ]
        ];

        $user = $users[$id] ?? null;

        if (!$user) {
            abort(404);
        }

        return view('admin.user-edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email'
        ]);

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }
}
