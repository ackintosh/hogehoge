<?php
use Ackintosh\Bar;

class BarTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function a()
    {
        $this->assertSame('hogea', ((new Bar)->a('hoge')));
    }

    /**
     * @test
     */
    public function b()
    {
        $this->assertSame('hogeb', ((new Bar)->b('hoge')));
    }
}
