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
                'email' => 'jonas.petrauskas@gmail.com'
            ],
            [
                'id' => 2,
                'name' => 'Ona',
                'surname' => 'Kazlauskienė',
                'email' => 'ona.kazlauskiene@gmail.com'
            ],
            [
                'id' => 3,
                'name' => 'Tomas',
                'surname' => 'Vasiliauskas',
                'email' => 'tomas.vasiliauskas@gmail.com'
            ],
            [
                'id' => 4,
                'name' => 'Elena',
                'surname' => 'Butkienė',
                'email' => 'elena.butkiene@gmail.com'
            ],
            [
                'id' => 5,
                'name' => 'Petras',
                'surname' => 'Jankauskas',
                'email' => 'petras.jankauskas@gmail.com'
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
                'email' => 'jonas.petrauskas@gmail.com'
            ],
            2 => [
                'id' => 2,
                'name' => 'Ona',
                'surname' => 'Kazlauskienė',
                'email' => 'ona.kazlauskiene@gmail.com'
            ],
            3 => [
                'id' => 3,
                'name' => 'Tomas',
                'surname' => 'Vasiliauskas',
                'email' => 'tomas.vasiliauskas@gmail.com'
            ],
            4 => [
                'id' => 4,
                'name' => 'Elena',
                'surname' => 'Butkienė',
                'email' => 'elena.butkiene@gmail.com'
            ],
            5 => [
                'id' => 5,
                'name' => 'Petras',
                'surname' => 'Jankauskas',
                'email' => 'petras.jankauskas@gmail.com'
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

        return redirect()->route('admin.users')->with('success', __('admin.user_updated'));
    }
}
