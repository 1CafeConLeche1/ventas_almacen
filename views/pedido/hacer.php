<?php if (isset($_SESSION['identity'])) : ?>
    <h1>Hacer pedido</h1>
    <p>
    <a class="carrito-boton" href="carrito/index">Volver al carrito</a>
    </p>
    <div class="pedidou">
    <form action="<?= base_url ?>pedido/add" method="POST">

        <h3>Dirección para el envío</h3>
        </br>
        <input type="text" name="provincia" autocomplete="off" placeholder="Ingrese la Provincia" required> <br>

        <input type="text" name="localidad" required autocomplete="off" placeholder="Ingrese la Localidad"> <br>

        <input type="text" name="direccion" required autocomplete="off" placeholder="Ingrese su Dirección"> <br>

        <input type="submit" value="Confirmar"><br>
    </form>
    </div>

<?php else : ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitas estar logueado en la web para poder realizar tu pedido</p>
<?php endif ?>