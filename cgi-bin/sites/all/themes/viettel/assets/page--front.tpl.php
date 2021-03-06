<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<?php print render($page['content']['metatags']); ?>
<header class="header">
    <!-- haeader Mid Start -->
    <div class="haeader-bottom-area bg-menu header-sticky">
        <div class="haeader-mid-area border-bm-1 d-none d-lg-block bgc-gray">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <div class="logo-area">
                            <?php if ($logo): ?>
                                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                                   id="logo">
                                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <!--            --><?php //if ($page['center_header']) print  html_entity_decode(render($page['center_header']))?>
                        <div class="center-header">
                            <span class="item-center-header"><a href="#"><i class="fas fa-globe"></i> Gi???i thi???u Viettel </a></span>
                            <span class="item-center-header"><a href="#"><i class="fas fa-newspaper"></i> Tin t???c s??? ki???n</a></span>
                            <span class="item-center-header"><i class="fas fa-phone-square"></i> Hotline kinh doanh:<a href="tel:0868626057">0868626057</a></span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right-blok-box text-white d-flex ">
                            <div class="shopping-cart-wrap d-none d-sm-block">
                                <?php if ($page['form_front_search']) print render($page['form_front_search']) ?>
                            </div>

                            <div class="mobile-menu-btn d-block d-lg-none">
                                <div class="off-canvas-btn">
                                    <a href="#"><img src="/sites/default/files/bg-menu.png" alt="Ph?? An"></a>
                                </div>
                            </div>
                        </div>

                        <!--              --><?php //if ($page['right_header']) print  html_entity_decode(render($page['right_header']))?>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="main-menu-area white_text">
                        <!--  Start Mainmenu Nav-->
                        <nav class="main-navigation">
                            <?php print getMainMenuMinhHienStore(); ?>
                        </nav>
                    </div>
                </div>
                <div class="col-5 col-md-6 d-block d-lg-none">
                    <div class="logo">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                               id="logo">
                                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                        <div class="col-lg-4 col-md-6 col-7">
                          <div class="right-blok-box text-white d-flex ">
                            <div class="shopping-cart-wrap d-none d-sm-block">
<!--                              --><?php //if ($page['form_front_search']) print render($page['form_front_search'])?>
                            </div>

                            <div class="mobile-menu-btn d-block d-lg-none">
                              <div class="off-canvas-btn">
                                <a href="#"><img src="/sites/default/files/bg-menu-1.png" alt="Ph?? An"></a>
                              </div>
                            </div>
                          </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- haeader bottom End -->


    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fas fa-times"></i>
            </div>

            <div class="off-canvas-inner">
                <div class="search-box-offcanvas">
                    <?php if ($page['search_mobile']) print render($page['search_mobile']) ?>
                </div>

                <!-- mobile menu start -->
                <div class="mobile-navigation">

                    <!-- mobile menu navigation start -->
                    <nav>
                        <?php print getMainMenuMobileMinhHienStore() ?>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->


                <!-- offcanvas widget area start -->
                <!--        <div class="offcanvas-widget-area">-->
                <!--          <div class="top-info-wrap text-left text-black">-->
                <!--            <h5>Gi??? h??ng c???a b???n</h5>-->
                <!--            <ul class="offcanvas-account-container">-->
                <!--              <li><a href="/cart">Gi??? h??ng</a></li>-->
                <!--              <li><a href="/checkout">Thanh to??n</a></li>-->
                <!--            </ul>-->
                <!--          </div>-->
                <!---->
                <!--        </div>-->
                <!-- offcanvas widget area end -->
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->

</header>
<!-- Hero Section Start -->
<div class="hero-slider-area">
    <?php if ($page['slider']) print render($page['slider']) ?>
</div>
<!-- Hero Section End -->
<?php if ($page['introduction']) print html_entity_decode(render($page['introduction'])) ?>
<div class="container">
    <?php if ($page['main_front']) print render($page['main_front']); ?>
</div>
<?php //if ($page['html_main_front']) print html_entity_decode(render($page['html_main_front'])); ?>
<?php if($page['bottom_main_front']) print render($page['bottom_main_front']) ;?>
<?php //if ($page['bottom_html_main_front']) print html_entity_decode(render($page['bottom_html_main_front'])); ?>
<footer>
    <div class="footer-top section-pb section-pt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-footer ">
                        <div class="contact-call-wrap text-center mb-40">
                            <a href="/" title="Viettel"><img src="/sites/default/files/logo_1.png" alt="C??NG TY TNHH PH??NG CH??Y CH???A CH??Y PH?? AN" loading="lazy"></a>
                        </div>
                        <div class="footer-addres">
                            <p>WEBSITE MUA S???M ONLINE CH??NH TH???C C???A VIETTEL.</p>
                            <p> C?? quan ch??? qu???n: T???ng C??ng ty Vi???n th??ng Viettel (Viettel Telecom) - Chi nh??nh T???p ??o??n C??ng nghi???p - Vi???n th??ng Qu??n ?????i.</p>
                            <p>M?? s??? doanh nghi???p: 0100109106-011 do S??? K??? ho???ch v?? ?????u t?? Th??nh ph??? H?? N???i c???p l???n ?????u ng??y 18/07/2005, s???a ?????i l???n th??? 15 ng??y 18/12/2018.</p>
                            <p>Ch???u tr??ch nhi???m n???i dung: ??ng Cao Anh S??n</p>
                        </div>
                    </div>

                    <!--                    --><?php //if ($page['col_1']) print html_entity_decode(render($page['col_1'])) ?>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">D???ch v??? di ?????ng</h6>
                        <ul class="footer-list">
                            <li><a href="#">G??i c?????c data</a></li>
                            <li><a href="#">Mua sim s???</a></li>
                            <li><a href="#">Chuy???n sang tr??? sau</a></li>
                            <li><a href="#">D???ch v??? GTGT</a></li>
                            <li><a href="#">D???ch v??? qu???c t???</a></li>
                            <li><a href="#">??i???n tho???i - Thi???t b???</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Internet - Truy???n h??nh</h6>
                        <ul class="footer-list">
                            <li><a href="#">Internet</a></li>
                            <li><a href="#">Truy???n h??nh</a></li>
                            <li><a href="#">Combo Internet - Truy???n h??nh</a></li>
                        </ul>
                    </div>
