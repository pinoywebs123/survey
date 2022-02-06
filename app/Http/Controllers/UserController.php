<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\SectionTwo;
use App\SectionTwoBatchTwo;
use App\SectionTwoBatchThree;
use App\SectionTwoBatchFour;
use App\SectionTwoBatchFive;


use App\SectionThree;
use App\QuestionListSectionThree;


use App\SectionFourBatchFive;
use App\SectionFourBatchFour;
use App\SectionFourBatchThree;
use App\SectionFourBatchTwo;
use App\SectionFour;

use App\Answer;
use App\Answer2;
use App\Answer3;
use App\Answer4;
use App\Answer5;

use App\Answer6;
use App\Answer7;
use App\Answer8;
use App\Answer9;
use App\Answer10;

use App\AnswerThree;

use Auth;

class UserController extends Controller
{
    public function users()
    {
        $users = [];
        return view('admin.users',compact('users'));
    }

    public function section2()
    {
         $section2 = SectionTwo::with('questions')->get();
         $section2_batch2 = SectionTwoBatchTwo::with('questions')->get();
         $section2_batch3 = SectionTwoBatchThree::with('questions')->get();
         $section2_batch4 = SectionTwoBatchFour::with('questions')->get();
         $section2_batch5 = SectionTwoBatchFive::with('questions')->get();

        return view('admin.section2',compact('section2','section2_batch2','section2_batch3','section2_batch4','section2_batch5'));
    }

    public function section2_batch1(Request $request)
    {
        $find = Answer::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section2_batch2(Request $request)
    {
        $find = Answer2::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer2;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section2_batch3(Request $request)
    {
        $find = Answer3::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer3;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section2_batch4(Request $request)
    {
        $find = Answer4::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer4;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section2_batch5(Request $request)
    {
        $find = Answer5::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer5;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section4_batch1(Request $request)
    {
        $find = Answer6::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer6;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section4_batch2(Request $request)
    {
        $find = Answer7::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer7;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section4_batch3(Request $request)
    {
        $find = Answer8::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer8;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section4_batch4(Request $request)
    {
        $find = Answer9::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer9;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section4_batch5(Request $request)
    {
        $find = Answer10::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new Answer10;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section3()
    {
        $section3 = SectionThree::with('questions')->get();
          

        return view('admin.section3',compact('section3'));
    }

    public function section3_check(Request $request)
    {
        $find = AnswerThree::where('user_id',Auth::id())->where('question_id', $request->question_id)->first();
        if($find) {
            $find->update([
                'answer'=> $request->answer
            ]);
        }else{
           $ans = new AnswerThree;
            $ans->user_id = $request->user_id;
            $ans->question_id = $request->question_id;
            $ans->answer =  $request->answer;
            $ans->section_id = $request->section_id;
            $ans->save(); 
        }
        

        return response()->json(['status'=> 200, 'message'=> 'success']);
    }

    public function section4()
    {
          $section4 = SectionFour::with('questions')->get();
          $section4_batch2 = SectionFourBatchTwo::with('questions')->get();
          $section4_batch3 = SectionFourBatchThree::with('questions')->get();
          $section4_batch4 = SectionFourBatchFour::with('questions')->get();
          $section4_batch5 = SectionFourBatchFive::with('questions')->get();

        return view('admin.section4',compact('section4','section4_batch2','section4_batch3','section4_batch4','section4_batch5'));
    }

    public function message()
    {
        return view('admin.message');
    }

    public function home_admin()
    {
        return view('admin.home_admin');
    }

    public function users_list()
    {
        $users = User::all();
         $nonmembers = User::whereHas(
            'roles', function($q){
                $q->where('name', 'USER');
            }
        )->get();
        return view('admin.user_list',compact('nonmembers'));
    }

    public function users_update($id)
    {
        $find = User::find($id);
        return view('admin.user_edit',compact('find'));
    }

    public function users_update_check($id, Request $request)
    {
        $find = User::find($id);
        if($find){
            $data = $request->all();
            unset($data['password']);
            $data['password'] = bcrypt($request->password);

            $find->update($data);
            return back()->with('success','User Updated Successfully!');
        }


    }

    public function view_user_survey($id)
    {
        
        $find = User::find($id);
        $section2 = SectionTwo::with('questions')->get();
         $section2_batch2 = SectionTwoBatchTwo::with('questions')->get();
         $section2_batch3 = SectionTwoBatchThree::with('questions')->get();
         $section2_batch4 = SectionTwoBatchFour::with('questions')->get();
         $section2_batch5 = SectionTwoBatchFive::with('questions')->get();

        return view('admin.survey.section2',compact('find','section2','section2_batch2','section2_batch3','section2_batch4','section2_batch5'));

       
    }

    public function view_user_survey_3($id)
    {
        $find = User::find($id);
        $section3 = SectionThree::with('questions')->get();
        return view('admin.survey.section3',compact('find','section3'));
    }

    public function view_user_survey_4($id)
    {
        $find = User::find($id);

        $section4 = SectionFour::with('questions')->get();
          $section4_batch2 = SectionFourBatchTwo::with('questions')->get();
          $section4_batch3 = SectionFourBatchThree::with('questions')->get();
          $section4_batch4 = SectionFourBatchFour::with('questions')->get();
          $section4_batch5 = SectionFourBatchFive::with('questions')->get();

        

        return view('admin.survey.section4',compact('find','section4','section4_batch2','section4_batch3','section4_batch4','section4_batch5'));

    }

    public function admin_message()
    {
        return view('admin.admin_message');
    }
}
