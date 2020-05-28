<?php
include("script/fighter.php");
include('script/session_start.php');


$map["mapFirstGround"] = $map1Ground;
$positionY = $map["positionY"];
$positionX = $map["positionX"];


//test sur le sens ou il faut aller
switch ($action) {
    case "plante":
        $starter = new Fighter();
        $abilities = [];
        for ($i = 0; $i < 4; $i++) {
            $ability = new Ability();
            switch ($i) {
                case 0:
                    $ability = $lancefeuilles;
                    break;
                case 1:
                    $ability = $charge;
                    break;
                case 2:
                    $ability = $charge;
                    break;
                case 3:
                    $ability = $charge;
                    break;
            }
            array_push($abilities, $ability);
        }
        $starter->set_all("plante", "img/monster/starter/floriticho.png", "plante", $abilities, 50);
        array_push($fighterList, $starter);

        $_SESSION["fighter"] = $fighterList;
        header('Location: game.php');
        break;
    case "feu":
        $starter = new Fighter();
        $abilities = [];
        for ($i = 0; $i < 4; $i++) {
            $ability = new Ability();
            switch ($i) {
                case 0:
                    $ability = $lanceflamme;
                    break;
                case 1:
                    $ability = $charge;
                    break;
                case 2:
                    $ability = $charge;
                    break;
                case 3:
                    $ability = $charge;
                    break;
            }
            array_push($abilities, $ability);
        }
        $starter->set_all("Dracticho", "img/monster/starter/dracticho.png", "feu", $abilities, 50);
        array_push($fighterList, $starter);
        $_SESSION["fighter"] = $fighterList;
        header('Location: game.php');
        break;
    case "eau":
        $starter = new Fighter();
        $abilities = [];
        for ($i = 0; $i < 4; $i++) {
            $ability = new Ability();
            switch ($i) {
                case 0:
                    $ability = $jetdeau;
                    break;
                case 1:
                    $ability = $charge;
                    break;
                case 2:
                    $ability = $charge;
                    break;
                case 3:
                    $ability = $charge;
                    break;
            }
            array_push($abilities, $ability);
        }
        $starter->set_all("torticho", "img/monster/starter/torticho.png", "eau", $abilities, 50);
        array_push($fighterList, $starter);
        $_SESSION["fighter"] = $fighterList;
        header('Location: game.php');
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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FPMOL</title>
</head>

<body>
    <main id="menu">
        <fieldset id="fieldStarter">
            <h1>choose your starter</h1>
            <form action="#" method="POST">
                <button type="submit" name="action" id="plante" class="starter" value="plante"><img src="img/monster/starter/floriticho.png"><label>Floriticho</label></button>
                <button type="submit" name="action" id="feu" class="starter" value="feu"><img src="img/monster/starter/dracticho.png"><label>Draticho</label></button>
                <button type="submit" name="action" id="eau" class="starter" value="eau"><img src="img/monster/starter/torticho.png"><label>Torticho</label></button>
            </form>
        </fieldset>

        <table>
            <?php
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
    </main>
    <script type="text/javascript" src="script/main.js"></script>
</body>

</html>