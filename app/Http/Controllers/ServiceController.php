<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::active()->orderBy('sort_order')->get();
        return view('services.index', compact('services'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $service = Service::where('slug', $slug)->active()->firstOrFail();
        $relatedServices = Service::active()
            ->where('id', '!=', $service->id)
            ->take(3)
            ->get();
        
        return view('services.show', compact('service', 'relatedServices'));
    }
}
