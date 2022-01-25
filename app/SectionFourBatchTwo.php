<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionFourBatchTwo extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListSectionFourBatchTwo::class);
    }
}
