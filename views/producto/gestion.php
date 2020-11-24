<h1>Gestion de Artículos de Ventas Almacén</h1>

<a href="<?= base_url ?>producto/crear" class="button button-small">Crear producto</a>

<?php if (isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete') : ?>
    <strong class="alert_green">El producto se ha creado correctamente</strong>

<?php elseif (isset($_SESSION['producto']) && $_SESSION['producto'] != 'complete') : ?>
    <strong class="alert_red">El producto no se ha creado correctamente</strong>
<?php endif; ?>

<?php Utils::deleteSession('producto'); ?>

<?php if (isset($_SESSION['delete']) && $_SESSION['delete'] == 'complete') : ?>
    <strong class="alert_green">El producto se ha eliminado correctamente</strong>

<?php elseif (isset($_SESSION['delete']) && $_SESSION['delete'] != 'complete') : ?>
    <strong class="alert_red">El producto no se ha eliminado correctamente</strong>
<?php endif; ?>

<?php Utils::deleteSession('delete'); ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>
    <?php while ($prod = $productos->fetch_object()) : ?>
        <tr>
            <td>
                <?= $prod->id; ?>
            </td>
            <td>
                <?= $prod->nombre; ?>
            </td>
            <td>
                <?= $prod->precio; ?>
            </td>
            <td>
                <?= $prod->stock; ?>
            </td>
        </tr>
    <?php endwhile; ?>
</table>