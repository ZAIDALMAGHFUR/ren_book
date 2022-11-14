<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = ['comic', 'novel', 'fantasy', 'fiction', 'myster', 'horror', 'romance', 'westren'];

        foreach ($data as $value) {
            Category::insert([
                'name' => $value,
            ]);
        }
    }
}