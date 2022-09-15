<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
Class with fillable fields and relational functions to other models.
*/
class Question extends Model
{
    //
    protected $fillable = [
        'questionnaire_id',
        'question',
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function responses()
    {
        return $this->hasMany(Participation::class);
    }
}
