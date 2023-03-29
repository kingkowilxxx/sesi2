<?php
$judulpage ="latihan script php";
$konten = "<h3> latihan php </h3>";
$konten .= "<p> dasar penulisan php: <ul><li>penulisan script php bersifat sensitif</li><li>setiapakhi baris diakhiri titik koma </li></ul> <p>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage?></title>
</head>
<body>
    <?php 
    echo $konten;
    ?>
</body>
</html>