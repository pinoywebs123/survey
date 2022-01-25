<?php

use Illuminate\Database\Seeder;
use App\SectionTwo;
use App\QuestionList;

class SectionTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = SectionTwo::create([
            'question_name' => 'Little interest or pleasure in doing things',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $one->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $one->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $one->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $one->id,
            'name'          => 'Nearly Everyday'

        ]);


        $two = SectionTwo::create([
            'question_name' => 'Feeling down, depressed, or hopeless',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $two->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $two->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $two->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $two->id,
            'name'          => 'Nearly Everyday'

        ]);

        $three = SectionTwo::create([
            'question_name' => 'Trouble falling or staying asleep, or sleeping too much',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $three->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $three->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $three->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $three->id,
            'name'          => 'Nearly Everyday'

        ]);

        $four = SectionTwo::create([
            'question_name' => 'Feeling tired or having little energy',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $four->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $four->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $four->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $four->id,
            'name'          => 'Nearly Everyday'

        ]);

        $five = SectionTwo::create([
            'question_name' => 'Feeling tired or having little energy',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $five->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $five->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $five->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $five->id,
            'name'          => 'Nearly Everyday'

        ]);

        $six = SectionTwo::create([
            'question_name' => 'Feeling bad about yourself or that you are a failure or have let yourself or your family down 6',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $six->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $six->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $six->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $six->id,
            'name'          => 'Nearly Everyday'

        ]);

        $seven = SectionTwo::create([
            'question_name' => 'Trouble concentrating on things, such as studying or listening to lectures',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $seven->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $seven->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $seven->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $seven->id,
            'name'          => 'Nearly Everyday'

        ]);

        $eight = SectionTwo::create([
            'question_name' => 'Moving or speaking so slowly that other people could have noticed. Or the opposite being so fidgety or restless that you have been moving around a lot more than usual',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $eight->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $eight->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $eight->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $eight->id,
            'name'          => 'Nearly Everyday'

        ]);

        $nine = SectionTwo::create([
            'question_name' => 'Thoughts that you would be better off dead or of hurting yourself',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $nine->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $nine->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $nine->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $nine->id,
            'name'          => 'Nearly Everyday'

        ]);

        $ten = SectionTwo::create([
            'question_name' => 'If you checked off any problems, how difficult have these problems made it for you to do your work, take care of things at home, or get along with other people?',
            'question_count'=> 4,
            'question_id'   => 1
        ]);

        QuestionList::create([
            'section_two_id'   => $ten->id,
            'name'          => 'Not at all'

        ]);

        QuestionList::create([
            'section_two_id'   => $ten->id,
            'name'          => 'Several Days'

        ]);

        QuestionList::create([
            'section_two_id'   => $ten->id,
            'name'          => 'More than half day'

        ]);

        QuestionList::create([
            'section_two_id'   => $ten->id,
            'name'          => 'Nearly Everyday'

        ]);























    }
}
