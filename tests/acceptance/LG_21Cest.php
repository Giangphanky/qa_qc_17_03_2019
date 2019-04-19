<?php
use Page\Login as LoginPage;
use Step\Acceptance\Admin as AdminTester;


class LG_21Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmailAndPass('giangpk33@gmail.com', 'giangpk@123');
        $I->wait(2);

        $I->closeTab();
        $I = new AdminTester($scenario);
        $I->amOnPage(LoginPage::$URL);
        $I->see('Welcome');
    }
}
