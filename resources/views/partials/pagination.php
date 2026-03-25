<?php if ($products->lastPage() > 1): ?>
<?php
    $cur   = $products->currentPage();
    $last  = $products->lastPage();
    $delta = 2;
    $pages = [];
    $prev  = null;
    for ($i = 1; $i <= $last; $i++) {
        if ($i <= 2 || $i >= $last - 1 || abs($i - $cur) <= $delta) {
            if ($prev !== null && $i - $prev > 1) {
                $pages[] = '...';
            }
            $pages[] = $i;
            $prev = $i;
        }
    }
?>
<div class="mkd-woo-pagination-holder"><div class="mkd-woo-pagination-inner"><nav class="woocommerce-pagination">
	<ul class='page-numbers'>
	<?php if ($cur > 1): ?>
	<li><a class="prev page-numbers" href="#" data-page="<?php echo $cur - 1; ?>">&larr;</a></li>
	<?php endif; ?>
	<?php foreach ($pages as $p): ?>
	<?php if ($p === '...'): ?>
	<li><span class="page-numbers dots">&hellip;</span></li>
	<?php elseif ($p == $cur): ?>
	<li><span aria-current="page" class="page-numbers current"><?php echo $p; ?></span></li>
	<?php else: ?>
	<li><a class="page-numbers" href="#" data-page="<?php echo $p; ?>"><?php echo $p; ?></a></li>
	<?php endif; ?>
	<?php endforeach; ?>
	<?php if ($products->hasMorePages()): ?>
	<li><a class="next page-numbers" href="#" data-page="<?php echo $cur + 1; ?>">&rarr;</a></li>
	<?php endif; ?>
</ul>
</nav>
</div></div>
<?php endif; ?>
