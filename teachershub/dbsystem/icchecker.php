<?php


$code = substr($reg, 12, 2);
$search = "";

if ((substr($reg, 12, 1)) % 2 == 0) {
    $search = "Female";
} else {
    $search = "Male";
}

$kod = array(
    array("RAM", "01", "21", "22", "23", "24"),
    array("KATHIR", "02", "25", "26", "27"),
    array("KUMARAN", "03", "28", "29"),
    array("MOHAN", "04", "30"),
    array("SRINATH", "05", "31", "59"),
    array("BALAJI", "06", "32", "33"),
    array("VASANTH", "07", "34", "35"),
    array("SUREN", "08", "36", "37", "38", "39"),
    array("GOKUL", "09", "40"),
    array("KISHOR", "10", "41", "42", "43", "44"),
    array("TAMIL", "11", "45", "46"),
    array("SABA", "12", "47", "48", "49"),
    array("SARAN", "13", "50", "51", "52", "53"),
    array("SUGU", "14", "54", "55", "56", "57"),
    array("KAVI", "15", "58"),
    array("SANJITH", "16"),
    array("SRI", "82")
);

$size = count($kod);

$i = 0;
$j = 0;
$statename = "";

for ($i = 0; $i < $size; $i++) {
    $sizes = count($kod[$i]);

    for ($j = 0; $j < $sizes; $j++) {
        if ($kod == $kod[$i][$j]) { 
            $statename = $kod[$i][0];
        }
    }
}
?>
