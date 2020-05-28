<?php
include("script/fighter.php");
include("script/session_start.php");

echo var_dump($fighterList)."<br>";
$name = $fighterList[0]->get_name_f();
echo var_dump($name);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>equipe</title>
</head>

<body>
    <table>
        <?php
        for($i=0; $i < 2; $i++)
        {
            echo "<tr>";
            for($i=0; $i < count($fighterList); $i++){
                echo "<td class=\"equipe\"><img class=\"imgEquipe\" src=\"img/".$fighterList[$i]->get_sprite_f()."\"><label>".$fighterList[$i]->get_name_f()."</label></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>