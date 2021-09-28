<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Berlatih Array PHP</h2>
    <?php
    echo "<h3>Berlatih Array PHP</h3>";
    $motor = array("Yamaha", "Honda", "Suzuki");
    print_r($motor);
    echo "<h3>Berlatih Array PHP</h3>";
    echo "Total Array : " . count($motor);
    echo "<ul>";
    echo "<li>" . $motor[0] . "</li>";
    echo "<li>" . $motor[1] . "</li>";
    echo "<li>" . $motor[2] . "</li>";
    echo "</ul>";
    echo "<h3>Berlatih Array PHP</h3>";
    $biodata = [
        ["nama" => "Palentino", "kota" => "Bandung", "umur" => 17],
        ["nama" => "Subagja", "kota" => "Bandung", "umur" => 17],
    ];
    echo "<pre>";
    print_r($biodata);
    echo "</pre>";
    ?>

</body>

</html>