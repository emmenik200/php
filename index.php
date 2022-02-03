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
    <div id="section">
        <div id="lew">
            <img src="pilka.jpg" alt="piłeczka" id="pileczka">
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
