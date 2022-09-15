<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*
Class with fillable fields and relational functions to other models.
*/
class Answer extends Model
{
    //
    protected $fillable = [
        'question_id',
        'answer',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function responses()
    {
        return $this->hasMany(Participation::class);
    }
}
