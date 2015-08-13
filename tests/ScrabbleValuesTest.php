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

        //Testing for value of lowercase. Input = 'A', Output = 1
        function test_ScrabbleValues_LowerCasevalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "a";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(1, $result);
        }

        //Testing for value of D.  Input = 'D', Output = 2
        function test_ScrabbleValues_Dvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "D";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(2, $result);
        }


        //Testing for value of B.
        function test_ScrabbleValues_Bvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "B";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(3, $result);
        }

        //Testing for value of F.
        function test_ScrabbleValues_Fvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "F";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(4, $result);
        }

        //Testing for value of K.
        function test_ScrabbleValues_Kvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "K";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(5, $result);
        }

        //Testing for value of J.
        function test_ScrabbleValues_Jvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "J";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(8, $result);
        }

        //Testing for value of Q.
        function test_ScrabbleValues_Qvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "Q";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(10, $result);
        }

        //Testing for value of APE.
        function test_ScrabbleValues_APEvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "APE";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(5, $result);
        }
        //Testing for value of ADBFKJQ.
        function test_ScrabbleValues_ADBFKJQvalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "ADBFKJQ";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals(33, $result);
        }

        //Testing for value of non-character values.  asd324532-/
        function test_ScrabbleValues_NoAlphavalue() {
            //arrange
            $test_ScrabbleValues = new ScrabbleValues;
            $input = "asd324532-/";

            //act
            $result = $test_ScrabbleValues->getValues($input);

            //assert
            $this->assertEquals("Not a scrabble word.", $result);
        }



    }

?>



//Testing for value of A.  Input = 'A', Output = 1.
