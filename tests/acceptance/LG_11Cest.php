<?php
use Step\Acceptance\Admin as AdminTester;

class LG_11Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginUseEnterKeyWord('giangpk33@gmail.com', 'giangpk@123');
        $I->wait(2);
        $I->see('Welcome');
    }
}