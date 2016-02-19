<?php
class  RepeatCounter {
    function countRepeats($string_input, $word_input) {
        $stringNoPunc = preg_replace('/[^a-z0-9]+/i', " ", $string_input);
        $stringToLower = strtolower($stringNoPunc);
        $wordToLower = strtolower($word_input);

        $string_array = explode(" ", $stringToLower);
        $count = 0;

        var_dump($string_array);

        foreach($string_array as $string) {
            echo $string;
            if ($wordToLower == $string) {
                $count++;
            }
        }

        return $count;

    }

}

?>
