<?php

namespace Database\Seeders;

use App\Models\portofolio;
use Illuminate\Database\Seeder;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        portofolio::create([
            'title' => 'Lorem Ipsum',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
    }
}
