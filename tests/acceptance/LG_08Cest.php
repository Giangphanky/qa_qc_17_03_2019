<?php
use Step\Acceptance\Admin as AdminTester;

class LG_01Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithPassNull('giangpk33@gmail.com');
        $I->wait(2);
        $I->see('Don\'t forget to enter your password');
    }
}