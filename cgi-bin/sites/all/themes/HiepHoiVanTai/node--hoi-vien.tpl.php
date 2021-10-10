<?php $dangnhap='<a href="/user/login">Đăng nhập</a>';?>
<?php global $user;?>
<div class="box-shadow-hoi-vien mb-30">
  <div class="row">
    <div class="col-md-12">
      <div class="text-center">
        <h3 class="title_hoi_vien"><?php print $node->title;?></h3>
      </div>
    </div>
    <div class="col-md-5">
      <img src="<?php  isset($node->field_image['und'][0]['uri']) ? print str_replace('public://','/sites/default/files/',$node->field_image['und'][0]['uri']) : print '';?>" alt="<?php print $node->title;?>">
    </div>
    <div class="col-md-7">
      <div class="align-items-center d-flex height-full">
        <div class="thong-tin-hoi-vien">
          <?php if(isset($user->uid) && $user->uid!=0):?>
            <p class="dia_chi"><strong>Địa chỉ : </strong><?php isset($node->field_dia_chi['und'][0]['value']) ? print $node->field_dia_chi['und'][0]['value']: print 'đang cập nhật'?></p>
            <p class="so_dien_thoai"><strong>Số điện thoại : </strong><?php isset($node->field_dien_thoai['und'][0]['value']) ? print $node->field_dien_thoai['und'][0]['value']: print 'đang cập nhật'?></p>
            <p class="so_dien_thoai"><strong>Số di động : </strong><?php isset($node->field_so_di_dong['und'][0]['value']) ? print $node->field_so_di_dong['und'][0]['value']: print 'đang cập nhật'?></p>
            <p class="email_hoi_vien"><strong>Email : </strong><?php isset($node->field_email['und'][0]['value']) ? print $node->field_email['und'][0]['value']: print 'đang cập nhật'?></p>
            <p class="nguoi_dai_dien"><strong>Người đại diện : </strong><?php isset($node->field_nguoi_dai_dien['und'][0]['value']) ? print $node->field_nguoi_dai_dien['und'][0]['value']: print 'đang cập nhật'  ?></p>
          <?php else:?>
            <p class="dia_chi"><strong>Địa chỉ : </strong><?php isset($node->field_dia_chi['und'][0]['value']) ? print $node->field_dia_chi['und'][0]['value']: print 'đang cập nhật'?></p>
            <p class="so_dien_thoai"><strong>Số điện thoại : </strong><?php print $dangnhap;?></p>
            <p class="so_dien_thoai"><strong>Số di động : </strong><?php print $dangnhap;?></p>
            <p class="email_hoi_vien"><strong>Email : </strong><?php print $dangnhap;?></p>
            <p class="nguoi_dai_dien"><strong>Người đại diện : </strong><?php isset($node->field_nguoi_dai_dien['und'][0]['value']) ? print $node->field_nguoi_dai_dien['und'][0]['value']: print 'đang cập nhật'  ?></p>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h3 class="title_hoi_vien mt-30">Thông tin chi tiết hội viên</h3>
      <?php isset($node->body['und'][0]['value']) ? print $node->body['und'][0]['value'] : print 'Đang cập nhật'?>
    </div>
    <div class="col-md-12">
      <h3 class="title_hoi_vien mt-30">Phê duyệt Điều lệ hoạt động của Hiệp hội Vận tải Hải Phòng</h3>
      <?php isset(node_load(78)->body['und'][0]['value']) ? print node_load(78)->body['und'][0]['value'] : print ''?>
    </div>
  </div>
</div>
<div class="table-responsive">
  <h3 class="title_hoi_vien text-center">Danh sách tàu</h3>
  <?=xem_danh_sach_chi_tiet_tau($node->nid);?>
</div>
<?php print views_embed_view('block_hoi_vien_khac','block_hoi_vien');?>
