<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTwoBatchFour extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListBatchFour::class);
    }
}
