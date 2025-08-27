@extends('layouts.main')

@section('title', 'Our Legal Team - LawFirm')
@section('description', 'Meet our experienced team of attorneys specializing in various areas of law.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Our Legal Team</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Meet our experienced attorneys who are dedicated to providing exceptional legal representation and achieving the best possible outcomes for our clients.
            </p>
        </div>
    </div>
</section>

<!-- Lawyers Grid -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($lawyers->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($lawyers as $lawyer)
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
                        
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            {{ $lawyer->years_experience }} years experience
                        </div>

                        @if($lawyer->languages && count($lawyer->languages) > 0)
                        <div class="flex flex-wrap gap-1 mb-4">
                            @foreach($lawyer->languages as $language)
                                <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">{{ $language }}</span>
                            @endforeach
                        </div>
                        @endif

                        <div class="flex items-center justify-between">
                            <a href="{{ route('lawyers.show', $lawyer->id) }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                                View Profile →
                            </a>
                            @if($lawyer->hourly_rate)
                                <span class="text-sm text-gray-500">${{ number_format($lawyer->hourly_rate) }}/hr</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">No attorneys available at the moment.</p>
            </div>
        @endif
    </div>
</section>

<!-- Why Choose Our Team -->
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Our Legal Team?</h2>
            <p class="text-xl text-gray-600">
                Our attorneys bring experience, dedication, and results to every case.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Proven Experience</h3>
                <p class="text-gray-600">Decades of combined legal experience across multiple practice areas</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">High Success Rate</h3>
                <p class="text-gray-600">98% success rate with over 1000 cases won</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Personalized Service</h3>
                <p class="text-gray-600">Individual attention and customized legal strategies</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Available 24/7</h3>
                <p class="text-gray-600">Round-the-clock availability for urgent legal matters</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Work With Our Team?</h2>
        <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
            Contact us today to discuss your legal needs with one of our experienced attorneys.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact.index') }}" class="bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg font-semibold hover:bg-yellow-400 transition-colors duration-200">
                Free Consultation
            </a>
            <a href="tel:+1234567890" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors duration-200">
                Call: (123) 456-7890
            </a>
        </div>
    </div>
</section>
@endsection