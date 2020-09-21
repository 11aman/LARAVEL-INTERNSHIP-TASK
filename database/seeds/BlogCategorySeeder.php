<?php

use Illuminate\Database\Seeder;
use App\blogcategory;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        blogcategory::create(
        [
           
           'Categoryname'=>'Exterior Wallpaper',
           'Status'=>'1'
        ]
        );

        blogcategory::create(
        [
           
           'Categoryname'=>'Interior Wallpaper',
           'Status'=>'1'
        ]
        );


        blogcategory::create(
        [
           
           'Categoryname'=>'Bathroom Wallpaper',
           'Status'=>'1'
        ]
        );

        blogcategory::create(
        [
           
           'Categoryname'=>'Kitchen Wallpaper',
           'Status'=>'1'
        ],
        );

    }
}
