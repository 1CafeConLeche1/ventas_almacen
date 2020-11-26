<h1>Productos destacados</h1>

<?php while ($prod = $productos->fetch_object()) : ?>

  <div class="card">
  <a href="<?=base_url?>producto/ver&id=<?=$prod->id?>">
    <?php if ($prod->imagen != null) : ?>
      <img src="<?= base_url ?>uploads/images/<?= $prod->imagen ?>">
    <?php else : ?>
      <img src="assets/img/png/defecto.png">
    <?php endif; ?>
    <h3><?= $prod->nombre ?></h3>
    </a>
    <p><?= $prod->precio ?></p>
    <a href="" class="button">Comprar</a>
  </div>
<?php endwhile; ?>