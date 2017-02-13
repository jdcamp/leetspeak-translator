<?php
    class LeetspeakTranslator {
        function translate($myInput)
        {
            $leetSpeakArray = array();
            $wordArray = explode(" ", $myInput);
            for ($i=0; $i < sizeof($wordArray); $i++) {
                $letterArray = str_split($wordArray[$i]);
                $leetSpeakLetterArray = array();
                for ($j=0; $j < sizeof($letterArray); $j++) {
                    if (strcasecmp($letterArray[$j], 'e') == 0) {
                        array_push($leetSpeakLetterArray, 3);
                    } else {
                        array_push($leetSpeakLetterArray, $letterArray[$j]);
                    }
                }
                array_push($leetSpeakArray ,implode("", $leetSpeakLetterArray));
            }
            return implode(" ", $leetSpeakArray);

        }


    }

 ?>
