<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Article::factory()->count(50)->create();
    }
}
