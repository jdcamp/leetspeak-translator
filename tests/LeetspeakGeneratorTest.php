<?php

    require_once "src/LeetspeakTranslator.php";

    class LeetspeakGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_LeetspeakTranslator ()
        {
            //Arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "trEe";

            //Act
            $result = $test_LeetspeakTranslator->translate($input);

            //Assert
            $this->assertEquals("tr33", $result);
        }
    }

?>
