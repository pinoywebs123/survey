<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTwoBatchTwo extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListBatchTwo::class);
    }
}
