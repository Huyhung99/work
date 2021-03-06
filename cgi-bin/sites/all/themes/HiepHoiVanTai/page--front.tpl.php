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

<header class="header-style-two">
    <div class="header-wrapper">
        <div class="header-top-area bg-blue d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 header-top-left-part">
                        <?php if ($page['header_left']) print html_entity_decode(render($page['header_left']))?>
                    </div>
                    <!--                    <div class="col-lg-6 header-top-right-part text-right">-->
                    <!--                        <ul class="social-links">-->
                    <!--                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>-->
                    <!--                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>-->
                    <!--                        </ul>-->
                    <!--                        <div class="language">-->
                    <!--                            <a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i> English</a>-->
                    <!--                            <ul class="language-dropdown">-->
                    <!--                                <li><a href="#">English</a></li>-->
                    <!--                                <li><a href="#">Bangla</a></li>-->
                    <!--                                <li><a href="#">French</a></li>-->
                    <!--                                <li><a href="#">Spanish</a></li>-->
                    <!--                                <li><a href="#">Arabic</a></li>-->
                    <!--                            </ul>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
        <div class="bt_blank_nav"></div>
        <div class="header-navigation-area two-layers-header header-middlee bt_stick bt_sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ($logo): ?>
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo" class="navbar-brand logo f-left  mrt-md-0">
                                <img id="logo-image" class="img-center" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                            </a>
                        <?php endif; ?>
                        <div class="mobile-menu-right"></div>
                        <div class="header-searchbox-style-two d-none d-xl-block">
                            <div class="side-panel side-panel-trigger text-right d-none d-lg-block">
                                <span class="bar1"></span>
                                <span class="bar2"></span>
                                <span class="bar3"></span>
                            </div>
                            <div class="show-searchbox">
                                <a href="#"><i class="webex-icon-Search"></i></a>
                            </div>
                            <div class="toggle-searchbox">
                                <form action="/tim-kiem" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="form-control" placeholder="Search..." name="title">
                                        <div class="input-box">
                                            <input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="side-panel-content">
                            <div class="close-icon">
                                <button><i class="webex-icon-cross"></i></button>
                            </div>
                            <div class="side-panel-logo mrb-30">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                                    </a>
                                <?php endif; ?>
                            </div>
                            <div class="side-info mrb-30">
                                <div class="side-panel-element mrb-25">
                                    <h4 class="mrb-10">?????a ch??? v??n ph??ng</h4>
                                    <ul class="list-items">
                                        <li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>X??m An L???i, X?? An L??, Huy???n Th???y Nguy??n, TP H???i Ph??ng</li>
                                        <li><span class="fas fa-envelope mrr-10 text-primary-color"></span><a href="mailto:hainamhipco2@gmail.com">hainamhipco2@gmail.com</a></li>
                                        <li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span><a href="tel:0902038.">0902.038.379</a></li>
                                    </ul>
                                </div>
                                <div class="side-panel-element mrb-30">
                                    <?php if ($page['sidebar_front']) print render($page['sidebar_front'])?>
                                </div>
                            </div>
                            <!--                            <h4 class="mrb-15">C??c n???n t???ng m???ng x?? h???i</h4>-->
                            <!--                            <ul class="social-list">-->
                            <!--                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>-->
                            <!--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                            <!--                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            <!--                                <li><a href="#"><i class="fab fa-google-plus"></i></a></li>-->
                            <!--                            </ul>-->
                        </div>
                        <div class="main-menu f-right">
                            <nav id="mobile-menu-right">
                                <?php print getMainMenuHiepHoiVanTai()?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php if ($page['main_content_front']) print render($page['main_content_front'])?>
<section class="pdb-40 pdt-50 pdt-sm-30 pdb-sm-40" data-background="/sites/default/files/cameron-venti-1cqicrwfqbi-unsplash.jpg" data-overlay-dark="8">
    <div class="section-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="popup-video-block video-popup">
                        <img class="img-full d-none d-lg-block" src="/sites/default/files/banner-contact.jpg" alt="AP Food">
                        <a href="https://www.youtube.com/watch?v=Fvae8nxzVz4" class="popup-video popup-youtube">
                            <i class="webexflaticon flaticon-play-button-2" aria-hidden="true"></i>
                            <span class="pulse-animation"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mrb-sm-110">
                    <div class="request-a-call-back-form">
                        <h3 class="mrt-0 mrb-20 solid-bottom-line">K???t n???i v???i ch??ng t??i</h3>
                        <p class="mrb-30">Hi??p h???i v???n t???i ??o??n k???t An L?? ???? lu??n l?? th????ng hi???u tin t?????ng tuy???t ?????i c???a c??c ?????i t??c v?? kh??ch h??ng th??n qu??.</p>
                        <?php
                        webform_node_view(node_load(19),'full');
                        print theme_webform_view(node_load(19)->content);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($page['bottom_main_content_front']) print render($page['bottom_main_content_front'])?>
<footer class="footer">
    <div class="footer-main-area" data-background="/sites/all/themes/HiepHoiVanTai/assets/images/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <?php if ($page['footer_col_1']) print render($page['footer_col_1'])?>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="widget footer-widget">
                        <h5 class="widget-title text-white mrb-30">LI??N K???T</h5>
                        <?php print getMenuFooter()?>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <?php if ($page['footer_col_3']) print render($page['footer_col_3'])?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text-center">
                        <span class="text-light-gray">?? 2021 Thi???t k??? b???i <a class="text-primary-color" target="_blank" href="//minhhien.com.vn"> MinhHien Solutions</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>



