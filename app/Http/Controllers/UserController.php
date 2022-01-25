<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\SectionTwo;
use App\SectionTwoBatchTwo;
use App\SectionTwoBatchThree;
use App\SectionTwoBatchFour;
use App\SectionTwoBatchFive;

use App\SectionFourBatchFive;
use App\SectionFourBatchFour;
use App\SectionFourBatchThree;
use App\SectionFourBatchTwo;
use App\SectionFour;

use App\Answer;

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
        $ans = new Answer;
        $ans->user_id = $request->user_id;
        $ans->question_id = $request->question_id;
        $ans->answer =  $request->answer;
        $ans->save();

        return response()->json(['status'=> 200, 'data'=> $ans]);
    }

    public function section3()
    {
         // $section2 = SectionTwo::with('questions')->get();
         // $section2_batch2 = SectionTwoBatchTwo::with('questions')->get();

        return view('admin.section3');
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

    public function admin_message()
    {
        return view('admin.admin_message');
    }
}
