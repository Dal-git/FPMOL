<?php
include('script/session_start.php');
include('script/fighter.php');
$map["mapFirstGround"] = $map1Ground;
$positionY = $map["positionY"];
$positionX = $map["positionX"];

//test sur le sens ou il faut aller + 
switch ($action) {
    case "down":
       if ($map1Ground[$positionY + 1][$positionX] != 5   && $map1Ground[$positionY + 1][$positionX] != 1 ) { 
            $positionY += 1;
            if($map1Ground[$positionY][$positionX]==6){
                if(rand(1,2)==1){
                    header('Location: fight.php');
                }
            }
        }
        break;

    case "up":
        if ($map1Ground[$positionY - 1][$positionX] != 5 && $map1Ground[$positionY - 1][$positionX] != 1) { 
            $positionY -= 1;
            if($map1Ground[$positionY][$positionX]==6){
                if(rand(1,2)==1){
                    header('Location: fight.php');
                }
            }
        } 
        break;
    case "left":
        if ($map1Ground[$positionY][$positionX  - 1] != 5 && $map1Ground[$positionY][$positionX - 1] != 1) { 
            $positionX -= 1;
            if($map1Ground[$positionY][$positionX]==6){
                if(rand(1,2)==1){
                    header('Location: fight.php');
                }
            }
       } 
        break;

    case "right":
       if ($map1Ground[$positionY][$positionX  + 1] != 5 && $map1Ground[$positionY][$positionX + 1] != 1) { 
            $positionX += 1;
            if($map1Ground[$positionY][$positionX]==6){
                if(rand(1,2)==1){
                    header('Location: fight.php');
                }
            }
        } 
        break;
        case "equipe":
            header('Location: equipe.php');
        break;
}

//réinsertion des valeurs des variables dans la session
$map["positionY"] = $positionY;
$map["positionX"] = $positionX;

$_SESSION["map"] = $map;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <main id="inGame">
        <form action="#" method="POST">
            <button type="submit" name="action" value="up">up</button>
            <button type="submit" name="action" value="down">down</button>
            <button type="submit" name="action" value="left">left</button>
            <button type="submit" name="action" value="right">right</button>
        </form>
        <table>
            <?php
            // affichage de la map
            for ($i = 0; $i < count($map["mapBackground"]); $i++) {
                echo "<tr>";
                for ($j = 0; $j < count($map["mapBackground"][0]); $j++) {
                    echo "<td><img src=\"./img/background/" . $map["mapBackground"][$i][$j] . ".png\">";
                    if ($positionY == $i   && $positionX == $j) {
                        switch ($action) {
                            case "down":
                                echo "<img src=\"./img/" . 8 . ".png\">";
                                break;

                            case "up":
                                echo "<img src=\"./img/" . 9 . ".png\">";
                                break;

                            case "left":
                                echo "<img src=\"./img/" . 11 . ".png\">";
                                break;

                            case "right":
                                echo "<img src=\"./img/" . 10 . ".png\">";
                                break;
                                default:
                                echo "<img src=\"./img/" . 8 . ".png\">";
                            break;
                        }
                    } else {
                        echo "<img src=\"./img/background/" . $map["mapFirstGround"][$i][$j] . ".png\">";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <fieldset id="sac">
            <form action="" method="POST">
                <button type="submit" name="action" value="equipe">equipe</button>
            </form>
        </fieldset>
    </main>
</body>

</html>