<?php
session_start();
if ($_GET["submit"] == "ok" and $_GET["login"] and $_GET["passwd"]) {
    $_SESSION["login"] = $_GET["login"];
    $_SESSION["pass"] = $_GET["passwd"];
}
?>
<html>
<body>
<form action="index.php" method="get">
    login <input type="text" name="login" value=="<?php echo $_SESSION["login"]; ?>"/>l
    <br>
    passwd<input type="text" name="passwd" value=<?php echo "\"" . $_SESSION["pass"] . "\""; ?>/>
    <br>
    <input type="submit" value="ok"/>
    <br>
</form>
</body>
</html>
