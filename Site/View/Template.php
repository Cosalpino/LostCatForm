<?php
/**
 * @file    Template.php
 * @brief   This script is used to be the "Template"
 * @author  Craeted by Mikael Juillet
 * @author  Updated by Mikael Juillet
 * @version 05.06.2022 // 0.1
 */

?>

<!DOCTYPE html>
<html lang="Eng">
    <head>
        <title>
            <?=$title?>
        </title>
        <link href="Assets/Css/Template.css" type="text/css" rel="stylesheet">
        <link href="Assets/Css/AddMyLostCat.css" type="text/css" rel="stylesheet">
    </head>
    <body>
    <!-- TODO : place the correct link or a form to link correctly the pages -->
    <!-- TODO : update the stylesheet -->
    <!-- TODO : add a title in center -->
    <div class="header">
        <a href="index.php">All Cats</a>
        <a href="index.php">Add my lost cat</a>
    </div>

        <?=$content?>

    </body>
</html>



