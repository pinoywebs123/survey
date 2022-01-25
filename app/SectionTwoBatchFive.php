<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTwoBatchFive extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionListBatchFive::class);
    }
}
