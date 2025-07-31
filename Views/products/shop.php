<h2><?= htmlspecialchars($product->name) ?></h2>
<img src="/public/images/<?= $product->image ?>" style="width:300px;"><br>
<p><?= htmlspecialchars($product->description) ?></p>
<p><strong>$<?= $product->price ?></strong></p>
<p><em><?= ucfirst($product->type) ?></em></p>
<a href="/cart/add/<?= $product->id ?>">Agregar al carrito</a>