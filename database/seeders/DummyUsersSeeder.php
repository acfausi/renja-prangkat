<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [
            [   
                'bidang_id'=>'4',
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=> bcrypt('123456')
                ],
                [
                    'bidang_id'=>'1',
                    'name'=>'Bidang',
                    'email'=>'bidang@gamail.com',
                    'role'=>'bidang',
                    'password'=> bcrypt('123456')
                    ],
                    [
                        'bidang_id'=>'2',
                        'name'=>'Bendahara',
                        'email'=>'bendahara@gamail.com',
                        'role'=>'bendahara',
                        'password'=> bcrypt('123456')
                    ],
                    
                ];
        foreach($userData as $key =>$val){
            User::create($val);
        }
    
    }
}
