<?php

namespace Database\Seeders;

use App\Models\Star;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Star::factory()->count(50)->create();

        Star::query()->create([
            'name'        => 'vAsSiLi',
            'surname'     => 'jOfFrOy',
            'image_url'   => 'https://media.licdn.com/dms/image/D4E03AQFQ-Iwriv_xRA/profile-displayphoto-shrink_400_400/0/1675599401146?e=1681344000&v=beta&t=vuMhUno6VtZi5pMZjq1DdUXlT9eEAK-oMYxL4AZb0yU',
            'description' => 'Young, ambitious, self-taught, loves learning new things, technophile here are some words that describe me rather well.
            
            I have been developing in PHP for more than 7 years and soon 3 years with Laravel. I started computing before I was 10 and I wrote my first lines of code at 11 for my game server.
            
            I have already built and sold several applications that have saved a lot of time with my clients.',
        ]);
    }
}
