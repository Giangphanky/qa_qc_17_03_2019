<?php
use Step\Acceptance\Admin as AdminTester;

class LG_02Cest
{

    public function Test1(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('giang123@gmail.com');
        $I->wait(2);
        $I->see('User does not exist');
    }
    public function Test2(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('giang123');
        $I->wait(2);
        $I->see('User does not exist');
    }
    public function Test3(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('#@%^%#$@#$@#.com');
        $I->wait(2);
        $I->see('User does not exist');
    }
    public function Test4(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('@fpt.com');
        $I->wait(2);
        $I->see('User does not exist');
    }
    public function Test5(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('.email@fpt.com');
        $I->wait(2);
        $I->see('User does not exist');
    }
    public function Test6(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginWithEmail('email@111.222.333.44444');
        $I->wait(2);
        $I->see('User does not exist');
    }

}