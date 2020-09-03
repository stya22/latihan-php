<?php
function tukar_besar_kecil($string)
{
    $besar = strtoupper($string);
    $kecil = strtolower($string);
    for ($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == $besar[$i]) {
            $string[$i] = $kecil[$i];
        } else if ($string[$i] == $kecil[$i]) {
            $string[$i] = $besar[$i];
        }
    }
    return $string . "<BR>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
