<?php


$a = 10;
$b = 5;
$c = TRUE;
$d = FALSE;


if ($a >= 10 && $b > 10) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

if ($a == 10 && $b < 6) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";

if ($a == 10 || $b > 10) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

if ($c && ($a == 10 || $b == 5)) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";
if ($d && ($a == 10 || $b == 5)) {
    echo "True";
} else {
    echo "False";
}
