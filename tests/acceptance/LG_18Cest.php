<?php

use Page\Login as LoginPage;
use Step\Acceptance\Admin as AdminTester;


class LG_18Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$LostPassLink);
        $I->wait(2);
        $I->see('Lost Password');
    }
}