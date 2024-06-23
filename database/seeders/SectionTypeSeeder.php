<?php

namespace Database\Seeders;

use App\Models\SectionType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionType::create(['section_type' => 'album']); // photos container
        SectionType::create(['section_type' => 'folder']); // files container
        SectionType::create(['section_type' => 'access_container']); // access container
    }
}
