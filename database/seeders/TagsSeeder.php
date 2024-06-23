<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['tag_name' => 'Personal']);
        Tag::create(['tag_name' => 'Trabajo']);
        Tag::create(['tag_name' => 'Escuela']);
        Tag::create(['tag_name' => 'Familia']);
        Tag::create(['tag_name' => 'Privado']);
        Tag::create(['tag_name' => 'Pareja']);
        Tag::create(['tag_name' => 'Equipo']);
    }
}
