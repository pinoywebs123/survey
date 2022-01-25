<?php

use Illuminate\Database\Seeder;
use App\SectionTwoBatchFour;
use App\QuestionListBatchFour;



class BatchTwoAllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = SectionTwoBatchFour::create([
            'question_name' => 'I am clear about my feeling',
             
        ]);

        $this->seedQuestion($one);

        $two = SectionTwoBatchFour::create([
            'question_name' => 'I pay attention to how I feel',
             
        ]);

        $this->seedQuestion($two);

        $three = SectionTwoBatchFour::create([
            'question_name' => 'I experience my emotions as overwhelming and out of control',
             
        ]);

        $this->seedQuestion($three);

        $four = SectionTwoBatchFour::create([
            'question_name' => 'I have no idea how I am feeling',
             
        ]);

        $this->seedQuestion($four);

        $five = SectionTwoBatchFour::create([
            'question_name' => 'I have difficulty making sense of my feelings',
             
        ]);

        $this->seedQuestion($five);

        $six = SectionTwoBatchFour::create([
            'question_name' => ' I am attentive to my feelings',
             
        ]);

        $this->seedQuestion($six);

        $seven = SectionTwoBatchFour::create([
            'question_name' => 'I know exactly how I am feeling',
             
        ]);

        $this->seedQuestion($seven);

        $eight = SectionTwoBatchFour::create([
            'question_name' => 'I care about what I am feeling',
             
        ]);

        $this->seedQuestion($eight);

        $nine = SectionTwoBatchFour::create([
            'question_name' => 'I am confused about how I feeling',
             
        ]);

        $this->seedQuestion($nine);

        $ten = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I acknowledge my emotions',
             
        ]);

        $this->seedQuestion($ten);

        $eleven = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I become angry with myself for feeling that way',
             
        ]);

        $this->seedQuestion($eleven);

        $twelve = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I become embarrassed for feeling that way',
             
        ]);

        $this->seedQuestion($twelve);

        $thirteen = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I have difficulty getting work done',
             
        ]);

        $this->seedQuestion($thirteen);

        $fourteen = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I become out of control',
             
        ]);

        $this->seedQuestion($fourteen);

        $fifteen = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I believe that I will remain that way for a long time',
             
        ]);

        $this->seedQuestion($fifteen);

        $sixteen = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I believe that Ill end up feeling very depressed',
             
        ]);

        $this->seedQuestion($sixteen);

        $seventeen = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I believe that my feelings are valid and important',
             
        ]);

        $this->seedQuestion($seventeen);

        $eigteen = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I have difficulty focusing on other things',
             
        ]);

        $this->seedQuestion($eigteen);

        $nineteen = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I feel out of control',
             
        ]);

        $this->seedQuestion($nineteen);

        $twenty = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I can still get things done',
             
        ]);

        $this->seedQuestion($twenty);

        $twenty_one = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I feel ashamed of myself for feeling that way',
             
        ]);

        $this->seedQuestion($twenty_one);

        $twenty_two = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I know that I can find a way to feel better eventually',
             
        ]);

        $this->seedQuestion($twenty_two);

        $twenty_three = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I feel like I am weak',
             
        ]);

        $this->seedQuestion($twenty_three);

        $twenty_four = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I feel like I can remain in control of my behaviours',
             
        ]);

        $this->seedQuestion($twenty_four);

        $twenty_five = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I feel guilty for feeling that way',
             
        ]);

        $this->seedQuestion($twenty_five);

        $twenty_six = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I have difficulty concentrating',
             
        ]);

        $this->seedQuestion($twenty_six);

        $twenty_seven = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I have difficulty controlling my behaviours',
             
        ]);

        $this->seedQuestion($twenty_seven);

        $twenty_eight = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I believe that there is nothing I can do to make myself feel better',
             
        ]);

        $this->seedQuestion($twenty_eight);

        $twenty_nine = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I become irritated with myself for feeling that way',
             
        ]);

        $this->seedQuestion($twenty_nine);

        $thirty = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I start to feel very bad about myself',
             
        ]);

        $this->seedQuestion($thirty);

        $thirty_one = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I believe that wallowing in it is all I can do',
             
        ]);

        $this->seedQuestion($thirty_one);

        $thirty_two = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I lose control over my behaviours',
             
        ]);

        $this->seedQuestion($thirty_two);

        $thirty_three = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I have difficulty thinking about anything else',
             
        ]);

        $this->seedQuestion($thirty_three);

        $thirty_four = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, I take time to figure out what Im feeling.',
             
        ]);

        $this->seedQuestion($thirty_four);

        $thirty_five = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, it takes me a long time to feel better',
             
        ]);

        $this->seedQuestion($thirty_five);

        $thirty_six = SectionTwoBatchFour::create([
            'question_name' => 'When Im upset, my emotions feel overwhelming',
             
        ]);

        $this->seedQuestion($thirty_six);

        
    }

    public function seedQuestion($number)
    {
        QuestionListBatchFour::create([
            'section_two_batch_four_id'   => $number->id,
            'name'          => 'Almost Never'

        ]);

        QuestionListBatchFour::create([
            'section_two_batch_four_id'   => $number->id,
            'name'          => 'Sometimes'

        ]);

        QuestionListBatchFour::create([
            'section_two_batch_four_id'   => $number->id,
            'name'          => 'About half the time'

        ]);

        QuestionListBatchFour::create([
            'section_two_batch_four_id'   => $number->id,
            'name'          => 'Most of the time'

        ]);
        QuestionListBatchFour::create([
            'section_two_batch_four_id'   => $number->id,
            'name'          => 'Almost Always'

        ]);
    }
}
