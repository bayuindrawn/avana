<?php

function closingBracket($str, $pos)
{
    $openBracketCount = 0;
    $givenBracketPosition = -1;
    $res = 'false';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if ($char === '(') {
            $openBracketCount++;
            if ($i === $pos) {
                $givenBracketPosition = $openBracketCount;
            }
        } else if ($char === ')') {
            if ($openBracketCount === $givenBracketPosition) {
                $res = $i;
                break;
            }
            $openBracketCount--;
        }
        // explanation
        // echo 'char = '.$char.' openBracketCount = '.$openBracketCount.' givenBracketPosition = '.$givenBracketPosition;
        // echo "\r\n";
    }
    return $res;
}

echo "Position the closing bracket : ";
echo closingBracket("a (b c (d e (f) g) h) i (j k)", 2);

?>