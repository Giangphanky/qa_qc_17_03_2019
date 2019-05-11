<?php


namespace Step\Acceptance;
use Page\LoginGithubPage as Login;
use Page\GithubHomePage as HomePage;


class LoginGithubSteps extends \AcceptanceTester
{
    /**
     * @param $username
     * @param $pass
     * @throws \Exception
     */
    public function login($username, $pass)
    {
        $I = $this;
        $I ->amOnPage(Login::$URLGithub);
        $I->waitForElementVisible(Login::$usernameField, 30);
        $I->fillField(Login::$usernameField,$username);
        $I->fillField(Login::$passField, $pass);
        $I->click(Login::$loginButton);
    }

    /**
     * @param $name
     * @param $descript
     * @throws \Exception
     * function create Respo
     */
    public function createRespo($name, $descript)
    {
        $I = $this;
        $I->click(HomePage::$newButton);
        $I->waitForElementVisible(HomePage::$repositoryNameField, 30);
        $I->fillField(HomePage::$repositoryNameField, $name);
        $I->fillField(HomePage::$descriptionField, $descript);
        $I->waitForElementClickable(HomePage::$createRepositoryButton);
        $I->click(HomePage::$createRepositoryButton);
    }

}