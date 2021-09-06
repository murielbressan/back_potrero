<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Ejercicio 4</p>
   <?php echo 'Hola mundo'; ?>

   <p>Ejercicio 5</p>
   <?php
        $ruta = "imagenes/fondo.jpg";
    ?>
 
    <img src=" <?php echo $ruta; ?> ">
<p>Ejercicio 6</p>
    <select>
        <?php 
        for ($i=1; $i <= 10 ; $i++){
        echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    
</body>
</html>