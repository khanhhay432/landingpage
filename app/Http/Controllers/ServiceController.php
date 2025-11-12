<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->with(['images', 'reviews'])->firstOrFail();
        return view('service.show', compact('service'));
    }
}
