<!DOCTYPE html>
<html>
    <head>
        <title>Dice Rolling</title>
    </head>
    <body>
        <?php
            $FaceNameSingular = array("one","two","three","four","five","six");
            $FaceNamePlural = array("ones","twos","threes","fours","fives","sixes");

            function CheckForDoubles($Die1,$Die2)
            {
                global $FaceNameSingular;
                global $FaceNamePlural;
                $ReturnValue = false;
        
                if ($Die1 == $Die2) // Doubles
                { 
                    echo "The roll was double",
                    $FaceNamePlural[$Die1-1], ".<br />";
                    $ReturnValue = true;
                }
                else // Not Doubles
                {
                    echo "The roll was a ",
                    $FaceNameSingular[$Die1-1], " and a ", $FaceNameSingular[$Die2-1], ".<br />";
                    $ReturnValue = false;
                }
                return $ReturnValue;
            }
            function DisplayScoreText($Score,$Doubles)
            {
                if ($Doubles)
                {
                    if($Score ==2)
                        echo "You Rolled Snake eyes!<br />";
                    if ($Score == 12)
                        echo "You rolled boxcars!<br />";
                }
                 else
                 {
                  if ($Score == 3)
                      echo "You rolled a loose deuce!<br />";
                  if ($Score == 5)
                      echo "You rolled a fever five!<br />";
                  if ($Score == 7)
                      echo "You rolled a natural!<br />";
                  if ($Score == 9)
                      echo "You rolled a nina!<br />";
                  if ($Score == 11)
                      echo "You rolled a yo!<br />";                      
                  }
            }
            
            $Dice = array();
            $Dice[0] = rand(1,6);
            $Dice[1] = rand(1,6);
            $Score = $Dice[0] + $Dice[1];
            echo "<p>";
            echo "The total score of the roll was: <b>$Score</b>.<br /> ";

            $Doubles = CheckForDoubles($Dice[0],$Dice[1]);
            DisplayScoreText($Score,$Doubles);
            echo "<p>";       
        ?>
    </body>
</html>