<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Kajian::factory(10)->create();
        Department::create([
            'name' => 'BPH',
        ]);
        Department::create([
            'name' => 'Sekretariat',
        ]);
        Department::create([
            'name' => 'Keuangan, Sarana, dan Prasarana',
        ]);
        Department::create([
            'name' => 'Informasi & Komunikasi',
        ]);
        Department::create([
            'name' => 'Pengabdian Masyarakat',
        ]);
        Department::create([
            'name' => 'Keilmuan & Pengembangan',
        ]);
        Department::create([
            'name' => 'Sosial, Politik, dan Hukum',
        ]);
        Department::create([
            'name' => 'Pengembangan Sumber Daya Organisasi',
        ]);
        Department::create([
            'name' => 'Minat & Bakat',
        ]);
        Department::create([
            'name' => 'Permodalan',
        ]);
        Department::create([
            'name' => 'Hubungan Luar Universitas',
        ]);
        
        Faculty::create([
            'name' => 'Teknologi Informasi'
        ]);
        Faculty::create([
            'name' => 'Bisnis'
        ]);
        Faculty::create([
            'name' => 'Teknik'
        ]);
        Faculty::create([
            'name' => 'Bahasa & Budaya'
        ]);
        Faculty::create([
            'name' => 'Seni Rupa & Desain'
        ]);
        Faculty::create([
            'name' => 'Kedokteran'
        ]);
        Faculty::create([
            'name' => 'Kedokteran Gigi'
        ]);
        Faculty::create([
            'name' => 'Hukum'
        ]);
        Faculty::create([
            'name' => 'Psikologi'
        ]);
    }
}
