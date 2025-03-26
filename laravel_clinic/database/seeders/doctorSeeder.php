<?php

namespace Database\Seeders;

use App\Models\doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class doctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        doctor::create([
            "name"=>'mohamed',
            "description"=>'kkkkkkkkkkkkkkkkk',
            "phone" => "01212365478" ,
            "email"=>'mohamed@gmail.com',
            "password"=> '01478',
            "major_id"=> 1
        ]);
    }
}
