<?php
include("config.php");
?>

<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/index.js" rel="stylesheet" type="text/javascript"> </script>
    <title>myFicddvvrenze</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa6bQpbcPxZyWLjtqqOlBEO-tvfP_kYKM&callback=initMap">
    </script>
</head>

<body>

<div id="container">

    <div id="logo">
        <a href="http://www.comune.fi.it/export/sites/retecivica/index.html"><img src="img/logofirenze.png"></a>
    </div>

    <img id="ita" src="img/italia.png" onclick="flagIta()">
    <img id="eng" src="img/ukbw.jpg" onclick="flagEng()">


    <button id="help" onclick="alert('Choose your fucking way')"><p style="font-size: 17px">AIUTO</p></button>
    <button id="newItinerary" onclick="alert('Olè')"><p style="font-size: 17px">NUOVO ITINERARIO</p></button>
    <?php
        $query = "SELECT * FROM poi";
        $pointsOfInterest = mysqli_query($conn, $query);
        while( $row = mysqli_fetch_row($pointsOfInterest)){

        }
    ?>
    <div id="map"></div>
</div>

</body>

</html>
