<?php

    require_once "src/ScrabbleValues.php";

    class ScrabbleValuesTest extends PHPUnit_Framework_TestCase {

        function test_ScrabbleValues_Avalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "A";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(1, $result);
        }

        //Testing for value of D.
        //Testing for value of B.
        //Testing for value of F.
        //Testing for value of J.
        //Testing for value of Q.
        //Testing for value of APE.
        //Testing for value of ADBFKJQ.
        //Testing for value of lowercase.



    }

?>



//Testing for value of A.  Input = 'A', Output = 1.
