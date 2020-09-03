<?php
function tentukan_nilai($number)
{
    if ($number >= 85) {
        return "Sangat Baik";
    } else if ($number >= 70 && $number < 85) {
        return "Baik";
    } else if ($number >= 60 && $number < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
