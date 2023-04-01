<?php

if (isset($_POST['ciudad'])) {

$ciudad=$_POST['ciudad'];

$url="http://api.openweathermap.org/data/2.5/weather?&units=metric&q=".$ciudad."&appid=a19283761f3113b225b7189fb712ca3e";
$json=file_get_contents($url);
$datos=json_decode($json, true);
$icono="http://openweathermap.org/img/wn/".$datos['weather'][0]['icon'].".png";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tiempo en: <?php echo $ciudad ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
    <!-- Custom styles for this template -->
    <link href="CSS/signin.css" rel="stylesheet">
  </head>
    <body>
        
        <div class="text-center" style="border:1px solid #000; height: 300px; width: 300px; margin:300px auto; background: #FBB6E9">
            <h1><?php echo $ciudad ?></h1>
            <p>Temperatura Mínima: <?php echo $datos['main']['temp_min']?></p>
            <p>Temperatura Máxima: <?php echo $datos['main']['temp_max']?></p>
            <p>Humedad: <?php echo $datos['main']['humidity']?></p>
            <p>Viento: <?php echo $datos['wind']['speed']?></p>
            <img src=<?php echo $icono?> alt="">
        </div>
    </body>
</html>
