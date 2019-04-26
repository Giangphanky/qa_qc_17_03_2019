<?php
namespace Step\Acceptance;
use Page\LoginPage as LoginPage;
class LoginSteps extends \AcceptanceTester
{

    /**
     * @throws \Exception
     * Function logout
     */
    public function logout()
    {
        $I = $this;
        $I ->click(LoginPage::$avatar);
        $I ->waitForText('Profile', 30);
        $I ->click(LoginPage::$logoutButton);
        $I ->waitForText('Get Started', 30);
    }

    /**
     * @param $newPassword
     * @param $oldPassword
     * @throws \Exception
     * function change password
     */
    public function changePass( $newPassword, $oldPassword)
    {
        $I = $this;
        $I->loginWithEmailAndPass('giangpk33',$oldPassword);
        $I->waitForText('My Site',30);
        $I->click(LoginPage::$avatar);
        $I ->waitForText('Profile', 30);
        $I ->click(LoginPage::$securityLink);
        $I ->waitForText('New Password', 30);
        $I->fillField(LoginPage::$newPasswordField,$newPassword);
        $I->waitForElementClickable(LoginPage::$savePasswordButton);
        $I->click(LoginPage::$savePasswordButton);
        //$I->waitForText('If you can\'t think of a good password use the button below to generate one.', 30);
        $I->wait(5);
    }

    /**
     * @param $name
     * @param $password
     * Fucntion login with email and password
     */
    public function loginWithEmailAndPass($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
        $I->waitForText('Password',30);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
    }

    /**
     * @param $name
     * Function login with only email
     */
    public function loginWithEmail($name)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
    }


    /**
     * @param $name
     * @param $password
     * Function Login user enter keyword
     */
    public function loginUseEnterKeyWord($name,$password)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->pressKey(LoginPage::$usernameField,\Facebook\WebDriver\WebDriverKeys::ENTER);
        $I->waitForText('Password', 30);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->pressKey(LoginPage::$passwordField, \Facebook\WebDriver\WebDriverKeys::ENTER);
    }
}