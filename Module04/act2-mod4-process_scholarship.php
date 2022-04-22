<!DOCTYPE html>
<html>
    <head>
        <title>
            Scholarship Form
        </title>
    </head>
<body>
    <?php
        $firstName = $_POST['fName'];
        $lastName = $_POST['lName'];
        echo "Thank you for filling out the scholarship form, ".$firstName." ".$lastName . ".";
    ?>
</body>
</html>