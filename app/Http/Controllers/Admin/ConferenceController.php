<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ConferenceRequest;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = [
            [
                'id' => 1,
                'title' => 'Web Technologijų Konferencija 2026',
                'date' => '2026-05-15',
                'time' => '10:00',
                'address' => 'Vilnius Tech, Sauletekio al. 11',
                'description' => 'Metinė konferencija apie šiuolaikines web kūrimo technologijas ir praktikas.',
                'lecturers' => 'Jonas Jonaitis, Petras Petraitis'
            ],
            [
                'id' => 2,
                'title' => 'Duomenų Analizės ir Technologijų Konferencija',
                'date' => '2026-06-20',
                'time' => '09:00',
                'address' => 'Kauno Technologijos Universitetas',
                'description' => 'Konferencija skirta naujausių duomenų analizės ir technologijų sprendimų aptarimui.',
                'lecturers' => 'Dr. Tomas Kazlauskas'
            ],
            [
                'id' => 3,
                'title' => 'Kibernetinio Saugumo Simpoziumas',
                'date' => '2026-07-10',
                'time' => '11:00',
                'address' => 'Vilnius, Gedimino pr. 50',
                'description' => 'Diskusijos apie dabartines kibernetinio saugumo grėsmes ir apsaugos metodus.',
                'lecturers' => 'Rūta Kazlauskienė, Darius Kavaliauskas'
            ]
        ];

        return view('admin.conference-list', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conference-create');
    }

    public function store(ConferenceRequest $request)
    {
        return redirect('/admin/conferences')->with('success', __('admin.success_created'));
    }

    public function edit($id)
    {
        $conferences = [
            1 => [
                'id' => 1,
                'title' => 'Web Technologijų Konferencija 2026',
                'date' => '2026-05-15',
                'time' => '10:00',
                'address' => 'Vilnius Tech, Sauletekio al. 11',
                'description' => 'Metinė konferencija apie šiuolaikines web kūrimo technologijas ir praktikas.',
                'lecturers' => 'Jonas Jonaitis, Petras Petraitis'
            ],
            2 => [
                'id' => 2,
                'title' => 'Duomenų Analizės ir Technologijų Konferencija',
                'date' => '2026-06-20',
                'time' => '09:00',
                'address' => 'Kauno Technologijos Universitetas',
                'description' => 'Konferencija skirta naujausių duomenų analizės ir technologijų sprendimų aptarimui.',
                'lecturers' => 'Dr. Tomas Kazlauskas'
            ],
            3 => [
                'id' => 3,
                'title' => 'Kibernetinio Saugumo Simpoziumas',
                'date' => '2026-07-10',
                'time' => '11:00',
                'address' => 'Vilnius, Gedimino pr. 50',
                'description' => 'Diskusijos apie dabartines kibernetinio saugumo grėsmes ir apsaugos metodus.',
                'lecturers' => 'Rūta Kazlauskienė, Darius Kavaliauskas'
            ]
        ];

        $conference = $conferences[$id] ?? null;

        if (!$conference) {
            abort(404);
        }

        return view('admin.conference-edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, $id)
    {
        return redirect('/admin/conferences')->with('success', __('admin.success_updated'));
    }

    public function delete($id)
    {
        $conferences = [
            1 => [
                'id' => 1,
                'title' => 'Web Technologijų Konferencija 2026',
                'date' => '2026-05-15',
                'time' => '10:00',
                'address' => 'Vilnius Tech, Sauletekio al. 11',
                'description' => 'Metinė konferencija apie šiuolaikines web kūrimo technologijas ir praktikas.',
                'lecturers' => 'Jonas Jonaitis, Petras Petraitis'
            ],
            2 => [
                'id' => 2,
                'title' => 'Duomenų Analizės ir Technologijų Konferencija',
                'date' => '2026-06-20',
                'time' => '09:00',
                'address' => 'Kauno Technologijos Universitetas',
                'description' => 'Konferencija skirta naujausių duomenų analizės ir technologijų sprendimų aptarimui.',
                'lecturers' => 'Dr. Tomas Kazlauskas'
            ],
            3 => [
                'id' => 3,
                'title' => 'Kibernetinio Saugumo Simpoziumas',
                'date' => '2026-07-10',
                'time' => '11:00',
                'address' => 'Vilnius, Gedimino pr. 50',
                'description' => 'Diskusijos apie dabartines kibernetinio saugumo grėsmes ir apsaugos metodus.',
                'lecturers' => 'Rūta Kazlauskienė, Darius Kavaliauskas'
            ]
        ];

        $conference = $conferences[$id] ?? null;

        if (!$conference) {
            abort(404);
        }

        $conferenceDate = strtotime($conference['date']);
        $today = strtotime(date('Y-m-d'));

        if ($conferenceDate < $today) {
            return redirect('/admin/conferences')->with('error', __('admin.error_delete_past'));
        }

        return redirect('/admin/conferences')->with('success', __('admin.success_deleted'));
    }
}
