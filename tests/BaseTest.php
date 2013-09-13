<?php

abstract class BaseTest extends \PHPUnit_Framework_TestCase
{
    protected $solomon;

    /**
     * Set up
     */
    protected function setUp()
    {
        $this->setUpSolomon();
    }

    /**
     * Set up Solomon
     */
    abstract protected function setUpSolomon();

    /**
     * Test battle
     *
     * @param $demons
     * @param $expectedActions
     *
     * @dataProvider provider
     */
    public function testBattle($demons, $expectedActions)
    {
        $demons = explode(' ', $demons);
        $actions = $this->solomon->fight($demons);
        $this->assertEquals($expectedActions, $actions);
    }

    /**
     * Test data provider
     *
     * @return array
     */
    public static function provider()
    {
        // $data[n] in CLI = Solomon::fight() with data set #n

        $data[0] = [
            '1 0 1',
            '*>*>*>*<<<*'
        ];

        $data[1] = [
            '0 2 0',
            '*>*>*<**>*<*'
        ];

        return $data;
    }

}