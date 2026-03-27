<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('admin.conference-list', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conference-create');
    }

    public function store(ConferenceRequest $request)
    {
        Conference::create($request->validated());

        return redirect('/admin/conferences')->with('success', __('admin.success_created'));
    }

    public function edit($id)
    {
        $conference = Conference::find($id);

        if (!$conference) {
            abort(404);
        }

        return view('admin.conference-edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, $id)
    {
        $conference = Conference::find($id);

        if (!$conference) {
            abort(404);
        }

        $conference->update($request->validated());

        return redirect('/admin/conferences')->with('success', __('admin.success_updated'));
    }

    public function delete($id)
    {
        $conference = Conference::find($id);

        if (!$conference) {
            abort(404);
        }

        if (strtotime($conference->date) < strtotime(date('Y-m-d'))) {
            return redirect('/admin/conferences')->with('error', __('admin.error_delete_past'));
        }

        $conference->delete();

        return redirect('/admin/conferences')->with('success', __('admin.success_deleted'));
    }
}
