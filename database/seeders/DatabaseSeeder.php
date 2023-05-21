<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('data')->insert([
            'pemprov' => 'Provinsi Sulsel',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 722436000000,
            'modalNonOjk' => 0,
            'jumlah' => 722436000000,
            'kepemilikan' => 33.03,
        ]);

        DB::table('data')->insert([
            'pemprov' => 'Kab. Luwu Timur',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 135000000000,
            'modalNonOjk' => 0,
            'jumlah' => 135000000000,
            'kepemilikan' => 6.17,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Wajo',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 97049000000,
            'modalNonOjk' => 0,
            'jumlah' => 97049000000,
            'kepemilikan' => 4.44,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kota Makassar',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 91184000000,
            'modalNonOjk' => 0,
            'jumlah' => 91184000000,
            'kepemilikan' => 4.17,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Soppeng',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 88849000000,
            'modalNonOjk' => 0,
            'jumlah' => 88849000000,
            'kepemilikan' => 4.06,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Bone',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 80439000000,
            'modalNonOjk' => 0,
            'jumlah' => 80439000000,
            'kepemilikan' => 3.68,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Enrekang',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 73542000000,
            'modalNonOjk' => 0,
            'jumlah' => 73542000000,
            'kepemilikan' => 3.36,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Pangkep',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 71306000000,
            'modalNonOjk' => 0,
            'jumlah' => 71306000000,
            'kepemilikan' => 3.26,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Selayar',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 63349000000,
            'modalNonOjk' => 0,
            'jumlah' => 63349000000,
            'kepemilikan' => 2.90,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Pinrang',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 58300000000,
            'modalNonOjk' => 0,
            'jumlah' => 58300000000,
            'kepemilikan' => 2.67,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Maros',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 57374000000,
            'modalNonOjk' => 0,
            'jumlah' => 57374000000,
            'kepemilikan' => 2.62,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Barru',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 54859000000,
            'modalNonOjk' => 0,
            'jumlah' => 54859000000,
            'kepemilikan' => 2.51,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Takalar',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 53230000000,
            'modalNonOjk' => 0,
            'jumlah' => 53230000000,
            'kepemilikan' => 2.43,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kota Pare-pare',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 48930000000,
            'modalNonOjk' => 0,
            'jumlah' => 48930000000,
            'kepemilikan' => 2.24,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Provinsi Sulbar',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 44769000000,
            'modalNonOjk' => 0,
            'jumlah' => 44769000000,
            'kepemilikan' => 2.05,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Tana Toraja',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 40578000000,
            'modalNonOjk' => 0,
            'jumlah' => 40578000000,
            'kepemilikan' => 1.86,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Jeneponto',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 39597000000,
            'modalNonOjk' => 0,
            'jumlah' => 39597000000,
            'kepemilikan' => 1.81,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kota Palopo',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 34626000000,
            'modalNonOjk' => 0,
            'jumlah' => 34626000000,
            'kepemilikan' => 1.58,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Bantaeng',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 34129000000,
            'modalNonOjk' => 0,
            'jumlah' => 34129000000,
            'kepemilikan' => 1.56,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Luwu',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 32805000000,
            'modalNonOjk' => 0,
            'jumlah' => 32805000000,
            'kepemilikan' => 1.50,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Sidrap',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 31475000000,
            'modalNonOjk' => 0,
            'jumlah' => 31475000000,
            'kepemilikan' => 1.44,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Gowa',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 30142000000,
            'modalNonOjk' => 0,
            'jumlah' => 30142000000,
            'kepemilikan' => 1.38,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Sinjai',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 28696000000,
            'modalNonOjk' => 0,
            'jumlah' => 28696000000,
            'kepemilikan' => 1.31,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Toraja Utara',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 26496000000,
            'modalNonOjk' => 0,
            'jumlah' => 26496000000,
            'kepemilikan' => 1.21,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Mamuju',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 23407000000,
            'modalNonOjk' => 0,
            'jumlah' => 23407000000,
            'kepemilikan' => 1.07,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Polman',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 21413000000,
            'modalNonOjk' => 0,
            'jumlah' => 21413000000,
            'kepemilikan' => 0.98,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Bulukumba',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 20420000000,
            'modalNonOjk' => 0,
            'jumlah' => 20420000000,
            'kepemilikan' => 0.93,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Majene',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 18236000000,
            'modalNonOjk' => 0,
            'jumlah' => 18236000000,
            'kepemilikan' => 0.83,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Mamasa',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 18219000000,
            'modalNonOjk' => 0,
            'jumlah' => 18219000000,
            'kepemilikan' => 0.83,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Mamuju Utara',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 17395000000,
            'modalNonOjk' => 0,
            'jumlah' => 17395000000,
            'kepemilikan' => 0.80,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Luwu Utara',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 17047000000,
            'modalNonOjk' => 0,
            'jumlah' => 17047000000,
            'kepemilikan' => 0.78,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Koperasi PT. Bank Sulselbar',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 8771000000,
            'modalNonOjk' => 0,
            'jumlah' => 8771000000,
            'kepemilikan' => 0.40,
        ]);
        DB::table('data')->insert([
            'pemprov' => 'Kab. Mamuju Tengah',
            'kehadiran' => 'tidakHadir',
            'modalOjk' => 3000000000,
            'modalNonOjk' => 0,
            'jumlah' => 3000000000,
            'kepemilikan' => 0.14,
        ]);
    }
}
