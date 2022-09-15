<?php

use Illuminate\Database\Seeder;

class QuestionnaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questionnaires')->insert([
            ['id' => 1, 'title' => "Test Questionnaire", 'description' => "This is a test Questionnaire", 'user_id' => "999"],
        ]);
    }
}
