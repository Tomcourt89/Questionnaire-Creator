<?php 
$I = new FunctionalTester($scenario);

$I->am('user');
$I->wantTo('Create a new Survey');

// When
$I->amOnPage('/users/questionnaires');
$I->see('Your Questionnaires', 'h1');
$I->dontSee('Questionnaire 1');
// And
$I->click('Create New Questionnaire');

// Then
$I->amOnPage('/users/questionnaires/create');
$I->see('Create New Questionnaire', 'h1');
// And
$I->fillField('');
$I->fillField('');
$I->fillField('');
$I->fillField('');
$I->fillField('');

// Then
$I->seeCurrentUrlEquals('/users/questionnaires');
$I->see('Questionnaires', 'h1');
$I->see('Questionnaire 1');
