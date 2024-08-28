<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include_once 'cn.php';

elegir($conexdb);
function elegir($conexdb){
    if(isset($_POST['sesion'])){
        sesionar($conexdb);
    }
}

function sesionar($conexdb){
    $email = $_POST['ema'];
    $pass = $_POST['pass'];
    $consulta= mysqli_query($conexdb, "SELECT nick FROM usuarios WHERE email='$email' AND contra= '$pass'");


}

?>
    
</body>
</html>