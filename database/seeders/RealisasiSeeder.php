<?php

namespace Database\Seeders;

use App\Models\Realisasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RealisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $reaData = [
            ['id_rea'=>'1',
            'nama_triwulan'=>'Triwulan 1'
            
        ],
        [
            'id_rea'=>'2',
            'nama_triwulan'=>'Triwulan 2'
            
        ],
        [
            'id_rea'=>'3',
            'nama_triwulan'=>'Triwulan 3'
            
        ],
     [
            'id_rea'=>'4',
            'nama_triwulan'=>'Triwulan 4'
            
     ]
     ];
     foreach($reaData as $key =>$val){
        Realisasi::create($val);
    }
}
}