<!--                    --><?php //if ($page['col_2']) print html_entity_decode(render($page['col_2'])) ?>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">???ng d???ng s???</h6>
                        <ul class="footer-list">
                            <li><a href="#">My Viettel</a></li>
                            <li><a href="#">5Dmax</a></li>
                            <li><a href="#">Onme</a></li>
                            <li><a href="#">Myclip</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Viettel ++</h6>
                        <ul class="footer-list">
                            <li><a href="#">??u ????i ch????ng tr??nh</a></li>
                            <li><a href="#">Th??ng tin h???i vi??n</a></li>
                            <li><a href="#">Gi???i thi???u Viettel ++</a></li>
                        </ul>
                    </div>
<!--                    --><?php //if ($page['col_3']) print render($page['col_3']) ?>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">H??? tr??? kh??ch h??ng</h6>
                        <ul class="footer-list">
                            <li><a href="#">Qu???n L?? Ch???t L?????ng D???ch v???</a></li>
                            <li><a href="#">??i???u kho???n s??? d???ng</a></li>
                            <li><a href="#">Ch??nh s??ch b???o m???t th??ng tin c?? nh??n</a></li>
                            <li><a href="#">Ch??nh s??ch gi???i quy???t khi???u n???i</a></li>
                            <li><a href="#">Quy ch??? ho???t ?????ng TM??T</a></li>
                            <li><a href="#">Quy tr??nh mua b??n</a></li>
                            <li><a href="#">Ch??nh s??ch v???n chuy???n</a></li>
                            <li><a href="#">Ch??nh s??ch thanh to??n</a></li>
                            <li><a href="#">Ch??nh s??ch ?????i tr???</a></li>
                            <li><a href="#">T??m ki???m c???a h??ng</a></li>
                            <li><a href="#">Chat online v???i CSKH</a></li>
                            <li><a href="#">C??u h???i th?????ng g???p</a></li>
                            <li><a href="#">Video h?????ng d???n</a></li>
                            <li><a href="#">Chuy???n m???ng gi??? s???</a></li>
                            <li><a href="#">G??p ?? s???n ph???m d???ch v???</a></li>
                            <li><a href="#">G???i video call v???i t???ng ????i CSKH</a></li>
                        </ul>
                    </div>
<!--                    --><?php //if ($page['col_4']) print (render($page['col_4'])) ?>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="widget-footer">
                        <h6 class="title-widget">Ti???n ??ch</h6>
                        <ul class="footer-list">
                            <li><a href="#">Chuy???n ?????i thu?? bao tr??? tr?????c tr??? sau</a></li>
                            <li><a href="#">?????i sim</a></li>
                            <li><a href="#">Ki???m tra th??ng tin th??? c??o</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Qu???n l?? c?????c</h6>
                        <ul class="footer-list">
                            <li><a href="#">Tra c???u c?????c</a></li>
                            <li><a href="#">Thanh to??n c?????c</a></li>
                            <li><a href="#">H??a ????n ??i???n t???</a></li>
                        </ul>
                    </div>
                    <div class="widget-footer">
                        <h6 class="title-widget">Qu???n l?? t??i kho???n</h6>
                        <ul class="footer-list">
                            <li><a href="#">Th??ng tin thu?? bao</a></li>
                            <li><a href="#">D???ch v??? ??ang s??? d???ng</a></li>
                            <li><a href="#">Khuy???n m???i d??nh cho b???n</a></li>
                        </ul>
                    </div>
                    <!--                    --><?php //if ($page['col_4']) print (render($page['col_4'])) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="copy-left-text">
                        <p class="item-bottom-footer"><i class="fas fa-map-marker-alt">&nbsp;</i>Tr??? s???: S??? 1 Giang V??n Minh, P Kim M??, Q Ba ????nh.</p>
                        <p class="item-bottom-footer"><i class="fa fa-phone">&nbsp;</i> Ch??m s??c kh??ch h??ng: 1800 8098/198 (mi???n ph??)</p>
<!--                        --><?php //if ($page['bottom_footer']) print html_entity_decode(render($page['bottom_footer'])) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
