<?php

namespace Unfunco\PHPUnit\Test\Listener;

/**
 * Basic test of the alternative test prefix listener.
 *
 * @package Unfunco\PHPUnit\Test
 * @author  Daniel Morris <daniel@honestempire.com>
 */
class AlternativeTestPrefixListenerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Tests the default test method prefix.
     *
     * @return void
     */
    public function testAddition()
    {
        $this->assertEquals(2, 1 + 1);
    }

    /**
     * Tests a custom test method prefix.
     *
     * @return void
     */
    public function itCanDoSubtraction()
    {
        $this->assertEquals(10, 20 - 10);
    }

    /**
     * Tests another custom test method prefix.
     *
     * @return void
     */
    public function itDoesDivision()
    {
        $this->assertEquals(25, 100 / 4);
    }

    /**
     * Tests that annotations are still working.
     *
     * @test
     *
     * @return void
     */
    public function annotatedTest()
    {
        $this->assertEquals(5318008, 1329502 * 4);
    }

    /**
     * This method should not be called.
     *
     * @return void
     */
    public function itShouldNotCallThisMethod()
    {
        $this->fail('Test method executed with unregistered prefix.');
    }
}