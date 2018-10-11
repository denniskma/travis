<?php 

class HomepageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->wantTo('Test - I can log in as admin and see article');
        $I->amOnPage('/wp-login.php');
        $I->fillField('#user_login', 'admin');
        $I->fillField('#user_pass', 'password');
        $I->click('#wp-submit');
        $I->amOnPage('/');
        $I->see('Howdy, admin');
        $I->amOnPage('/user/logout');
    }

    public function testing2(AcceptanceTester $I) {
        $I->wantTo('Test another thing');
        $I->amOnPage('/');
        $I->see('Hello World!');
    }
}
