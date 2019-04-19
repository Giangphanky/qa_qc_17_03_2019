<?php

use Page\Login as LoginPage;
use Step\Acceptance\Admin as AdminTester;


class LG_17Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$EmailMeLoginLink);
        $I->wait(2);
        $I->see('Email me a login link.');
    }
}