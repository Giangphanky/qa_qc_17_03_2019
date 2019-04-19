<?php
use Step\Acceptance\Admin as AdminTester;

class LG_03Cest
{

    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmailAndPass('giangpk33@gmail.com', '12345678');
        $I->wait(2);
        $I->see('Oops, that\'s not the right password. Please try again!');
    }
}