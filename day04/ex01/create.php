<!--echo, hash(), file_get_contents(), file_put_contents(),-->
<!--serialize(), unserialize(), $_POST, file_exists(), mkdir()-->
<?php
function check_creds($string)
{
    if (hash("whirlpool", serialize($_GET["login"]) . ":" . serialize($_GET["passwd"])) === $string) {
        return true;
    } else
        return false;
}

$pas = "";
$us = "";
if (!file_exists("./private/passwd")) {
    mkdir("./private");
    mkdir("./private/passwd");
}
$pas_path = "./private/passwd/passwords.crypt";
if ($_GET["submit"] === "OK" and $_GET["passwd"] !== "") {

    file_put_contents($pas_path, hash("whirlpool", serialize($_GET["login"]) . ":" . serialize($_GET["passwd"])));
}


