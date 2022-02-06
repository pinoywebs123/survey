<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionThree extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListSectionThree::class);
    }

    public function image(){
        return $this->hasOne(AnswerImage::class,'section_id','id');
    }
}
