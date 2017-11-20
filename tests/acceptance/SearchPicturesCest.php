<?php

/**
 * Class SearchPicturesCest
 */
class SearchPicturesCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function tryToSearchPicture(AcceptanceTester $I)
    {
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
    }
}
