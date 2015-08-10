<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_generatePingPongArray_printNumbers()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 100;

            $result = $test_PingPongGernerator->generatePingPongArray($input);

            $this->assertEquals(100, $result);
        }
    }

 ?>
