<?php 
    if(!empty($_GET['number'])){
        $car_url = 'http://apis.is/car?number='. urlencode($_GET['number']);

        $car_json = file_get_contents($car_url);
        $car_array = json_decode($car_json, true);

        $car_type = $car_array['results'][0]['type'];
        $car_subtype = $car_array['results'][0]['subType'];
        $car_color = $car_array['results'][0]['color'];
        $car_number = $car_array['results'][0]['registryNumber'];
        $car_weight = $car_array['results'][0]['weight'];
        $car_status = $car_array['results'][0]['status'];

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Geogram</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo URL; ?>css/carstyle.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>   
</head>
<body>
<h2>Sláðu inn bílnúmer í boxið</h2>
<form action="">
    <input type="text" name="number"/>
    <button type="submit">finna</button>
</form>
    <?php
        if(!empty($_GET['number'])){
            //echo $car_type . $car_subtype . $car_color . $car_number . $car_weight . $car_status;
            echo '<p>Tegund: ' . $car_type . '</p><br><p>Undirtegund: ' . $car_subtype . '</p><br><p>Litur: ' . $car_color . '</p><br><p>Skráningarnúmer: ' . $car_number . '</p><br><p>Þyngd: ' . $car_weight . '</p><br><p>Staða: ' . $car_status . '</p>';
        }
    ?>
</body>
