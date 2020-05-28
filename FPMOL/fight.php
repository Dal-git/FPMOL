<?php
// corriger le fait que le monstre change a chaque foi qu'on attaque
include('script/session_start.php');
include('script/fighter.php');

$visibilityMF="visible";
$visibilityMA="hidden";

switch($action){
    case "attack":
        $visibilityMF="hidden";
        $visibilityMA="visible";
    break;
    case "fuite":
        header('Location: game.php');
    break;
    case "attack1":
        $visibilityMF="visible";
        $visibilityMA="hidden";
    break;
    case "attack2":
        $visibilityMF="visible";
        $visibilityMA="hidden";
    break;
    case "attack3":
        $visibilityMF="visible";
        $visibilityMA="hidden";
    break;
    case "attack4":
        $visibilityMF="visible";
        $visibilityMA="hidden";
    break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>fight</title>
    <style>
        #menuFight{
            visibility: <?=$visibilityMF?>;
        }

        #menuAttack{
            visibility: <?=$visibilityMA?>;
        }
    </style>
</head>
<body>
    <main id="battle" name="battle">
        <div class="opponents" id="opponent">
            <?php
            $opponent = "";
            switch (rand(1, 3)) {
                case 1:
                    $opponent = "<img src=\"img/monster/wild/doticho.png\">";
                    break;
                case 2:
                    $opponent = "<img src=\"img/monster/wild/mrticho.png\">";
                    break;
                case 3:
                    $opponent = "<img src=\"img/monster/wild/otaticho.png\">";
                    break;
            }
            echo $opponent;
            ?>
        </div>
        <div class="opponents" id="yourself">
            <?php
            echo "<img src=\"" . $fighterList[1]->get_sprite_f() . "\">";
            ?>
        </div>
        <div class="menuBattle" id="menuFight">
            <form action="" method="POST">
            <button type="submit" name="action" value="attack">Attack</button>
            <button type="submit" name="action" value="fuite">Fuite</button>
            </form>           
        </div>
        <div class="menuBattle" id="menuAttack">
            <form action="" method="POST">
            <button type="submit" name="action" value="attack1">attack1</button>
            <button type="submit" name="action" value="attack2">attack2</button>
            <button type="submit" name="action" value="attack3">attack3</button>
            <button type="submit" name="action" value="attack4">attack4</button>
            </form> 
        </div>
    </main>
</body>

</html>