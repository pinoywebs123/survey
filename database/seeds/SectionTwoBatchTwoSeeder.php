<?php

use Illuminate\Database\Seeder;
use App\SectionTwoBatchTwo;
use App\QuestionListBatchTwo;

use App\SectionTwoBatchThree;
use App\QuestionListBatchThree;

class SectionTwoBatchTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = SectionTwoBatchTwo::create([
            'question_name' => 'Feeling nervous, anxious, or on edge',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $one->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $one->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $one->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $one->id,
            'name'          => 'Nearly Everyday'

        ]);


        $two = SectionTwoBatchTwo::create([
            'question_name' => 'Not being able to stop or control worrying',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $two->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $two->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $two->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $two->id,
            'name'          => 'Nearly Everyday'

        ]);

        $three = SectionTwoBatchTwo::create([
            'question_name' => 'Worrying too much about different things',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $three->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $three->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $three->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $three->id,
            'name'          => 'Nearly Everyday'

        ]);

        $four = SectionTwoBatchTwo::create([
            'question_name' => 'Trouble relaxing',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $four->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $four->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $four->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $four->id,
            'name'          => 'Nearly Everyday'

        ]);

        $five = SectionTwoBatchTwo::create([
            'question_name' => 'Being so restless that it is hard to sit still',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $five->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $five->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $five->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $five->id,
            'name'          => 'Nearly Everyday'

        ]);

        $six = SectionTwoBatchTwo::create([
            'question_name' => 'Becoming easily annoyed or irritable',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $six->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $six->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $six->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $six->id,
            'name'          => 'Nearly Everyday'

        ]);

        $seven = SectionTwoBatchTwo::create([
            'question_name' => 'Feeling afraid, as if something awful might happen',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $seven->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $seven->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $seven->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $seven->id,
            'name'          => 'Nearly Everyday'

        ]);

        $eight = SectionTwoBatchTwo::create([
            'question_name' => 'If you checked any problems, how difficult have they made it for you to do your work, take care of things at home, or get along with other people?',
             
        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $eight->id,
            'name'          => 'Not at all'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $eight->id,
            'name'          => 'Several Days'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $eight->id,
            'name'          => 'More than half day'

        ]);

        QuestionListBatchTwo::create([
            'section_two_batch_two_id'   => $eight->id,
            'name'          => 'Nearly Everyday'

        ]);

        //Section 2 batch 3 ------------------------------------//
        
        $one = SectionTwoBatchThree::create([
            'question_name'=> 'Think, "What am I doing to deserve this?"'
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $one->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $one->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $one->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $one->id,
            'name'          => 'Almost always'

        ]);

        $two = SectionTwoBatchThree::create([
            'question_name'=> 'Analyze recent events to try to understand why you are depressed or anxious'
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $two->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $two->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $two->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $two->id,
            'name'          => 'Almost always'

        ]);

        $three = SectionTwoBatchThree::create([
            'question_name'=> 'Think,Why do I always react this way?"'
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $three->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $three->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $three->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $three->id,
            'name'          => 'Almost always'

        ]);

        $four = SectionTwoBatchThree::create([
            'question_name'=> 'Go away by yourself and think about why you feel this way'
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $four->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $four->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $four->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $four->id,
            'name'          => 'Almost always'

        ]);

        $five = SectionTwoBatchThree::create([
            'question_name'=> 'Write down what you are thinking about and analyze it'
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $five->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $five->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $five->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $five->id,
            'name'          => 'Almost always'

        ]);

        $six = SectionTwoBatchThree::create([
            'question_name'=> 'Think about a recent situation, wishing it had gone better'
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $six->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $six->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $six->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $six->id,
            'name'          => 'Almost always'

        ]);

        $seven = SectionTwoBatchThree::create([
            'question_name'=> 'Think, "Why do I have problems other people dont have?"' 
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $seven->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $seven->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $seven->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $seven->id,
            'name'          => 'Almost always'

        ]);

        $eight = SectionTwoBatchThree::create([
            'question_name'=> 'Think, "Why cant I handle things better?"' 
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $eight->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $eight->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $eight->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $eight->id,
            'name'          => 'Almost always'

        ]);

        $nine = SectionTwoBatchThree::create([
            'question_name'=> 'Analyze your personality to try to understand why you are depressed or anxious' 
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $nine->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $nine->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $nine->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $nine->id,
            'name'          => 'Almost always'

        ]);

        $ten = SectionTwoBatchThree::create([
            'question_name'=> 'Go someplace alone to think about your feelings' 
        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $ten->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $ten->id,
            'name'          => 'Somtimes'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $ten->id,
            'name'          => 'Often'

        ]);

        QuestionListBatchThree::create([
            'section_two_batch_three_id'   => $ten->id,
            'name'          => 'Almost always'

        ]);


    }
}
