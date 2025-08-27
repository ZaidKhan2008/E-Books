@extends('layouts.main')

@section('title', $lawyer->name . ' - ' . $lawyer->title . ' - LawFirm')
@section('description', 'Meet ' . $lawyer->name . ', ' . $lawyer->title . ' specializing in ' . $lawyer->specialization)

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
                    <a href="{{ route('lawyers.index') }}" class="ml-4 text-gray-500 hover:text-blue-600">Our Team</a>
                </li>
                <li class="flex items-center">
                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="ml-4 text-gray-900 font-medium">{{ $lawyer->name }}</span>
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Lawyer Profile -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Lawyer Info -->
            <div class="lg:col-span-2">
                <div class="flex flex-col md:flex-row gap-8 mb-8">
                    <div class="flex-shrink-0">
                        @if($lawyer->image)
                            <img src="{{ $lawyer->image }}" alt="{{ $lawyer->name }}" class="w-48 h-48 rounded-lg object-cover shadow-lg">
                        @else
                            <div class="w-48 h-48 bg-gray-200 rounded-lg flex items-center justify-center shadow-lg">
                                <svg class="w-24 h-24 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        @endif
                    </div>
                    
                    <div class="flex-1">
                        <h1 class="text-4xl font-bold text-gray-900 mb-2">{{ $lawyer->name }}</h1>
                        <p class="text-xl text-blue-600 font-medium mb-4">{{ $lawyer->title }}</p>
                        <p class="text-lg text-gray-700 mb-4">{{ $lawyer->specialization }}</p>
                        
                        <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-6">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                {{ $lawyer->years_experience }} years experience
                            </div>
                            @if($lawyer->hourly_rate)
                            <div class="flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                                ${{ number_format($lawyer->hourly_rate) }}/hour
                            </div>
                            @endif
                        </div>

                        @if($lawyer->languages && count($lawyer->languages) > 0)
                        <div class="mb-6">
                            <h3 class="text-sm font-medium text-gray-700 mb-2">Languages:</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($lawyer->languages as $language)
                                    <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">{{ $language }}</span>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('contact.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 text-center">
                                Schedule Consultation
                            </a>
                            @if($lawyer->email)
                            <a href="mailto:{{ $lawyer->email }}" class="border-2 border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition-colors duration-200 text-center">
                                Send Email
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Biography -->
                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">Biography</h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed">
                        {{ $lawyer->bio }}
                    </div>
                </div>

                <!-- Education & Credentials -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @if($lawyer->education)
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Education</h3>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <p class="text-gray-700">{{ $lawyer->education }}</p>
                        </div>
                    </div>
                    @endif

                    @if($lawyer->bar_admission)
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Bar Admissions</h3>
                        <div class="bg-gray-50 rounded-lg p-6">
                            <p class="text-gray-700">{{ $lawyer->bar_admission }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <!-- Contact Card -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Contact {{ $lawyer->name }}</h3>
                    
                    @if($lawyer->phone)
                    <div class="mb-4">
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            Phone
                        </div>
                        <a href="tel:{{ $lawyer->phone }}" class="text-blue-600 hover:text-blue-800 font-medium">{{ $lawyer->phone }}</a>
                    </div>
                    @endif

                    @if($lawyer->email)
                    <div class="mb-6">
                        <div class="flex items-center text-gray-600 mb-2">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            Email
                        </div>
                        <a href="mailto:{{ $lawyer->email }}" class="text-blue-600 hover:text-blue-800 font-medium break-all">{{ $lawyer->email }}</a>
                    </div>
                    @endif

                    <a href="{{ route('contact.index') }}" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 text-center block">
                        Request Consultation
                    </a>
                </div>

                <!-- Specialization Card -->
                <div class="bg-white rounded-lg shadow-lg p-6 mb-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Areas of Practice</h3>
                    <p class="text-gray-700">{{ $lawyer->specialization }}</p>
                </div>

                <!-- Emergency Contact -->
                <div class="bg-red-50 border border-red-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-red-800 mb-2">Urgent Legal Matter?</h3>
                    <p class="text-red-700 mb-4 text-sm">For immediate assistance with urgent legal matters:</p>
                    <a href="tel:+1234567890" class="bg-red-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-700 transition-colors duration-200 inline-block text-sm">
                        📞 Emergency: (123) 456-7890
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Other Lawyers -->
@if($otherLawyers->count() > 0)
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Meet Other Team Members</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($otherLawyers as $otherLawyer)
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $otherLawyer->name }}</h3>
                <p class="text-blue-600 font-medium mb-2">{{ $otherLawyer->title }}</p>
                <p class="text-gray-600 mb-4">{{ $otherLawyer->specialization }}</p>
                <a href="{{ route('lawyers.show', $otherLawyer->id) }}" class="text-blue-600 font-medium hover:text-blue-800 transition-colors">
                    View Profile →
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection