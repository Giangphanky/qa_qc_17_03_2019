<?php


namespace Step\Acceptance;


use Page\FormosHomePage;
use Page\ReservationPage;

class FormosHomePageSteps extends \AcceptanceTester
{
    /**
     * Function to click NewReservation Link
     */
    public function clickNewReservationLink()
    {
        $I = $this;
        $I->amOnPage(FormosHomePage::$URL);
        $I->waitForElementVisible(FormosHomePage::$newRevervationLink, 30);
        $I->click(FormosHomePage::$newRevervationLink);
        $I->waitForElementVisible(ReservationPage::$tableIDField, 30);
    }


    /**
     * Function to click Edit Link
     */
    public function clickEditLink()
    {
        $I = $this;
        $I->amOnPage(FormosHomePage::$URL);
        $I->waitForElementVisible(FormosHomePage::$editLink, 30);
        $I->click(FormosHomePage::$editLink);
        $I->waitForElementVisible(ReservationPage::$tableIDField, 30);
    }


    /**
     * Function to click Delete Link
     */
    public function clickDeleteLink()
    {
        $I = $this;
        $I->amOnPage(FormosHomePage::$deleteLink);
    }
}