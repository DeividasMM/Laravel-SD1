<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
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

        return view('employee.conference-list', compact('conferences'));
    }

    public function show($id)
    {
        $conferences = [
            1 => [
                'id' => 1,
                'title' => 'Web Technologijų Konferencija 2026',
                'date' => '2026-05-15',
                'time' => '10:00',
                'address' => 'Vilnius Tech, Sauletekio al. 11',
                'description' => 'Metinė konferencija apie šiuolaikines web kūrimo technologijas ir praktikas.',
                'lecturers' => 'Jonas Jonaitis, Petras Petraitis',
                'registered_clients' => [
                    ['name' => 'Ona Petraitienė', 'email' => 'ona.petraitiene@gmail.com'],
                    ['name' => 'Jonas Petrauskas', 'email' => 'jonas.petrauskas@gmail.com'],
                    ['name' => 'Marija Kazlauskienė', 'email' => 'marija.kazlauskiene@gmail.com']
                ]
            ],
            2 => [
                'id' => 2,
                'title' => 'Duomenų Analizės ir Technologijų Konferencija',
                'date' => '2026-06-20',
                'time' => '09:00',
                'address' => 'Kauno Technologijos Universitetas',
                'description' => 'Konferencija skirta naujausių duomenų analizės ir technologijų sprendimų aptarimui.',
                'lecturers' => 'Dr. Tomas Kazlauskas',
                'registered_clients' => [
                    ['name' => 'Tomas Vasiliauskas', 'email' => 'tomas.vasiliauskas@gmail.com'],
                    ['name' => 'Elena Butkienė', 'email' => 'elena.butkiene@gmail.com']
                ]
            ],
            3 => [
                'id' => 3,
                'title' => 'Kibernetinio Saugumo Simpoziumas',
                'date' => '2026-07-10',
                'time' => '11:00',
                'address' => 'Vilnius, Gedimino pr. 50',
                'description' => 'Diskusijos apie dabartines kibernetinio saugumo grėsmes ir apsaugos metodus.',
                'lecturers' => 'Rūta Kazlauskienė, Darius Kavaliauskas',
                'registered_clients' => [
                    ['name' => 'Petras Jankauskas', 'email' => 'petras.jankauskas@gmail.com'],
                    ['name' => 'Greta Lukaitė', 'email' => 'greta.lukaite@gmail.com'],
                    ['name' => 'Andrius Kazlauskas', 'email' => 'andrius.kazlauskas@gmail.com'],
                    ['name' => 'Ieva Stonytė', 'email' => 'ieva.stonyte@gmail.com']
                ]
            ]
        ];

        $conference = $conferences[$id] ?? null;

        if (!$conference) {
            abort(404);
        }

        return view('employee.conference-details', compact('conference'));
    }
}
