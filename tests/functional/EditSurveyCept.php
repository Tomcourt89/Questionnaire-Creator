<?php 
$I = new FunctionalTester($scenario);

$I->am('user');
$I->wantTo('Edit an existing questionnaire');

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

// When
$I->amOnPage('/users/questionnaires');
$I->see('Your Questionnaires', 'h1');
$I->see('Questionnaire 1');

$I->seeElement('a', ['id' => '9999']);
$I->click('a', ['id' => '9999']);
$I->amOnPage('/users/questionnaires/9999/edit');
$I->see('Edit Questionnaire', 'h1');
$I->fillField('');
$I->click('Update Questionnaire');
$I->seeCurrentUrlEquals('/users/questionnaires');
$I->seeRecord('questionnaires', ['']);
$I->see('Your Questionnaires', 'h1');
$I->see('Updated Questionnaire 1');