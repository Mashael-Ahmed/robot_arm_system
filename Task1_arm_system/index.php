<?php

include_once('database.php');

$m1 = $_POST['eng1'];
$m2 = $_POST['eng2'];
$m3 = $_POST['eng3'];
$m4 = $_POST['eng4'];
$m5 = $_POST['eng5'];
$m6 = $_POST['eng6'];

if (isset($_POST['save'])) {
    $sql = "insert into arm(m1, m2, m3, m4, m5, m6, power) values($m1, $m2, $m3, $m4, $m5, $m6, false);";
    mysqli_query($GLOBALS['conn'], $sql);
}

if (isset($_POST['power'])) {
    $sql = "insert into arm(m1, m2, m3, m4, m5, m6, power) values($m1, $m2, $m3, $m4, $m5, $m6, true);";
    mysqli_query($GLOBALS['conn'], $sql);

    header("location: power.php?m1=$m1&m2=$m2&m3=$m3&m4=$m4&m5=$m5&m6=$m6");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <main>

        <form action="index.php" method="post">

            <div class="engine">
                <input name="eng1" type="range" min="0" max="180" width="500px" value="<?php echo $m1 ?>">
                <label for="eng1">محرك 1</label>
            </div>

            <div class="engine">
                <input name="eng2" type="range" min="0" max="180" width="500px" value="<?php echo $m2 ?>">
                <label for="eng2">محرك 2</label>
            </div>

            <div class="engine">
                <input name="eng3" type="range" min="0" max="180" width="500px" value="<?php echo $m3 ?>">
                <label for="eng3">محرك 3</label>
            </div>

            <div class="engine">
                <input name="eng4" type="range" min="0" max="180" width="500px" value="<?php echo $m4 ?>">
                <label for="eng4">محرك 4</label>
            </div>

            <div class="engine">
                <input name="eng5" type="range" min="0" max="180" width="500px" value="<?php echo $m5 ?>">
                <label for="eng5">محرك 5</label>
            </div>

            <div class="engine">
                <input name="eng6" type="range" min="0" max="180" width="500px" value="<?php echo $m6 ?>">
                <label for="eng6">محرك 6</label>
            </div>

            <div style="margin-left: 11rem;">
                <input type="submit" name="save" value="حفظ">
                <input type="submit" name="power" value="تشغيل">
            </div>

        </form>

    </main>

</body>

</html>