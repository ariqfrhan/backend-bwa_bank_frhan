<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tips')->insert([
            [
                'title' => 'Tips Menabung',
                'thumbnail' => 'https://lelogama.go-jek.com/post_featured_image/tips-investasi-milenial-1.jpg',
                'url' => 'https://sahabat.pegadaian.co.id/artikel/tips-menabung-untuk-pelajar'
            ],
            [
                'title' => 'Tips Investasi',
                'thumbnail' => 'https://cdn.antaranews.com/cache/800x533/2021/04/20/WhatsApp-Image-2021-04-20-at-12.42.33.jpeg',
                'url' => 'https://sikapiuangmu.ojk.go.id/FrontEnd/CMS/Article/160'
            ],
        ]);
    }
}
