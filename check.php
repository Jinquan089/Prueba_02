<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificacion</title>
</head>
<body>
<?php
$user = $_POST['user'];
$nombre = $_POST['nombre'];
$ape1 = $_POST['ape1'];
$ape2 = $_POST['ape2'];
$direccion = $_POST['direccion'];
$cp = $_POST['cp'];
$correo = $_POST['correo'];
$telf = $_POST['telf'];
$pago = $_POST['pago'];
$entrega = $_POST['entrega'];
$comentario = $_POST['comentario'];

echo "Usuario: ".$user;
echo "<br>";
echo "Nombre: ".$nombre;
echo "<br>";
echo "Apellido1: ".$ape1;
echo "<br>";
echo "Apellido2: ".$ape2;
echo "<br>";
echo "Direccion: ". $direccion;
echo "<br>";
echo "Codigo Postal: ".$cp;
echo "<br>";
echo "Correo: ".$correo;
echo "<br>";
echo "Telefono: ".$telf;
echo "<br>";

if (isset($_POST['plato'])) {
    $plato = $_POST['plato'];
    foreach ($plato as $platos) {
        echo "Plato: ".$platos;
        echo "<br>";
    } 
}
echo "Forma de pago: ".$pago;
echo "<br>";
echo "Entrega: ".$entrega;
echo "<br>";
echo "Comentario: ".$comentario;
echo "<br>";
?>
<form action="index.php" method="get">
    <input type="hidden" name="user" value="<?php echo $user ?>">
    <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
    <input type="hidden" name="ape1" value="<?php echo $ape1 ?>">
    <input type="hidden" name="ape2" value="<?php echo $ape2 ?>">
    <input type="hidden" name="direccion" value="<?php echo $direccion ?>">
    <input type="hidden" name="cp" value="<?php echo $cp ?>">
    <input type="hidden" name="correo" value="<?php echo $correo ?>">
    <input type="hidden" name="telf" value="<?php echo $telf ?>">
    <?php
    if (isset($_POST['plato'])) {
        $plato = $_POST['plato'];
        foreach ($plato as $platos) {
            echo '<input type="hidden" name="plato[]" value="' . $platos . '">';
        } 
    }
    ?>
    <input type="hidden" name="pago" value="<?php echo $pago ?>">
    <input type="hidden" name="entrega" value="<?php echo $entrega ?>">
    <input type="hidden" name="comentario" value="<?php echo $comentario ?>">
    <input type="submit" value="Modificar">
</form>

</body>
</html>
