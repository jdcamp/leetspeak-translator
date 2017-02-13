<?php

    require_once "src/LeetspeakTranslator.php";

    class LeetspeakGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_LeetspeakTranslator ()
        {
            //Arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "Don't you love these 'String' exercises? I do!";

            //Act
            $result = $test_LeetspeakTranslator->translate($input);

            //Assert
            $this->assertEquals("D0n't y0u l0v3 th3z3 'String' 3x3rciz3z? 1 d0!", $result);
        }
    }

?>
