<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PHP01 - Kelas 4D
    </title>
    <div align="center">
        <h1>
            PHP FUNCTION
        </h1>
    </div>

    <style>
        h1{
            color:#0077b6;
        }
        .spanlabel{
            color:white;
            background-color: #3d405b;
            font-size: medium;
            padding: 10px 12px;
        }

        input[type=text]{
            margin: 8px 0;
            padding: 8px 10px;
            border :border-box;
            font-size:medium;

        }

        input[type=submit]{
            width : 100px;
            height: 40px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div align="center">
    <form action="" method="post">
        <div>
            <span class="spanlabel">
                Input Angka
    </span>
    <span>
        <input type="text" id="check" name="check" placeholder="masukan angka"/>
    </span>
    </div>
    <div>
        <span><input type="submit" id="mysubmit" name="mysubmit" value="Check angka"/></span>
    </div>
</form>
</div>
</body>
</html


<?php

function check($number)
{
    if (empty($number)){
        echo 'Tidak ada angka yang dimasukan';
    }
    else if ( $number == 1) {
        echo  'angka '.$number.' adalah bukan bilangan prima';
    }
    else if ( $number == 2 ) {
        echo  'angka '.$number.' adalah bilangan prima';
    }
    else{
        $x = sqrt($number);
        $x = floor($x);
        for ( $i = 2 ; $i <= $x ; ++$i ) {
            if ( $number % $i == 0 ) {
                break;
            }
        }
        if( $x == $i-1 ) {
            echo  'angka '.$number.' adalah bilangan prima';
        } else {
            echo  'angka '.$number.' adalah bukan bilangan prima';
        }
    }
}


if (isset($_POST['mysubmit'])){
    $number = $_POST['check'];
    echo '<br/>';
    check($number);
}
?>
