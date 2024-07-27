<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // You can pass data to the view if needed, e.g., projects.
        $projects = [
            ['src' => 'storage/Hetkoppel.png', 'title' => 'Website builder', 'subtitle' => 'Voor studievereniging het koppel'],
            ['src' => 'storage/Degoudendraak.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/Degoudendraak2.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/header.png', 'title' => 'Test item', 'subtitle' => 'Only for testing purposes'],
            ['src' => 'storage/macbook.svg', 'title' => 'Test item2', 'subtitle' => 'Only for testing purposes2'],
            // Add more items as needed
            ['src' => 'storage/Hetkoppel.png', 'title' => 'Website builder', 'subtitle' => 'Voor studievereniging het koppel'],
            ['src' => 'storage/Degoudendraak.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/Degoudendraak2.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/header.png', 'title' => 'Test item', 'subtitle' => 'Only for testing purposes'],
            ['src' => 'storage/macbook.svg', 'title' => 'Test item2', 'subtitle' => 'Only for testing purposes2'],
            ['src' => 'storage/Hetkoppel.png', 'title' => 'Website builder', 'subtitle' => 'Voor studievereniging het koppel'],
            ['src' => 'storage/Degoudendraak.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/Degoudendraak2.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/header.png', 'title' => 'Test item', 'subtitle' => 'Only for testing purposes'],
            ['src' => 'storage/macbook.svg', 'title' => 'Test item2', 'subtitle' => 'Only for testing purposes2'],
            ['src' => 'storage/Hetkoppel.png', 'title' => 'Website builder', 'subtitle' => 'Voor studievereniging het koppel'],
            ['src' => 'storage/Degoudendraak.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/Degoudendraak2.png', 'title' => 'Chinees restaurant', 'subtitle' => 'Met kassa systeem, restaurant tablets, en meer'],
            ['src' => 'storage/header.png', 'title' => 'Test item', 'subtitle' => 'Only for testing purposes'],
            ['src' => 'storage/macbook.svg', 'title' => 'Test item2', 'subtitle' => 'Only for testing purposes2'],
        ];

        return view('portfolio', compact('projects'));
    }
}
