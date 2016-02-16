<?php

class AnagramChecker
{
    private $input_word;
    private $potential_anagram;

    //function __construct($input, $potential)
    //{
        //$this->input_word = $input;
        //$this->potential_anagram = $potential;
    //}

    function getInput(){
        return $this->input_word;
    }

    function getPotential()
    {
        return $this->potential_anagram;
    }

    function setInput($input)
    {
        $this->input_word = $input;
    }

    function setPotential($potential)
    {
        $this->potential_anagram = $potential;
    }

    static function getALL(){
        return $_SESSION['inputs'];
    }

    function save()
    {
        array_push($_SESSION['inputs'], $this);
    }

    function checkAnagram($wordOne, $wordTwo)
    {

        $splitinputA = str_split($wordOne);
        sort($splitinputA);
        $sortedInputA = implode($splitinputA);
        $splitinputB = str_split($wordTwo);
        sort($splitinputB);
        $sortedInputB = implode($splitinputB);

        if ($sortedInputA == $sortedInputB) {
            return "They are anagrams!";
        }
        else{
            return "Sorry, not anagrams!";
        }
        // $splitinputA = str_split($wordOne);
        // $sortedInputA = sort($inputA);
        // $splitinputB = str_split($wordTwo);
        // $sortedInputB = sort($inputB);
        //
        // foreach ($wordTwo as $word)
        // {
        //
        // }
        // foreach ($wordTwo as $word)
        // {
        //     if (strlen($wordOne) == strlen($word))
        //     {
        //         return true;
        //     }
        //     else {
        //         return false;
        //     }
        // }

    }
}

?>


<!-- function checkAnagram($wordOne, $wordTwo)
{
    $splitinputA = str_split($wordOne);
    $sortedInputA = implode(sort($splitinputA));
    $splitinputB = str_split($wordTwo);
    $sortedInputB = sort($splitinputB);
    $implodedA = implode($sortedinputA);
    $implodedB = implode($sortedinputB);


    return $implodedA = $implodedB; -->
