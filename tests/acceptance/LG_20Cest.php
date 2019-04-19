<?php

use Page\Login as LoginPage;
use Step\Acceptance\Admin as AdminTester;


class LG_20Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$BackToWordPressLink);
        $I->wait(2);
        $I->canSeeCurrentUrlEquals('https://wordpress.com/');
    }
}