#!/usr/bin/php
<?php
echo "Enter a number: ";
$f = fopen('php://stdin', 'r');
while ($line = fgets($f)) {
    $line = trim($line);
    if (is_numeric($line)) {
        if (intval($line % 2) == 0)
            echo "The number " . $line . " is even\n";
        else
            echo "The number " . $line . " is odd\n";
    } else
        echo $line . " is not a number\n";
    echo "Enter a number: ";
}
fclose($f);
?>