<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'content_url' => 'https://cdn.gramedia.com/uploads/items/Sang_Pemimpi.jpg',
                'content_type' => 'image',
                'title' => 'Sang Pemimpi',
                'author' => 'Andrea Hirata',
                'description' => 'Bagi Ikal dan Arai, kemiskinan boleh mengambil segalanya, kecuali satu: mimpi. Mereka letakkan mimpi setinggi-tingginya. Dua anak kuli timah itu mencurahkan segenap tenaga. Meskipun demikian, manisnya hidup tak boleh lalai dilewatkan. Di sela kesibukan belajar di sekolah menengah, selalu saja ada celah untuk menikmati masa remaja. Mencuri-curi waktu menonton bioskop, mengejar cinta pertama, adalah sekian dari kisah mereka. Namun, satu hal tak pernah terlupa, impian yang telah lama bersemayam dalam diri.',
                'ISBN' => 9786022916635,
                'price' => 89000,
            ], [
                'content_url' => 'https://cdn.gramedia.com/uploads/items/9786022910572_supernova-gelombang__5.jpg',
                'content_type' => 'image',
                'title' => 'Supernova 5 - Gelombang',
                'author' => 'Dewi Lestari',
                'description' => 'Sebuah upacara gondang mengubah segalanya bagi Alfa. Makhluk misterius yang disebut Si Jaga Portibi tiba-tiba muncul menghantuinya. Orang-orang sakti berebut menginginkan Alfa menjadi murid mereka. Dan, yang paling mengerikan dari itu semua adalah setiap tidurnya menjadi pertaruhan nyawa. Sesuatu menunggu Alfa di alam mimpi.',
                'ISBN' => 9786022910572,
                'price' => 109000,
            ], [
                'content_url' => 'https://cdn.gramedia.com/uploads/items/img20220101_11444970.jpg',
                'content_type' => 'image',
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'description' => 'Lebih dari 2000 tahun lalu, sebuah mazhab filsafat menemukan akar masalah dan juga solusi dari banyak emosi negatif. Stoisisme, atau Filosofi Teras, adalah filsafat Yunani-Romawi kuno yang bisa membantu kita mengatasi emosi negatif dan menghasilkan mental yang tangguh dalam menghadapi naik-turun nya kehidupan.',
                'ISBN' => 9786233463034,
                'price' => 98000,
            ]
        ]);
    }
}
