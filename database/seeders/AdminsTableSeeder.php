<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $password = hash::make('123');
        $adminrecord = [['id' => 2, 'name' => 'koriche', 'email' => 'admin@admin.com', 'phone' => '0123456', 'image' => 'admin.jpg','password'=>$password],
    ];
    admin::insert($adminrecord);
    }
}
