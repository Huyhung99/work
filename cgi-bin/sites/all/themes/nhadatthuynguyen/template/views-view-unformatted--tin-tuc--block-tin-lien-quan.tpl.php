<?php
?>
<div class="sidebar-widget">
    <h3 class="room-details-title">
      <?php print t('Xem thêm'); ?>
    </h3>
    <?php foreach ($rows as $id => $row): ?>
        <?php print $row; ?>
    <?php endforeach; ?>
</div>




