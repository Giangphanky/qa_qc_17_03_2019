<?php

use Page\Login as LoginPage;
use Step\Acceptance\Admin as AdminTester;


class LG_16Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$CreateNewAccountLink);
        $I->wait(2);
        $I->see('Welcome to the best place for your WordPress website.');
    }
}