<!DOCTYPE hmtl>
<html>
    <head>
        <title>
                ELECT2-MOD1-MP01
        </title>
    </head>
<body>

<h2></h2>

<?php
    echo "This is a sample Standard PHP Delimiter";
?>
<h2>This is the second block</h2>

<?php
echo "This is a sample Standard PHP Delimiter";
?>
<h2>Variables</h2>

<?php
$value1 = 10;
$Value1 = 5;
$VALUE1 = 5;

$total = $value1 + $Value1 + $VALUE1;
echo "Your Total is: ";
echo $total;
echo "<br>";

$VALUE1 = 6;
$total = $value1 + $Value1 + $VALUE1;
echo "Your New Total is: ";
echo $total;
echo "<br>"
?>

<?php
echo "<h2> This is an example of a CONSTANT</h2>";
define ("VOTING_AGE", 18);
echo "The voting age is: ", VOTING_AGE;
?>

<?php
echo "<h2>DATA TYPES</h2>";
$IntegerVar = 150;
$FloatingPointerVar = 3.0127;
echo "<p>Integer variable:", $IntegerVar,"<br>";
echo "<p>Floating-point variable:",$FloatingPointerVar,"<br>";
?>

<?php
echo "<h2>Array</h2>";
echo "<h3>Provinces</h3>";

$provinces = array(
    "Pampanga", 
    "Bulacan", 
    "Bataan", 
    "Nueva Ecija", 
    "Zambales",
    "Aurora",
    "Tarlac");

echo count($provinces);
echo "<br>";
echo "$provinces[0]<br />";
echo "$provinces[1]<br />";
print_r($provinces);
?>


</body>
</html>
