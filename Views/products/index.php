<h2>Catálogo de Productos</h2>
<div style="display: flex; flex-wrap: wrap; gap: 20px;">
<?php foreach ($products as $product): ?>
    <div style="border: 1px solid #ccc; padding: 10px; width: 250px;">
        <img src="/public/images/<?= $product->image ?>" alt="<?= $product->name ?>" style="width:100%; height: 150px; object-fit: cover;"><br>
        <h3><?= htmlspecialchars($product->name) ?></h3>
        <p><?= htmlspecialchars($product->description) ?></p>
        <p><strong>$<?= $product->price ?></strong></p>
        <p><em><?= ucfirst($product->type) ?></em></p>
        <a href="/product/show/<?= $product->id ?>">Ver más</a>
    </div>
<?php endforeach; ?>
</div>