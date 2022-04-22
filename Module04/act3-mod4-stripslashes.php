<!DOCTYPE html>
<html>
    <head>
        <title>
            Scholarship Form
        </title>
    </head>
<body>
    <?php
        $firstName = stripslashes($_POST['fName']);
        $lastName = stripslashes($_POST['lName']);
        echo "Thank you for filling out the scholarship form,  ".$firstName." ".$lastName . ".";
    ?>
</body>
</html>