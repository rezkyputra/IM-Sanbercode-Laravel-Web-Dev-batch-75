<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh Soal Looping</h1>
    <?php
    echo "<h3>Contoh Soal 1</h3>";

    echo "<h4>Looping 1</h4>";
    for($i=1; $i<= 19; $i+=2){
        echo "$i - Looping Ganjil <br>";
    }
        
    echo "<h4>Looping 2</h4>";
    for($a=19; $a>= 1; $a-=2){
        echo "$a - Looping Ganjil <br>";
    }

    echo "<h3>Contoh Soal 2</h3>";

    $nilai = [30,44,68,93,21,87];

    echo "array numbers: ";

    print_r($nilai);

    // Lakukan Looping di sini    
    foreach($nilai as $n) {
        $item[] = $n % 4; 
    }   
    echo "<br>";

    echo "Array sisa baginya adalah:  "; 

    print_r($item);

    echo "<br>";       


    echo "<h3>Contoh Soal 3</h3>";

    $biodata = [
        ["001", "Rezky", "Laravel"],
        ["002", "Yogi", "ReactJS"],
        ["003", "Abdul", "Golang"],
        ["004", "Martha", "NodeJS"],
        ["005", "Fiqri", "Desain Grafis"],
    ];

    foreach($biodata as $arrindex){
        $output= [
            "id" => $arrindex[0],
            "nama" => $arrindex[1],
            "materi" => $arrindex[2],
        ];

        print_r($output);
        echo "<br>";
    }

    echo "<h3>Contoh Soal 4</h3>";

    // Looping j = 5 batas 5
    // Looping k = 5 batas 5

    for($j=1; $j<=5; $j++){
        for($k=$j; $k<=5; $k++){
            echo "* ";
        }
        echo "<br>";
    }


    ?>
</body>
</html>