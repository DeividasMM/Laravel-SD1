<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        $users = User::all();

        return view('admin.user-list', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);

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

        $user = User::find($id);

        if (!$user) {
            abort(404);
        }

        $user->update($request->only(['name', 'surname', 'email']));

        return redirect()->route('admin.users')->with('success', __('admin.user_updated'));
    }
}
