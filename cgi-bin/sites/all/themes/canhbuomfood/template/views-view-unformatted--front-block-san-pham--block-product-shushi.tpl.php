<!-- Product Area Start -->
<div class="container">
    <div class="product-area">
    <div class="row">
        <div class="col-8 col-md-6">
            <!-- Section Title Start -->
            <div class="section-title">
                <h3><?=$view->get_title()?></h3>
            </div>
            <!-- Section Title End -->
        </div>
        <div class="col-4 col-md-6">
            <!-- Section Title Start -->
            <div class="view-all-product text-right">
                <a href="san-pham/sushi-sashimi-deli">Xem tất cả<i class="icon-chevrons-right"></i></a>
            </div>
            <!-- Section Title End -->
        </div>
    </div>
    <div class="row">
        <?php foreach ($rows as $id => $row): ?>
            <div class="col-md-2 col-6">
                <?php print $row; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
