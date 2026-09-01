<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $education = [
            [
                'title' => __('Minor Business Administration and Management - Universidad Rey Juan Carlos'),
                'description' => __('Semester-long minor in Business Administration and Management (Administración y Dirección de Empresas) at Campus Madrid-Vicálvaro.'),
                'date' => __('September') . ' 2026 - ' . __('January') . ' 2027',
                'location' => 'Madrid-Vicálvaro, ' . __('Spain'),
                'image' => '/images/urjc.webp',
                'link' => 'https://www.urjc.es/estudios/187-administracion-y-direccion-de-empresas'
            ],
            [
                'title' => __('Bachelor Computing Science - Avans University of Applied Sciences'),
                'description' => __('Studying Computing Science with a focus on practical software development. Working on real-world projects, from web applications to game development, while learning essential programming concepts.'),
                'date' => __('September') . ' ' .'2022'. ' - ' . __('Present'),
                'location' => 'Den Bosch ' . __('Netherlands'),
                'image' => '/images/avans.webp',
                'link' => 'https://www.avans.nl/studeren/opleidingen/informatica/voltijd'
            ],
            [
                'title' => __('HAVO - Christiaan Huygens Lyceum'),
                'description' => __('I completed my secondary education with a focus on Nature & Technology (NT) with Economics. This provided me with a solid analytical and mathematical foundation.'),
                'date' => __('September') . ' ' .'2016'. ' - ' . __('June') . ' ' .'2022',
                'location' => 'Eindhoven ' . __('Netherlands'),
                'image' => '/images/huygens.webp',
                'link' => 'https://www.huygenslyceum.nl/'
            ]
        ];

        $experiences = [
            [
                'title' => 'RecraHub',
                'description' => __('Developed RecraHub, the platform Recrateam uses to plan entertainment programmes for campsites, holiday parks and hotels. It covers programme planning, staff rosters, print-ready booklets and integrations with guest apps and websites.'),
                'date' => __('September') . ' 2025 - ' . __('Present'),
                'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS', 'Alpine.js'],
                'link' => 'https://www.recrahub.nl/',
                'image' => '/images/recrahub.webp'
            ],
            [
                'title' => 'MotorKlusSchuur',
                'description' => __('I built a straightforward website for my uncle\'s motorcycle workshop hobby. MotorKlusSchuur is a small garage in Soerendonk, focused on careful maintenance and repair of mostly older bikes in the Weert area.'),
                'date' => __('July') . ' 2026',
                'technologies' => ['Astro', 'Tailwind CSS'],
                'link' => 'https://motorklusschuur.nl/',
                'image' => '/images/motorklusschuur.webp'
            ],
            [
                'title' => __('Internship - Moonly Software'),
                'description' =>__('Developed an issue reporting feature for :link, a B2B platform for suppliers and retailers. Enhanced customer support capabilities with faster issue resolution using Laravel and modern web technologies.', ['link' => '<a href="https://app.ethnicogroup.com" target="_blank">Ethnico</a>']),
                'date' => __('September') .' 2025 - ' . __('January') . ' ' .'2026',
                'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS', 'MySQL'],
                'link' => 'https://moonlysoftware.com',
                'image' => '/images/moonly.webp'
            ],
            [
                'image' => 'images/Degoudendraak2.webp',
                'date' => __('May') . ' 2025 - ' . __('July') . ' 2025',
                'title' => __('Chinese Restaurant System'),
                'description' => __('Comprehensive restaurant management system including POS, digital menu tablets, kitchen display system, and online ordering platform. Streamlines operations and enhances customer experience.'),
                'technologies' => ['Laravel', 'Livewire', 'Tailwind CSS', 'MySQL'],
                'github' => 'https://github.com/JeroenBolhuis/DeGoudenDraak'
            ],
            [
                'image' => 'images/HetKoppel.webp',
                'date' => __('February') . ' 2025 - ' . __('April') . ' 2025',
                'title' => __('Website Builder'),
                'description' => __('Developed a custom website builder for Het Koppel student association. Features include drag-and-drop interface, custom themes, and content management system. Built with Laravel.'),
                'technologies' => ['Laravel', 'Alpine.js', 'Tailwind CSS', 'MySQL'],
                'github' => 'https://github.com/JeroenBolhuis/WebsiteBuilder',
            ],
        ];

        $hobbies = [
            [
                'title' => __('Game Development'),
                'description' => __('Started coding games at a young age, evolving from Java to JavaScript projects. Found my stride with Unity, and recently transitioned to Godot. Love using my creativity and making a working game from an idea.'),
                'date' => __('2016') .' - ' . __('Present'),
                'image' => '/images/gamedev.webp'
            ],
            [
                'title' => __('AI Enthusiast'),
                'description' => __('Exploring and experimenting with emerging AI tools and technologies. Love discovering new ways these tools can enhance creativity and productivity in everyday projects.'),
                'date' => __('2023') .' - ' . __('Present'),
                'image' => '/images/ai.webp'
            ],
            [
                'title' => __('Gaming'),
                'description' => __('Active in gaming communities and indie game scenes. Love exploring new indie titles and keeping up with game design trends.'),
                'date' => __('2013') .' - ' . __('Present'),
                'image' => '/images/gta.webp'
            ],
            [
                'title' => __('Home Bartender'),
                'description' => __('Love mixing drinks and trying new recipes. Enjoy experimenting with flavors and learning new techniques to make great cocktails. Building a home bar and sharing drinks with friends.'),
                'date' => __('2023') .' - ' . __('Present'),
                'image' => '/images/Bartender.webp'
            ],
            [
                'title' => __('Motorcycling'),
                'description' => __('Two wheels, endless roads, and great company. Love discovering hidden routes and sharing road trip adventures with fellow riders.'),
                'date' => __('2024') .' - ' . __('Present'),
                'image' => '/images/motor.webp'
            ],
            [
                'title' => __('Kickboxing'),
                'description' => __('Training in kickboxing to stay active and develop discipline, while learning valuable self-defense skills.'),
                'date' => __('2024') .' - ' . __('2025'),
                'image' => '/images/kickboxing.webp'
            ],
        ];

        $techStack = [
            [
                'name' => 'Laravel',
                'image' => '/images/tech/laravel.svg',
                'url' => 'https://laravel.com',
                'color' => '#FF2D20',
                'what' => __('PHP framework for web apps: routing, Eloquent, queues, and the rest of the backend.'),
            ],
            [
                'name' => 'Tailwind CSS',
                'image' => '/images/tech/tailwind.svg',
                'url' => 'https://tailwindcss.com',
                'color' => '#38B2AC',
                'what' => __('Utility-first CSS. Layout and type live in the markup instead of a pile of custom stylesheets.'),
            ],
            [
                'name' => 'Livewire',
                'image' => '/images/tech/livewire.svg',
                'url' => 'https://livewire.laravel.com',
                'color' => '#FB70A9',
                'what' => __('Server-driven UI for Laravel. Interactive pages without a separate JavaScript SPA.'),
            ],
            [
                'name' => 'Alpine.js',
                'image' => '/images/tech/alpine.svg',
                'url' => 'https://alpinejs.dev',
                'color' => '#77C1D2',
                'what' => __('Small JavaScript library for dropdowns, tabs, hover state, and other UI behavior in Blade.'),
            ],
            [
                'name' => 'MySQL',
                'image' => '/images/tech/mysql.svg',
                'url' => 'https://www.mysql.com',
                'color' => '#00758F',
                'what' => __('Relational database. Tables, joins, and transactions for application data.'),
            ],
            [
                'name' => 'Vercel',
                'image' => '/images/tech/vercel.svg',
                'url' => 'https://vercel.com',
                'color' => '#808080',
                'what' => __('Hosting and deploys for frontend and Laravel-on-Vercel setups.'),
            ],
            [
                'name' => 'Supabase',
                'image' => '/images/tech/supabase.svg',
                'url' => 'https://supabase.com',
                'color' => '#3ECF8E',
                'what' => __('Hosted Postgres with auth, storage, and APIs when I do not want to run the database myself.'),
            ],
            [
                'name' => 'Vite',
                'image' => '/images/tech/vite.svg',
                'url' => 'https://vitejs.dev',
                'color' => '#646CFF',
                'what' => __('Frontend bundler. Compiles CSS and JavaScript with a fast local dev server.'),
            ],
            [
                'name' => 'GitHub',
                'image' => '/images/tech/github.svg',
                'url' => 'https://github.com',
                'color' => '#808080',
                'what' => __('Git hosting, pull requests, issues, and Actions.'),
            ],
            [
                'name' => 'Jira',
                'image' => '/images/tech/jira.svg',
                'url' => 'https://www.atlassian.com/software/jira',
                'color' => '#2684FF',
                'what' => __('Issue tracking and sprint boards for planning work with a team.'),
            ],
            [
                'name' => 'Amazon S3',
                'image' => '/images/tech/s3.svg',
                'url' => 'https://aws.amazon.com/s3/',
                'color' => '#569A31',
                'what' => __('Object storage for files: images, uploads, backups. Talks to Laravel via the S3 disk.'),
            ],
            [
                'name' => 'Node.js',
                'image' => '/images/tech/nodejs.svg',
                'url' => 'https://nodejs.org',
                'color' => '#339933',
                'what' => __('JavaScript runtime for tooling: npm, Vite, and frontend build scripts.'),
            ],
            [
                'name' => 'Redis',
                'image' => '/images/tech/redis.svg',
                'url' => 'https://redis.io',
                'color' => '#C4373A',
                'what' => __('In-memory store for cache, sessions, and queues.'),
            ],
            [
                'name' => 'PostgreSQL',
                'image' => '/images/tech/postgresql.svg',
                'url' => 'https://www.postgresql.org',
                'color' => '#336791',
                'what' => __('Relational database with stronger types and JSON than MySQL, often via Supabase.'),
            ],
            [
                'name' => 'Pest',
                'image' => '/images/tech/pest.svg',
                'url' => 'https://pestphp.com',
                'color' => '#29BF12',
                'what' => __('PHP testing framework on top of PHPUnit, with a cleaner syntax for Laravel tests.'),
            ],
            [
                'name' => 'Cloudflare',
                'image' => '/images/tech/cloudflare.svg',
                'url' => 'https://www.cloudflare.com',
                'color' => '#F6821F',
                'what' => __('DNS, CDN, TLS, and bot protection in front of sites.'),
            ],
        ];


        return view('home', compact('education', 'experiences', 'techStack', 'hobbies'));
    }    
}
