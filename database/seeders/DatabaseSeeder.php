<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {




        User::create(
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123')
            ]
        );


        $p1 =       Produk::create([
            'sku' => 'P' . Str::random(4),
            'namaproduk' => fake()->name(),
            'hargaproduk' => fake()->randomDigitNotNull(),
            'gambar' => 'p2.jpg',
            'stok' => rand(1, 20),
        ]);
        $p2 =   Produk::create([
            'sku' => 'P' . Str::random(4),
            'namaproduk' => fake()->name(),
            'hargaproduk' => fake()->randomDigitNotNull(),
            'gambar' => 'p3.jpg',
            'stok' => rand(1, 20),
        ]);


        Produk::create([
            'sku' => 'P' . Str::random(4),
            'namaproduk' => fake()->name(),
            'hargaproduk' => fake()->randomDigitNotNull(),
            'gambar' => 'p1.jpg',
            'stok' => rand(1, 20),
        ]);
        $p =  Produk::inRandomOrder()->pluck('sku');


        $order1 =    Order::create([
            'nama' => fake()->name(),
            'email' => fake()->email(),
            'phone' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'status' => fake()->randomElement([0, 1]),
            'bukti_bayar' => fake()->imageUrl(800, 600),
        ]);

        DB::table('order_details')->insert([
            'order_id' =>  $order1->id,
            'produk_sku' => fake()->randomElement($p),
            'jumlah' => 1,
            'total' => 1222
        ]);
        DB::table('order_details')->insert([
            'order_id' =>  $order1->id,
            'produk_sku' => fake()->randomElement($p),
            'jumlah' => 2,
            'total' => 2
        ]);
    }
}
