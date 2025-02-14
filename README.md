
# Web Development Portfolio

  
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php)](https://www.php.net/)  

[![Laravel Version](https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel)](https://laravel.com)  

[![Blade](https://img.shields.io/badge/Blade-Laravel-FF2D20?logo=laravel)](https://laravel.com/docs/blade)  

[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.3.x-06B6D4?logo=tailwind-css)](https://tailwindcss.com)  

[![Vite](https://img.shields.io/badge/Vite-4.x-646CFF?logo=vite)](https://vitejs.dev/)  

[![Vercel](https://img.shields.io/badge/Vercel-Deployment-000000?logo=vercel)](https://vercel.com/)  


Modern web development portfolio showcasing projects and skills. Built with Laravel and Tailwind CSS.

    

## Features

  

- Responsive hero section with animated background

- Project showcase with detailed case studies

- Multilingual support (English/Dutch)

- Contact form with email integration

- Smooth scroll navigation

- SEO-optimized pages

- Performance-focused architecture

  
## 🚀 Tech Stack

- **Backend**: Laravel 11  

- **Frontend**: Blade, Tailwind CSS 3, Alpine.js  

- **Build**: Vite 4  

- **Database**: SQLite (development), MySQL (production)  

- **Deployment**: Vercel-ready configuration  
  

## Installation

```bash

git  clone  hhttps://github.com/JeroenBolhuis/PortfolioSite.git

cd  PortfolioSite

composer  install

npm  install

cp  .env.example  .env

php  artisan  key:generate

```

  

## Configuration

  

1. Set mail credentials in `.env`:

```env

MAIL_MAILER=smtp

MAIL_HOST=your_smtp_host

MAIL_PORT=587

MAIL_USERNAME=your_email@example.com

MAIL_PASSWORD=your_email_password

MAIL_ENCRYPTION=tls

```

  

2. Add project-specific settings:

```env

APP_NAME="WebDev Portfolio"

APP_URL=http://localhost:8000

CONTACT_EMAIL=your@email.com

```

  

## Running the Application

  

Start local development server:

```bash

php  artisan  serve

npm  run  dev

```


Visit `http://localhost:8000` in your browser.

 