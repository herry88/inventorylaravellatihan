<?php

namespace Database\Seeders;

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
            ]
        ];
    }
}
