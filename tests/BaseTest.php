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

        $data[2] = [
            '3 1 2 2 4',
            '*>*<**>*<**>*>*>*>*>*<<<**>*>*>*<**>*<**>*<<<<<*'
        ];

        $data[3] = [
            '2 2 2 2',
            '*>*>*>*>*<<<<**>*>*>*>*<<<<*'
        ];

        $data[4] = [
            '5 3 3 4 2 1 0',
            '*>*>*>*>*>*<<<<<**>*>*>*>*<<<<**>*<**>*<**>*>*>*>*<**>*>*>*<<<<<<*'
        ];

        $data[5] = [
            '0 0 0 0 0 0 0 1 1 0',
            '*>*>*>*>*>*>*>*>*>*<<*'
        ];

        $data[6] = [
            '5 10 6 7 3 1 1 1 5 9 2 2 2 2 2 2 2',
            '*>*>*>*>*>*<<<<<**>*>*>*>*>*<<<<<**>*>*>*>*<<<<**>*>*>*>*<<<<**>*>*>*>*<<<**>*<**>*<**>*<**>*<**>*>*>*<**>*>*>*>*>*>*>*>*>*>*>*>*>*>*<<<<<<<<<**>*>*<<**>*>*<<**>*>*<<**>*>*<**>*<**>*<**>*<**>*>*>*>*>*>*>*>*<<<<<<<<<<<<<<<<<*'
        ];

        $data[7] = [
            '1',
            '*>*<*'
        ];

        $data[8] = [
            '0 1',
            '*>*>*<*'
        ];

        $data[9] = [
            '1 0',
            '*>*<*'
        ];

        $data[10] = [
            '1 1',
            '*>*>*<<*'
        ];

        $data[11] = [
            '1 1 1 0 1 1 1',
            '*>*>*>*>*>*>*>*<<<<<<<*'
        ];

        $data[12] = [
            '1 0 0 0 0 0 0 1',
            '*>*<**>*>*>*>*>*>*>*>*<*'
        ];

        $data[13] = [
            '1 0 0 0 0 0 0 1 0 1',
            '*>*<**>*>*>*>*>*>*>*>*>*>*<<<*'
        ];

        $data[14] = [
            '2 0 0 0 0 0 0 1 0 0 0 0 0 1 1 0 0 1 0 1',
            '*>*<**>*<**>*>*>*>*>*>*>*>*<**>*>*>*>*>*>*>*>*>*>*>*>*>*<<<<<<<*'
        ];

        $data[15] = [
            '10 9 8 7 6 5 4 3 0 0 0 1 0 0 0 0 0 0 0 1',
            '*>*>*>*>*>*>*>*>*<<<<<<<<**>*>*>*>*>*>*>*>*<<<<<<<<**>*>*>*>*>*>*>*<<<<<<<**>*>*>*>*>*>*<<<<<<**>*>*>*>*>*<<<<<**>*>*>*>*<<<<**>*>*>*<<<**>*>*<<**>*<**>*>*>*>*>*>*>*>*>*>*>*>*>*>*>*>*>*>*>*>*<<<<<<<<<<<<<<<<<<<<*'
        ];

        return $data;
    }

}