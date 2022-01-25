<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionFour extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListSectionFour::class);
    }
}
