@extends('layouts.main')

@section('title', 'Contact Us - LawFirm')
@section('description', 'Contact our experienced legal team for a free consultation. We are here to help with all your legal needs.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-900 to-blue-700 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Contact Our Legal Team</h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto">
            Ready to discuss your legal needs? Contact us today for a free consultation with our experienced attorneys.
        </p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Get Free Consultation</h2>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        
                        <div>
                            <label for="case_type" class="block text-sm font-medium text-gray-700 mb-2">Legal Matter Type</label>
                            <select id="case_type" name="case_type"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select a legal matter...</option>
                                <option value="Corporate Law" {{ old('case_type') == 'Corporate Law' ? 'selected' : '' }}>Corporate Law</option>
                                <option value="Personal Injury" {{ old('case_type') == 'Personal Injury' ? 'selected' : '' }}>Personal Injury</option>
                                <option value="Family Law" {{ old('case_type') == 'Family Law' ? 'selected' : '' }}>Family Law</option>
                                <option value="Criminal Defense" {{ old('case_type') == 'Criminal Defense' ? 'selected' : '' }}>Criminal Defense</option>
                                <option value="Real Estate Law" {{ old('case_type') == 'Real Estate Law' ? 'selected' : '' }}>Real Estate Law</option>
                                <option value="Employment Law" {{ old('case_type') == 'Employment Law' ? 'selected' : '' }}>Employment Law</option>
                                <option value="Other" {{ old('case_type') == 'Other' ? 'selected' : '' }}>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="budget_range" class="block text-sm font-medium text-gray-700 mb-2">Budget Range</label>
                            <select id="budget_range" name="budget_range"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select budget range...</option>
                                <option value="Under $1,000" {{ old('budget_range') == 'Under $1,000' ? 'selected' : '' }}>Under $1,000</option>
                                <option value="$1,000 - $5,000" {{ old('budget_range') == '$1,000 - $5,000' ? 'selected' : '' }}>$1,000 - $5,000</option>
                                <option value="$5,000 - $10,000" {{ old('budget_range') == '$5,000 - $10,000' ? 'selected' : '' }}>$5,000 - $10,000</option>
                                <option value="$10,000+" {{ old('budget_range') == '$10,000+' ? 'selected' : '' }}>$10,000+</option>
                                <option value="Contingency Fee" {{ old('budget_range') == 'Contingency Fee' ? 'selected' : '' }}>Contingency Fee</option>
                            </select>
                        </div>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="is_urgent" name="is_urgent" value="1" {{ old('is_urgent') ? 'checked' : '' }}
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                            <label for="is_urgent" class="ml-2 text-sm font-medium text-gray-700">This is an urgent matter</label>
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="6" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Please describe your legal matter in detail...">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit" 
                        class="w-full bg-blue-600 text-white py-4 px-6 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200 text-lg">
                        Send Message & Request Consultation
                    </button>
                </form>
            </div>

            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Get In Touch</h2>
                
                <!-- Contact Cards -->
                <div class="space-y-6 mb-8">
                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Phone</h3>
                                <p class="text-gray-600">(123) 456-7890</p>
                                <p class="text-sm text-gray-500">Available 24/7 for urgent matters</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                                <p class="text-gray-600">info@lawfirm.com</p>
                                <p class="text-sm text-gray-500">We respond within 2 hours</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-6">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 text-white p-3 rounded-full mr-4">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900">Office Address</h3>
                                <p class="text-gray-600">123 Legal Street<br>City, State 12345</p>
                                <p class="text-sm text-gray-500">Mon-Fri: 8:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Emergency Contact -->
                <div class="bg-red-50 border border-red-200 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-red-800 mb-2">Emergency Legal Assistance</h3>
                    <p class="text-red-700 mb-4">For urgent legal matters that require immediate attention:</p>
                    <a href="tel:+1234567890" class="bg-red-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-700 transition-colors duration-200 inline-block">
                        📞 Emergency Hotline: (123) 456-7890
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Find Our Office</h2>
        <div class="bg-white rounded-lg shadow-lg p-4">
            <!-- Placeholder for Google Maps -->
            <div class="bg-gray-300 h-96 rounded-lg flex items-center justify-center">
                <div class="text-center text-gray-600">
                    <svg class="w-12 h-12 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                    </svg>
                    <p class="text-lg font-medium">Interactive Map</p>
                    <p class="text-sm">123 Legal Street, City, State 12345</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you offer free consultations?</h3>
                <p class="text-gray-600">Yes, we offer free initial consultations for most legal matters. This allows us to understand your case and determine how we can best help you.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">How quickly can I expect a response?</h3>
                <p class="text-gray-600">We typically respond to inquiries within 2 hours during business hours. For urgent matters, please call our emergency hotline for immediate assistance.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">What should I bring to my consultation?</h3>
                <p class="text-gray-600">Please bring any relevant documents related to your case, such as contracts, correspondence, court papers, or other legal documents. This will help us better understand your situation.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you work on contingency fee basis?</h3>
                <p class="text-gray-600">For certain types of cases, such as personal injury matters, we work on a contingency fee basis. This means you don't pay attorney fees unless we win your case.</p>
            </div>
        </div>
    </div>
</section>
@endsection