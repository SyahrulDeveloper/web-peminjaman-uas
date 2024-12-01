<?php
require 'function.php';
if (!isset($_SESSION['session_nim'])) {
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DEWI SARTIKA</h1>
</body>
</html>