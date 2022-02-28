<!DOCTYPE hmtl>
<html>
    <head>
        <title>
        Module01-Machine Problem02
        </title>
    </head>
<body>

<?php
define ("BR", "<br/>");

$Pre = 83.50;
$Mid = 89.10;
$Fin = 86.55;
$finalgrade = ($Pre + $Mid +$Fin)/3;

echo "Final Grade: " . $finalgrade. BR;

    if ($finalgrade >= 86 && $finalgrade <= 100)
        echo "Ratings: Excellent" . BR;
    elseif ($finalgrade >=75 && $finalgrade <=85)
        echo "Ratings: Very Good" . BR;
    else
        echo "Ratings: FAILED" . BR;
?>

</body>
</html>