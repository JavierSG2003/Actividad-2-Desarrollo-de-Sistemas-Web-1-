<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Datos</title>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="dive2">
        <center>
            <h1>Resultados</h1>
            
                <img src="img/imagen1.webp" alt="imagen" width="700">
                <?php
                    $nombre = $_POST['Name'];
                    $edad = $_POST['Age'];
                    $ciudad = $_POST['City'];
                    $pasatiempo = $_POST['Hobby'];

                    echo '<p><b>Nombre:</b> ' . $nombre . '</p>';
                    echo '<p><b>Edad:</b> ' . $edad . '</p>';
                    echo '<p><b>Ciudad:</b> ' . $ciudad . '</p>';
                    echo '<p><b>Pasatiempo:</b> ' . $pasatiempo . '</p>';
                ?>
         </center>
            <h1>Bien hecho!</h1>
               
            <div id="popUpOverlay"></div>
            <div id="popUpBox">
                <div id="box">

                    <i class="fas fa-question-circle fa-5x"></i>
                    <h1>¿Quieres volver a ingresar datos?</h1>
                    <div id="closeModal"></div>
                        
                </div>
            </div>

            <button onclick="Alert.render('you look very pretty today.')" class="btn">Volver a ingresar datos</button>
            <script src="js/app.js"></script>
            
    </div>
    
</body>
</html>