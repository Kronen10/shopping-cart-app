<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Fesh milk 500ML',
                'price' => 250,
                'description' => 'lorem ipsum',
                'image' => 'https://www.thelist.com/img/gallery/when-you-drink-unpasteurized-milk-this-is-what-happens-to-your-body/l-intro-1624904841.jpg'
            ],
            [
                'name' => '20 EGGS',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://rare-gallery.com/mocahbig/1353782-Easter-EggEaster-8k-Ultra-HD-Wallpaper.jpg'
            ],
            [
                'name' => 'WINE 700ML',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://vsegda-pomnim.com/uploads/posts/2022-04/1651273968_6-vsegda-pomnim-com-p-vino-frukti-bokali-foto-6.jpg'
            ],
            [
                'name' => 'SPEAKER',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://i.ytimg.com/vi/xKBgr5CWD7s/maxresdefault.jpg'
            ]
        ];
        Product::insert($products);
    }
}
