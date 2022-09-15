<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
Class with fillable fields and relational functions to other models.
*/
class Participation extends Model
{
    //
    protected $fillable = [
        'questionnaire_id',
        'question_id',
        'answer_id',
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }

}
