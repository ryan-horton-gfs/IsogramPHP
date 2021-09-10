An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that
contains only letters is an isogram.

1. Assume the empty string is an isogram.
2. Assume null is not an isogram.
3. Ignore letter case.
4. A String containing any character other than a letter should throw an IllegalArgumentException

Please use Test Driven Development style to show how you would prove your code works.

Examples:
1. isIsogram "Dermatoglyphics" == true
2. isIsogram "aba" == false
3. isIsogram "moOse" == false -- ignore letter case