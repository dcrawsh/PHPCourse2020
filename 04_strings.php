<?php

// 1. Create simpl$string$;name = 'Zura';

echo $string = "Hello I am $name <br>";

// String concatenation
echo 'Hello World ' . 'this is in PHP <br>';
// 4. String functions
$string = "         Hello World        ";

echo strlen($string) . "<br>";

echo str_word_count($string) . "<br>";
// 6. Multiline text and line breaks
$longText = ' I am a cool guy
you gotta <em>believe</em> it
I am so cool';

echo nl2br($longText);
// 7. Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php
?>