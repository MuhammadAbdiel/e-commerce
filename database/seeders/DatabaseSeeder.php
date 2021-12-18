<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Muhammad Abdiel Firjatullah',
            'username' => 'muhammadabdiel',
            'email' => 'abdielfirdie@gmail.com',
            'password' => bcrypt('13122001'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'Silvia Intan Puspitasari',
            'username' => 'silviaintan',
            'email' => 'silviaintan@gmail.com',
            'password' => bcrypt('29072002'),
            'level' => 'user'
        ]);

        Category::create([
            'category_code' => 'CA00001',
            'category_name' => 'Pakaian Atas'
        ]);

        Category::create([
            'category_code' => 'CA00002',
            'category_name' => 'Pakaian Bawah'
        ]);

        Category::create([
            'category_code' => 'CA00003',
            'category_name' => 'Aksesoris'
        ]);

        Category::create([
            'category_code' => 'CA00004',
            'category_name' => 'Pelindung Kepala'
        ]);

        Category::create([
            'category_code' => 'CA00005',
            'category_name' => 'Alas Kaki'
        ]);

        Product::create([
            'product_code' => 'PA00001',
            'product_name' => 'Kaos Putih',
            'category_id' => '1',
            'description' => '<p>Kaos putih yang sangat bagus dan cocok untuk digunakan bersantai dirumah bersama keluarga karena kainnya yang sangat lembut dan terasa nyaman ketika digunakan.</p>',
            'price' => 30000,
            'stock' => 0,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00002',
            'product_name' => 'Kaos Hitam',
            'category_id' => '1',
            'description' => '<p>Kaos hitam keren yang bertuliskan Harley Davidson yang membuat kaos ini bertambah keren dan cocok digunakan untuk pergi kemana saja karena sangan nyaman digunakan.</p>',
            'price' => 31000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00003',
            'product_name' => 'Kaos Abu-abu',
            'category_id' => '1',
            'description' => '<p>Kaos yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 43000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00004',
            'product_name' => 'Kaos Putih',
            'category_id' => '1',
            'description' => '<p>Kaos yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 40000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00005',
            'product_name' => 'Sweater Abu-abu',
            'category_id' => '1',
            'description' => '<p>Sweater yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 50000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00006',
            'product_name' => 'Sweater Kuning',
            'category_id' => '1',
            'description' => '<p>Sweater yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 51000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00007',
            'product_name' => 'Hoodie Abu-abu',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 55000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00008',
            'product_name' => 'Kaos Putih',
            'category_id' => '1',
            'description' => '<p>Kaos yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 29000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00009',
            'product_name' => 'Celana Jeans',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 40000,
            'stock' => 0,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00010',
            'product_name' => 'Celana Kain Hitam',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 25000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00011',
            'product_name' => 'Celana Kain Abu-abu',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 29000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00012',
            'product_name' => 'Celana Jeans',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 55000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00013',
            'product_name' => 'Celana Jeans Pendek',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 40000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00014',
            'product_name' => 'Celana Pendek Putih',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 20000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00015',
            'product_name' => 'Celana Pendek Hitam',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 18000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00016',
            'product_name' => 'Celana Kain Abu-abu',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 25000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00017',
            'product_name' => 'Celana Pendek Hitam',
            'category_id' => '2',
            'description' => '<p>Celana yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 35000,
            'stock' => 100,
            'weight' => 0.3,
        ]);

        Product::create([
            'product_code' => 'PA00018',
            'product_name' => 'Hoodie Merah',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 95000,
            'stock' => 0,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00019',
            'product_name' => 'Hoodie Coklat',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 97000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00020',
            'product_name' => 'Hoodie Pink',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 99000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00021',
            'product_name' => 'Hoodie Abu-abu',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 119000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00022',
            'product_name' => 'Hoodie Merah',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 115000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00023',
            'product_name' => 'Jacket Hitam',
            'category_id' => '1',
            'description' => '<p>Jacket yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 155000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00024',
            'product_name' => 'Hoodie Merah',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 110000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00025',
            'product_name' => 'Hoodie Abu-abu',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 125000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00026',
            'product_name' => 'Jacket Hitam',
            'category_id' => '1',
            'description' => '<p>Jacket yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 205000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00027',
            'product_name' => 'Hoodie Biru',
            'category_id' => '1',
            'description' => '<p>Hoodie yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena kain yang dipakai sangatlah lembut sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 100000,
            'stock' => 100,
            'weight' => 0.142,
        ]);

        Product::create([
            'product_code' => 'PA00028',
            'product_name' => 'Jam Tangan Harley',
            'category_id' => '3',
            'description' => '<p>Jam tangan yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 850000,
            'stock' => 100,
            'weight' => 0.48,
        ]);

        Product::create([
            'product_code' => 'PA00029',
            'product_name' => 'Jam Tangan Guanqin',
            'category_id' => '3',
            'description' => '<p>Jam tangan yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 1050000,
            'stock' => 100,
            'weight' => 0.48,
        ]);

        Product::create([
            'product_code' => 'PA00030',
            'product_name' => 'Jam Tangan D&V',
            'category_id' => '3',
            'description' => '<p>Jam tangan yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 2050000,
            'stock' => 0,
            'weight' => 0.48,
        ]);

        Product::create([
            'product_code' => 'PA00031',
            'product_name' => 'Jam Tangan Casio',
            'category_id' => '3',
            'description' => '<p>Jam tangan yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 590000,
            'stock' => 100,
            'weight' => 0.48,
        ]);

        Product::create([
            'product_code' => 'PA00032',
            'product_name' => 'Jam Tangan Harley',
            'category_id' => '3',
            'description' => '<p>Jam tangan yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 690000,
            'stock' => 100,
            'weight' => 0.48,
        ]);

        Product::create([
            'product_code' => 'PA00033',
            'product_name' => 'Jam Tangan',
            'category_id' => '3',
            'description' => '<p>Jam tangan yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 600000,
            'stock' => 100,
            'weight' => 0.48,
        ]);

        Product::create([
            'product_code' => 'PA00034',
            'product_name' => 'Jam Tangan Zeca',
            'category_id' => '3',
            'description' => '<p>Jam tangan yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 650000,
            'stock' => 100,
            'weight' => 0.48,
        ]);

        Product::create([
            'product_code' => 'PA00035',
            'product_name' => 'Gelang Harley',
            'category_id' => '3',
            'description' => '<p>Gelang yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 56000,
            'stock' => 100,
            'weight' => 0.005,
        ]);

        Product::create([
            'product_code' => 'PA00036',
            'product_name' => 'Gelang Hitam',
            'category_id' => '3',
            'description' => '<p>Gelang yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 71000,
            'stock' => 0,
            'weight' => 0.005,
        ]);

        Product::create([
            'product_code' => 'PA00037',
            'product_name' => 'Gelang Bang Chan',
            'category_id' => '3',
            'description' => '<p>Gelang yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 61000,
            'stock' => 100,
            'weight' => 0.005,
        ]);

        Product::create([
            'product_code' => 'PA00038',
            'product_name' => 'Gelang Hitam',
            'category_id' => '3',
            'description' => '<p>Gelang yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 65000,
            'stock' => 100,
            'weight' => 0.005,
        ]);

        Product::create([
            'product_code' => 'PA00039',
            'product_name' => 'Gelang Harley',
            'category_id' => '3',
            'description' => '<p>Gelang yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 75000,
            'stock' => 100,
            'weight' => 0.005,
        ]);

        Product::create([
            'product_code' => 'PA00040',
            'product_name' => 'Topi Hitam Putih',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 15000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00041',
            'product_name' => 'Topi Hitam',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 17000,
            'stock' => 0,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00042',
            'product_name' => 'Topi Abu-abu',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 19000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00043',
            'product_name' => 'Topi Biru',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 29000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00044',
            'product_name' => 'Topi Kuning',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 21000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00045',
            'product_name' => 'Topi Hitam',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 22000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00046',
            'product_name' => 'Topi Merah',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 23000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00047',
            'product_name' => 'Topi Coboy',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 24000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00048',
            'product_name' => 'Topi Abu-abu',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 25000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00049',
            'product_name' => 'Topi Pink',
            'category_id' => '4',
            'description' => '<p>Topi yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 26000,
            'stock' => 100,
            'weight' => 0.15,
        ]);

        Product::create([
            'product_code' => 'PA00050',
            'product_name' => 'Kacamata Hitam',
            'category_id' => '3',
            'description' => '<p>Kacamata yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 51000,
            'stock' => 100,
            'weight' => 0.006,
        ]);

        Product::create([
            'product_code' => 'PA00051',
            'product_name' => 'Kacamata Kuning',
            'category_id' => '3',
            'description' => '<p>Kacamata yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 41000,
            'stock' => 100,
            'weight' => 0.006,
        ]);

        Product::create([
            'product_code' => 'PA00052',
            'product_name' => 'Kacamata Coklat',
            'category_id' => '3',
            'description' => '<p>Kacamata yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 35000,
            'stock' => 100,
            'weight' => 0.006,
        ]);

        Product::create([
            'product_code' => 'PA00053',
            'product_name' => 'Kacamata Hitam',
            'category_id' => '3',
            'description' => '<p>Kacamata yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 36000,
            'stock' => 100,
            'weight' => 0.006,
        ]);

        Product::create([
            'product_code' => 'PA00054',
            'product_name' => 'Kacamata Kuning',
            'category_id' => '3',
            'description' => '<p>Kacamata yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 37000,
            'stock' => 100,
            'weight' => 0.006,
        ]);

        Product::create([
            'product_code' => 'PA00055',
            'product_name' => 'Kacamata Biru',
            'category_id' => '3',
            'description' => '<p>Kacamata yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 38000,
            'stock' => 100,
            'weight' => 0.006,
        ]);

        Product::create([
            'product_code' => 'PA00056',
            'product_name' => 'Kacamata Hitam',
            'category_id' => '3',
            'description' => '<p>Kacamata yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 39000,
            'stock' => 100,
            'weight' => 0.006,
        ]);

        Product::create([
            'product_code' => 'PA00057',
            'product_name' => 'Sandal Harley',
            'category_id' => '5',
            'description' => '<p>Sandal yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 49000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00058',
            'product_name' => 'Sandal Harley',
            'category_id' => '5',
            'description' => '<p>Sandal yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 48000,
            'stock' => 0,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00059',
            'product_name' => 'The Sandals',
            'category_id' => '5',
            'description' => '<p>Sandal yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 38000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00060',
            'product_name' => "Sandal Harley",
            'category_id' => '5',
            'description' => '<p>Sandal yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 31000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00061',
            'product_name' => "Sandal Coklat",
            'category_id' => '5',
            'description' => '<p>Sandal yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 36000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00062',
            'product_name' => "Sandal Batik",
            'category_id' => '5',
            'description' => '<p>Sandal yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 40000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00063',
            'product_name' => "Sandal Pink",
            'category_id' => '5',
            'description' => '<p>Sandal yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 41000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00064',
            'product_name' => "Sepatu Hitam",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00065',
            'product_name' => "Sepatu Abu-abu",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00066',
            'product_name' => "Sepatu Putih",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 95000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00067',
            'product_name' => "Sepatu Abu-abu",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00068',
            'product_name' => "Sepatu Abu-abu",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00069',
            'product_name' => "Sepatu Pink",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00070',
            'product_name' => "Sepatu Orange",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 150000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00071',
            'product_name' => "Sepatu Hitam",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00072',
            'product_name' => "Sepatu Putih",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 165000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00073',
            'product_name' => "Sepatu Putih",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00074',
            'product_name' => "Sepatu Abu-abu",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 111000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00075',
            'product_name' => "Sepatu Biru",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 115000,
            'stock' => 100,
            'weight' => 0.4,
        ]);

        Product::create([
            'product_code' => 'PA00076',
            'product_name' => "Sepatu Pink",
            'category_id' => '5',
            'description' => '<p>Sepatu yang sangat keren dan cocok dipakai untuk dimanapun dan kapanpun karena bahan yang dipakai sangatlah bagus sehingga membuat nyaman ketika dipakai, juga bisa digunakan untuk bersantai.</p>',
            'price' => 115000,
            'stock' => 100,
            'weight' => 0.4,
        ]);
    }
}
