<?php

require __DIR__.'/Fixtures/Fixtures.php';

class FunctionalTest extends PHPUnit_Framework_TestCase
{
    use ClientTrait;

    /**
     * @var Fixtures
     */
    private static $fixtures;

    public static function setUpBeforeClass()
    {
        self::$fixtures = new Fixtures();
        self::$fixtures->cleanUp();
        self::$fixtures->load();
    }

    public static function tearDownAfterClass()
    {
        self::$fixtures->cleanUp();
        self::$fixtures = null;
    }

    public function testSearch()
    {
        $this->markTestIncomplete();
    }
}
