<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
Class with fillable fields and relational functions to other models.
Function to create a url link for participation responses.
*/
class questionnaire extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }

    public function link()
    {
        return url('/participation/' . $this->id);
    }
}
