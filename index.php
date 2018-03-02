<?php
    include 'inc/functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silver Jack Game</title>
        <meta charset = "utf-8" />
        
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <center>
        
        </center>
        <div id = "main">
            <h1>Silver Jack Game</h1>
            <?=playCards()?>
            <form>
                <input type="submit" value="Play!"/>
            </form>
        </div>
    </body>
</html>