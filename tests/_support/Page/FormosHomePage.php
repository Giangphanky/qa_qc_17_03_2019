<?php


namespace Page;


class FormosHomePage
{
    // include url of current page
    public static $URL = '/QATest/';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $newRevervationLink = '//a[text()="New Reservation"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $deleteLink  = '//tr[@class = "t-first"]/td[@class= "delete"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $editLink = '//tr[@class = "t-first"]/td[@class= "edit"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $tableData = '#id';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $idSort = '//img[@id="id:sort"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $typeSort = '//img[@id="type:sort"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $tableIDSort = '//img[@id="tableID:sort"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $numberPersonSort = '//img[@id="numberofperson:sort"]';

    /**
     * @var string
     * @since 1.0.0
     */
    public static $durationSort = '//img[@id="duration:sort"]';
}