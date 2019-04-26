<?php

use Page\LoginPage as LoginPage;
use Step\Acceptance\LoginSteps as LoginSteps;


class LoginCest
{

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_01 : Verify if a user will be able to login with a valid email and valid password
     */
    public function LG_01(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user will be able to login with a valid email and valid password');
        $I->loginWithEmailAndPass('giangpk33@gmail.com', 'giangpk@123');
        $I->waitForText('My Site',30);
        $I->logout();
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_02 Verify if a user will be able to login with a valid username and valid password
     */
      public function LG_02(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user will be able to login with a valid username and valid password');
        $I->loginWithEmailAndPass('giangpk33','giangpk@123');
        $I->waitForText('My Site',30);
        $I->logout();
    }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_03 Verify if a user is able to login with a new password only after he/she has changed the password.
     */
   public function LG_03(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user is able to login with a new password only after he/she has changed the password.');
       $I->changePass('giangpk@141','giangpk@140');
       $I->logout();
       $I->loginWithEmailAndPass('giangpk33@gmail.com', 'giangpk@142');
       $I->waitForText('My Site',30);
       $I->logout();
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_04 Verify if a user cannot login with a empty email
     */
   public function LG_04(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a empty email');
       $I->loginWithEmail('                  ');
       $I->waitForText('Please enter a username or email address', 30);
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_05 Verify if a user cannot login with a valid email and empty pass
     */
   public function LG_05(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a valid email and empty pass');
       $I->loginWithEmail('giangpk33@gmail.com');
       $I->waitForText('Password',30);
       $I->fillField(LoginPage::$passwordField, '                       ');
       $I->click(LoginPage::$loginButton);
       $I->waitForText('Don\'t forget to enter your password', 30);
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_06 Verify if a user cannot login with a null email
     */
   public function LG_06(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a null email');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$continueButton);
       $I->waitForText('Please enter a username or email address', 30);
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_07 Verify if a user cannot login with a valid email and null pass
     */
   public function LG_07(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user cannot login with a valid email and null pass');
       $I->loginWithEmail('giangpk33@gmail.com');
       $I->waitForText('Password',30);
       $I->click(LoginPage::$loginButton);
       $I->waitForText('Don\'t forget to enter your password');
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_10 Verify if a user will be able to click  "Create a new account " link
     */
   public function LG_10(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click  "Create a new account " link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$createNewAccountLink);
       $I->waitForText('Let\'s get started.', 30);
       $I->seeCurrentUrlEquals(LoginPage::$URLStartPage);
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase LG_11 Verify if a user will be able to click  "Email me a login link" link
     */
   public function LG_11(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click  "Email me a login link" link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$emailMeLoginLink);
       $I->waitForText('Get a link sent to the email address associated with your account to log in instantly without your password.', 30);
       $I->seeCurrentUrlEquals(LoginPage::$URLLoginLink);
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 12 Verify if a user will be able to click "Lost your password?" link
     */
   public function LG_12(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click "Lost your password?" link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$lostPassLink);
       $I->waitForText('Follow these simple steps to reset your account:', 30);
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 13 Verify if a user will be able to click "Back to WordPress.com" link
     */
   public function LG_13(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click "Back to WordPress.com" link');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$backToWordPressLink);
       $I->waitForText('build a movement.', 30);
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 14 Verify if a user will be able to click "Sign up" button
     */
   public function LG_14(LoginSteps $I)
   {
       $I->wantToTest('Verify if a user will be able to click "Sign up" button');
       $I->amOnPage(LoginPage::$URL);
       $I->click(LoginPage::$signUpLink);
       $I->waitForText('Let\'s get started', 30);
   }

    /**
     * @param LoginSteps $I
     * TestCase 18 Verify if the "Enter" key of the keyboard is working correctly on the login page
     */
   public function LG_18(LoginSteps $I)
   {
       $I->wantToTest('Verify if the "Enter" key of the keyboard is working correctly on the login page');
       $I->loginUseEnterKeyWord('giangpk33@gmail.com', 'giangpk@142');
       $I->waitForText('My Site',30);
       $I->logout();
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 19 Verify if the data in password field is either visible as bullet signs
     */
   public function LG_19(LoginSteps $I)
   {
       $I->wantToTest('Verify if the data in password field is either visible as bullet signs');
       $I->loginWithEmail('giangpk33@gmail.com');
       $isPassWord = $I->grabAttributeFrom(LoginPage::$passwordField, 'type');
       $I->assertTrue($isPassWord == 'password');
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 20 Verify if the password will be able to show or hide when click on eye icon
     */
   public function LG_20(LoginSteps $I)
   {
       $I->wantToTest('Verify if the password will be able to show or hide when click on eye icon');
       $I->loginWithEmail('giangpk33@gmail.com');
       $I->waitForText('Password',30);
       $I->fillField(LoginPage::$passwordField, 'giangpk@xxx');
       $isPassWord = $I->grabAttributeFrom(LoginPage::$passwordField, 'type');
       $I->assertTrue($isPassWord == 'password');
       $I->waitForElementClickable(LoginPage::$iconHideShowPass,30);
       $I->click(LoginPage::$iconHideShowPass);
       $isText = $I->grabAttributeFrom(LoginPage::$passwordField, 'type');
       $I->assertTrue($isText == 'text');
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 21 Verify that a user will be able to login after series of actions such as sign in,
     * close browser and reopen the application
     */
   public function LG_21(LoginSteps $I)
   {
       $I->wantToTest('Verify that a user will be able to login after series of actions such as sign in, close browser and reopen the application');
       $I->loginWithEmailAndPass('giangpk33@gmail.com', 'giangpk@123');
       $I->waitForText('My Site',30);
       $I->closeTab();
       //Fail ở bước closeTab
       $I->amOnPage(LoginPage::$URL);
       $I->waitForText('My Site',30);
       $I->logout();
   }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 22 Verify the timeout functionality of the login session
     */
   public function LG_22(LoginSteps $I)
   {
       $I->wantToTest('Verify the timeout functionality of the login session');
       $I->loginWithEmailAndPass('giangpk33@gmail.com', 'giangpk@123');
       $I->waitForText('My Site',30);
       $I->wait(30*60);
       $I->reloadPage();
       $I->waitForText('Log in to your account.');
   }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 23 Verify that there is limit on the total number of unsuccessful login attempts
     */
   public function LG_23(LoginSteps $I)
   {
       $I->wantToTest('Verify that there is limit on the total number of unsuccessful login attempts');
       $I->loginWithEmailAndPass("giangpk33@gmail.com",'123456');
       for($i = 1; $i <= 5;$i++)
       {
           $I->click(LoginPage::$loginButton);
       }
       $I->waitForText('You have exceeded the login limit. Please wait a few minutes and try again.', 30);

   }

    /**
     * @param LoginSteps $I
     * TestCase 24 Verify if a user cannot login with a invalid email or username
     * TestCase 24 include 17 sub_case
     */
   public function LG_24_Case1(LoginSteps $I)
   {
        $I->wantToTest('Verify if a user cannot login with a invalid email or username');
        $I->loginWithEmail('giang.phan@kyna.vn');
        $I->waitForText('User does not exist');
   }

    public function LG_24_Case2(LoginSteps $I)
    {
        $I->wantToTest('Garbage');
        $I->loginWithEmail('#@%^%#$@#$@#.com');
        $I->waitForText('User does not exist');
    }

    public function LG_24_Case3(LoginSteps $I)
    {
        $I->wantToTest('Missing @ sign and domain');
        $I->loginWithEmail('plainaddress');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case4(LoginSteps $I)
    {
        $I->wantToTest('Missing username');
        $I->loginWithEmail('@kyna.vn');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case5(LoginSteps $I)
    {
        $I->wantToTest('Encoded html within email is invalid');
        $I->loginWithEmail('<giangpk33@gmail.com>');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case6(LoginSteps $I)
    {
        $I->wantToTest('Missing @');
        $I->loginWithEmail('giangphan.kyna.vn');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case7(LoginSteps $I)
    {
        $I->wantToTest('Two @ sign');
        $I->loginWithEmail('giang@kyna@kyna.vn');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case8(LoginSteps $I)
    {
        $I->wantToTest('Leading dot in address is not allowed');
        $I->loginWithEmail('.giang@kyna.vn');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case9(LoginSteps $I)
    {
        $I->wantToTest('Trailing dot in address is not allowed');
        $I->loginWithEmail('giang.@kyna.vn');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case10(LoginSteps $I)
    {
        $I->wantToTest('Multiple dots');
        $I->loginWithEmail('giang..phan@kyna.vn');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case11(LoginSteps $I)
    {
        $I->wantToTest(' Unicode char as address');
        $I->loginWithEmail('あいうえお@domain.com');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case12(LoginSteps $I)
    {
        $I->wantToTest(' Text followed email is not allowed');
        $I->loginWithEmail('giang@kyna.vn (Giang phan)');
        $I->waitForText('User does not exist');
    }

    public function LG_24_Case13(LoginSteps $I)
    {
        $I->wantToTest(' Missing top level domain (.com/.net/.org/etc)');
        $I->loginWithEmail('giang@kyna');
        $I->waitForText('User does not exist');
    }

    public function LG_24_Case14(LoginSteps $I)
    {
        $I->wantToTest(' Leading dash in front of domain is invalid');
        $I->loginWithEmail('giang@-kyna.vn');
        $I->waitForText('User does not exist');
    }


    public function LG_24_Case15(LoginSteps $I)
    {
        $I->wantToTest('.web is not a valid top level domain');
        $I->loginWithEmail('giang@kyna.web');
        $I->waitForText('User does not exist');
    }

    public function LG_24_Case16(LoginSteps $I)
    {
        $I->wantToTest(' Invalid IP format');
        $I->loginWithEmail('giang@111.222.333.44444');
        $I->waitForText('User does not exist');
    }

    public function LG_24_Case17(LoginSteps $I)
    {
        $I->wantToTest(' Multiple dot in the domain portion is invalid');
        $I->loginWithEmail('giang@kyna..com');
        $I->waitForText('User does not exist');
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 25 Verify is a user cannot login with a valid username or email and incorrect password
     * TestCase 25 include 2 sub_case, login with a valid username, login with a valid email
     */
    public function LG_25_Case1(LoginSteps $I)
    {
        $I->wantToTest('Verify is a user cannot login with a valid email and incorrect password');
        $I->loginWithEmailAndPass('giangpk33@gmail.com','123456');
        $I->waitForText('Oops, that\'s not the right password. Please try again!',30);
    }

    public function LG_25_Case2(LoginSteps $I)
    {
        $I->wantToTest('Verify is a user cannot login with a valid username  and incorrect password');
        $I->loginWithEmailAndPass('giangpk33','123456');
        $I->waitForText('Oops, that\'s not the right password. Please try again!',30);
    }

    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 26 Verify if a user cannot login with a valid username or email and old password
     * TestCase 26 include 2 sub_case, login with a valid username, login with a valid email
     */
    public function LG_26_Case1(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user cannot login with a valid  email and old password');
        $I->loginWithEmailAndPass('giangpk33@gmail.com','giangpk@123');
        $I->waitForText('Oops, that\'s not the right password. Please try again!',30);
    }

    public function LG_26_Case2(LoginSteps $I)
    {
        $I->wantToTest('Verify if a user cannot login with a valid username and old password');
        $I->loginWithEmailAndPass('giangpk33','giangpk@123');
        $I->waitForText('Oops, that\'s not the right password. Please try again!',30);
    }


    /**
     * @param LoginSteps $I
     * @throws Exception
     * TestCase 29 Verify login with email is link
     */
    public function LG_29(LoginSteps $I)
    {
        $I->wantToTest('Verify login with email is link');
        $I->loginWithEmail('https://facebook.com/');
        $I->waitForText('User does not exist',30);
    }

    public function LG_30(LoginSteps $I)
    {
        for($i = 1; $i < 10; $i++)
        {
            $I->click(LoginPage::$continueButton);
        }
        $I->waitForText('Please enter a username or email address.', 30);
    }

}
