<?php
session_start();
if ($_GET["submit"] == "OK" and $_GET["login"] and $_GET["passwd"]) {
    $_SESSION["login"] = $_GET["login"];
    $_SESSION["pass"] = $_GET["passwd"];}
?>
<html>
<body>
<form action="index.php" method="get">
    login <input type="text" name="login" value="<?php echo $_SESSION["login"]; ?>"/>
    <br>
    passwd<input type="text" name="passwd" value="<?php echo $_SESSION["pass"]; ?>"/>
    <br>
    <input type="submit" name="submit" value="OK"/>
    <br>
</form>
</body>
</html>
