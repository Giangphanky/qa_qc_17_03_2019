<?php
namespace Page;

class LoginPage
{
    // include url of current page
    public static $URL = '/login';

    // include url of promo page/
    public static $URLPromo = '/?apppromo';

    public static $URLStartPage = '/start/user';

    public static $URLLoginLink = '/log-in/link';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $usernameField = '#usernameOrEmail';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $passwordField = '#password';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $continueButton = '//button[text()="Continue"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $loginButton = '//button[text()="Log In"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $continueWithGoogleButton = '//span[text()="Continue with Google"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $createNewAccountLink ='//a[text()="Create a new account"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $emailMeLoginLink ='//a[text()="Email me a login link"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $lostPassLink ='//a[text()="Lost your password?"]';


    /**
     * @var string
     * @since 1.0.0
     */
    public static $backToWordPressLink ='//a[text()="Back to WordPress.com"]';


    /**
     * @var string
     * @since 1.0.0
     */
    public static $signUpLink = '//span[text()="Sign Up"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $avatar = '//img[@alt="Me"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $logoutButton = '//button[text()="Log Out"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $securityLink = '//span[text()="Security"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $newPasswordField = '//input[@name="password"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $savePasswordButton = '//button[text()="Save Password"]';

    /**
     * @var string
     * since 1.0.0
     */
    public static $iconHideShowPass = '//div[@class="form-password-input"]/span';

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
