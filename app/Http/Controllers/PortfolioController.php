<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Localize all titles and subtitles using the __('') helper
        $projects = [
            ['src' => 'images/Hetkoppel.png', 'title' => __('Website builder'), 'subtitle' => __('For the student association Het Koppel')],
            ['src' => 'images/Degoudendraak.png', 'title' => __('Chinese restaurant'), 'subtitle' => __('With POS system, restaurant tablets, and more')],
            ['src' => 'images/Degoudendraak2.png', 'title' => __('Chinese restaurant'), 'subtitle' => __('With POS system, restaurant tablets, and more')],
            ['src' => 'images/header.png', 'title' => __('Test item'), 'subtitle' => __('Only for testing purposes')],
            ['src' => 'images/macbook.svg', 'title' => __('Test item 2'), 'subtitle' => __('Only for testing purposes 2')],
            // Add more items as needed
        ];

        return view('portfolio', compact('projects'));
    }
}