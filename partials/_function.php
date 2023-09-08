<?php
    function getKindOfCharacters($arrayoOne, $arrayTwo, $arrayThree, $booleanOne, $booleanTwo, $booleanThree){
        $string = "";
        if($booleanOne){
        $string .= $arrayoOne;
        }
        if($booleanTwo){
        $string .= $arrayTwo;
        }
        if($booleanThree){
        $string .= $arrayThree;
        } else{
        return "Seleziona almeno uno tra i checkbox";
        }
        return $string;
    }

    function getRandomPassword($string, $number){
        $randomString = "";
        $stringLength = strlen($string);
        $i = 0;
        while ( $i < $number){
        $element = $string[rand(0, $stringLength- 1)];
        $randomString .= $element;
        $i++;
        }
        return $randomString;
    }
?>