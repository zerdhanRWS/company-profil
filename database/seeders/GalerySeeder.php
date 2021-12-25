<?php

namespace Database\Seeders;

use App\Models\galery;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        galery::create([
            'image' => 'https://images.unsplash.com/photo-1496346236646-50e985b31ea4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHBlb3BsZSUyMG1hbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
            'title' => 'Lorem Ipsum',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'text' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab, quasi?' 
        ]);
    }
}
