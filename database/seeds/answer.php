<?php

use Illuminate\Database\Seeder;

class answer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer')->delete();
        DB::table('answer')->insert([
            [
                'id'            =>  1,
                'content'       =>  'learn more about dinosaurs',
                'question_id'   =>  1
            ],
            [
                'id'            =>  2,
                'content'       =>  'talk about the sun',
                'question_id'   =>  1
            ],
            [
                'id'            =>  3,
                'content'       =>  'ask a question',
                'question_id'   =>  1
            ],
            [
                'id'            =>  4,
                'content'       =>  'say thank you',
                'question_id'   =>  1
            ],
            [
                'id'            =>  5,
                'content'       =>  'lucky',
                'question_id'   =>  2
            ],
            [
                'id'            =>  6,
                'content'       =>  'sad',
                'question_id'   =>  2
            ],
            [
                'id'            =>  7,
                'content'       =>  'upset',
                'question_id'   =>  2
            ],
            [
                'id'            =>  8,
                'content'       =>  'confused',
                'question_id'   =>  2
            ],
            [
                'id'            =>  9,
                'content'       =>  'I only',
                'question_id'   =>  3
            ],
            [
                'id'            =>  10,
                'content'       =>  'I and II only',
                'question_id'   =>  3
            ],
            [
                'id'            =>  11,
                'content'       =>  'II and III only',
                'question_id'   =>  3
            ],
            [
                'id'            =>  12,
                'content'       =>  'I, II, and III',
                'question_id'   =>  3
            ],
            [
                'id'            =>  13,
                'content'       =>  'English',
                'question_id'   =>  4
            ],
            [
                'id'            =>  14,
                'content'       =>  'math',
                'question_id'   =>  4
            ],
            [
                'id'            =>  15,
                'content'       =>  'social studies',
                'question_id'   =>  4
            ],
            [
                'id'            =>  16,
                'content'       =>  'science',
                'question_id'   =>  4
            ],
            [
                'id'            =>  17,
                'content'       =>  'takes care of babies',
                'question_id'   =>  5
            ],
            [
                'id'            =>  18,
                'content'       =>  'sells antique furniture',
                'question_id'   =>  5
            ],
            [
                'id'            =>  19,
                'content'       =>  'grows plants',
                'question_id'   =>  5
            ],
            [
                'id'            =>  20,
                'content'       =>  'makes bread',
                'question_id'   =>  5
            ],
            [
                'id'            =>  21,
                'content'       =>  'crumple',
                'question_id'   =>  6
            ],
            [
                'id'            =>  22,
                'content'       =>  'revive',
                'question_id'   =>  6
            ],
            [
                'id'            =>  23,
                'content'       =>  'grow',
                'question_id'   =>  6
            ],
            [
                'id'            =>  24,
                'content'       =>  'rot',
                'question_id'   =>  6
            ],
            [
                'id'            =>  25,
                'content'       =>  'Soapy water cleans the plants.',
                'question_id'   =>  7
            ],
            [
                'id'            =>  26,
                'content'       =>  'Soapy water kills bugs.',
                'question_id'   =>  7
            ],
            [
                'id'            =>  27,
                'content'       =>  'Soapy water cures rotten roots.',
                'question_id'   =>  7
            ],
            [
                'id'            =>  28,
                'content'       =>  'Soapy water makes the plants grow faster.',
                'question_id'   =>  7
            ],
            [
                'id'            =>  29,
                'content'       =>  'dutiful',
                'question_id'   =>  8
            ],
            [
                'id'            =>  30,
                'content'       =>  'powerful',
                'question_id'   =>  8
            ],
            [
                'id'            =>  31,
                'content'       =>  'cheerful',
                'question_id'   =>  8
            ],
            [
                'id'            =>  32,
                'content'       =>  'forgetful',
                'question_id'   =>  8
            ],
            [
                'id'            =>  33,
                'content'       =>  'joy, pleasure, delight',
                'question_id'   =>  9
            ],
            [
                'id'            =>  34,
                'content'       =>  'fear, worry, dread',
                'question_id'   =>  9
            ],
            [
                'id'            =>  35,
                'content'       =>  'hope, dream, desire',
                'question_id'   =>  9
            ],
            [
                'id'            =>  36,
                'content'       =>  'taste, smell, sight',
                'question_id'   =>  9
            ],
        ]);
    }
}
