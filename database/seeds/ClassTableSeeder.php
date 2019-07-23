<?php

use Illuminate\Database\Seeder;

class ClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('classes')->count()==0){
            DB::table('classes')->insert([
                [
                    'id' =>1,
                    'name' =>'PT13311',
                    'teacher_name' => 'A',
                    'major' =>'CNTT',
                    'max_student' =>40,
                ],
                [
                    'id' =>2,
                    'name' =>'PT13312',
                    'teacher_name' => 'B',
                    'major' =>'CNTT',
                    'max_student' =>40,
                ],
                [
                    'id' =>3,
                    'name' =>'PT13313',
                    'teacher_name' => 'C',
                    'major' =>'CNTT',
                    'max_student' =>40,
                ]
            ]);
        }
    }
}
