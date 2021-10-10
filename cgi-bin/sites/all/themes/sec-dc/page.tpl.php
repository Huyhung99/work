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
<div id="page" class="page">
    <header id="header-2" class="header ">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo">
                <div class="logo-mobile">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-fluid"/>
                        </a>
                    <?php endif; ?>
                </div>
            </span>
            <a href="tel:0904454088" class="callusbtn rounded-pill"><i class="fas fa-phone-alt"></i></a>
        </div>
        <!-- HEADER WIDGETS -->
        <div class="hero-widget clearfix">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <!-- LOGO IMAGE -->
                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                    <div class="col-md-4 col-xl-4">
                        <div class="logo-desktop">
                            <div class="desktoplogo">
                                <?php if ($logo): ?>
                                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"
                                       id="logo">
                                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"
                                             class="img-fluid"/>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-8">
                        <div class="row">

                            <!-- Emergency Cases Widget -->
                            <div class="col-md-4">
                                <?php if ($page['hotline_header']) print html_entity_decode(render($page['hotline_header'])) ?>
                            </div>

                            <!-- Location Widget -->
                            <div class="col-md-4">
                                <?php if ($page['location_header']) print html_entity_decode(render($page['location_header'])) ?>
                            </div>
                            <div class="col-md-4">
                                <?php if ($page['open_time_header']) print html_entity_decode(render($page['open_time_header'])) ?>
                            </div>

                        </div>
                    </div>    <!-- END WIDGETS -->

                </div>
            </div>
        </div>    <!-- END HEADER WIDGETS -->
        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">

                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <?php print getMainMenuPhuongNguyenGrp(); ?>
                </nav>    <!-- END MAIN MENU -->

                <!-- NAVIGATION MENU BUTTON -->
                <div class="header-button">
          <span class="nl-simple header-btn blue-hover">
            <?php print l('<i class="fas fa-gift"></i> NHẬN ƯU ĐÃI', 'lien-he', array('html' => true)); ?>
          </span>
                </div>

            </div>
        </div>    <!-- END NAVIGATION MENU -->
    </header>    <!-- END HEADER -->


    <!-- END HEADER -->


    <div id="breadcrumb " class="division pattern-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class=" breadcrumb-holder">

                        <!-- Title -->
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?><h1 class="title h4-sm steelblue-color" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                        <?php print render($title_suffix); ?>
                        <!-- Breadcrumb Nav -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <?php if ($breadcrumb): ?>
                                    <li class="breadcrumb-item"><?php print $breadcrumb; ?></li>
                                <?php endif; ?>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>  <!-- End row -->
        </div>	<!-- End container -->
    </div>	<!-- END BREADCRUMB -->

<!--    body-->
    <div id="blog-page" class="wide-40 blog-page-section division">
        <?php print $messages?>
        <div class="container">
            <div class="row">
                <?php $col = 12?>
                <?php if ($page['sidebar_first']): ?>
                <?php $col = 8?>
                <?php endif;?>
                <div class=" col-md-<?=$col?> col-lg-<?=$col?>">
                    <div class="posts-holder pr-30">
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php print render($page['help']); ?>
                        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                        <?php print render($page['content']); ?>
                    </div>
                </div>

                <!-- SIDEBAR -->
                <?php if ($page['sidebar_first']): ?>
                    <aside id="sidebar" class="col-md-4 col-lg-4">
                        <?php print render($page['sidebar_first']); ?>
                    </aside>
                <?php endif;?>
            </div>	<!-- End row -->
        </div>	 <!-- End container -->
    </div>	<!-- END BLOG PAGE CONTENT -->
    <footer id="footer-1" class="bg-image pt-30 footer division">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <div class="row">
                <!-- FOOTER INFO -->
                <div class="col-md-6 col-lg-4">
                    <?php if ($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])); ?>
                </div>    <!-- END FOOTER INFO -->

                <!-- FOOTER PRODUCTS LINKS -->
                <div class="col-md-6 col-lg-2 col-4">
                    <div class="footer-links"><!-- Title -->
                        <h5 class="h5-xs">LIÊN KẾT</h5>
                        <!-- Footer List -->
                        <?php print getMenuOther('menu-lien-ket-footer'); ?>
                    </div>
                </div>
                <!-- FOOTER COMPANY LINKS -->
                <div class="col-md-6 col-lg-3 col-8">
                    <?php if ($page['col_3_footer']) print render($page['col_3_footer']); ?>
                </div>
                <div class="col-md-6 col-lg-3">
                    <?php if ($page['col_4_footer']) print render($page['col_4_footer']); ?>
                </div>
                <!-- FOOTER NEWSLETTER FORM -->
            </div>      <!-- END FOOTER CONTENT -->
            <!-- FOOTER COPYRIGHT -->
            <div class="bottom-footer">
                <div class="col-md-12">
                    <p class="footer-copyright">&copy; <?php print date('Y') ?> <span>Trung tâm thể dục thể thao SEC - HG</span>.
                        Thiết kế bởi <a href="//minhhien.com.vn" target="_blank"><span>MinhHien Solutions</span></a></p>
                </div>
            </div>
        </div>       <!-- End container -->
    </footer>    <!-- END FOOTER-2 -->
    <!-- END FOOTER-2 -->
</div>



