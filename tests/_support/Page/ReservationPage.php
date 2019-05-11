<?php


namespace Page;


class ReservationPage
{
    /**
     * @var string
     * @since 1.0.0
     */
    public static $tableIDField = '#tableID';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $numberPersonField = '#numberofperson';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $dateField = '#date';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $descriptionField = '#description';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $startTimeField = '#startTime';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $submitButton = '.t-beaneditor-submit';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $errorEmptyID = '//li[text()="You must provide a value for Table ID."]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $errorEmptyNumberPerson = '//li[text()="You must provide a value for Numberofperson."]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $errorEmptyStartTime = 'You must provide a value for Start Time.';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $errorWrongInput = '//li[contains(text(), "is not parseable as an integer value") and contains(text(), "The input value")]';



}