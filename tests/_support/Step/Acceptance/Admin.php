<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
class Admin extends \AcceptanceTester
{

    public function loginWithEmailAndPass($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
    }
    public function loginWithEmail($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
    }
    public function loginWithPassNull($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$ContinueButton);
        $I->wait(2);
        $I->click(LoginPage::$loginButton);
    }
    public function loginWithNothing()
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->click(LoginPage::$ContinueButton);
    }
    public function loginUseEnterKeyWord($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->pressKey(WebDriverKeys::ENTER);
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->pressKey(WebDriverKeys::ENTER);
    }
}