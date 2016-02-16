<?php

class AnagramChecker
{

    function checkAnagram($input_word, $input_words)
    {
        $input_letters = str_split($input_word);
        $words = explode(" ", $input_words);
        $confirmed_anagrams = array();
        sort($input_letters);

        foreach ($words as $word){
            $input_phrase = str_split($word);
            sort($input_phrase);

            if ($input_letters === $input_phrase)
            {
                array_push($confirmed_anagrams, $word);
            }

        }
        return $confirmed_anagrams;



        // if ($sortedInputA == $sortedInputB) {
        //     return "They are anagrams!";
        // }
        // else{
        //     return "Sorry, not anagrams!";
        // }
    }
}

?>
<!-- // private $input_word;
// private $potential_anagram;

//function __construct($input, $potential)
//{
    //$this->input_word = $input;
    //$this->potential_anagram = $potential;
//}

// function getInput(){
//     return $this->input_word;
// }
//
// function getPotential()
// {
//     return $this->potential_anagram;
// }
//
// function setInput($input)
// {
//     $this->input_word = $input;
// }
//
// function setPotential($potential)
// {
//     $this->potential_anagram = $potential;
// }
//
// static function getALL(){
//     return $_SESSION['inputs'];
// }
//
// function save()
// {
//     array_push($_SESSION['inputs'], $this);
// } -->
