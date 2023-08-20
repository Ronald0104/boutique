<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de ventas</title>
</head>
<body>
    <?php
    include 'alumno.php';
    
    $alumnos = [];
    $alumno1 = new Alumno("Ronald","Terrones",33);    
    $alumno2 = new Alumno("Lisbeth","Zapata",30);    
    $alumno3 = new Alumno("Nicolas","Terrones",13);    
    
    $alumnos[$alumno1->getId()] = $alumno1;
    $alumnos[$alumno2->getId()] = $alumno2;
    $alumnos[$alumno3->getId()] = $alumno3;
    // echo phpinfo();
    
    echo "Listado de alumnos!";
    echo "<br>";
    echo "<pre>";
    echo var_dump($alumnos);    
    echo "</pre>";
    echo "<br><br>";
    echo "========================";
    echo "<br><br>";
    echo "<pre>";
    echo print_r($alumnos);
    echo "</pre>";
    ?>
</body>
</html>