<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use App\Models\Service;
use App\Models\CaseStudy;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredLawyers = Lawyer::active()->featured()->take(3)->get();
        $featuredServices = Service::active()->featured()->take(6)->get();
        $featuredCaseStudies = CaseStudy::published()->featured()->take(3)->get();
        $featuredTestimonials = Testimonial::approved()->featured()->take(6)->get();

        return view('home', compact(
            'featuredLawyers',
            'featuredServices', 
            'featuredCaseStudies',
            'featuredTestimonials'
        ));
    }

    public function about()
    {
        $lawyers = Lawyer::active()->get();
        return view('about', compact('lawyers'));
    }
}
