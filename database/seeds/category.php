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
                'id'=>'1','slug'=>'the-thao','name'=>'thể thao'
            ],
            [
                'id'=>'2','slug'=>'khoa-hoc','name'=>'khoa học'
            ],
            [
                'id'=>'3','slug'=>'am-nhac','name'=>'âm nhạc'
            ],
            [
                'id'=>'4','slug'=>'cong-nghe','name'=>'công nghệ'
            ],
        ]);
    }
}
