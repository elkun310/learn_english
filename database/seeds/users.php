<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            [
                'id'=>1,'firstname'=>'elkun','lastname'=>'nguyen',
                'email'=>'elkun310@gmail.com','password'=>bcrypt('123456'),
                'phone'=>'0964123456','role'=>'1'
            ],
            [
                'id'=>2,'firstname'=>'hà','lastname'=>'nguyễn',
                'email'=>'nguyenha9772@gmail.com','password'=>bcrypt('123456'),
                'phone'=>'0389938822','role'=>'1'
            ],
            [
                'id'=>3,'firstname'=>'user','lastname'=>'demo',
                'email'=>'user'.str_random(3).'@gmail.com','password'=>bcrypt('123456'),
                'phone'=>'033456969','role'=>'0'
            ]
        ]);
        
    }
}
