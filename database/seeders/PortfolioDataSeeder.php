<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioSetting;
use App\Models\Education;
use App\Models\ProfessionalSkill;
use App\Models\SocialLink;

class PortfolioDataSeeder extends Seeder
{
    public function run(): void
    {
        // Create Portfolio Settings
        PortfolioSetting::create([
            'name' => 'Md. Najmus Sakib',
            'email' => 'sakib15@diu.edu.bd',
            'phone' => '01728557495',
            'location' => 'Uttara, Dhaka, Bangladesh',
            'bio' => 'I am a passionate Computer Science student at Daffodil International University with a strong interest in web development and software engineering. My goal is to become a skilled full-stack developer and contribute to innovative technology solutions.',
            'short_description' => 'Hi! I\'m a student of dept. of CSE at Daffodil International University',
            'interests' => ['Web Development', 'Problem Solving', 'Technology', 'Learning']
        ]);

        // Create Education Records
        Education::create([
            'institution_name' => 'Daffodil International University',
            'degree' => 'B.Sc. in Computer Science & Engineering',
            'field_of_study' => 'Computer Science',
            'start_year' => '2022',
            'end_year' => '2025',
            'status' => 'current',
            'description' => 'Currently pursuing Bachelor of Science in Computer Science & Engineering with focus on software development and web technologies.',
            'order' => 1
        ]);

        Education::create([
            'institution_name' => 'Nawabganj Govt. College',
            'degree' => 'Higher Secondary Certificate',
            'field_of_study' => 'Science',
            'start_year' => '2018',
            'end_year' => '2020',
            'status' => 'completed',
            'description' => 'Completed Higher Secondary Certificate in Science group with good academic performance.',
            'order' => 2
        ]);

        // Create Professional Skills
        ProfessionalSkill::create([
            'title' => 'Web Development',
            'description' => 'Full-stack web development using modern frameworks and technologies',
            'icon' => 'fas fa-code',
            'color' => '#007bff',
            'technologies' => ['PHP', 'Laravel', 'JavaScript', 'HTML', 'CSS'],
            'proficiency' => 4,
            'order' => 1,
            'is_active' => true
        ]);

        ProfessionalSkill::create([
            'title' => 'Database Management',
            'description' => 'Database design, optimization and management',
            'icon' => 'fas fa-database',
            'color' => '#28a745',
            'technologies' => ['MySQL', 'Data Modeling', 'SQL'],
            'proficiency' => 3,
            'order' => 2,
            'is_active' => true
        ]);

        ProfessionalSkill::create([
            'title' => 'Frontend Design',
            'description' => 'Responsive and interactive user interface development',
            'icon' => 'fas fa-laptop-code',
            'color' => '#ffc107',
            'technologies' => ['Bootstrap', 'CSS3', 'Responsive Design', 'jQuery'],
            'proficiency' => 4,
            'order' => 3,
            'is_active' => true
        ]);

        // Create Social Links
        SocialLink::create([
            'platform' => 'Facebook',
            'url' => 'https://www.facebook.com/',
            'icon' => 'fab fa-facebook',
            'color' => '#3b5998',
            'order' => 1,
            'is_active' => true
        ]);

        SocialLink::create([
            'platform' => 'Email',
            'url' => 'mailto:sakib15@diu.edu.bd',
            'icon' => 'fas fa-envelope',
            'color' => '#dc3545',
            'order' => 2,
            'is_active' => true
        ]);

        SocialLink::create([
            'platform' => 'LinkedIn',
            'url' => 'https://www.linkedin.com/',
            'icon' => 'fab fa-linkedin',
            'color' => '#0077b5',
            'order' => 3,
            'is_active' => true
        ]);

        SocialLink::create([
            'platform' => 'GitHub',
            'url' => 'https://github.com/',
            'icon' => 'fab fa-github',
            'color' => '#333333',
            'order' => 4,
            'is_active' => true
        ]);
    }
}
