<?php

use Codeception\Module\WebDriver;

/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

   /**
    * Define custom actions here
    */

    /**
     * @Given I am an user of Google
     */
    public function iAmAnUserOfGoogle()
    {
        $this->amOnPage('/');
        $this->seeElement('form#tsf');
    }

    /**
     * @When I search the term :arg1
     */
    public function iSearchTheTerm($arg1)
    {
        $this->seeElement('#lst-ib');
        $this->fillField('input#lst-ib', $arg1);
        $this->submitForm('form#tsf', []);
    }

    /**
     * @Then I should see pictures of :arg1
     */
    public function iShouldSeePicturesOf($arg1)
    {
        $this->seeCurrentUrlMatches('/^\/search\?/');
        $this->seeElement('form#tsf');

        $this->seeElement('#lst-ib');
        $this->seeInField('input#lst-ib', $arg1);

        $this->click('Images');
        $this->seeElement('div#search img');

        $this->makeScreenshot();
    }
}
