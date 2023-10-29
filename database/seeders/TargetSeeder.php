<?php

namespace Database\Seeders;

use App\Models\Target;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $targetData = [
            ['id_target'=>'1',
            'nama_target'=>'target 1'
            
        ],
        [
            'id_target'=>'2',
            'nama_target'=>'target 2'
            
        ],
        [
            'id_target'=>'3',
            'nama_target'=>'target 3'
            
        ],
     [
            'id_target'=>'4',
            'nama_target'=>'target 4'
            
     ]
     ];
     foreach($targetData as $key =>$val){
        Target::create($val);
    }
}
}