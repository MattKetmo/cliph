<?php

namespace Cliph\Tests\Command;

use Cliph\Tests\AppTestCase;

class HelloCommandTest extends AppTestCase
{
    /**
     * @test
     */
    public function it_should_say_hello_world()
    {
        $output = $this->runCommand("hello");

        $this->assertEquals("Hello World\n", $output);
    }

}
