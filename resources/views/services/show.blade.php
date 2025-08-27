@extends('layouts.main')

@section('title', $service->name . ' - Legal Services - LawFirm')
@section('description', $service->description)

@section('content')
<!-- Breadcrumb -->
<section class="bg-gray-100 py-4">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="flex items-center space-x-4">
                <li>
                    <a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-600">Home</a>
                </li>
                <li class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <a href="{{ route('services.index') }}" class="ml-4 text-gray-500 hover:text-blue-600">Services</a>
                </li>
                <li class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="ml-4 text-gray-900 font-medium">{{ $service->name }}</span>
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Service Hero -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $service->name }}</h1>
                <p class="text-xl text-blue-100 mb-8 leading-relaxed">
                    {{ $service->description }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact.index') }}" class="bg-yellow-500 text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-yellow-400 transition-colors duration-200 text-center">
                        Get Free Consultation
                    </a>
                    <a href="tel:+1234567890" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-900 transition-colors duration-200 text-center">
                        Call: (123) 456-7890
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
                @if($service->image)
                    <img src="{{ $service->image }}" alt="{{ $service->name }}" class="rounded-lg shadow-2xl">
                @else
                    <div class="bg-white bg-opacity-10 rounded-lg p-8 text-center">
                        <svg class="w-32 h-32 mx-auto text-blue-200" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <h3 class="text-2xl font-semibold mt-4">{{ $service->name }}</h3>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Service Details -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <div class="prose max-w-none">
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">About {{ $service->name }}</h2>
                    <div class="text-gray-600 text-lg leading-relaxed mb-8">
                        {{ $service->detailed_description }}
                    </div>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">How We Can Help</h3>
                    <ul class="space-y-3 text-gray-600 mb-8">
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Expert legal consultation and case evaluation
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Strategic planning and case development
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Professional representation in court
                        </li>
                        <li class="flex items-start">
                            <svg class="w-6 h-6 text-blue-600 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            Ongoing support throughout the legal process
                        </li>
                    </ul>

                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Why Choose Us</h3>
                    <div class="bg-blue-50 p-6 rounded-lg mb-8">
                        <ul class="space-y-2 text-gray-700">
                            <li>✓ Experienced attorneys with proven track record</li>
                            <li>✓ Personalized attention to every case</li>
                            <li>✓ Transparent communication and regular updates</li>
                            <li>✓ Competitive and transparent pricing</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Service Info Card -->
                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Service Information</h3>
                    
                    @if($service->starting_price > 0)
                    <div class="mb-4">
                        <div class="text-sm text-gray-600 mb-1">Starting Price</div>
                        <div class="text-2xl font-bold text-blue-600">${{ number_format($service->starting_price) }}</div>
                    </div>
                    @endif

                    @if($service->duration_estimate)
                    <div class="mb-6">
                        <div class="text-sm text-gray-600 mb-1">Estimated Duration</div>
                        <div class="text-lg font-semibold text-gray-900">{{ $service->duration_estimate }} hours</div>
                    </div>
                    @endif

                    <a href="{{ route('contact.index') }}" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 text-center block">
                        Request Consultation
                    </a>
                </div>

                <!-- Contact Card -->
                <div class="bg-gray-900 text-white rounded-lg p-8">
                    <h3 class="text-xl font-bold mb-4">Need Immediate Help?</h3>
                    <p class="text-gray-300 mb-6">Call us now for urgent legal matters or emergency consultation.</p>
                    <a href="tel:+1234567890" class="block bg-yellow-500 text-gray-900 py-3 px-6 rounded-lg font-semibold hover:bg-yellow-400 transition-colors duration-200 text-center">
                        📞 Call: (123) 456-7890
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Services -->
@if($relatedServices->count() > 0)
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Related Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($relatedServices as $relatedService)
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $relatedService->name }}</h3>
                <p class="text-gray-600 mb-4">{{ Str::limit($relatedService->description, 100) }}</p>
                <a href="{{ route('services.show', $relatedService->slug) }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    Learn More →
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection