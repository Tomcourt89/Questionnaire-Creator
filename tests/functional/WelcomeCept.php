<?php 
$I = new FunctionalTester($scenario);
$I->am('a admin');
$I->wantTo('perform actions and see result');

$I->amOnPage('/');

$I->seeCurrentUrlEquals('/');
$I->See('Laravel', '.title');