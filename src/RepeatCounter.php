<?php
class  RepeatCounter {
    function countRepeats($string_input, $word_input){
        $string_array = explode(" ", $string_input);
        $count = 0;

        var_dump($string_array);

        foreach($string_array as $string) {
            echo $string;
            if ($word_input == $string) {
                $count++;
            }
        }

        return $count;

    }

}

?>
