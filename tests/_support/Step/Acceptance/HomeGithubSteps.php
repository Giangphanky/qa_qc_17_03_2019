<?php


namespace Step\Acceptance;


use Page\GithubHomePage;
use Page\LoginGithubPage;

class HomeGithubSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     * function check clone success
     */
    public function checkClone()
    {
        $I = $this;
        $I->waitForElementVisible(GithubHomePage::$linkHTTPS, 30);
    }

}