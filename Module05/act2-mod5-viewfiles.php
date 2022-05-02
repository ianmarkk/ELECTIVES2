<!DOCTYPE html>
<html>
    <head>
        <title>
            Scholarship Form
        </title>
    </head>
<body>
    <?php
        $Dir = "files";
        $DirEntries = scandir($Dir);
        foreach ($DirEntries as $Entry) 
        {
         if ((strcmp($Entry, '.') != 0) &&
         (strcmp($Entry, '..') != 0))
         echo "<a href=\"files/" . $Entry . "\">" .
         $Entry .
         "</a><br />\n";
        }
    ?>
</body>
</html>