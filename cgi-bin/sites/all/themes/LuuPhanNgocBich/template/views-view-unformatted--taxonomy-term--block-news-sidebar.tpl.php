<?php
?>

<div class="popular-posts">
    <h5 class="h5-sm steelblue-color text-uppercase">Tin tức nổi bật</h5>
    <ul class="popular-posts">
        <?php foreach ($rows as $id => $row): ?>
            <?php print $row; ?>
        <?php endforeach; ?>
    </ul>
</div>