<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'src' => 'images/Hetkoppel.png',
                'title' => __('Website Builder'),
                'description' => __('Developed a custom website builder for Het Koppel student association. Features include drag-and-drop interface, custom themes, and content management system. Built with Laravel.'),
                'technologies' => ['Laravel', 'Blade', 'Livewire', 'Tailwind CSS', 'MySQL', 'JavaScript'],
                'link' => 'https://hetkoppel.nl',
                'github' => 'https://github.com/yourusername/hetkoppel'
            ],
            [
                'src' => 'images/Degoudendraak2.png',
                'title' => __('Chinese Restaurant System'),
                'description' => __('Comprehensive restaurant management system including POS, digital menu tablets, kitchen display system, and online ordering platform. Streamlines operations and enhances customer experience.'),
                'technologies' => ['Laravel', 'Blade', 'Livewire', 'Tailwind CSS', 'MySQL'],
                'link' => 'https://degoudendraak.nl'
            ],
            [
                'src' => 'images/header.png',
                'title' => __('Portfolio Website'),
                'description' => __('Personal portfolio website showcasing my projects and skills. Built with modern technologies and featuring responsive design, dark mode, and smooth animations.'),
                'technologies' => ['Laravel', 'Blade', 'Tailwind CSS'],
                'github' => 'https://github.com/yourusername/portfolio'
            ],
        ];

        return view('home', compact('projects'));
    }    
}
