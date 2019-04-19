<?php 

class GiangCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
    public function frontpageWorks(AcceptanceTester $I)
    {

        $I->amOnPage('/login');
        $I->fillField('//*[@id="usernameOrEmail"]','giangpk33@gmail.com');
        $I->click('Continue');
        $I->wait(2);

        $I->fillField('//*[@id="password"]','Chauyeubalam123');
        $I->click('Log In');
        $I->wait(3);
        $I->see('My site');
        $I->seeCurrentUrlEquals('https://wordpress.com/');
    }
}
