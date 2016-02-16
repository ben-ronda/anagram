<?php

require_once "src/AnagramChecker.php";

class AnagramCheckerTest extends PHPUnit_Framework_TestCase
{

    function test_checkAnagram_differentLength()
    {
        //Arrange
        $test_AnagramChecker = new AnagramChecker;
        $inputOne = "beard";
        $inputTwo = "Stainless";

        //Act
        $result = $test_AnagramChecker->checkAnagram($inputOne, $inputTwo);

        //Assert
        $this->assertEquals(array(), $result);
    }

    function test_checkAnagram_isAnagram()
    {
        //Arrange
        $test_AnagramChecker = new AnagramChecker;
        $inputOne = "beard";
        $inputTwo = "bread";

        //Act
        $result = $test_AnagramChecker->checkAnagram($inputOne, $inputTwo);

        //Assert
        $this->assertEquals(array("bread"), $result);
    }

    function test_checkAnagram_multipleWords()
    {
        $test_AnagramChecker = new AnagramChecker;
        $inputOne = "beard";
        $inputTwo = "bread list cat bared";

        $result = $test_AnagramChecker->checkAnagram($inputOne, $inputTwo);

        $this->assertEquals(array("bread", "bared"), $result);
    }
}

?>
