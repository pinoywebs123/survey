<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTwoBatchThree extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListBatchThree::class);
    }
}
