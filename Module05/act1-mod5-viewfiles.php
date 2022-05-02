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
        $DirOpen = opendir($Dir);
        while ($CurFile = readdir($DirOpen)) 
        {
         if ((strcmp($CurFile, '.') != 0) &&
         (strcmp($CurFile, '..') != 0))
         echo "<a href=\"files/" . $CurFile . "\">" .
         $CurFile . "</a><br />\n";
        }
        closedir($DirOpen);
    ?>
</body>
</html>