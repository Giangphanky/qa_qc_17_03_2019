<?php
use Step\Acceptance\Admin as AdminTester;


class LG_05Cest
{
    public function TryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('               ');
        $I->wait(2);
        $I->see('Please enter a username or email address');
    }
}


