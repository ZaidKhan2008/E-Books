<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lawyer;
use App\Models\Service;
use App\Models\CaseStudy;
use App\Models\Testimonial;

class LawyerWebsiteSeeder extends Seeder
{
    public function run(): void
    {
        // Create sample lawyer data
        $this->createLawyers();
        $this->createServices();
        $this->createCaseStudies();
        $this->createTestimonials();
    }

    private function createLawyers()
    {
        $lawyers = [
            [
                'name' => 'John Anderson',
                'title' => 'Senior Partner & Managing Attorney',
                'email' => 'john.anderson@lawfirm.com',
                'phone' => '(123) 456-7890',
                'bio' => 'John Anderson is a seasoned attorney with over 20 years of experience in corporate law, litigation, and business transactions.',
                'specialization' => 'Corporate Law, Business Litigation',
                'years_experience' => 20,
                'education' => 'Harvard Law School, J.D., magna cum laude',
                'bar_admission' => 'California State Bar, New York State Bar',
                'languages' => ['English', 'Spanish'],
                'hourly_rate' => 650.00,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Sarah Martinez',
                'title' => 'Partner, Personal Injury Division',
                'email' => 'sarah.martinez@lawfirm.com',
                'phone' => '(123) 456-7891',
                'bio' => 'Sarah Martinez is a dedicated personal injury attorney who has recovered millions of dollars for her clients.',
                'specialization' => 'Personal Injury, Medical Malpractice',
                'years_experience' => 15,
                'education' => 'Stanford Law School, J.D.',
                'bar_admission' => 'California State Bar',
                'languages' => ['English', 'Spanish', 'French'],
                'hourly_rate' => 550.00,
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'name' => 'Michael Thompson',
                'title' => 'Family Law Attorney',
                'email' => 'michael.thompson@lawfirm.com',
                'phone' => '(123) 456-7892',
                'bio' => 'Michael Thompson brings compassion and expertise to family law matters.',
                'specialization' => 'Family Law, Divorce, Child Custody',
                'years_experience' => 12,
                'education' => 'UCLA School of Law, J.D.',
                'bar_admission' => 'California State Bar',
                'languages' => ['English'],
                'hourly_rate' => 450.00,
                'is_featured' => true,
                'is_active' => true,
            ],
        ];

        foreach ($lawyers as $lawyer) {
            Lawyer::create($lawyer);
        }
    }

    private function createServices()
    {
        $services = [
            [
                'name' => 'Corporate Law',
                'slug' => 'corporate-law',
                'description' => 'Comprehensive business legal services including contracts, compliance, and corporate governance.',
                'detailed_description' => 'Our corporate law practice provides comprehensive legal services to businesses of all sizes.',
                'starting_price' => 300.00,
                'duration_estimate' => 2,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Personal Injury',
                'slug' => 'personal-injury',
                'description' => 'Expert representation for personal injury cases with a track record of successful settlements.',
                'detailed_description' => 'We handle cases involving car accidents, slip and falls, medical malpractice, and more.',
                'starting_price' => 0.00,
                'duration_estimate' => 6,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Family Law',
                'slug' => 'family-law',
                'description' => 'Compassionate legal support for divorce, custody, and other family-related legal matters.',
                'detailed_description' => 'Family law matters require both legal expertise and emotional sensitivity.',
                'starting_price' => 250.00,
                'duration_estimate' => 4,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }

    private function createCaseStudies()
    {
        $caseStudies = [
            [
                'title' => 'Major Corporate Merger Success',
                'slug' => 'major-corporate-merger-success',
                'client_name' => 'Tech Corp Inc.',
                'case_type' => 'Corporate Law',
                'description' => 'Successfully facilitated a $500 million merger between two technology companies.',
                'challenge' => 'Complex regulatory requirements and due diligence across multiple jurisdictions.',
                'solution' => 'Coordinated with international legal teams and regulatory experts.',
                'outcome' => 'Merger completed ahead of schedule with all regulatory approvals secured.',
                'case_value' => 500000000.00,
                'case_date' => '2023-09-15',
                'is_featured' => true,
                'is_published' => true,
            ],
        ];

        foreach ($caseStudies as $caseStudy) {
            CaseStudy::create($caseStudy);
        }
    }

    private function createTestimonials()
    {
        $testimonials = [
            [
                'client_name' => 'Robert Smith',
                'client_title' => 'CEO',
                'client_company' => 'Smith Industries',
                'testimonial' => 'The team at LawFirm provided exceptional legal counsel during our company acquisition.',
                'rating' => 5,
                'case_type' => 'Corporate Law',
                'is_featured' => true,
                'is_approved' => true,
            ],
            [
                'client_name' => 'Maria Rodriguez',
                'client_title' => null,
                'client_company' => null,
                'testimonial' => 'After my accident, Sarah Martinez fought tirelessly for me and secured a settlement that exceeded my expectations.',
                'rating' => 5,
                'case_type' => 'Personal Injury',
                'is_featured' => true,
                'is_approved' => true,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
