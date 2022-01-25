<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionFourBatchFour extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListSectionFourBatchFour::class);
    }
}
