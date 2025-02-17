<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $education = [
            [
                'title' => __('Bachelor Computing Science - Avans Hogeschool'),
                'description' => __('I pursued a degree in Computing Science, where I developed a strong foundation in software engineering and computer science principles.
                I also had the opportunity to work on numerous projects, both in a team and individually. These experiences not only enhanced my technical skills, but also taught me valuable lessons in teamwork and project management.'),
                'date' => 'September 2022 - Present',
                'location' => 'Den Bosch, Netherlands'
            ],
            [
                'title' => __('HAVO NT - Huygens College'),
                'description' => __('I completed my secondary education with a focus on Nature & Technology (NT) with Economics. This provided me with a solid analytical and mathematical foundation.'),
                'date' => 'September 2016 - June 2022',
                'location' => 'Eindhoven, Netherlands'
            ]
        ];

        $experience = [
            // [
            //     'title' => __('Web Developer - Recrateam'),
            //     'description' => __(''),
            //     'date' => 'December 2024 - Present'
            // ],
            [
                'title' => __('School Projects'),
                'description' => __('Developed multiple web applications including a restaurant management system and a website builder.'),
                'date' => 'September 2023 - Present'
            ]
        ];

        $techStack = [
            ['name' => 'Laravel', 'class' => 'bg-purple-700/20 text-purple-300'],
            ['name' => 'Blade', 'class' => 'bg-blue-700/20 text-blue-300'],
            ['name' => 'Tailwind CSS', 'class' => 'bg-indigo-700/20 text-indigo-300'],
            ['name' => 'Livewire', 'class' => 'bg-pink-700/20 text-pink-300'],
            ['name' => 'Alpine.js', 'class' => 'bg-red-700/20 text-red-300'],
            ['name' => 'MySQL', 'class' => 'bg-green-700/20 text-green-300'],
            ['name' => 'Vercel', 'class' => 'bg-cyan-700/20 text-cyan-300'],
            ['name' => 'Supabase', 'class' => 'bg-orange-700/20 text-orange-300'],
            ['name' => 'Vite', 'class' => 'bg-yellow-700/20 text-yellow-300']
        ];

        $projects = [
            [
                'title' => __('This Website!'),
                'technologies' => ['Laravel', 'Blade', 'Tailwind CSS', 'Alpine.js', 'Vite', 'Vercel'],
                'github' => 'https://github.com/JeroenBolhuis/PortfolioSite'
            ],
            [
                'src' => 'images/Hetkoppel.png',
                'title' => __('Website Builder'),
                'description' => __('Developed a custom website builder for Het Koppel student association. Features include drag-and-drop interface, custom themes, and content management system. Built with Laravel.'),
                'technologies' => ['Laravel', 'Blade', 'Livewire', 'Tailwind CSS', 'MySQL', 'JavaScript', 'Azure', 'Vite'],
                'github' => 'https://github.com/JeroenBolhuis/WebsiteBuilder'
            ],
            [
                'src' => 'images/Degoudendraak2.png',
                'title' => __('Chinese Restaurant System'),
                'description' => __('Comprehensive restaurant management system including POS, digital menu tablets, kitchen display system, and online ordering platform. Streamlines operations and enhances customer experience.'),
                'technologies' => ['Laravel', 'Blade', 'Livewire', 'Tailwind CSS', 'MySQL', 'Vite'],
                'github' => 'https://github.com/JeroenBolhuis/DeGoudenDraak'
            ],
        ];

        return view('home', compact('projects', 'education', 'experience', 'techStack'));
    }    
}
