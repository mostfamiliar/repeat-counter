<?php
require_once "src/RepeatCounter.php";

class  RepeatCounterTest  extends PHPUnit_Framework_TestCase {
    function test_countRepeats_oneWord() {

        //arrange
        $string_input = "rain";
        $word_input = "rain";
        $new_countRepeats = new RepeatCounter("rain", "rain");


        //act
        $result = $new_countRepeats->countRepeats($string_input, $word_input);

        //assert
        $this->assertEquals(1, $result);
    }

    function test_countRepeats_sentence() {

        //arrange
        $string_input = "I want to go to the store after school today";
        $word_input = "to";
        $new_countRepeats = new RepeatCounter("I want to go to the store after school today", "to");


        //act
        $result = $new_countRepeats->countRepeats($string_input, $word_input);

        //assert
        $this->assertEquals(2, $result);
    }

    function test_countRepeats_partials() {

        //arrange
        $string_input = "I listened to that record yesterday and then I brought it to the party. Do you have that record? It's a really good recording.";
        $word_input = "record";
        $new_countRepeats = new RepeatCounter("I listened to that record yesterday and then I brought it to the party. Do you have that record? It's a really good recording.", "record");


        //act
        $result = $new_countRepeats->countRepeats($string_input, $word_input);

        //assert
        $this->assertEquals(2, $result);
    }


}
 ?>
