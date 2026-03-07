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
                'title' => 'Web Development Conference 2026',
                'date' => '2026-05-15',
                'time' => '10:00',
                'address' => 'Vilnius Tech, Sauletekio al. 11',
                'description' => 'Annual conference about modern web development technologies and practices.',
                'lecturers' => 'John Smith, Jane Doe'
            ],
            [
                'id' => 2,
                'title' => 'AI and Machine Learning Summit',
                'date' => '2026-06-20',
                'time' => '09:00',
                'address' => 'Kaunas University of Technology',
                'description' => 'Explore the latest trends in artificial intelligence and machine learning.',
                'lecturers' => 'Dr. Michael Johnson'
            ],
            [
                'id' => 3,
                'title' => 'Cybersecurity Symposium',
                'date' => '2026-07-10',
                'time' => '11:00',
                'address' => 'Vilnius, Gedimino pr. 50',
                'description' => 'Discussion about current cybersecurity threats and protection methods.',
                'lecturers' => 'Sarah Williams, David Brown'
            ]
        ];

        return view('employee.conference-list', compact('conferences'));
    }

    public function show($id)
    {
        $conferences = [
            1 => [
                'id' => 1,
                'title' => 'Web Development Conference 2026',
                'date' => '2026-05-15',
                'time' => '10:00',
                'address' => 'Vilnius Tech, Sauletekio al. 11',
                'description' => 'Annual conference about modern web development technologies and practices.',
                'lecturers' => 'John Smith, Jane Doe',
                'registered_clients' => [
                    ['name' => 'Anna Kovalenko', 'email' => 'anna.k@example.com'],
                    ['name' => 'Jonas Petrauskas', 'email' => 'jonas.p@example.com'],
                    ['name' => 'Maria Zaremba', 'email' => 'maria.z@example.com']
                ]
            ],
            2 => [
                'id' => 2,
                'title' => 'AI and Machine Learning Summit',
                'date' => '2026-06-20',
                'time' => '09:00',
                'address' => 'Kaunas University of Technology',
                'description' => 'Explore the latest trends in artificial intelligence and machine learning.',
                'lecturers' => 'Dr. Michael Johnson',
                'registered_clients' => [
                    ['name' => 'Tomas Vasiliauskas', 'email' => 'tomas.v@example.com'],
                    ['name' => 'Elena Butkus', 'email' => 'elena.b@example.com']
                ]
            ],
            3 => [
                'id' => 3,
                'title' => 'Cybersecurity Symposium',
                'date' => '2026-07-10',
                'time' => '11:00',
                'address' => 'Vilnius, Gedimino pr. 50',
                'description' => 'Discussion about current cybersecurity threats and protection methods.',
                'lecturers' => 'Sarah Williams, David Brown',
                'registered_clients' => [
                    ['name' => 'Petras Jankauskas', 'email' => 'petras.j@example.com'],
                    ['name' => 'Greta Lukauskaite', 'email' => 'greta.l@example.com'],
                    ['name' => 'Andrius Kazlauskas', 'email' => 'andrius.k@example.com'],
                    ['name' => 'Ieva Stonyte', 'email' => 'ieva.s@example.com']
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
