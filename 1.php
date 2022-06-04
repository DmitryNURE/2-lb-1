<!DOCTYPE HTML>
<html>

<head>
    <title>Чемпионат</title>
</head>

<body>
    <?php
    include "conn.php";
    $league = $_GET['league'];
    $sqlSelect = $dbh->prepare(
        "SELECT * FROM $db.GAME
    JOIN $db.TEAM as Team1 ON $db.GAME.FID_TEAM1 = $db.Team1.ID_TEAM
    JOIN $db.TEAM as Team2 ON $db.GAME.FID_TEAM2 = $db.Team2.ID_TEAM
    WHERE $db.Team1.league = :league AND $db.Team2.league = :league"
    );
    $sqlSelect->execute(array(':league' => $league));
    echo "<table border ='1'>";
    echo "<tr><th>Date</th><th>Stadium</th><th>Team1</th><th>Team1 League</th><th>Score</th><th>Team2</th><th>Team2 League</th></tr>";
    while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
        $date = $cell[1];
        $place = $cell[2];
        $score = $cell[3];
        $team1 = $cell[7];
        $team2 = $cell[11];
        $team1_league = $cell[8];
        $team2_league = $cell[12];
        echo "<tr><td>$date</td><td>$place</td><td>$team1</td><td>$team1_league</td><td>$score</td><td>$team2</td><td>$team2_league</td></tr>";
    }
    ?>
</body>
<html>