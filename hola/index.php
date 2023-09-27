<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restaurante Indio</title>
</head>
<body>
    <form action="check.php" method="post">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user" value="<?php if (isset($_GET['user'])) { echo $_GET['user']; } ?>" required>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="<?php if (isset($_GET['nombre'])) { echo $_GET['nombre']; } ?>" required>
        <br>
        <label for="ape1">Apellido1</label>
        <input type="text" name="ape1" id="ape1" value="<?php if (isset($_GET['ape1'])) { echo $_GET['ape1']; } ?>" required>
        <br>
        <label for="ape2">Apellido2</label>
        <input type="text" name="ape2" id="ape2" value="<?php if (isset($_GET['ape2'])) { echo $_GET['ape2']; } ?>">
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" value="<?php if (isset($_GET['direccion'])) { echo $_GET['direccion']; } ?>" required>
        <br>
        <label for="cp">Codigo Postal</label>
        <input type="number" name="cp" id="cp" required maxlength="5" value="<?php if (isset($_GET['cp'])) { echo $_GET['cp']; } ?>">
        <br>
        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" value="<?php if (isset($_GET['correo'])) { echo $_GET['correo']; } ?>" required>
        <br>
        <label for="telf">Telefono</label>
        <input type="telf" name="telf" id="telf" value="<?php if (isset($_GET['telf'])) { echo $_GET['telf']; } ?>" required>
        <br> <br>
        <fieldset id="plato" style="width: 250px;" required>
            <legend for="plato">plato</legend>
                <input type="checkbox" name="plato[]" id="plato1" value="samosa" <?php if (isset($_GET['plato']) && in_array('samosa', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato1">Samosa</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato2" value="Masala Dosa" <?php if (isset($_GET['plato']) && in_array('Masala Dosa', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato2">Masala Dosa</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato3" value="Chole Bhature" <?php if (isset($_GET['plato']) && in_array('Chole Bhature', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato3">Chole Bhature</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato4" value="Bhelpuri" <?php if (isset($_GET['plato']) && in_array('Bhelpuri', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato4">Bhelpuri</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato5" value="Kati roll" <?php if (isset($_GET['plato']) && in_array('Kati roll', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato5">Kati roll</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato6" value="Daulat ki chaat" <?php if (isset($_GET['plato']) && in_array('Daulat ki chaat', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato6">Daulat ki chaat</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato7" value="Kashmiri Aloo Dum" <?php if (isset($_GET['plato']) && in_array('Kashmiri Aloo Dum', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato7">Kashmiri Aloo Dum</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato8" value="Pollo Tandoori" <?php if (isset($_GET['plato']) && in_array('Pollo Tandoori', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato8">Pollo Tandoori</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato9" value="Pollo Tikka Masala"> <?php if (isset($_GET['plato']) && in_array('Pollo Tikka Masala', $_GET['plato'])) { echo 'checked'; }?>
                <label for="plato9">Pollo Tikka Masala</label>
                <br>
                <input type="checkbox" name="plato[]" id="plato10" value="Mithaa paan" <?php if (isset($_GET['plato']) && in_array('Mithaa paan', $_GET['plato'])) { echo 'checked'; }?>>
                <label for="plato10">Mithaa paan</label>
                <br>
        </fieldset>
        <br>
        <fieldset id="pago" style="width: 250px;">
            <legend for="pago">Forma de Pago</legend>
                <input type="radio" name="pago" id="Paypal" value="Paypal" required <?php if (isset($_GET['pago']) && ($_GET['pago']=='Paypal')) {echo "checked";} ?>>
                <label for="Paypal">Paypal</label>
                <br>
                <input type="radio" name="pago" id="Targeta" value="Targeta" required checked <?php if (isset($_GET['pago']) && ($_GET['pago']=='Targeta')) {echo "checked";} ?>>
                <label for="Targeta">Targeta</label>
                <br>
                <input type="radio" name="pago" id="Efectivo" value="Efectivo" required <?php if (isset($_GET['pago']) && ($_GET['pago']=='Efectivo')) {echo "checked";} ?>>
                <label for="Efectivo">Efectivo</label>
        </fieldset>
        <br>
        <fieldset id="entrega" style="width: 250px;">
            <legend for="entrega">Forma de Entrega</legend>
            <input type="radio" name="entrega" id="domicilio" value="domicilio" required <?php if (isset($_GET['entrega']) && ($_GET['entrega']=='domicilio')) {echo "checked";} ?>>
            <label for="domicilio">Entrega a Domicilio</label>
            <br>
            <input type="radio" name="entrega" id="Recogida" value="Recogida" required <?php if (isset($_GET['entrega']) && ($_GET['entrega']=='Recogida')) {echo "checked";} ?>>
            <label for="recogida">Recogida</label>
        </fieldset>
        <br>
        <label for="comentario">Comentario</label>
        <br>
        <textarea name="comentario" id="comentario" cols="35" rows="10" placeholder="Escribe tu comentario" ><?php if (isset($_GET['comentario'])) { echo $_GET['comentario']; } ?></textarea>
        <br> <br>
        <input type="submit" value="Enviar">
        <br>    
    </form>
</body>
</html>