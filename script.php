<?php

$text = file_get_contents('file.txt', true);

preg_match_all('[gab]', $text, $matches);

echo '<pre>';
echo 'My Text: <br />';

print_r($text);

echo '<br /><br />';
echo 'Total of occurrences of gab: '. sizeof($matches[0]);

echo '<br /><br />';
echo 'The occurrences of gab: <br />';

print_r($matches);

echo '</pre>';

exit;


?>