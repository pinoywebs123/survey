<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionFourBatchFive extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListSectionFourBatchFive::class);
    }
}
