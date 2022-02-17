<!DOCTYPE hmtl>
<html>
    <head>
        <title>
                ELECT2-MOD1-MP01
        </title>
    </head>
<body>

<h2>PERSONAL INFORMATION</h2>
<?php
    $fullname = "Ian Mark Asuncion";
    $gender = "Male";
    $month = "April";
    $home = "Pulung Cacutud, Angeles City";
    $email = "asuncion.ianmark@auf.edu.ph";
    define ("Day",27);
    define ("Year",1999);
    
    echo "Name: ".$fullname;
    echo "<br> Birthday: ".$month; echo " ",Day; echo ", ",Year;
    echo "<br> Gender: ".$gender;
    echo "<br> Home Address: ".$home;
    echo "<br> Email Address: ".$email;
?>

<h2>FAMILY BACKGROUND</h2>
<?php
    $lastname = "Pilar";
    
    echo "Father's Name: Joel A. ".$lastname;
    echo "<br> Mother's Name: Jenny A. ".$lastname;
    echo "<br> Sibling 1: Luise Andrei A. ".$lastname;
?>

<h2>EDUCATIONAL BACKGROUND</h2>
<?php
    $primary = 2012;
    $jhs = 2016;
    $shs = 2018;
    $school = "Living Stone International School";
    $tertiary = "Angeles University Foundation";
    $course = "BS Computer Engineering";

    echo "Primary School: ".$school;
    echo "<br> Date Graduated: Year ".$primary;
    
    echo "<p>Junior High School: ".$school;
    echo "<br> Date Graduated: Year ".$jhs;

    echo "<p>Senior High School: ".$school;
    echo "<br> Date Graduated: Year ".$shs;

    echo "<p>Tertiary School: ".$tertiary;
    echo "<br> Course: ".$course; 
?>

<h2>FAVORITE FOODS</h2>
<?php
    $foods = array
    (
        "Sisig",
        "Pizza",
        "Sushi",
        "Takoyaki",
        "Ramen"
    );
    echo "1. $foods[0]<br />";
    echo "2. $foods[1]<br />";
    echo "3. $foods[2]<br />";
    echo "4. $foods[3]<br />";
    echo "5. $foods[4]<br />";
?>

<h2>FAVORITE MOVIES</h2>
<?php
    $movies = array
    (
        "Tamako Love Story",
        "Koe no Katachi",
        "Zutto Mae Kara Suki Deshita",
        "Uchiage Hanabi",
        "Tenki no Ko"
    );
    echo "1. $movies[0]<br />";
    echo "2. $movies[1]<br />";
    echo "3. $movies[2]<br />";
    echo "4. $movies[3]<br />";
    echo "5. $movies[4]<br />";
?>

</body>
</html>
