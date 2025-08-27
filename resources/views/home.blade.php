@extends('layouts.main')

@section('title', 'LawFirm - Professional Legal Services')
@section('description', 'Professional legal services with experienced attorneys specializing in various areas of law. Get expert legal advice and representation.')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-blue-900 via-blue-800 to-blue-700 text-white">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 md:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                    Expert Legal <br><span class="text-yellow-400">Representation</span> <br>You Can Trust
                </h1>
                <p class="text-xl mb-8 text-blue-100 leading-relaxed">
                    With over 25 years of combined experience, our team of skilled attorneys is dedicated to protecting your rights and achieving the best possible outcomes for your case.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact.index') }}" class="bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-400 transition-colors duration-200 text-center">
                        Free Consultation
                    </a>
                    <a href="{{ route('services.index') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-900 transition-colors duration-200 text-center">
                        Our Services
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Professional Legal Team" class="rounded-lg shadow-2xl">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">1000+</div>
                <div class="text-gray-600">Cases Won</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">25+</div>
                <div class="text-gray-600">Years Experience</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                <div class="text-gray-600">Expert Lawyers</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-blue-600 mb-2">98%</div>
                <div class="text-gray-600">Success Rate</div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Services Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Legal Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                We provide comprehensive legal services across multiple practice areas with expertise and dedication.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($featuredServices as $service)
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-8">
                <div class="text-blue-600 mb-4">
                    @if($service->icon)
                        <i class="{{ $service->icon }} text-4xl"></i>
                    @else
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    @endif
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $service->name }}</h3>
                <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                @if($service->starting_price)
                    <p class="text-blue-600 font-semibold mb-4">Starting from ${{ number_format($service->starting_price) }}</p>
                @endif
                <a href="{{ route('services.show', $service->slug) }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    Learn More →
                </a>
            </div>
            @empty
            <!-- Default Services if none featured -->
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-8">
                <div class="text-blue-600 mb-4">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Corporate Law</h3>
                <p class="text-gray-600 mb-4">Comprehensive business legal services including contracts, compliance, and corporate governance.</p>
                <a href="{{ route('services.index') }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    Learn More →
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-8">
                <div class="text-blue-600 mb-4">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Personal Injury</h3>
                <p class="text-gray-600 mb-4">Expert representation for personal injury cases with a track record of successful settlements.</p>
                <a href="{{ route('services.index') }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    Learn More →
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-8">
                <div class="text-blue-600 mb-4">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 01-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010 2h1.586l-2.293 2.293a1 1 0 001.414 1.414L15 8.414V10a1 1 0 002 0V6a1 1 0 00-1-1h-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Family Law</h3>
                <p class="text-gray-600 mb-4">Compassionate legal support for divorce, custody, and other family-related legal matters.</p>
                <a href="{{ route('services.index') }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    Learn More →
                </a>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('services.index') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                View All Services
            </a>
        </div>
    </div>
</section>

<!-- Featured Lawyers Section -->
@if($featuredLawyers->count() > 0)
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Expert Lawyers</h2>
            <p class="text-xl text-gray-600">
                Our experienced team of attorneys is dedicated to providing exceptional legal representation.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredLawyers as $lawyer)
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 overflow-hidden">
                @if($lawyer->image)
                    <img src="{{ $lawyer->image }}" alt="{{ $lawyer->name }}" class="w-full h-64 object-cover">
                @else
                    <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                        <svg class="w-20 h-20 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                @endif
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $lawyer->name }}</h3>
                    <p class="text-blue-600 font-medium mb-2">{{ $lawyer->title }}</p>
                    <p class="text-gray-600 mb-4">{{ $lawyer->specialization }}</p>
                    <p class="text-sm text-gray-500 mb-4">{{ $lawyer->years_experience }} years experience</p>
                    <a href="{{ route('lawyers.show', $lawyer->id) }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        View Profile →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Testimonials Section -->
@if($featuredTestimonials->count() > 0)
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
            <p class="text-xl text-gray-600">
                Don't just take our word for it - hear from our satisfied clients.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredTestimonials->take(6) as $testimonial)
            <div class="bg-white rounded-lg shadow-lg p-8">
                <div class="flex items-center mb-4">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="w-5 h-5 {{ $i <= $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                <blockquote class="text-gray-600 mb-6">
                    "{{ $testimonial->testimonial }}"
                </blockquote>
                <div class="flex items-center">
                    @if($testimonial->image)
                        <img src="{{ $testimonial->image }}" alt="{{ $testimonial->client_name }}" class="w-12 h-12 rounded-full object-cover mr-4">
                    @else
                        <div class="w-12 h-12 rounded-full bg-gray-300 flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    @endif
                    <div>
                        <div class="font-semibold text-gray-900">{{ $testimonial->client_name }}</div>
                        @if($testimonial->client_title)
                            <div class="text-sm text-gray-600">{{ $testimonial->client_title }}</div>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Get Started?</h2>
        <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
            Contact us today for a free consultation. Our experienced attorneys are ready to help you with your legal needs.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact.index') }}" class="bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-400 transition-colors duration-200">
                Free Consultation
            </a>
            <a href="tel:+1234567890" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-200">
                Call Now: (123) 456-7890
            </a>
        </div>
    </div>
</section>
@endsection