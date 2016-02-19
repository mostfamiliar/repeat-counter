<?php
class  RepeatCounter {
    private $string_input;
    private $word_input;

    function __construct($str_input, $wrd_input) {
        $this->string_input = $str_input;
        $this->word_input = $wrd_input;
    }

    function setString($new_string_input) {
        $this->string_input = $new_string_input;

    }

    function setWord($new_word_input) {
        $this->word_input = $new_word_input;
    }

    function getString() {
        return $this->string_input;
    }

    function getWord() {
        return $this->word_input;
    }

    function countRepeats($string_input, $word_input) {
        $stringNoPunc = preg_replace('/[^a-z0-9]+/i', " ", $string_input);
        $stringToLower = strtolower($stringNoPunc);
        $wordToLower = strtolower($word_input);
        $string_array = explode(" ", $stringToLower);
        $pluralCount = preg_match_all("/$word_input/", $stringToLower);
        $count = $pluralCount;

        foreach($string_array as $string) {
            if ($wordToLower == $string) {
                $count++;
            }
        }

        return $count;

    }

}

?>
