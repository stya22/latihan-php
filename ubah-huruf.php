<?php
function ubah_huruf($string)
{
    $huruf = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j',
        'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
        'u', 'v', 'w', 'x', 'y', 'z'
    );

    $hasil = "";
    for ($i = 0; $i < strlen($string); $i++) {
        for ($j = 0; $j < count($huruf); $j++) {
            if ($string[$i] == $huruf[$j]) {
                $hasil .= $huruf[$j + 1];
            }
        }
    }
    return $hasil . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
