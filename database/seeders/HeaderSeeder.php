<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Header;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Header::truncate();

        $headers =  [
            [
              'name' => 'Home',
              'parent_id' => null,
            ],
            [
              'name' => 'Program Studi',
              'parent_id' => null,
            ],
            [
              'name' => 'Diploma 3',
              'parent_id' => 2,
            ],
            [
              'name' => 'Sarjana Terapan',
              'parent_id' => 2,
            ],
            [
              'name' => 'Pasca Sarjana',
              'parent_id' => 2,
            ],
            [
              'name' => 'Teknik Elektronika',
              'parent_id' => 3,
            ],
            [
              'name' => 'Teknik Informatika',
              'parent_id' => 4,
            ],
            [
              'name' => 'Magister Terapan Teknik Elektro',
              'parent_id' => 5,
            ],
            [
              'name' => 'Pemrograman Berorientasi Obyek',
              'parent_id' => 7,
            ],
            [
              'name' => 'Algoritma & Struktur Data',
              'parent_id' => 7,
            ],
            [
              'name' => 'Rekayasa Perangkat Lunak',
              'parent_id' => 7,
            ],
          ];

          Header::insert($headers);
    }
}
