<?php 
$I = new FunctionalTester($scenario);

$I->am('user');
$I->wantTo('Review survey responses');

$I->haveRecord('users', [
    'id' => '9999',
    'name' => 'testuser1',
    'password' => 'password',
    'email' => 'testuser@email.com',
]);

$I->haveRecord('questionnaires', [
    'id' => '9999',
    'title' => 'Questionnaire 1',
    'description' => 'This is a test questionnaire',
    'user_id' => '9999',
]);

$I->haveRecord('questions', [
    'id' => '9999',
    'question' => 'Question 1',
    'questionnaire_id' => '9999',
]);

$I->haveRecord('answers', [
    'id' => '9999',
    'answer' => 'Answer 1',
    'question_id' => '9999',
]);

$I->amOnPage('/users/questionnaires');
$I->see('Your Questionnaires');
$I->see('Questionnaire 1');
$I->click('Questionnaire 1');
$I->amOnPage('/users/questionnaires/9000');
$I->see('Questionnaire 1', 'h1');
$I->click('Review');
$I->see('Question 1', 'h1');
$I->see('Test Answer 1', 'li');
