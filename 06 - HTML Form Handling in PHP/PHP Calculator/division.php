<html>
<body>
<h3>Division</h3>
<?php
$numerator = $_GET['numerator'];
$denominator = $_GET['denominator'];
if ($denominator != 0) {
    $division = $numerator / $denominator;
    print_r("$numerator + $denominator = $division");
} else { print_r("You can't divide by zero!"); }
?>
<a href="index.php">Reset</a>
</body>
</html>

