<?php


namespace Step\Acceptance;


use Page\FormosHomePage;
use Page\ReservationPage;

class ReservationPageSteps extends \AcceptanceTester
{

    /**
     * @param $tableID
     * @param $numberPerson
     * @param $date
     * @param $description
     * @param $startTime
     * @throws \Exception
     * Function create reservatio
     */
    public function createReservation($tableID, $numberPerson, $date, $description, $startTime)
    {
        $I = $this;
        $I->fillField(ReservationPage::$tableIDField, $tableID);
        $I->fillField(ReservationPage::$numberPersonField, $numberPerson);
        $I->clearField(ReservationPage::$dateField);
        $I->fillField(ReservationPage::$dateField, $date);
        $I->fillField(ReservationPage::$descriptionField, $description);
        $I->fillField(ReservationPage::$startTimeField, $startTime);
        $I->click(ReservationPage::$submitButton);
    }

    /**
     * @param $newTableID
     * @param $newNumberPerson
     * @param $newDate
     * @param $newDescription
     * @param $newStartTime
     * @throws \Exception
     * Function to edit reservation
     */
    public function editReservation($newTableID, $newNumberPerson, $newDate, $newDescription, $newStartTime)
    {
        $I = $this;
        $I->clearField(ReservationPage::$tableIDField);
        $I->fillField(ReservationPage::$tableIDField, $newTableID);
        $I->clearField(ReservationPage::$numberPersonField);
        $I->fillField(ReservationPage::$numberPersonField, $newNumberPerson);
        $I->clearField(ReservationPage::$dateField);
        $I->fillField(ReservationPage::$dateField, $newDate);
        $I->clearField(ReservationPage::$descriptionField);
        $I->fillField(ReservationPage::$descriptionField, $newDescription);
        $I->clearField(ReservationPage::$startTimeField);
        $I->fillField(ReservationPage::$startTimeField, $newStartTime);
        $I->click(ReservationPage::$submitButton);
    }

    /**
     * @param $tableID
     * @param $numberPerson
     * @param $date
     * @param $description
     * @param $startTime
     * @throws \Exception
     * Function to check booking success
     */
    public function checkBookingSuccess($description)
    {
        $I = $this;
        $I->waitForElementVisible(FormosHomePage::$tableData, 30);
        $I->waitForText($description,30);
    }

    /**
     * @param $newDescription
     * @throws \Exception
     * function to check edit seccess
     */
    public function checkEditSuccess($newDescription)
    {
        $I = $this;
        $I->waitForElementVisible(FormosHomePage::$tableData, 30);
        $I->waitForText($newDescription,30);
    }

}