<?php

require_once "src/AnagramChecker.php";

class AnagramCheckerTest extends PHPUnit_Framework_TestCase
{

    // function test_checkAnagram_sameLength()
    // {
    //     //Arrange
    //     $test_AnagramChecker = new AnagramChecker;
    //     $inputOne = "beard";
    //     $inputTwo = "apple";
    //
    //     //Act
    //     $result = $test_AnagramChecker->checkAnagram($inputOne, $inputTwo);
    //
    //     //Assert
    //     $this->assertEquals(true, $result);
    // }

    function test_checkAnagram_differentLength()
    {
        //Arrange
        $test_AnagramChecker = new AnagramChecker;
        $inputOne = "beard";
        $inputTwo = "Stainless";

        //Act
        $result = $test_AnagramChecker->checkAnagram($inputOne, $inputTwo);

        //Assert
        $this->assertEquals("Sorry, not anagrams!", $result);
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
        $this->assertEquals("They are anagrams!", $result);
    }
}

?>
