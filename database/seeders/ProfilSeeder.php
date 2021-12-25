<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fimages%2Fsearch%2Flandscape%2F&psig=AOvVaw0owDDA0lXDixMpUybeBE2X&ust=1640489870121000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMjvm6eD_vQCFQAAAAAdAAAAABAD',
            'profil' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
            'visi' => 'Lorem Ipsum',
            'misi' => 'Lorem Ipsum',
            'sejarah' => 'Lorem Ipsum',
        ]); 
    }
}
