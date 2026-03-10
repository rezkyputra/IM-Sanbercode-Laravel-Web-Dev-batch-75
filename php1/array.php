<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih Array</h1>
    <?php
    echo "<h3>Soal 1</h3>";
    $trainer = ["Rezky", "Budi", "Toby", "Rahmat", "Andi"];

    print_r($trainer);

    echo "<h3>Soal 2</h3>";
    echo "Total Trainer : " . count($trainer);
    echo "<ul>";
    echo "<li>" . $trainer[0] . "</li>";
    echo "<li>" . $trainer[1] . "</li>";
    echo "<li>" . $trainer[2] . "</li>";
    echo "<li>" . $trainer[3] . "</li>";
    echo "<li>" . $trainer[4] . "</li>";
    echo "</ul>";

    echo "<h3>Soal 3</h3>";
    $infoTrainer = [
        ["id" => "001", "nama" => "Rezky", "materi" => "Laravel"],
        ["id" => "002", "nama" => "Yogi", "materi" => "ReactJS"],
        ["id" => "003", "nama" => "Fikri","materi" =>  "Digital Marketing"],
        ["id" => "004", "nama" => "Thio", "materi" => "Phyton"],
    ];

    echo "<pre>";
    print_r($infoTrainer);
    echo "</pre>";

    echo $infoTrainer[2]["materi"];


    ?>
</body>
</html>