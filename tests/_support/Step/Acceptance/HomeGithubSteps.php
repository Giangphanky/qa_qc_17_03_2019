<?php


namespace Step\Acceptance;


use Page\GithubHomePage;
use Page\LoginGithubPage;

class HomeGithubSteps extends \AcceptanceTester
{
    public function checkClone()
    {
        $I = $this;
        $I->waitForElementVisible(GithubHomePage::$linkHTTPS, 30);
        $I->pauseExecution();
    }

}