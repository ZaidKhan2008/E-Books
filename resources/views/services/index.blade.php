@extends('layouts.main')

@section('title', 'Legal Services - LawFirm')
@section('description', 'Comprehensive legal services covering corporate law, personal injury, family law, criminal defense, and more.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Our Legal Services</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Comprehensive legal expertise across multiple practice areas to serve all your legal needs with excellence and dedication.
            </p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($services as $service)
            <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-8">
                <div class="text-blue-600 mb-6">
                    @if($service->icon)
                        <i class="{{ $service->icon }} text-5xl"></i>
                    @else
                        <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    @endif
                </div>
                
                <h3 class="text-2xl font-bold text-gray-900 mb-4">{{ $service->name }}</h3>
                
                <p class="text-gray-600 mb-6 leading-relaxed">{{ $service->description }}</p>
                
                <div class="flex items-center justify-between mb-6">
                    @if($service->starting_price > 0)
                        <div class="text-blue-600 font-semibold">
                            Starting from ${{ number_format($service->starting_price) }}
                        </div>
                    @else
                        <div class="text-blue-600 font-semibold">
                            Free Consultation
                        </div>
                    @endif
                    
                    @if($service->duration_estimate)
                        <div class="text-sm text-gray-500">
                            Est. {{ $service->duration_estimate }} hours
                        </div>
                    @endif
                </div>
                
                <div class="flex space-x-3">
                    <a href="{{ route('services.show', $service->slug) }}" class="flex-1 bg-blue-600 text-white text-center py-3 px-4 rounded-lg hover:bg-blue-700 transition-colors duration-200 font-medium">
                        Learn More
                    </a>
                    <a href="{{ route('contact.index') }}" class="flex-1 border-2 border-blue-600 text-blue-600 text-center py-3 px-4 rounded-lg hover:bg-blue-600 hover:text-white transition-colors duration-200 font-medium">
                        Get Quote
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500 text-lg">No services available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Our Legal Services?</h2>
            <p class="text-xl text-gray-600">
                We bring experience, dedication, and results to every case.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Proven Track Record</h3>
                <p class="text-gray-600">Over 1000 successful cases with 98% success rate</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Expert Team</h3>
                <p class="text-gray-600">50+ experienced attorneys specializing in various fields</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">24/7 Support</h3>
                <p class="text-gray-600">Round-the-clock availability for urgent legal matters</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Transparent Pricing</h3>
                <p class="text-gray-600">Clear, upfront pricing with no hidden fees</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-4">Need Legal Assistance?</h2>
        <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
            Don't wait to get the legal help you need. Contact us today for a free consultation.
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