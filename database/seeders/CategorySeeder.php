<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
            'id'          => 1,
            'name'        => 'Electronics',
            'parent_id'   => null,
            'slug'        => 'electronics',
            'description' => '',
            'created_at'  => now(),
            'updated_at'  => now(),
            ],
            [
            'id'          => 2,
            'name'        => 'Mobiles',
            'parent_id'   => 1,
            'slug'        => 'mobiles',
            'description' => '',
            'created_at'  => now(),
            'updated_at'  => now(),
            ],
            [
            'id'          => 3,
            'name'        => 'Grocery',
            'parent_id'   => 1,
            'slug'        => 'grocery',
            'description' => '',
            'created_at'  => now(),
            'updated_at'  => now(),
            ],
        ];
        Category::insert($categories);
    }
}
