<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Дата</title>
</head>

<body>
  <?php
  include "conn.php";
  $date_1 = $_GET['date_1'];
  $date_2 = $_GET['date_2'];
  $sqlSelect = $dbh->prepare(
    "SELECT * FROM $db.GAME
    INNER JOIN $db.TEAM as Team1 ON $db.GAME.FID_TEAM1 = $db.Team1.ID_TEAM
    INNER JOIN $db.TEAM as Team2 ON $db.GAME.FID_TEAM2 = $db.Team2.ID_TEAM
    WHERE $db.GAME.DATE between :date_1 and :date_2"
  );
  $sqlSelect->execute(array('date_1' => $date_1, 'date_2' => $date_2));
  echo "<ol>";
  while ($cell = $sqlSelect->fetch(PDO::FETCH_BOTH)) {
    $date = $cell[1];
    $place = $cell[2];
    $score = $cell[3];
    $team1 = $cell[7];
    $team2 = $cell[11];
    echo "<li>Дата: $date, стадион: $place, команда №1: $team1, счет: $score, команда №2: $team2</li>";
  }
  echo "</ol>";
  ?>
</body>
<html>