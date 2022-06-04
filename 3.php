<!DOCTYPE HTML>
<html>

<head>
    <title>Игрок</title>
</head>

<body>
    <?php
    include "conn.php";
    $player = $_GET['player'];
    $sqlSelect = $dbh->prepare(
        "SELECT * FROM $db.PLAYER 
    INNER JOIN $db.TEAM as Team1 ON $db.PLAYER.FID_TEAM = $db.Team1.ID_TEAM 
    INNER JOIN $db.GAME ON $db.Team1.ID_TEAM = $db.GAME.FID_TEAM1 
    INNER JOIN $db.TEAM as Team2 ON $db.GAME.FID_TEAM2 = $db.Team2.ID_TEAM 
    where $db.player.name =:player"
    );
    $sqlSelect->execute(array('player' => $player));
    echo "<ol>";
    while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
        $date = $cell[8];
        $place = $cell[9];
        $score = $cell[10];
        $team1 = $cell[4];
        $team2 = $cell[14];
        echo "<li>Игрок: $player, дата: $date, стадион: $place, команда №1: $team1, счет: $score, команда №2: $team2</li>";
    }
    echo "</ol>";
    ?>
</body>
<html>