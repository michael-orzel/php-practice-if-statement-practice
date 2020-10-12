<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="site.php" method="get">
            <strong>Select truthfully all that apply:</strong>
            <br> <br>
            I'm a Goomba: <input type="checkbox" name="goomba" value="true"> <br>
            I'm wearing a hat: <input type="checkbox" name="hasHat" value="true"> <br>
            <input type="submit">
        </form>

        <?php
            $goomba = $_GET["goomba"];
            $hasHat = $_GET["hasHat"];

            if($goomba && $hasHat)
            {
                echo "You're a Goomba wearing a hat.";
            }
            else if(!$goomba && $hasHat)
            {
                echo "You're not a Goomba, but you're wearing a hat.";
            }
            else if($goomba && !$hasHat)
            {
                echo "You're a Goomba, but you're not wearing a hat.";
            }
            else if(!$goomba && !$hasHat)
            {
                echo "You're not a Goomba, and you're not wearing a hat.";
            }
        ?>
    </body>
</html>
