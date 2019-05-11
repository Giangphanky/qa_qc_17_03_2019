<?php


use Faker\Factory;

class ReservationPageCest
{
    /*
     * string
     * mã bàn
     */
    protected $tableID;

    /*
     * string
     * số người đi
     */
    protected $numberPerson;

    /*
     * string
     * ngày đi
     */
    protected $date;

    /*
     * string
     * mô tả
     */
    protected $description;

    /*
     * string
     * thời gian đi
     */
    protected $startTime;

    /*
     * string
     * data fake
     */
    protected $faker;

    /**
     * ReservationPageCest constructor.
     * Init data test
     */
    public function __construct()
    {
        $this->faker        = Factory::create();
        $this->tableID = '2';
        $this->numberPerson = '5';
        $this->date = '05/12/2019';
        //Chưa tìm ra cách lấy ngày tương lai
        // $this->date = $this->faker->date($format = 'd/m/Y', $min = 'now');
        $this->description = $this->faker->text(30);
        $this->startTime = $this->faker->numberBetween(17,23);
    }

    /**
     * @param \Step\Acceptance\FormosHomePageSteps $I
     * @param $scenario
     * @throws Exception
     * Create new reservation
     */
    public function createReservation(\Step\Acceptance\FormosHomePageSteps $I, $scenario)
    {
        $I->clickNewReservationLink();
        $I = new \Step\Acceptance\ReservationPageSteps($scenario);
        $I->createReservation($this->tableID, $this->numberPerson, $this->date, $this->description, $this->startTime);
        $I->checkBookingSuccess($this->description);
    }

    /**
     * @param \Step\Acceptance\FormosHomePageSteps $I
     * @param $scenario
     * @throws Exception
     * Edit reservation
     */
    public function editReservation(\Step\Acceptance\FormosHomePageSteps $I, $scenario)
    {
        $I->clickEditLink();
        $I = new \Step\Acceptance\ReservationPageSteps($scenario);
        $newDesciption = $this->faker->text(30);
        $I->editReservation($this->tableID, $this->numberPerson, $this->date, $newDesciption, $this->startTime);
        $I->pauseExecution();
        $I->checkEditSuccess($newDesciption);

    }
}