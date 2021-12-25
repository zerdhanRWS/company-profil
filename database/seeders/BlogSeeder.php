<?php

namespace Database\Seeders;

use App\Models\blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        blog::create([
            'title' => 'Lorem Ipsum',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
    }
}
