<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name'     => 'Periyasamy M',
            'email'    => 'mperiyasamy2001@gmail.com',
            'phone'    => '+91 8925167743',
            'linkedin' => 'www.linkedin.com/in/periyasamy-m-b02157227',
            'address'  => '3/49a, New Street, Thiruvananthapuram, Kizhanatham (Po), 627353',
            'about'    => 'I\'m Periyasamy, from Tirunelveli. I completed my B.E. in Computer '
                . 'Science and Engineering at Government College of Engineering, Tirunelveli, '
                . 'and have three years and ten months of experience in software development: '
                . 'five months as a Python developer and three years five months as a PHP '
                . 'Laravel developer. I currently work as a PHP Laravel Full Stack Developer '
                . '(Laravel & Livewire) at 6solve IT Services Private Limited, Tirunelveli.',
        ];

        $experience = [
            [
                'color'   => 'purple',
                'role'    => 'PHP Laravel Livewire Developer',
                'company' => '6solve IT Services Private Limited, Tirunelveli',
                'period'  => 'Currently working',
                'summary' => 'Software developer and backend engineer working with Livewire components.',
                'points'  => [
                    'Developed and maintained web applications using PHP and the Laravel framework.',
                    'Designed and implemented backend services, APIs, and database structures.',
                    'Built dynamic, interactive user interfaces using Laravel Livewire components.',
                    'Working as a full stack developer across Laravel and Livewire.',
                ],
            ],
            [
                'color'   => 'pink',
                'role'    => 'PHP Laravel Developer',
                'company' => 'HIG AI Automation LLP, Tirunelveli',
                'period'  => 'Apr 2025 – Jan 2026',
                'summary' => 'Backend developer integrating REST APIs, tested through Postman.',
                'points'  => [
                    'Integrated a real-time mobile app API using Laravel for the project "GreenBiller".',
                    'Built rental management billing software covering reports and customer lists, with APIs in core PHP.',
                ],
            ],
            [
                'color'   => 'orange',
                'role'    => 'PHP Laravel Developer',
                'company' => 'E-dot Technologies, Tirunelveli',
                'period'  => 'Jan 2024 – Apr 2025',
                'summary' => 'Built web projects using PHP with Laravel and MySQL.',
                'points'  => [
                    'Built a Zoo Management System using HTML, CSS, JS, PHP and Laravel.',
                    'Built a Blood Management System using PHP and CodeIgniter.',
                ],
            ],
            [
                'color'   => 'teal',
                'role'    => 'Python Developer',
                'company' => 'E-dot Technologies, Tirunelveli',
                'period'  => 'Aug 2023 – Jan 2024',
                'summary' => 'Built Python projects using AI and ML.',
                'points'  => [
                    'Built an ML-based machine fault detection system.',
                    'Built a face attendance system using Python and IoT with PHP.',
                ],
            ],
            [
                'color'   => 'blue',
                'role'    => 'Web & IoT Developer',
                'company' => 'E-dot Technologies, Tirunelveli',
                'period'  => 'Aug 2022 – Aug 2023',
                'summary' => 'Built websites and IoT pages using PHP and MySQL.',
                'points'  => [
                    'Built a real-time twin-technology view for a water sintex tank with remote access and control.',
                    'Built an automatic car parking system using PHP and MySQL.',
                ],
            ],
        ];

        $skills = [
            [
                'name'  => 'Programming Languages',
                'color' => 'purple',
                'items' => ['C', 'C++', 'Java', 'HTML', 'CSS', 'JavaScript', 'PHP', 'Python'],
            ],
            [
                'name'  => 'Frameworks',
                'color' => 'pink',
                'items' => ['Laravel', 'Livewire', 'CodeIgniter', 'Yii', 'React', 'Node', 'Vite'],
            ],
            [
                'name'  => 'Technologies',
                'color' => 'orange',
                'items' => ['IoT Development', 'Web Development', 'Machine Learning', 'Deep Learning', 'API Development', 'Database Management'],
            ],
            [
                'name'  => 'Backend & Infra',
                'color' => 'teal',
                'items' => ['Web Hosting & Domains', 'DNS Hosting', 'VPS Addressing', 'SSL Deployment', 'Web Panel Maintenance'],
            ],
            [
                'name'  => 'Databases',
                'color' => 'blue',
                'items' => ['SQL', 'MySQL', 'MongoDB', 'PostgreSQL'],
            ],
            [
                'name'  => 'Tools & OS',
                'color' => 'yellow',
                'items' => ['VS Code', 'Composer', 'XAMPP', 'phpMyAdmin', 'Docker', 'Postman', 'Linux (Ubuntu, Manjaro)', 'Windows'],
            ],
        ];

        $education = [
            [
                'school' => 'Government College of Engineering, Tirunelveli',
                'period' => 'Aug 2018 – Aug 2022',
                'detail' => 'B.E. Computer Science and Engineering — 75%',
            ],
            [
                'school' => "St. Xavier's Higher Secondary School, Palayamkottai",
                'period' => 'Jun 2016 – May 2018',
                'detail' => 'HSC — 90%',
            ],
            [
                'school' => "St. Xavier's Higher Secondary School, Palayamkottai",
                'period' => 'Jun 2015 – May 2016',
                'detail' => 'SSLC — 70%',
            ],
        ];

        $internships = [
            ['title' => 'Full Stack Development, NoviTech (online)', 'period' => 'Dec 2024 – Jan 2024'],
            ['title' => 'Artificial Intelligence & Data Science, NoviTech (online)', 'period' => 'Aug 2024 – Sep 2024'],
            ['title' => 'Core Java, Apollo Computer Education, Palayamkottai', 'period' => 'Sep 2018 – Dec 2018'],
            ['title' => 'C, C++, Apollo Computer Education, Palayamkottai', 'period' => 'May 2018 – Aug 2018'],
        ];

        $workshops = [
            ['title' => 'Facemask Detection Using Machine Learning', 'period' => 'Mar 2022 (4th Year)'],
            ['title' => 'Student Portal System (HTML, CSS, MySQL)', 'period' => 'Mar 2021 (3rd Year)'],
            ['title' => 'Ethical Hacking, one-day college workshop', 'period' => 'Sep 2020 (2nd Year)'],
        ];

        return view('portfolio.index', compact(
            'profile', 'experience', 'skills', 'education', 'internships', 'workshops'
        ));
    }
}
