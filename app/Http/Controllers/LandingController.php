<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Post;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $services = Service::where('status', 'active')->latest()->get();
        $posts = Post::where('status', 'published')->latest()->take(3)->get();
        $settings = SiteSetting::where('setting_key', 'site_name')->value('setting_value');

        return view('landing.index', compact('services', 'posts', 'settings'));
    }
}
