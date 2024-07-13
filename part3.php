<?php

class Palindrome
{
    public static function checkPalindrome($word)
    {
         $lowercasedWord = strtolower($word);
        
         $reversedWord = strrev($lowercasedWord);
        
         return $lowercasedWord === $reversedWord;
    }
}

// Do not change this part
echo Palindrome::checkPalindrome('Deleveled') ? 'True' : 'False'; // should print True
