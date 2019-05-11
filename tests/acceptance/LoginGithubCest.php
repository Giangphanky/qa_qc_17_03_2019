<?php
use Step\Acceptance\LoginGithubSteps as LoginStep;

class LoginGithubCest
{
    protected $email;
    protected $pass;
    protected $nameRespo;
    protected $descriptRespo;

    public function __construct()
    {
       $this->email = 'giangpk33@gmail.com';
       $this->pass = 'Chauyeubalam123';
       $this->nameRespo = 'checktoo4';
       $this->descriptRespo = 'checktool265';
    }

    /**
     * @param LoginStep $I
     * @throws Exception
     */
    public function doLogin(LoginStep $I)
    {
        $I->wantToTest('I want to do login success');
        $I->login($this->email, $this->pass);
    }

    public function createRespo(\Step\Acceptance\LoginGithubSteps $I)
    {
        $I->createRespo($this->nameRespo, $this->descriptRespo);
    }

    public function cloneValue(\Step\Acceptance\HomeGithubSteps $I)
    {
        $I->checkClone();
    }


}