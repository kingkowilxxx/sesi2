<?php
$nvar = "p2";
if(isset($_GET["pg"])){
$nvar = $_GET["pg"];
}
switch($nvar){
    case "p1":
        $judulpage ="HALAMAN 1";
        $konten = "<h3>halaman1</h3>";
        break;
    case "p2":
        $judulpage ="HALAMAN 2";
        $konten = "<h3>halaman2</h3>";
        break;
    case "p3":
        $judulpage ="HALAMAN 3";
        $konten = "<h3>halaman3</h3>";
        break;
    case "p4":
        $judulpage ="HALAMAN 4";
        $konten = "<h3>halaman4</h3>";
        break;
      default:
      $judulpage ="HALAMAN 1";
      $konten = "<h3>halaman1</h3>";
      break;
}
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
    <a href="latihan3.php?pg=p1">page1</a> 
    <a href="latihan3.php?pg=p2">page2</a> 
    <a href="latihan3.php?pg=p3">page3</a> 
    <a href="latihan3.php?pg=p4">page4</a>
    <?php 
    echo $konten;
    ?>
</body>
</html>