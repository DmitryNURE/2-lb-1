<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ1</title>
</head>
<h3>Кириленко Дмитро, КІУКІ-19-4, Вар№7</h3>
<form method="GET" action="1.php">
<p>Таблица чемпионата лиги <select name="league" id="league">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT league FROM $db.team";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <button> ОК </button></p>
</form>


<form method="GET" action="2.php">
    </p>Список игр на указанный интервал дат <select name="date_1" id="date_1">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT date FROM $db.game";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <select name="date_2" id="date_2">
            <?php
            include 'conn.php';
            $sqlSelect = "SELECT DISTINCT date FROM $db.game";
            foreach ($dbh->query($sqlSelect) as $cell) {
                echo "<option>";
                print($cell[0]);
                echo "</option>";
            }
            ?>
    </select>
    <button> ОК </button></p>
</form>


<form method="GET" action="3.php">
Список игр футболиста <select name="player" id="player">
        <?php
        include 'conn.php';
        $sqlSelect = "SELECT DISTINCT name FROM $db.player";
        foreach ($dbh->query($sqlSelect) as $cell) {
            echo "<option>";
            print($cell[0]);
            echo "</option>";
        }
        ?>
    </select>
    <button> ОК </button>
</form>
</body>

</html>