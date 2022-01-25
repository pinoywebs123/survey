<?php

use Illuminate\Database\Seeder;
use App\SectionFourBatchTwo;
use App\QuestionListSectionFourBatchTwo;

class SectionFourBatchTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = SectionFourBatchTwo::create([
            'question_name'=> 'Feeling nervous, anxious, or on edge',
        ]);

        $this->QuestionBatchTwo($one);

         $two = SectionFourBatchTwo::create([
            'question_name'=> 'Not being able to stop or control worrying',
        ]);

        $this->QuestionBatchTwo($two);

         $three = SectionFourBatchTwo::create([
            'question_name'=> 'Worrying too much about different things',
        ]);

        $this->QuestionBatchTwo($three);

         $four = SectionFourBatchTwo::create([
            'question_name'=> 'Trouble relaxing',
        ]);

        $this->QuestionBatchTwo($four);

         $five = SectionFourBatchTwo::create([
            'question_name'=> 'Being so restless that it is hard to sit still',
        ]);

        $this->QuestionBatchTwo($five);

        $six = SectionFourBatchTwo::create([
            'question_name'=> 'Becoming easily annoyed or irritable',
        ]);

        $this->QuestionBatchTwo($six);

         $seven = SectionFourBatchTwo::create([
            'question_name'=> 'Feeling afraid, as if something awful might happen',
        ]);

        $this->QuestionBatchTwo($seven);

         $eight = SectionFourBatchTwo::create([
            'question_name'=> 'If you checked any problems, how difficult have they made it for you to do your work, take care of things at home, or get along with other people?',
        ]);

        $this->QuestionBatchTwo($eight);





    }

    public function QuestionBatchTwo($number)
    {
        QuestionListSectionFourBatchTwo::create([
            'section_four_batch_two_id'   =>   $number->id,
            'name'              => 'Not at all',
        ]);

        QuestionListSectionFourBatchTwo::create([
            'section_four_batch_two_id'   =>   $number->id,
            'name'              => 'Several days',
        ]);

        QuestionListSectionFourBatchTwo::create([
            'section_four_batch_two_id'   =>   $number->id,
            'name'              => 'More than half the days',
        ]);

        QuestionListSectionFourBatchTwo::create([
            'section_four_batch_two_id'   =>   $number->id,
            'name'              => 'Nearly every day',
        ]);

    }
}
