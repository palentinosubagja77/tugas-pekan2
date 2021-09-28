<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php   
    $string = "nama saya palentino subagja";
    $panjangkalimat = strlen($string);
    $jumlahkata = str_word_count($string);
    echo "kalimat : $string <br>";
    echo "panjang String : $panjangkalimat <br>";
    echo "Jumlah kata : $jumlahkata <br>";




    echo "<h2> contoh ke dua </h2>";
    $string1 = "nama saya palentino";
    echo "kalimat : $string1 <br>";
    echo "kata pertama : " . substr($string1, 0, 5) . "<br>";
    echo "kata kedua : " . substr($string1, 6, 5);

    echo "<h2> contoh ke tiga </h2>";
    $string2 = "Nama saya Palentino";
    echo "kalimat : $string2 <br>";
    echo "kalimat String Diganti " . str_replace("palentino", "subagja", $string2);
    ?>
    </body>

</html>