<?php

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        DB::table('category')->insert([
            [
                'id'=>'1','name'=>'thể thao','slug'=>'the-thao'
            ],
            [
                'id'=>'2','name'=>'khoa học','slug'=>'khoa-hoc'
            ],
            [
                'id'=>'3','name'=>'âm nhạc','slug'=>'am-nhac'
            ],
            [
                'id'=>'4','name'=>'công nghệ','slug'=>'cong-nghe'
            ],
        ]);
    }
}
