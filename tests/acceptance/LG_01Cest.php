<?php
use Step\Acceptance\Admin as AdminTester;

class LG_01Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmailAndPass('giangpk33@gmail.com', 'giangpk@123');
        $I->wait(2);
        $I->see('Welcome');
    }
}
