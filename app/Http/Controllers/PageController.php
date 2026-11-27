<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $services = [
            ['name' => 'Web Design', 'price' => '$499', 'desc' => 'Clean, mobile-friendly websites tailored to your brand.'],
            ['name' => 'Laravel Development', 'price' => '$999', 'desc' => 'Custom web applications, portals, and booking systems.'],
            ['name' => 'SEO & Speed Audit', 'price' => '$249', 'desc' => 'Performance optimization to rank higher on search engines.'],
        ];

        return view('pages.services', compact('services'));
    }
}