<h1>Carrito de la compra</h1>

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    <?php
    if (is_array($carrito))
        foreach ($carrito as $indice => $elemento) :
            $producto = $elemento['producto'];
    ?>
        <tr>
            <td>
                <?php if ($producto->imagen != null) : ?>
                    <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="img-carrito">
                <?php else : ?>
                    <img src="<?= base_url ?>assets/img/png/defecto.png" class="img-carrito">
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
            </td>
            <td>
                $<?= $producto->precio ?>
            </td>
            <td>
                <?= $elemento['unidades'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</br>

<div class="botones">
    <a href="" class="button button-pedido">Hacer pedido</a>
    <a href="<?= base_url ?>carrito/delete_all&id" class="button button-red">Eliminar pedidos</a>
</div>
<div class="total-carrito">
    <?php $stats = Utils::statsCarrito(); ?>
    <h3>Precio total: $<?= $stats['total'] ?></h3>
</div>