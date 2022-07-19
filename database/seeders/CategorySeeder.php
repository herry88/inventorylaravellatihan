<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //membuat data dummy category
        $category = [
            [
                'nmcategories' => 'Komputer',
            ],
            [
                'nmcategories' => 'Handphone',
            ],
            [
                'nmcategories' => 'Laptop',
            ],
            [
                'nmcategories' => 'Printer',
            ]
        ];
        //insert data dummy category ke database
        foreach ($category as $categori) {
            Category::create($categori);
        }
    }
}
