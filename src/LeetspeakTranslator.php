<?php
    class LeetspeakTranslator {
        function translate($myInput)
        {
            $one = 1;
            $leetSpeakArray = array();
            $wordArray = explode(" ", $myInput);
            for ($i=0; $i < sizeof($wordArray); $i++) {
                $letterArray = str_split($wordArray[$i]);
                $leetSpeakLetterArray = array();
                for ($j=0; $j < sizeof($letterArray); $j++) {

                    if (strcasecmp($letterArray[$j], 'e') == 0) {
                        array_push($leetSpeakLetterArray, '3');
                    } elseif (strcasecmp($letterArray[$j], 'o') == 0) {
                        array_push($leetSpeakLetterArray, '0');
                    } elseif ($letterArray[$j] === 'I') {
                        array_push($leetSpeakLetterArray, '1');
                    } elseif (strcasecmp($letterArray[$j], 's') == 0) {
                        if ($j !=0  && ($letterArray[$j-1] == "'" || $letterArray[$j-1] == '"')) {
                            array_push($leetSpeakLetterArray, $letterArray[$j]);
                        } elseif ($j == 0) {
                            array_push($leetSpeakLetterArray, $letterArray[$j]);
                        } else {
                            array_push($leetSpeakLetterArray, "z");
                        }
                    }
                        else {
                        array_push($leetSpeakLetterArray, $letterArray[$j]);
                    }
                }
                array_push($leetSpeakArray ,implode("", $leetSpeakLetterArray));
            }
            return implode(" ", $leetSpeakArray);

        }


    }

 ?>
