<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category_name' => 'Action'
            ],
            [
                'category_name' => 'Romance'
            ],
            [
                'category_name' => 'Fiction'
            ],
            [
                'category_name' => 'Historical'
            ],
            [
                'category_name' => 'Self Improvement'
            ],
            [
                'category_name' => 'Horror'
            ],
            [
                'category_name' => 'Sci-fi'
            ],
            [
                'category_name' => 'Inspiring'
            ],
        ];

        Category::insert($data);
    }
}
