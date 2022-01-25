<?php

use Illuminate\Database\Seeder;
use App\SectionFour;
use App\QuestionListSectionFour;

class SectionFourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = SectionFour::create([
            'question_name' => 'Little interest or pleasure in doing things',
        ]);

        $this->QuestionBatchOne($one);

        $two = SectionFour::create([
            'question_name' => 'Feeling down, depressed, or hopeless',
        ]);

        $this->QuestionBatchOne($two);

        $three = SectionFour::create([
            'question_name' => 'Trouble falling or staying asleep, or sleeping too much',
        ]);

        $this->QuestionBatchOne($three);

        $four= SectionFour::create([
            'question_name' => ' Feeling tired or having little energy',
        ]);

        $this->QuestionBatchOne($four);

        $five= SectionFour::create([
            'question_name' => 'Poor appetite or overeating',
        ]);

        $this->QuestionBatchOne($five);

         $six= SectionFour::create([
            'question_name' => ' Feeling bad about yourself or that you are a failure or have let yourself or your family down 6',
        ]);

        $this->QuestionBatchOne($six);

        $seven= SectionFour::create([
            'question_name' => 'Trouble concentrating on things, such as studying or listening to lectures',
        ]);

        $this->QuestionBatchOne($seven);

        $eight= SectionFour::create([
            'question_name' => 'Moving or speaking so slowly that other people could have noticed. Or the opposite being so fidgety or restless that you have been moving around a lot more than usual',
        ]);

        $this->QuestionBatchOne($eight);

        $nine= SectionFour::create([
            'question_name' => 'Thoughts that you would be better off dead or of hurting yourself',
        ]);

        $this->QuestionBatchOne($nine);

        $ten= SectionFour::create([
            'question_name' => 'If you checked off any problems, how difficult have these problems made it for you to do your work, take care of things at home, or get along with other people?',
        ]);

        $this->QuestionBatchOne($ten);







        
    }

    public function QuestionBatchOne($number)
    {
        QuestionListSectionFour::create([
            'section_four_id'   =>   $number->id,
            'name'              => 'Not at all',
        ]);

        QuestionListSectionFour::create([
            'section_four_id'   =>   $number->id,
            'name'              => 'Several days',
        ]);

        QuestionListSectionFour::create([
            'section_four_id'   =>   $number->id,
            'name'              => 'More than half the days',
        ]);

        QuestionListSectionFour::create([
            'section_four_id'   =>   $number->id,
            'name'              => 'Nearly every day',
        ]);

    }
}
