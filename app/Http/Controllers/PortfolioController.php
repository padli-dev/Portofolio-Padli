<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getProfile(): array
    {
        return [
            'name' => 'Padli',
            'initials' => 'P',
            'title' => 'Full Stack Developer',
            'university' => 'Universitas Dian Nusantara',
            'major' => 'Teknik Informatika',
            'semester' => '6',
            'email' => 'Padli@email.com',
            'github' => 'https://github.com/Padlidev',
            'linkedin' => 'https://linkedin.com/in/Padlidev',
            'status' => 'Open to work',
            'bio' => 'Halo! Saya Padli, mahasiswa Teknik Informatika semester 6 yang passionate dalam membangun web application yang scalable dan elegan. Saya fokus pada ekosistem Laravel untuk backend dan Vue.js untuk frontend. Saya senang belajar teknologi baru dan selalu berusaha menulis kode yang bersih dan terstruktur.',
        ];
    }

    public function getStats(): array
    {
        return [
            ['label' => 'Total Projects', 'value' => '8', 'delta' => '↑ 2 bulan ini', 'color' => 'purple'],
            ['label' => 'GitHub Stars', 'value' => '142', 'delta' => '↑ 18 stars', 'color' => 'cyan'],
            ['label' => 'Pengalaman', 'value' => '2 thn', 'delta' => 'Dev experience', 'color' => 'green'],
            ['label' => 'Teknologi', 'value' => '12+', 'delta' => 'Stack dikuasai', 'color' => 'white'],
        ];
    }

    public function getExperiences(): array
    {
        return [
            [
                'role' => 'Web Developer Project',
                'company' => 'Personal Project',
                'period' => '2024 – Sekarang',
                'duration' => '1+ Tahun',
                'desc' => 'Mengembangkan beberapa aplikasi dan website berbasis web sebagai media pembelajaran dan pengembangan skill programming.',
                'techs' => ['Laravel', 'MySQL', 'Bootstrap', 'Tailwind CSS'],
                'type' => 'work',
            ],

            [
                'role' => 'E-Commerce Website',
                'company' => 'Academic Project',
                'period' => '2025',
                'duration' => 'Project',
                'desc' => 'Membangun website e-commerce lengkap dengan fitur manajemen produk, autentikasi pengguna, dan dashboard admin.',
                'techs' => ['Laravel', 'PHP', 'MySQL'],
                'type' => 'academic',
            ],

            [
                'role' => 'Sistem Monitoring Kantor',
                'company' => 'Academic Project',
                'period' => '2025',
                'duration' => 'Project',
                'desc' => 'Membuat aplikasi monitoring kantor berbasis web untuk pengelolaan data karyawan dan aktivitas kantor.',
                'techs' => ['Laravel', 'Bootstrap', 'MySQL'],
                'type' => 'academic',
            ],

            [
                'role' => 'Website Restoran',
                'company' => 'Personal Project',
                'period' => '2024',
                'duration' => 'Project',
                'desc' => 'Mendesain dan membangun website restoran modern dengan tampilan responsive dan user friendly.',
                'techs' => ['HTML', 'CSS', 'JavaScript'],
                'type' => 'org',
            ],
        ];
    }

    public function getSkills(): array
    {
        return [
            'Frontend' => [
                [
                    'name' => 'HTML',
                    'percent' => 85,
                    'color' => '#f97316'
                ],
                [
                    'name' => 'CSS',
                    'percent' => 80,
                    'color' => '#3b82f6'
                ],
                [
                    'name' => 'JavaScript',
                    'percent' => 70,
                    'color' => '#facc15'
                ],
                [
                    'name' => 'Bootstrap',
                    'percent' => 78,
                    'color' => '#a855f7'
                ],
            ],

            'Backend' => [
                [
                    'name' => 'PHP Laravel',
                    'percent' => 85,
                    'color' => '#ef4444'
                ],
                [
                    'name' => 'CodeIgniter',
                    'percent' => 85,
                    'color' => '#f97316'
                ],
                [
                    'name' => 'MySQL',
                    'percent' => 80,
                    'color' => '#10b981'
                ],
            ],

            'Tools' => [
                [
                    'name' => 'XAMPP',
                    'percent' => 85,
                    'color' => '#fb923c'
                ],
            ],
        ];
    }
    public function getProjects(): array
    {
        return [
            [
                'title' => 'E-Commerce Website',
                'description' => 'Website e-commerce berbasis Laravel dengan fitur katalog produk, keranjang belanja, autentikasi user, dan dashboard admin.',
                'tag' => 'Laravel',
                'tag_color' => 'red',
                'language' => 'PHP',
                'lang_color' => 'red',
                'tech' => 'Laravel + MySQL',
                'stars' => 12,
                'github' => '#',
                'demo' => '#',
                'featured' => true,
            ],

            [
                'title' => 'Sistem Monitoring Kantor',
                'description' => 'Aplikasi monitoring kantor berbasis web untuk pengelolaan data karyawan, aktivitas kantor, laporan, dan dashboard monitoring.',
                'tag' => 'Web',
                'tag_color' => 'green',
                'language' => 'PHP',
                'lang_color' => 'green',
                'tech' => 'Laravel + Bootstrap',
                'stars' => 10,
                'github' => '#',
                'demo' => '#',
                'featured' => true,
            ],

            [
                'title' => 'Website Restoran',
                'description' => 'Website restoran modern dan responsive dengan fitur daftar menu, reservasi, kontak, dan tampilan UI yang elegan.',
                'tag' => 'Web',
                'tag_color' => 'blue',
                'language' => ' PHP',
                'lang_color' => 'cyan',
                'tech' => 'HTML + CSS + JS',
                'stars' => 8,
                'github' => '#',
                'demo' => '#',
                'featured' => true,
            ],

            [
                'title' => 'SmartCampus Organizer',
                'description' => 'Aplikasi desktop Java untuk membantu aktivitas mahasiswa seperti jadwal kuliah, tugas, dan manajemen kegiatan kampus.',
                'tag' => 'Java',
                'tag_color' => 'purple',
                'language' => 'Java',
                'lang_color' => 'green',
                'tech' => 'Java + MySQL',
                'stars' => 7,
                'github' => '#',
                'demo' => '#',
                'featured' => false,
            ],

            [
                'title' => 'Portfolio Website',
                'description' => 'Website portfolio pribadi dengan desain modern dark mode menggunakan Laravel dan Tailwind CSS.',
                'tag' => 'Laravel',
                'tag_color' => 'red',
                'language' => 'PHP',
                'lang_color' => 'red',
                'tech' => 'Laravel + Tailwind',
                'stars' => 6,
                'github' => '#',
                'demo' => '#',
                'featured' => false,
            ],
        ];
    }
    public function dashboard()
    {
        return view('pages.dashboard', [
            'profile' => $this->getProfile(),
            'stats' => $this->getStats(),
            'projects' => array_filter($this->getProjects(), fn($p) => $p['featured']),
            'skills' => $this->getSkills(),
        ]);
    }

    public function about()
    {
        return view('pages.about', [
            'profile' => $this->getProfile(),
        ]);
    }

    public function projects()
    {
        return view('pages.projects', [
            'profile' => $this->getProfile(),
            'projects' => $this->getProjects(),
        ]);
    }

    public function skills()
    {
        return view('pages.skills', [
            'profile' => $this->getProfile(),
            'skills' => $this->getSkills(),
        ]);
    }

    public function experience()
    {
        return view('pages.experience', [
            'profile' => $this->getProfile(),
            'experiences' => $this->getExperiences(),
        ]);
    }

    public function contact()
    {
        return view('pages.contact', [
            'profile' => $this->getProfile(),
        ]);
    }
}

