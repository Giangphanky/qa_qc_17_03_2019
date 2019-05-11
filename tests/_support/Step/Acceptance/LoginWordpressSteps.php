<?php
namespace Step\Acceptance;
use Page\LoginPage as LoginPage;
class LoginWordpressSteps extends \AcceptanceTester
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

        //$isDisabled = $I->grabAttributeFrom(LoginPage:: savePasswordButton, 'disabled');
        //$I->assertTrue($isDisabled == 'disabled');
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
        $I->waitForElementVisible(LoginPage::$passwordField, 30);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
    }

    /**
     * @throws \Exception
     * To check Login is sucsess
     */
    public function checkLoginSuccess()
    {
        $I = $this;
        $I->waitForText(LoginPage::$evidenceLoginSucess,30);
    }

    /**
     * @param $userName
     * @param $pass
     * @param $function
     * @throws \Exception
     * To check many cases login wrong value
     */
    public function loginWrongValue($userName, $pass, $function)
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        switch ($function)
        {
            case 'userNameEmpty':
                $I->comment('userName empty');
                $I->loginWithEmail('                  ');
                $I->waitForText(LoginPage::$errorUsernameEmpty, 30);
                break;
            case 'userNameNull':
                $I->click(LoginPage::$continueButton);
                $I->waitForText(LoginPage::$errorUsernameEmpty, 30);
                break;
            case 'passEmpty':
                $I->loginWithEmail($userName);
                $I->waitForElementVisible(LoginPage::$passwordField,30);
                $I->fillField(LoginPage::$passwordField, '                       ');
                $I->click(LoginPage::$loginButton);
                $I->waitForText(LoginPage::$errorPassEmpty, 30);
                break;
            case 'passNull':
                $I->loginWithEmail($userName);
                $I->waitForElementVisible(LoginPage::$passwordField,30);
                $I->click(LoginPage::$loginButton);
                $I->waitForText(LoginPage::$errorPassEmpty, 30);
                break;
            case 'userNameInvalid':
                $I->loginWithEmail($userName);
                $I->waitForText(LoginPage::$errorUsernameInvalid, 30);
                break;
            case 'passIncorrect':
                $I->loginWithEmailAndPass($userName,$pass);
                $I->waitForText(LoginPage::$errorPassIncorrect,30);
                break;
            default:
                break;
        }
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