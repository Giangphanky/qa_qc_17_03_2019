<?php
namespace Page;

class Login
{
    // include url of current page
    public static $URL = '/login';

    public static $usernameField = '//*[@id="usernameOrEmail"]';
    public static $passwordField = '//*[@id="password"]';
    public static $ContinueButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';
    public static $loginButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';

    public static $ContinueWithGoogleButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button';
    public static $CreateNewAccountLink ='//*[@id="primary"]/div/main/div/div[2]/a[1]';
    public static $EmailMeLoginLink ='//*[@id="primary"]/div/main/div/div[2]/a[2]';
    public static $LostPassLink ='//*[@id="primary"]/div/main/div/div[2]/a[3]';
    public static $BackToWordPressLink ='//*[@id="primary"]/div/main/div/div[2]/a[4]';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
