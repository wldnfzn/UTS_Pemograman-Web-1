<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        Service::create([
            'title' => 'Battery Replacement',
            'slug'  => 'battery-replacement',
            'description' => 'Layanan penggantian baterai cepat dan aman.',
            'thumbnail' => 'https://images.unsplash.com/photo-1585386959984-a4155224a1ad'
        ]);

        Service::create([
            'title' => 'Battery Diagnostic',
            'slug'  => 'battery-diagnostic',
            'description' => 'Pengecekan kondisi kesehatan baterai.',
            'thumbnail' => 'https://images.unsplash.com/photo-1581091012184-5c1a9a9f5d1c'
        ]);
    }
}
