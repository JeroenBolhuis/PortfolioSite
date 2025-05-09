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
                'title' => __('Bachelor Computing Science - Avans University of Applied Sciences'),
                'description' => __('Studying Computing Science with a focus on practical software development. Working on real-world projects, from web applications to game development, while learning essential programming concepts.'),
                'date' => __('September') . ' ' .'2022'. ' - ' . __('Present'),
                'location' => 'Den Bosch ' . __('Netherlands'),
                'image' => '/images/avans.jpg'
            ],
            [
                'title' => __('HAVO - Christiaan Huygens Lyceum'),
                'description' => __('I completed my secondary education with a focus on Nature & Technology (NT) with Economics. This provided me with a solid analytical and mathematical foundation.'),
                'date' => __('September') . ' ' .'2016'. ' - ' . __('June') . ' ' .'2022',
                'location' => 'Eindhoven ' . __('Netherlands'),
                'image' => '/images/huygens.jpg'
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
                'date' => __('September') .' 2023 - ' . __('Present')
            ]
        ];

        $hobbies = [
            [
                'title' => __('Game Development'),
                'description' => __('Started coding games at a young age, evolving from Java to JavaScript projects. Found my stride with Unity, and recently transitioned to Godot. Love using my creativity and making a working game from an idea.'),
                'date' => __('2016') .' - ' . __('Present'),
                'image' => '/images/gamedev.jpg'
            ],
            [
                'title' => __('AI Enthusiast'),
                'description' => __('Exploring and experimenting with emerging AI tools and technologies. Love discovering new ways these tools can enhance creativity and productivity in everyday projects.'),
                'date' => __('2023') .' - ' . __('Present'),
                'image' => '/images/ai.jpg'
            ],
            [
                'title' => __('Gaming'),
                'description' => __('Active in gaming communities and indie game scenes. Love exploring new indie titles and keeping up with game design trends.'),
                'date' => __('2013') .' - ' . __('Present'),
                'image' => '/images/gta.jpg'
            ],
            [
                'title' => __('Home Bartender'),
                'description' => __('Love mixing drinks and trying new recipes. Enjoy experimenting with flavors and learning new techniques to make great cocktails. Building a home bar and sharing drinks with friends.'),
                'date' => __('2023') .' - ' . __('Present'),
                'image' => '/images/Bartender.jpg'
            ],
            [
                'title' => __('Motorcycling'),
                'description' => __('Two wheels, endless roads, and great company. Love discovering hidden routes and sharing road trip adventures with fellow riders.'),
                'date' => __('2024') .' - ' . __('Present'),
                'image' => '/images/motor.jpg'
            ],
            [
                'title' => __('Kickboxing'),
                'description' => __('Training in kickboxing to stay active and develop discipline, while learning valuable self-defense skills.'),
                'date' => __('2024') .' - ' . __('Present'),
                'image' => '/images/kickboxing.webp'
            ],
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
                'color' => '#808080'
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
            ],
            [
                'name' => 'GitHub',
                'image' => '/images/tech/github.svg',
                'url' => 'https://github.com',
                'color' => '#808080'
            ],
            [
                'name' => 'Figma',
                'image' => '/images/tech/figma.svg',
                'url' => 'https://figma.com',
                'color' => '#F24E1E'
            ],
            [
                'name' => 'Node.js',
                'image' => '/images/tech/nodejs.svg',
                'url' => 'https://nodejs.org',
                'color' => '#339933'
            ],
            [
                'name' => 'Redis',
                'image' => '/images/tech/redis.svg',
                'url' => 'https://redis.io',
                'color' => '#C4373A'
            ],
            [
                'name' => 'PostgreSQL',
                'image' => '/images/tech/postgresql.svg',
                'url' => 'https://www.postgresql.org',
                'color' => '#336791'
            ],
            [
                'name' => 'PHPUnit',
                'image' => '/images/tech/phpunit.svg',
                'url' => 'https://phpunit.de',
                'color' => '#952800'
            ]
            
        ];

        $projects = [
            [
                'title' => __('This Website!'),
                'date' => __('May') . ' ' .'2025'. ' - ' . __('Present'),
                'technologies' => ['Laravel', 'Tailwind CSS', 'Alpine.js', 'Vercel'],
                'github' => 'https://github.com/JeroenBolhuis/PortfolioSite'
            ],
            [
                'image' => 'images/Hetkoppel.png',
                'date' => __('May') . ' ' .'2025'. ' - ' . __('Present'),
                'title' => __('Website Builder'),
                'description' => __('Developed a custom website builder for Het Koppel student association. Features include drag-and-drop interface, custom themes, and content management system. Built with Laravel.'),
                'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS', 'MySQL', 'JavaScript', 'Azure'],
                'github' => 'https://github.com/JeroenBolhuis/WebsiteBuilder',
            ],
            [
                'image' => 'images/Degoudendraak2.png',
                'date' => __('May') . ' ' .'2025'. ' - ' . __('Present'),
                'title' => __('Chinese Restaurant System'),
                'description' => __('Comprehensive restaurant management system including POS, digital menu tablets, kitchen display system, and online ordering platform. Streamlines operations and enhances customer experience.'),
                'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS', 'MySQL'],
                'github' => 'https://github.com/JeroenBolhuis/DeGoudenDraak'
            ],
        ];


        return view('home', compact('projects', 'education', 'experience', 'techStack', 'hobbies'));
    }    
}
