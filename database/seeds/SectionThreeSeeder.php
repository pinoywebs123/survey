<?php

use Illuminate\Database\Seeder;
use App\SectionThree;
use App\QuestionListSectionThree;
class SectionThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $session_one = SectionThree::create([
        'objectives'    => 'This session aims to gain self-awareness and set a goal for self.',
        'instructions'  => 'Photos of your past self (at least ten years ago) and your present self (at most a month ago) or any representation of both
Photo Upload1: Upload a photo of you years back or any image you capture that you would like to represent your past self. 
If you choose a photo of yourself, it may be a baby picture of yours at least ten years ago. If its from your family photo album, you may take a picture/screenshot of it with good lighting, either alone or with others in the image. ',

        ]);

       QuestionListSectionThree::create([
        'section_three_id'  => $session_one->id,
        'question_name'     => 'What is the event/story/emotions behind the picture?'

       ]);

       QuestionListSectionThree::create([
        'section_three_id'  => $session_one->id,
        'question_name'     => 'If you could change this pictures event/story/emotion/aspects, what would it be and why?'

       ]);


       QuestionListSectionThree::create([
        'section_three_id'  => $session_one->id,
        'question_name'     => ' What does it say about your present self?'

       ]);

       QuestionListSectionThree::create([
        'section_three_id'  => $session_one->id,
        'question_name'     => ' What positive changes does it show compared to the first photo you uploaded?'

       ]);

       QuestionListSectionThree::create([
        'section_three_id'  => $session_one->id,
        'question_name'     => ' The positive changes you made are significant, no matter how small they may be. You deserve a pat on your shoulder for reaching this far in your life! From this point of your present self, what positive changes do you want to make for yourself for the next month? What do you want to look forward to for yourself?'

       ]);

        QuestionListSectionThree::create([
        'section_three_id'  => $session_one->id,
        'question_name'     => 'Promise you can claim: Philippians 3:13-14 I do not consider myself yet to have taken hold of it. But one thing I do: Forgetting what is behind and straining toward what is ahead, I press on toward the goal to win the prize for which God has called me heavenward in Christ Jesus.'

       ]);

         $session_two = SectionThree::create([
        'objectives'    => ' To understand what rumination is and how it hinders positive changes. Set personal strategies from a poll of strategy, then choose strategies to manage rumination',
        'instructions'  => ' Pictures representing your current thoughts and the kind of thoughts/mind you wish to have.
Introduction: Rumination is a persistent way of thinking in which one dwells on awful information, often from the past or present, resulting in emotional misery (Sansone & Sansone, 2012) without any resolution. It is repeating the same thoughts, which usually are sad or dark. This is dangerous to your mental health because it can intensify depression and anxiety and impair your ability to think and process emotions. It may also lead you to feel isolated and can push people away. Rumination is common among perfectionists, neurotics, anxious and those who excessively focus on their relationships with others.  '

        ]);

           QuestionListSectionThree::create([
        'section_three_id'  => $session_two->id,
        'question_name'     => ' What are the things represented in this photo? What are those negative things that keep coming to your mind?'

       ]);

            QuestionListSectionThree::create([
        'section_three_id'  => $session_two->id,
        'question_name'     => 'If you could remove something from the picture, which one or two would you like to remove? Why?'

       ]);

              QuestionListSectionThree::create([
        'section_three_id'  => $session_two->id,
        'question_name'     => 'What difference does the second picture show compared to the first? What are the "good things" in the second picture? What do they represent?'

       ]);

         $session_three= SectionThree::create([
        'objectives'    => 'In this session, you will practice the strategies to manage your rumination tendencies. Take time to do the strategy.',
        'instructions'  => 'Pictures of two strategies you chose to manage your rumination.',

       ]);

         QuestionListSectionThree::create([
        'section_three_id'  => $session_three->id,
        'question_name'     => 'How do you feel doing it? How do you feel seeing yourself in the photograph doing the strategy? How effective are they in breaking the cycle of your rumination?'

       ]);

          QuestionListSectionThree::create([
        'section_three_id'  => $session_three->id,
        'question_name'     => 'Promise you can claim: Proverbs 16:3 Commit thy works into the Lord, and your thoughts shall be directed.'

       ]);

          $session_four= SectionThree::create([
        'objectives'    => 'Recognize and understand emotions.',
        'instructions'  => 'Pictures representing everyday emotions and a thing/person/event that brings comfort.
Introduction: Emotions are a normal part of our lives. It makes our lives more colorful; it helps us make good decisions and protects us from danger. We have a wide range of emotions – from negative to positive. Emotions can be out of control sometimes, but for some people, it happens regularly.',

       ]);

          QuestionListSectionThree::create([
        'section_three_id'  => $session_four->id,
        'question_name'     => ' What emotion/s that it shows? Name that/those emotion/s. What three (3) things do you dislike about this photo?'
        
       ]);

            QuestionListSectionThree::create([
        'section_three_id'  => $session_four->id,
        'question_name'     => 'In what ways does it comfort you? After being comforted, what will you do next? (Hint: Get up and do something!)'
        
       ]);

             QuestionListSectionThree::create([
        'section_three_id'  => $session_four->id,
        'question_name'     => 'Promises you can claim: Psalms 34: 18 The Lord is near to the brokenhearted and saves the crushed in spirit.'
        
       ]);

              $session_five= SectionThree::create([
        'objectives'    => ' Learn strategies in regulating emotions',
        'instructions'  => ' Emotion regulation refers to the ability to exert more control over ones emotional state. It is the act of modifying the intensity of an emotional experience. It does not mean suppression or avoidance of emotions. With emotional regulation skills, you can control both the kind of emotions you experience and how you express them.',

       ]);

              QuestionListSectionThree::create([
        'section_three_id'  => $session_five->id,
        'question_name'     => 'Name three (3) positive things about the situation. '
        
       ]);

              QuestionListSectionThree::create([
        'section_three_id'  => $session_five->id,
        'question_name'     => 'What are three (3) things you like about the photo/s? What are the things you are thankful for those events or person/s? '
        
       ]);

               QuestionListSectionThree::create([
        'section_three_id'  => $session_five->id,
        'question_name'     => 'Promises you can claim: God desired that the earth should be filled with joy and peace. He created man for happiness, and He longs to fill human hearts with the peace of heaven [COL290.2]. Psalms 31:24 says Be of good courage, and He shall strengthen your heart, all ye that hope in the Lord.'
        
       ]);

               $session_six= SectionThree::create([
        'objectives'    => 'Be honest with self and have a moral inventory',
        'instructions'  => ' Pictures of something fragile and a flying object or animal. Guilt is a common reaction that people experience when doing something wrong, whether purposefully or accidentally. Guilt is not always a bad thing. Feeling guilty for a mistake made can lead a person to change or make different future choices. However, excessively low and excessively high levels of guilt may be pathogenic. All people feel guilty many times throughout their lives. ',

       ]);

                QuestionListSectionThree::create([
        'section_three_id'  => $session_six->id,
        'question_name'     => 'What events or situations in which you feel that you are wrong and continue to bother you?'
        
       ]);

                 QuestionListSectionThree::create([
        'section_three_id'  => $session_six->id,
        'question_name'     => 'How did the events change how you view yourself and your world?'
        
       ]);

                 QuestionListSectionThree::create([
        'section_three_id'  => $session_six->id,
        'question_name'     => 'When you choose to forgive, it feels like a burden has been lifted, then you can get out of the prison walls of regrets and fly. What benefits might come if you can forgive yourself?'
        
       ]);

                 QuestionListSectionThree::create([
        'section_three_id'  => $session_six->id,
        'question_name'     => 'One of the reasons why Jesus Christ came to this world is for you to have forgiveness. His death on the cross was enough to secure forgiveness to all men. There is no such sin that God cannot forgive. In a sense, Biblically, you dont owe forgiveness to yourself because you are not righteous enough or have done such worldly known heroic acts. You owe forgiveness from God, and He freely gives it to you when you ask Him. When He decided to be hanged on the cross, it means the answer to all prayers for forgiveness is always a YES! God, our Savior, the only Righteous person who ever lived on this earth, can easily forgive you; why dont you, a fallen human being could not do so for yourself? You are fully known and yet fully loved by Him! He wants you to be free from guilt and live a fulfilling life.
Promise you can claim: Psalms 86:5 For Thou, Lord, art good, and ready to forgive; and plenteous in mercy unto all of them that call upon Thee.'
        
       ]);

                 $session_siven= SectionThree::create([
        'objectives'    => 'To forgive oneself.',
        'instructions'  => 'Pictures of peaceful scenery and your hand.In psychology, self-forgiveness is defined as accepting what has happened and showing compassion to self. ',

       ]);

                  QuestionListSectionThree::create([
        'section_three_id'  => $session_siven->id,
        'question_name'     => 'Write a letter to your "transgressor self". Recognize the situation, the reason, the pressure, the feelings you felt and your weaknesses at that time. End the forgiveness letter with an explicit statement of forgiveness, understanding and empathy towards self, claiming the promise the God forgives and so you too.'
        
       ]);

                   QuestionListSectionThree::create([
        'section_three_id'  => $session_siven->id,
        'question_name'     => 'How does it show kindness and compassion to yourself? To others? '
        
       ]);

                    QuestionListSectionThree::create([
        'section_three_id'  => $session_siven->id,
        'question_name'     => 'What other kind acts will you do for self and others for the coming days and weeks?'
        
       ]);

                     QuestionListSectionThree::create([
        'section_three_id'  => $session_siven->id,
        'question_name'     => 'Promise you can claim: John 8: 11: Neither do I condemn thee: go, and sin no more. God is clearing you from those past mistakes. He doesnt ask you to suffer yourself with the guilt to compensate for the mistake. Instead, He invites you to move forward, go, and sin no more. You dont have the power to overcome a habitual sin, but God is more than willing to empower you. Pray Psalms 143 chapter.'
        
       ]);

                     $session_eight= SectionThree::create([
        'objectives'    => 'To have a better self and anticipate a better future.',
        'instructions'  => ' Self-portrait of you dressing up or acting your future self or any representation of it. Your view of the future life and future self can affect how you live your present life. Thus, it is important to have a positive view of the future. It gives energy and motivation to wake up every day. It also provides hope that whatever challenges you may encounter, eventually, will lead you to your goal.',

       ]);

                     QuestionListSectionThree::create([
        'section_three_id'  => $session_eight->id,
        'question_name'     => 'What would you title this photo?'
        
       ]);

                     QuestionListSectionThree::create([
        'section_three_id'  => $session_eight->id,
        'question_name'     => ' What would this photo say if it could speak?'
        
       ]);

                     QuestionListSectionThree::create([
        'section_three_id'  => $session_eight->id,
        'question_name'     => 'What positive feelings and thoughts does the photo bring?'
        
       ]);

                     QuestionListSectionThree::create([
        'section_three_id'  => $session_eight->id,
        'question_name'     => 'Write a letter to your future self. What thoughts and feelings do you want to have? What encouragement will you give yourself during challenging times? End the letter claiming God’s promise.'
        
       ]);

                     QuestionListSectionThree::create([
        'section_three_id'  => $session_eight->id,
        'question_name'     => 'Jeremiah 29:11 "For I know the plans I have for you," saith the Lord, "plans to prosper you and not to harm you, plans to give you hope and a future." Philippians 4:13 I can do all things through Christ who strengthens me.'
        
       ]);








         



























    }
}
