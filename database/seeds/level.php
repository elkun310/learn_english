<?php

use Illuminate\Database\Seeder;

class level extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level')->delete();
        DB::table('level')->insert([
            [
                'id'        =>  1,
                'namelevel' => 'level 1' ,
            ],
            [
                'id'        =>  2,
                'namelevel' => 'level 2' ,
            ],
            [
                'id'        =>  3,
                'namelevel' => 'level 3' ,
            ],
            [
                'id'        =>  4,
                'namelevel' => 'level 4' ,
            ],
            [
                'id'        =>  5,
                'namelevel' => 'level 5' ,
            ],
            [
                'id'        =>  6,
                'namelevel' => 'level 6' ,
            ],
            [
                'id'        =>  7,
                'namelevel' => 'level 7' ,
            ],
            [
                'id'        =>  8,
                'namelevel' => 'level 8' ,
            ],
            [
                'id'        =>  9,
                'namelevel' => 'level 9' ,
            ],
            [
                'id'        =>  10,
                'namelevel' => 'level 10' ,
            ],
            [
                'id'        =>  11,
                'namelevel' => 'level 11' ,
            ],
            [
                'id'        =>  12,
                'namelevel' => 'level 12' ,
            ],
        ]);
    }
}
