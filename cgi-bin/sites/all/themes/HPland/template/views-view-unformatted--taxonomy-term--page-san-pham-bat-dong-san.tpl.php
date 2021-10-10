<div class="row">
  <?php foreach ($rows as $id => $row):?>
    <div class="col-md-6 col-6">
      <?php print $row?>
    </div>
  <?php endforeach;?>
</div>


<div class="single-feature">
    <div class="thumb">
        <a href="[path]" class="d-block position-unset-img">[field_image]</a>
    </div>
    <div class="details">
        <h6 class="title">[title]</h6>
        <ul class="info-list">
            <li><i class="fas fa-expand"></i> [field_dien_tich_su_dung] m<sup>2</sup></li>
            <li><i class="fa fa-bed"></i> [field_so_giuong] Phòng ngủ</li>
            <li><i class="fa fa-bath"></i> [field_so_phong_tam] Phòng tắm</li>
            <li><i class="fab fa-safari"></i> [field_huong]</li>
        </ul>
        <div class="info-price">
            <div class="left-info">
                <h6 class="price">Giá : <span class="pri"> [field_gia_bang_chu]</span> </h6>
                <span class="id-properties">Mã BDS: </span>
            </div>
            <div class="right-info">
                <a class="btn btn-primary" href="/lien-he"> Liên hệ</a>
            </div>
        </div>

    </div>
</div>