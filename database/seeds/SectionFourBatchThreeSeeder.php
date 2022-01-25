<?php

use Illuminate\Database\Seeder;
use App\SectionFourBatchThree;
use App\QuestionListSectionFourBatchThree;

class SectionFourBatchThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = SectionFourBatchThree::create([
            'question_name'=> 'Think, "What am I doing to deserve this?"',
        ]);

        $this->QuestionBatchThree($one);

        $two = SectionFourBatchThree::create([
            'question_name'=> 'Analyze recent events to try to understand why you are depressed or anxious',
        ]);

        $this->QuestionBatchThree($two);

        $three = SectionFourBatchThree::create([
            'question_name'=> 'Think, "Why do I always react this way?" ',
        ]);

        $this->QuestionBatchThree($three);

        $four = SectionFourBatchThree::create([
            'question_name'=> 'Go away by yourself and think about why you feel this way',
        ]);

        $this->QuestionBatchThree($four);

         $five = SectionFourBatchThree::create([
            'question_name'=> 'Write down what you are thinking about and analyze it',
        ]);

        $this->QuestionBatchThree($five);

        $six = SectionFourBatchThree::create([
            'question_name'=> 'Think about a recent situation, wishing it had gone better',
        ]);

        $this->QuestionBatchThree($six);

        $seven = SectionFourBatchThree::create([
            'question_name'=> 'Think,Why do I have problems other people dont have?" 
',
        ]);

        $this->QuestionBatchThree($seven);

         $eight= SectionFourBatchThree::create([
            'question_name'=> 'Think, "Why cant I handle things better',
        ]);

        $this->QuestionBatchThree($eight);

        $nine= SectionFourBatchThree::create([
            'question_name'=> 'Analyze your personality to try to understand why you are depressed or anxious',
        ]);

        $this->QuestionBatchThree($nine);

         $ten= SectionFourBatchThree::create([
            'question_name'=> ' Go someplace alone to think about your feelings',
        ]);

        $this->QuestionBatchThree($ten);












    }




    public function QuestionBatchThree($number)
    {
        QuestionListSectionFourBatchThree::create([
            'section_four_batch_three_id'   =>   $number->id,
            'name'              => 'Almost Never',
        ]);

        QuestionListSectionFourBatchThree::create([
            'section_four_batch_three_id'   =>   $number->id,
            'name'              => 'Sometimes',
        ]);

        QuestionListSectionFourBatchThree::create([
            'section_four_batch_three_id'   =>   $number->id,
            'name'              => 'Often',
        ]);

        QuestionListSectionFourBatchThree::create([
            'section_four_batch_three_id'   =>   $number->id,
            'name'              => 'Almost Always',
        ]);

    }
}
