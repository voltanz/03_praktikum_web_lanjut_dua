<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'azzam',
            'name' => 'Abdullah Azzam',
            'email' => 'azzam17102003@gmail.com',
            'password' => Hash::make('azzam')
<<<<<<< HEAD
        ],
        [
            'username' => 'bima',
            'name' => 'Ahmad Bima Tristan Ibrahim',
            'email' => 'bimatristan.me@gmail.com',
            'password' => Hash::make('bima') 
        ]);
        DB::table('users')->insert(data);
    }
}
=======
        ]);
        DB::table('users')->insert(data);
    }
}
>>>>>>> d607cab6e2bd73d0ccf10fc0c403c24c95d9f668
