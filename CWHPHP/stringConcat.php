<?php
function concatenateString($Array) {
    $result = '';
    foreach ($Array as $value) {
        $result .= $value;
    }
    return $result;
}

$Array = array("Hello", "World");
$concatenatedString = concatenateString($Array);
echo "Concatenated String: " . $concatenatedString;
?>
