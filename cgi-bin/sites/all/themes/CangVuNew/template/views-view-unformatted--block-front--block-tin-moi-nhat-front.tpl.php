<?php
?>
<div id="latest-news" class="owl-carousel">
    <?php foreach ($rows as $id => $row):?>
    <div class="item">
        <?php print $row;?>
    </div>
    <?php endforeach;?>
</div>
