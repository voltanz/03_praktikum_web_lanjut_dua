<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'full_name' => 'Abdullah Azzam',
                'short_name' => 'Azzam',
                'nim' => '2141720073',
                'absen' => 1,
                'class' => 'TI-2F',
                'prodi' => 'D4 Teknik Informatika',
                'jurusan' => 'Jurusan Teknologi Informasi',
                'kampus' => 'Politeknik Negeri Malang',
                'email' => 'azzam17102003@gmail.com',
                'nohp' => '081290707944',
                'ig' => 'https://www.instagram.com/jmdull_/',
                'story' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error reiciendis soluta quia itaque nobis accusantium ducimus quidem consectetur, 
                        minima similique eaque consequatur tempore ipsa fugiat consequuntur voluptate asperiores neque veritatis qui iusto optio. Cumque et nemo, 
                        ducimus quo eligendi corrupti praesentium rerum recusandae beatae atque deleniti rem distinctio. Ad perspiciatis excepturi quasi autem eveniet adipisci, 
                        deserunt numquam modi dolores expedita nam, voluptatibus neque accusamus error voluptates accusantium et consequatur impedit?'
            ],
            [
                'full_name' => 'Ahmad Bima Tristan Ibrahim',
                'short_name' => 'Bima',
                'nim' => '2141720077',
                'absen' => 3,
                'class' => 'TI-2F',
                'prodi' => 'D4 Teknik Informatika',
                'jurusan' => 'Jurusan Teknologi Informasi',
                'kampus' => 'Politeknik Negeri Malang',
                'email' => 'bimatristan.me@gmail.com',
                'nohp' => '085156552045',
                'ig' => 'https://www.instagram.com/bima_tristan/',
                'story' => '
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est consequatur recusandae magnam doloribus in facere, 
                libero possimus nesciunt mollitia totam laborum unde officia molestiae facilis odio aspernatur ea id quo repellat!
                 Modi aliquid voluptates non, vitae, quam repellat blanditiis distinctio dicta optio consequatur eos quia repellendus, 
                 quis itaque amet veniam accusantium expedita sed corrupti laborum iste impedit laboriosam debitis! Optio quam tempora iure
                  non voluptatum deleniti recusandae beatae accusamus ut, mollitia consequuntur, fuga reprehenderit id sapiente aspernatur eligendi impedit odio. 
                  Earum animi laboriosam eum voluptate ab optio rem cupiditate exercitationem aspernatur perspiciatis voluptatem totam doloribus magni, repudiandae
                   nostrum pariatur a perferendis magnam. Sint veritatis aspernatur suscipit commodi eum qui. Porro reprehenderit sapiente corrupti iste exercitationem 
                   ducimus? Quos, dolores. Accusamus repudiandae, voluptates vitae sed iure nobis in eos cumque officiis rerum animi temporibus repellendus perspiciatis!
                    Voluptatum, quaerat. Labore dolorem vero ut, exercitationem officia, excepturi laboriosam facere commodi ad error.'
            ]
        ];
        DB::table('contents')->insert($data);
    }
}
