<?php

function isPalindrome($str)
{
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanedStr = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $str));

    // Check if the cleaned string is equal to its reverse
    return $cleanedStr === strrev($cleanedStr);
}

// Example case
$str = "A man, a plan, a bridge: Riyadh";
echo "Is the string \"$str\" a palindrome? " . (isPalindrome($str) ? "Yes" : "No") . "\n";
// Output: Yes
