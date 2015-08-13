<?php
    class ScrabbleValues {

        function getValues($input) {



            $value_array = array(
                'a' => 1,
                'e' => 1,
                'i' => 1,
                'o' => 1,
                'u' => 1,
                'l' => 1,
                'n' => 1,
                'r' => 1,
                's' => 1,
                't' => 1,
                'd' => 2,
                'g' => 2,
                'b' => 3,
                'c' => 3,
                'm' => 3,
                'p' => 3,
                'f' => 4,
                'h' => 4,
                'v' => 4,
                'w' => 4,
                'y' => 4,
                'k' => 5,
                'j' => 8,
                'x' => 8,
                'q' => 10,
                'z' => 10
            ); //end array

            //Checking for valid alpha combination.
            if (ctype_alpha($input) != true){
                return $output = "Not a scrabble word.";
            }

            $output = 0;
            $split_string = str_split($input);  //Creating an array from the input word
            foreach($split_string as $letter){
                $letter_value = $value_array[strtolower($letter)]; //Convert letter to lower and searches value array
                $output += $letter_value;
            }

        return $output;


        }//end function
    }




?>
