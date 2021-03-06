
<div class="bg-gray pd-top-60 pd-bottom-90 pd-bottom-sm-30 pd-top-sm-30">
    <div class="container">
        <div class="row ">
            <div class="col-xl-9 col-lg-8">
                <?php if (!empty($node->field_anh_lien_quan)) :?>
                <div class="property-details-slider">
                        <?php $relatedImage = $node->field_anh_lien_quan['und'];?>
                        <?php foreach ($relatedImage as $item): ?>
                            <?php
                            $pathImageSlider = image_style_url('940_x_720', $item['uri']);
                            $titleImage = $item['title'];
                            $altImage = $item['alt'];
                            ?>
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?= $pathImageSlider ?>" alt="<?= $altImage ?>" title="<?= $titleImage ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
                <?php else:?>
                    <?php
                    $pathImageSlider = image_style_url('940_x_720', $node->field_image['und'][0]['uri']);
                    $titleImage = $node->field_image['und'][0]['title'];
                    $altImage = $node->field_image['und'][0]['alt']
                    ?>
                    <img src="<?=$pathImageSlider?>" alt="<?=$altImage?>" title="<?=$titleImage?>"  class="img-fluid mb-30 bdr-10">
                <?php endif;?>

                <div class="property-details-slider-info">
                    <h3 class="mb-30"><?= $node->title ?> <span><?= $node->field_gia_bang_chu['und'][0]['value'] ?></span></h3>
                </div>
                <div class="property-news-single-card style-two border-bottom-yellow">
                    <?php print render($content['field_vi_tri_ban_do'])?>
                    <?php if ($node->body['und'][0]['value'] != ''):?>
                        <?=$node->body['und'][0]['value']?>
                    <?php endif;?>

                </div>
                <?php if (!empty($node->field_ngoai_that)):?>
                <div class="property-news-single-card border-bottom-yellow">
                    <h4>D???CH V??? MI???N PH??</h4>
                    <div class="row">
                        <?php
                            $terms= array();
                            foreach ($node->field_dich_vu_mien_phi['und'] as $item){
                                foreach ($item as $subItem){
                                    $terms[] = taxonomy_term_load($subItem);
                                }
                            }
                        ?>
                        <?php foreach ($terms as $term):?>
                            <?php if (!empty($term)):?>
                                <div class="col-sm-4">
                                    <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>
                <?php if (!empty($node->field_dich_vu_tra_phi)):?>
                <div class="property-news-single-card border-bottom-yellow">
                    <h4>D???CH V??? TR??? PH?? </h4>
                    <div class="row">
                        <?php
                            $terms= array();
                            foreach ($node->field_dich_vu_tra_phi['und'] as $item){
                                foreach ($item as $subItem){
                                    $terms[] = taxonomy_term_load($subItem);
                                }
                            }
                        ?>
                        <?php foreach ($terms as $term):?>
                            <?php if (!empty($term)):?>
                                <div class="col-sm-4">
                                    <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>
                <?php if (!empty($node->field_noi_that)):?>
                <div class="property-news-single-card border-bottom-yellow">
                    <h4>N???I TH???T</h4>
                    <div class="row">
                        <?php
                            $terms= array();
                            foreach ($node->field_noi_that['und'] as $item){
                                foreach ($item as $subItem){
                                    $terms[] = taxonomy_term_load($subItem);
                                }
                            }
                        ?>
                        <?php foreach ($terms as $term):?>
                            <?php if (!empty($term)):?>
                                <div class="col-sm-4">
                                    <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>
                <?php if (!empty($node->field_trang_thiet_bi)):?>

                <div class="property-news-single-card border-bottom-yellow">
                    <h4>TRANG THI???T B???</h4>
                    <div class="row">
                        <?php
                            $terms= array();
                            foreach ($node->field_trang_thiet_bi['und'] as $item){
                                foreach ($item as $subItem){
                                    $terms[] = taxonomy_term_load($subItem);
                                }
                            }
                        ?>
                        <?php foreach ($terms as $term):?>
                            <?php if (!empty($term)):?>
                                <div class="col-sm-4">
                                    <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>
                <?php if (!empty($node->field_dac_diem_noi_bat_noi_that)):?>
                <div class="property-news-single-card border-bottom-yellow">
                    <h4>?????C ??I???M N???I B???T C???A N???I TH???T</h4>
                    <div class="row">
                        <?php
                            $terms= array();
                            foreach ($node->field_dac_diem_noi_bat_noi_that['und'] as $item){
                                foreach ($item as $subItem){
                                    $terms[] = taxonomy_term_load($subItem);
                                }
                            }
                        ?>
                        <?php foreach ($terms as $term):?>
                            <?php if (!empty($term)):?>
                                <div class="col-sm-4">
                                    <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>
                <?php if (!empty($node->field_ngoai_that)):?>
                <div class="property-news-single-card border-bottom-yellow">
                    <h4>NGO???I TH???T</h4>
                    <div class="row">
                        <?php
                            $terms= array();
                            $keyTerm = array();
                            foreach ($node->field_ngoai_that['und'] as $item){
                                foreach ($item as $subItem){
                                    $terms[] = taxonomy_term_load($subItem);
                                }
                            }
                        ?>
                        <?php foreach ($terms as $term):?>
                            <?php if (!empty($term)):?>
                                <div class="col-sm-4">
                                    <span class="free-service"><i class="fa fa-check"></i><?=$term->name?></span>
                                </div>
                            <?php endif;?>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php endif;?>

            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="widget widget-owner-info mt-lg-0 mt-5">
                    <div class="info-apartment">
                        <?php if ($node->field_dien_tich_su_dung['und'][0]['value'] != ''): ?>

                            <div class="info-item">
                                <div class="left-info">
                                    <span class="icon-area font-14pt pdr-10"></span>
                                    <span class="title-service">Di???n t??ch</span>
                                </div>
                                <div class="right-info">
                                    <span class="number"><?= $node->field_dien_tich_su_dung['und'][0]['value'] ?> m<sup>2</sup></span>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($node->field_so_phong['und'][0]['value'] != ''): ?>
                            <div class="info-item">

                                <div class="left-info">
                                    <span class="icon-bed font-14pt pdr-10"></span>
                                    <span class="title-service">Ph??ng ng???</span>
                                </div>
                                <div class="right-info">
                                    <span class="number"><?= $node->field_so_phong['und'][0]['value'] ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($node->field_so_phong_tam['und'][0]['value'] != ''): ?>
                            <div class="info-item">
                                <div class="left-info">
                                    <span class="icon-bathtub font-14pt pdr-10"></span>
                                    <span class="title-service">Ph??ng t???m</span>
                                </div>
                                <div class="right-info">
                                    <span class="number"><?= $node->field_so_phong_tam['und'][0]['value'] ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($node->field_so_tang)): ?>
                            <div class="info-item">
                                <div class="left-info">
                                    <span class="icon-handrail font-14pt pdr-10"></span>
                                    <span class="title-service">S??? t???ng</span>
                                </div>
                                <div class="right-info">
                                    <span class="number"><?= $node->field_so_tang['und'][0]['value'] ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($node->field_nam_xay_dung)): ?>
                            <div class="info-item">
                                <div class="left-info">
                                    <span class="icon-sketch font-14pt pdr-10"></span>
                                    <span class="title-service">N??m x??y d???ng</span>
                                </div>
                                <div class="right-info">
                                    <span class="number"><?= $node->field_nam_xay_dung['und'][0]['value'] ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($node->field_bon_tam_voi_hoa_sen)): ?>
                            <div class="info-item">
                                <div class="left-info">
                                    <span class="icon-shower font-14pt pdr-10"></span>
                                    <span class="title-service">B???n t???m & v??i hoa sen</span>
                                </div>
                                <div class="right-info">
                                    <span class="number"></span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php
                    if (!empty($node->field_nhan_vien)){
                        $nhanVien = taxonomy_term_load($node->field_nhan_vien['und'][0]['tid']);
                        $pathAvatar = image_style_url('240_x_240', $nhanVien->field_image['und'][0]['uri']);
                    }
                    ?>
                </div>
                <?php if (isset($nhanVien)): ?>
                <div class="widget widget-owner-info mt-20">
                    <div class="owner-info text-center">
                        <?php if ($pathAvatar != ''):?>
                        <div class="thumb">
                            <img src="<?= $pathAvatar ?>" alt="<?= $nhanVien->field_image['und'][0]['alt'] ?>"
                                 title="<?= $nhanVien->field_image['und'][0]['alt'] ?>">
                        </div>
                        <?php endif;?>

                        <div class="details">
                            <h6><?= $nhanVien->name ?></h6>
                            <?php if ($pathAvatar != ''):?>
                            <span class="designation"><?= $nhanVien->field_chuc_vu['und'][0]['value'] ?></span>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="contact-info">
                        <h6 class="mb-3">Th??ng tin li??n h???</h6>
                        <?php if ($nhanVien->field_so_dien_thoai_vn['und'][0]['value'] != ''):?>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <span><a href="tel:<?=$nhanVien->field_so_dien_thoai_vn['und'][0]['value']?>"><?= $nhanVien->field_so_dien_thoai_vn['und'][0]['value']?></a> </span>
                                </div>
                            </div>
                        <?php endif;?>
                        <?php if ($nhanVien->field_email_nv['und'][0]['value'] != ''):?>
                        <div class="media mb-0">
                            <div class="media-left">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <span><a href="mailto: <?= $nhanVien->field_email_nv['und'][0]['value'] ?>"><?= $nhanVien->field_email_nv['und'][0]['value'] ?></a></span>
                            </div>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
                <?php endif;?>

                <?php
                // Show product-sidebar

                    $query = new EntityFieldQuery();
                    $productSideBar = $query->entityCondition('entity_type','node')
                        ->entityCondition('bundle','can_ho')
                        ->fieldCondition('field_du_an','nid',$node->field_du_an['und'][0]['nid'])
                        ->propertyCondition('status',1)
                        ->propertyOrderBy('created','desc')
                        ->range(0,10)
                        ->execute();
                    if (!empty($productSideBar['node'])) {
                        $nids = array_keys($productSideBar['node']);
                        // Now use node_load_multiple() to load the nodes belonging to those node IDs.
                        $nodeProductSideBars = node_load_multiple($nids);
                        // .... continue as before
                    }
                ?>
                <div class="widget widget-owner-info mt-20">
                    <div class="sidebar-box">
                        <h2 class="title-sidebar">C??N H??? KH??C</h2>
                        <div class="product-sidebar">
                            <?php if (isset($nodeProductSideBars)):?>
                                <?php foreach ($nodeProductSideBars as $item):?>
                                    <div class="item-product">
                                        <?php $path_image = image_style_url('450_x_400',$item->field_image['und'][0]['uri'])?>
                                        <a href="/<?=drupal_get_path_alias('node/'.$item->nid)?>" title="<?=$node->title?>">
                                            <img src="<?=$path_image?>" alt="<?=$item->field_image['und'][0]['alt']?>" title="<?=$item->field_image['und'][0]['title']?>">
                                        </a>
                                        <div class="content-product">
                                            <div class="title-product">
                                                <h3 class="truncate-3"><a href="/<?=drupal_get_path_alias('node/'.$item->nid)?>"><?=$item->title?></a></h3>
                                                <span class="price_product"><?=$item->field_gia_bang_chu['und'][0]['value']?></span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <button class="btn btn-danger" data-target="#exampleModal" data-toggle="modal" title="T?? v???n d??? ??n Sun Marina Towner H??? Long" type="button">Nh???n th??ng tin t?? v???n</button>
    </div>
</div>

