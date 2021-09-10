<?php

/**
 * An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that
 * determines whether a string that contains only letters is an isogram.
 * <p>
 * <p>
 * 1. Assume the empty string is an isogram.
 * 2. Assume null is not an isogram.
 * 3. Ignore letter case.
 * 4. A String containing any character other than a letter should throw an IllegalArgumentException
 * <p>
 * <p>
 * Please use Test Driven Development style to show how you would prove your code works.
 * <p>
 * <p>
 * isIsogram "Dermatoglyphics" == true
 * isIsogram "aba" == false
 * isIsogram "moOse" == false -- ignore letter case
 *
 * @param word
 * @return boolean - true if a word is an isogram
 */

require_once('Isogram.php');

$isogram = new Isogram();
$testString = "DigeryDon't";
echo($testString . " is an isogram = " . var_export($isogram->determineIsAnIsogram($testString), true));

