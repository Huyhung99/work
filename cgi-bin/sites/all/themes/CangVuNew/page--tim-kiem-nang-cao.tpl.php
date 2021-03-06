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
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo1">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
                <?php endif; ?>
            </span>
        </div>
        <?php if($page['header_slider']) print render($page['header_slider'])?>


        <!-- HEADER WIDGETS -->
        <div class="hero-widget clearfix">
            <div class="container">
                <?php if($page['header_banner']) print html_entity_decode(render($page['header_banner'])) ?>
            </div>
        </div>	<!-- END HEADER WIDGETS -->
        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">
                <!-- LOGO IMAGE -->
                <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
                <div class="desktoplogo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <nav class="wsmenu clearfix">
                            <?php print getMainMenuPhuongNguyenGrp(); ?>
                        </nav>	<!-- END MAIN MENU -->
                    </div>
                </div>
                <!-- MAIN MENU -->
                <!-- NAVIGATION MENU BUTTON -->
            </div>
        </div>	<!-- END NAVIGATION MENU -->
    </header>	<!-- END HEADER -->
    <!-- END HEADER -->


    <!-- END HEADER -->
    <div class="bgc-breadcrumb">
        <div class="container">
            <?php if ($breadcrumb): ?>
                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
            <?php endif; ?>
        </div>	<!-- End container -->
    </div>	<!-- END BREADCRUMB -->

    <!--    body-->
    <?php print $messages;?>
    <div id="blog-page" class="wide-40 blog-page-section division">
        <div class="container">
            <div class="row">
                <?php $col = 12?>
                <?php if ($page['sidebar_first']): ?>
                    <?php $col = 8?>
                <?php endif;?>
                <div class=" col-md-<?=$col?> col-lg-<?=$col?>">
                    <div class="posts-holder ">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($page['title_search']) print render($page['title_search']);?>
                            </div>
                            <div class="col-md-4">
                                <?php if ($page['term_search']) print render($page['term_search'])?>
                            </div>
                            <div class="col-md-4">
                                <?php if ($page['bussinesses_search']) print render($page['bussinesses_search'])?>
                            </div>
                        </div>
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
                <!-- END SIDEBAR -->


            </div>	<!-- End row -->
        </div>	 <!-- End container -->
    </div>	<!-- END BLOG PAGE CONTENT -->
    <!--        end body-->
    <footer id="footer-1" class="p-60 footer division">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <?php if ($page['content_footer']) print html_entity_decode(render($page['content_footer']))?>

            <!-- FOOTER COPYRIGHT -->
        </div>	   <!-- End container -->
    </footer>	<!-- END FOOTER-2 -->

    <!-- END FOOTER-2 -->

</div>
<!--service-->


