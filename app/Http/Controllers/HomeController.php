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
            [
                'name' => 'Laravel',
                'image' => '/images/tech/laravel.svg',
                'url' => 'https://laravel.com',
                'color' => '#FF2D20'
            ],
            [
                'name' => 'Tailwind CSS',
                'image' => '/images/tech/tailwind.svg',
                'url' => 'https://tailwindcss.com',
                'color' => '#38B2AC'
            ],
            [
                'name' => 'Livewire',
                'image' => '/images/tech/livewire.svg',
                'url' => 'https://livewire.laravel.com',
                'color' => '#FB70A9'
            ],
            [
                'name' => 'Alpine.js',
                'image' => '/images/tech/alpine.svg',
                'url' => 'https://alpinejs.dev',
                'color' => '#77C1D2'
            ],
            [
                'name' => 'MySQL',
                'image' => '/images/tech/mysql.svg',
                'url' => 'https://www.mysql.com',
                'color' => '#00758F'
            ],
            [
                'name' => 'Vercel',
                'image' => '/images/tech/vercel.svg',
                'url' => 'https://vercel.com',
                'color' => '#000000'
            ],
            [
                'name' => 'Supabase',
                'image' => '/images/tech/supabase.svg',
                'url' => 'https://supabase.com',
                'color' => '#3ECF8E'
            ],
            [
                'name' => 'Vite',
                'image' => '/images/tech/vite.svg',
                'url' => 'https://vitejs.dev',
                'color' => '#646CFF'
            ]
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
