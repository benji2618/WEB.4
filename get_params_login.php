<!DOCTYPE html>
<html>
    <head>
        <title>Edit profil</title>
    </head>
    <body>
        <section>
            <?php
                $un = $_GET["reg_un"]; 
                $pw = $_GET["reg_pass"]; 
                $trvl = $_GET["reg_trvl"]; 
        
                if($un == "benjamin" && $pw =="12345" && $trvl == "Coachella")
                    echo "<h2>Good morning " . $un . "your next trip is to ". $trvl ."</h2>";
                else 
                    echo "<h2> who you are " . $un . "? Stay Home!!</h2>";
            ?>
        </section>
    </body>
</html>
