<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\User;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    public function run(): void
    {
        Conference::create([
            'title' => 'Web Technologijų Konferencija 2026',
            'description' => 'Konferencija apie naujausias web technologijas ir tendencijas. Dalyviai išgirs apie React, Vue.js ir kitas populiarias bibliotekas.',
            'date' => '2026-05-15',
            'time' => '10:00',
            'address' => 'Vilnius, Gedimino pr. 1',
            'lecturers' => 'Dr. Jonas Jonaitis, Prof. Petras Petraitis',
        ]);

        Conference::create([
            'title' => 'Duomenų Bazių Administravimas',
            'description' => 'Praktinė konferencija apie duomenų bazių valdymą, optimizavimą ir saugumą. Nagrinėjami MySQL, PostgreSQL ir SQLite sprendimai.',
            'date' => '2026-06-20',
            'time' => '09:00',
            'address' => 'Kaunas, Laisvės al. 53',
            'lecturers' => 'Prof. Ona Kazlauskienė',
        ]);

        Conference::create([
            'title' => 'PHP ir Laravel Programuotojų Susitikimas',
            'description' => 'Susitikimas skirtas PHP programuotojams. Bus aptariami Laravel framework naujovės ir geroji praktika.',
            'date' => '2026-07-10',
            'time' => '11:00',
            'address' => 'Klaipėda, Manto g. 12',
            'lecturers' => 'Tomas Vasiliauskas, Elena Butkienė',
        ]);

        Conference::create([
            'title' => 'Kibernetinio Saugumo Pagrindai',
            'description' => 'Konferencija skirta kibernetinio saugumo pagrindams. Aptariamos dažniausios atakų rūšys ir gynybos metodai.',
            'date' => '2025-03-01',
            'time' => '10:00',
            'address' => 'Vilnius, Konstitucijos pr. 7',
            'lecturers' => 'Dr. Marius Marčiukaitis',
        ]);

        $client = User::where('email', 'client@example.com')->first();

        if ($client) {
            $conferences = Conference::all();
            foreach ($conferences as $conference) {
                $conference->users()->attach($client->id);
            }
        }
    }
}
