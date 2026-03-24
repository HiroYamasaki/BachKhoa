<div class="mkd-pl-main-holder"><ul class="products columns-4">
<?php foreach ($products as $index => $product): ?>
<?php
    $position = $index % 4;
    $posClass = '';
    if ($position === 0) $posClass = 'first';
    if ($position === 3) $posClass = 'last';
    $hasSale = $product->sale_price > 0 && $product->sale_price < $product->price;
    $stockClass = $product->quantity > 0 ? 'instock' : 'outofstock';
?>
<li class="product type-product status-publish <?php echo $posClass; ?> <?php echo $stockClass; ?> <?php echo $hasSale ? 'sale' : ''; ?> has-post-thumbnail shipping-taxable purchasable product-type-simple">
	<div class="mkd-pl-inner"><div class="mkd-pl-image">
	<?php if ($hasSale): ?><span class="mkd-onsale">Sale</span><?php endif; ?>
	<img width="800" height="800" src="<?php echo htmlspecialchars($product->image); ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<?php echo htmlspecialchars($product->name); ?>" loading="lazy" /><?php if ($product->quantity <= 0): ?><span class="mkd-out-of-stock">Sold</span><?php endif; ?>
	<div class="mkd-pl-text"><div class="mkd-pl-text-outer"><div class="mkd-pl-text-inner">
	<a href="/product-detail?id=<?php echo $product->id; ?>" class="button product_type_simple add_to_cart_button" data-product_id="<?php echo $product->id; ?>" data-product_sku="<?php echo htmlspecialchars($product->sku); ?>" rel="nofollow">Xem chi tiết</a>
	</div></div></div></div><a href="/product-detail?id=<?php echo $product->id; ?>" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a></div><div class="mkd-pl-text-wrapper"><div class="mkd-pl-title-price-holder"><h5 class="mkd-product-list-title"><a href="/product-detail?id=<?php echo $product->id; ?>"><?php echo htmlspecialchars($product->name); ?></a></h5>
	<span class="price">
	<?php if ($product->price == 0): ?>
		<span class="woocommerce-Price-amount amount"><bdi>Liên hệ</bdi></span>
	<?php elseif ($hasSale): ?>
		<del aria-hidden="true"><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product->price, 0, ',', '.'); ?>₫</bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product->sale_price, 0, ',', '.'); ?>₫</bdi></span></ins>
	<?php else: ?>
		<span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product->price, 0, ',', '.'); ?>₫</bdi></span>
	<?php endif; ?>
	</span>
</div><?php if ($product->category): ?><div class="mkd-pl-categories"><a href="/shop" rel="tag"><?php echo htmlspecialchars($product->category); ?></a></div><?php endif; ?></div>
</li>
<?php endforeach; ?>
<?php if ($products->total() === 0): ?>
<li class="product" style="width:100%;text-align:center;padding:40px 0;">
	<p style="font-size:16px;color:#888;">Không tìm thấy sản phẩm nào.</p>
</li>
<?php endif; ?>
</ul>
</div>
