<?php
function countVowels($string) {
 
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $vowelCount = 0;  

    for ($i = 0; $i < strlen($string); $i++) {
       
        if (in_array($string[$i], $vowels)) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}
function processStrings($strings) {
  
    foreach ($strings as $string) {
        $vowelCount = countVowels($string);
        $reversedString = strrev($string);
        echo "Original string: $string, vowel count: $vowelCount;<br>";
        echo "Reversed string: $reversedString<br><br>";
    }
}

$strings = ["Hello", "World", "Php", "Programming"];
processStrings($strings);


