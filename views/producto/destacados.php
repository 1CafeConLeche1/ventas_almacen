<h1>Productos destacados</h1>

<?php while ($prod = $productos->fetch_object()) : ?>

  <div class="card">
    <?php if ($prod->imagen != null) : ?>
      <img src="<?= base_url ?>uploads/images/<?= $prod->imagen ?>">
    <?php else : ?>
      <img src="assets/img/png/defecto.gif">
    <?php endif; ?>
    <h3><?= $prod->nombre ?></h3>
    <p><?= $prod->precio ?></p>
    <button>Comprar</button>
  </div>
<?php endwhile; ?>