<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConferenceController extends Controller
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

        return view('admin.conference-list', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conference-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'time' => 'required',
            'address' => 'required',
            'description' => 'required',
            'lecturers' => 'required'
        ]);

        return redirect('/admin/conferences')->with('success', 'Conference created successfully');
    }
}
