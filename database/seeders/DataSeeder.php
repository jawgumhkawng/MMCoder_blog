<?php

namespace Database\Seeders;

use App\Models\Programming;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            "general", "new", "tech", "health", "sport"
        ];

        $programmings = [
            "php", "java", "python", "html", 'css'
        ];

        foreach ($tags as $t) {
            Tag::create([
                'slug' => Str::slug($t),
                'name' => $t,
            ]);
        }

        foreach ($programmings as $p) {
            Programming::create([
                'slug' => Str::slug($p),
                'name' => $p,
            ]);
        }
    }
}
