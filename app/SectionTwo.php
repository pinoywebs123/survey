<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTwo extends Model
{
    protected $guarded = [];

    public function questions(){
        return $this->hasMany(QuestionList::class);
    }
}
