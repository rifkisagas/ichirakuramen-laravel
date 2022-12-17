<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $menu = new Menu;
        // $menu->nama_menu = "Tonkotsu Ramen";
        // $menu->harga = 24000;

        $menu = [
            [
            'nama_menu' => 'Tonkotsu Ramen',
            'harga' => 24000,
            ],
            [
            'nama_menu' => 'Kamadare Ramen',
            'harga' => 28000,
            ],
            [
            'nama_menu' => 'Gokaku Ramen',
            'harga' => 21000,
            ],
            [
            'nama_menu' => 'Spicy Tuna Roll',
            'harga' => 13500,
            ],
            [
            'nama_menu' => 'Tempura Sushi',
            'harga' => 18000,
            ],
            [
            'nama_menu' => 'Chu-toro Sushi',
            'harga' => 31000,
            ],
            [
            'nama_menu' => 'Ocha',
            'harga' => 6000,
            ],
        ];
        foreach ($menu as $key => $value) {
            Menu::create($value);
        }

        // Menu::create([
        //     'nama_menu' => 'Tonkotsu Ramen',
        //     'harga' => 24000,
        // ]);
    }
}
