<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Piłka nożna</title>
</head>
<body>
    <div id="header">
        <h1>Piłka nożna</h1>
        
    </div>
    <div id="nav">
        <a href="index.php">Strona główna</a>
        <a href="aboutme.php">O mnie</a>
    </div>
    <div id="section">
    <div class="container">
    <div class="wrapper">
            <img src="dom.jpg">
            <img src="https://images6.alphacoders.com/462/thumb-1920-462371.jpg">
            <img src="https://images5.alphacoders.com/343/thumb-1920-343645.jpg">
            <img src="https://cdn.wallpapersafari.com/24/98/dwMtqD.jpg">
          </div>
    </div>
   
        <div id="praw">
           <?php  dane() ?>
        </div>
    </div>
    
    <footer>
        <b>Bartłomiej Cholewiński 2pt</b><a href="https://www.facebook.com/bartek.cholewinski.54" target="blank"><img src="ikona.jpg" alt="prof" id="ikona"></a>
    </footer>
</body>
</html>




<?php

function dane(){
	$conn = mysqli_connect("localhost", "root", "", "ligi");
	if(!$conn){
		echo "nie udalo sie polaczyc z baza";
		return;
	}

	$sql = "SELECT nazwa_ligi,kraj,liczba_druzyn FROM ligi";

	$res = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_row($res)) {
		echo "<option value='$row[0], $row[1], $row[2]'>$row[0], $row[1],  liczba druzyn $row[2]</option>";
      

	}
	mysqli_close($conn);
}
