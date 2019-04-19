<?php


use Page\Login as LoginPage;
use Step\Acceptance\Admin as AdminTester;

class LG_24Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('https://facebook.com/');
        $I->see('User does not exist.');
    }
}