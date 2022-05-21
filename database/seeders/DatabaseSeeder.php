<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Store;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin88',
            'address' => 'Jl. Astana Anyar No.308, Nyengseret, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40242',
            'phone' => '081224158658',
            'email' => 'laundry88@admin.com',
            'password' => Hash::make('admin88'),
            'role' => 'Admin'
        ]);

        Store::create([
            'name' => 'Laundry88',
            'slug' => 'laundry88',
            'address' => 'Jl. Astana Anyar No.308, Nyengseret, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40242',
            'description' => 'phone: 081224158658',
            'is_open' => 1
        ]);
        Store::create([
            'name' => 'Laundry Kiloan',
            'slug' => 'laundry-kiloan',
            'address' => 'Jl. Babakan Ciamis No.34, Babakan Ciamis, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40117',
            'description' => 'phone: 088218445889',
            'is_open' => 0
        ]);
        Store::factory(25)->create();

        Service::factory(5)->create();
    }
}
