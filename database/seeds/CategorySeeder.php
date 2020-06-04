<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Laravel', 'PHP', 'Infrastructure', 'AWS', 'Vapor', '4raum', 'Projects', 'Misc'
        ];

        collect($categories)->each(function ($category) {
            \App\Models\Category::create([
                'title' => $category,
                'slug' => \Illuminate\Support\Str::slug($category, '-'),
                'description' => "This category contains {$category} related posts."
            ]);
        });
    }
}
