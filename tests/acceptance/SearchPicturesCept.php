<?php
$I = new AcceptanceTester($scenario);
$I->am('google user');
$I->wantTo('Search pictures');
$I->lookForwardTo('See picture from a search');

$I->amOnPage('/');
$I->seeElement('form#tsf');

$I->seeElement('#lst-ib');
$I->fillField('input#lst-ib', 'lolcatz');
$I->submitForm('form#tsf', []);

$I->seeCurrentUrlMatches('/^\/search\?/');
$I->seeElement('form#tsf');
$I->seeElement('#lst-ib');
$I->seeInField('input#lst-ib', 'lolcatz');

$I->click('Images');
$I->seeElement('div#search img');

$I->makeScreenshot();
