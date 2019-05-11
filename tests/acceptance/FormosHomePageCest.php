<?php
use Step\Acceptance\FormosHomePageSteps as formosHomePageSteps;

class FormosHomePageCest
{
    /**
     * @param formosHomePageSteps $I
     * function to check click link reservation
     */
    public function checkLinkReservation(formosHomePageSteps $I)
    {
        $I->clickNewReservationLink();
    }

    /**
     * @param formosHomePageSteps $I
     * function to check click delete
     */
    public function checkEdit(formosHomePageSteps $I)
    {
        $I->clickEditLink();
    }
}