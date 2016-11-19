<?php
use Ackintosh\Foo;

class FooTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function a()
    {
        $this->assertSame('hogea', ((new Foo)->a('hoge')));
    }

    /**
     * @test
     */
    public function b()
    {
        $this->assertSame('hogeb', ((new Foo)->b('hoge')));
    }
}
