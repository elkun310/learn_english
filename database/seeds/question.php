<?php

use Illuminate\Database\Seeder;

class question extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->delete();
        DB::table('question')->insert([
            [
                'id'            =>  1,
                'content'       =>  'Evan writes this letter mostly to',
                'right_answer'  =>  4,
                'note'          =>  '',
                'test_id'       =>  1,
            ],
            [
                'id'            =>  2,
                'content'       =>  'As used in the passage, the word fortunate most nearly means',
                'right_answer'  =>  5,
                'note'          =>  '',
                'test_id'       =>  1,
            ],
            [
                'id'            =>  3,
                'content'       =>  '<p>What did Evan learn about in the third grade?</p><p class="romanNumerals"><strong>I.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>dinosaurs<br><strong>II.&nbsp;&nbsp;&nbsp;&nbsp;</strong>our solar system<br><strong>III.&nbsp;&nbsp;&nbsp;</strong>penmanship</p>',
                'right_answer'  =>  10,
                'note'          =>  '',
                'test_id'       =>  1,
            ],
            [
                'id'            =>  4,
                'content'       =>  'Evan’s favorite subject in school is most likely',
                'right_answer'  =>  16,
                'note'          =>  '',
                'test_id'       =>  1,
            ],
            [
                'id'            =>  5,
                'content'       =>  'Mark works at a nursery. This means he',
                'right_answer'  =>  19,
                'note'          =>  '<p><strong>nursery</strong> <em>(noun):</em> a place where young plants and trees are grown for sale or for planting elsewhere; a room in a house for the special use of young children; a place where young children are cared for during the working day.</p><p>&nbsp;</p><p>Paragraph 1 says, “Mark works at a nursery.” It also says, “He is responsible for the growth and health of plants.” Paragraph 2 links water with plant growth. It says, “Water helps plants grow.” These sentences let us know that <strong>(C)</strong> is correct. Although a nursery can also be a place where babies are taken care of, this is not how the word is used in this passage.</p><p>&nbsp;</p><p>Paragraph 1 says, “Mark works at a nursery. But he doesn’t take care of babies.” This information helps us to eliminate <strong>(A)</strong>.</p><p>&nbsp;</p><p>The passage does not provide support for choices <strong>(B)</strong> and <strong>(D)</strong>. Therefore, they are incorrect.</p>',
                'test_id'       =>  2,
            ],
            [
                'id'            =>  6,
                'content'       =>  'According to the passage, when plants get too much water, their roots',
                'right_answer'  =>  24,
                'note'          =>  '',
                'test_id'       =>  2,
            ],
            [
                'id'            =>  7,
                'content'       =>  'Why does Mark spray healthy leaves with soapy water?',
                'right_answer'  =>  26,
                'note'          =>  '',
                'test_id'       =>  2,
            ],
            [
                'id'            =>  8,
                'content'       =>  'Using the information in the passage, we can tell that Mark is',
                'right_answer'  =>  29,
                'note'          =>  '<p>Paragraph 1 says, “He is responsible for the growth and health of plants.” The word responsible tells us that Mark has many duties. The rest of the passage describes Mark’s duties. And we learn that Mark does his duties well. In paragraph 2, we learn that he does not water too much or too little. He follows a schedule. In paragraph 3, we learn that he puts the water in basins, not soil. Paragraph 4 tells us that he “examines” the plants’ leaves to find sick plants. Then he treats them. Paragraph 5 tells us how he cares for plants with rotting roots. Paragraph 6 says he “reduces the plants’ risk of getting sick again” by removing dead leaves. Paragraph 7 describes how he protects plants from bugs. And paragraph 8 confirms that Mark is dutiful. It says, “He performs his tasks carefully.” This information helps us understand that <strong>(A)</strong> is the correct choice.</p><p>&nbsp;</p><p>The passage does not provide support for choices <strong>(B)</strong>, <strong>(C)</strong>, and <strong>(D)</strong>. Therefore, they are incorrect.</p>',
                'test_id'       =>  2,
            ],
            [
                'id'            =>  9,
                'content'       =>  'As used in the final paragraph, the word ambition most nearly belongs to which of the following word groups?',
                'right_answer'  =>  35,
                'note'          =>  '',
                'test_id'       =>  2,
            ],
        ]);
        
    }
}
