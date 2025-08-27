@extends('layouts.main')

@section('title', 'About Us - LawFirm')
@section('description', 'Learn about our experienced legal team and commitment to providing exceptional legal services.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">About LawFirm</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                For over 25 years, we have been providing exceptional legal services with integrity, dedication, and results that matter.
            </p>
        </div>
    </div>
</section>

<!-- About Content -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Founded in 1998, LawFirm has grown from a small practice to one of the region's most respected legal firms. Our commitment to excellence and client-focused approach has earned us a reputation for delivering outstanding results in complex legal matters.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    We believe that every client deserves personalized attention and aggressive representation. Our team of experienced attorneys works tirelessly to protect your rights and achieve the best possible outcomes for your case.
                </p>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <div class="text-3xl font-bold text-blue-600 mb-2">1000+</div>
                        <div class="text-gray-600">Cases Won</div>
                    </div>
                    <div>
                        <div class="text-3xl font-bold text-blue-600 mb-2">25+</div>
                        <div class="text-gray-600">Years Experience</div>
                    </div>
                </div>
            </div>
            <div>
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Our Team" class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
@if($lawyers->count() > 0)
<section class="bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
            <p class="text-xl text-gray-600">
                Our experienced attorneys are dedicated to providing exceptional legal representation.
            </p>
        </div>

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
                    <p class="text-sm text-gray-500 mb-4">{{ $lawyer->years_experience }} years experience</p>
                    <a href="{{ route('lawyers.show', $lawyer->id) }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                        View Profile →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('lawyers.index') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200">
                View All Attorneys
            </a>
        </div>
    </div>
</section>
@endif

<!-- Values Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
            <p class="text-xl text-gray-600">
                The principles that guide everything we do.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Integrity</h3>
                <p class="text-gray-600 leading-relaxed">
                    We maintain the highest ethical standards in all our dealings, ensuring transparency and honesty with every client.
                </p>
            </div>

            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Excellence</h3>
                <p class="text-gray-600 leading-relaxed">
                    We strive for excellence in every case, continuously improving our skills and staying current with legal developments.
                </p>
            </div>

            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Client Focus</h3>
                <p class="text-gray-600 leading-relaxed">
                    Our clients are at the center of everything we do. We provide personalized attention and aggressive representation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold mb-4">Ready to Work With Us?</h2>
        <p class="text-xl mb-8 text-blue-100 max-w-2xl mx-auto">
            Contact us today to learn how our experienced legal team can help you achieve your goals.
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