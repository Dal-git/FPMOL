<?php
// mdp bd : NeEFeXax
include('script/session_start.php');

$map["mapFirstGround"] = $map1Ground;
$positionY = $map["positionY"];
$positionX = $map["positionX"];

//test sur le sens ou il faut aller
switch ($action) {
    case "newGame":
        header('Location: chooseStarter.php');
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
        <!-- <h1 id="continue" onclick="newGame()" hidden>continue</h1>
        <h1>test</h1>
        <h1 id="newGame" onclick="">new game</h1> -->
        <fieldset>
            <h1>FPMOL</h1>
            <form action="#" method="POST">
                <button type="submit" name="action" value="newGame">new game</button>
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