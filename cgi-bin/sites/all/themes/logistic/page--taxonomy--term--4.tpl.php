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

<div class="page-wraper">
    <header class="site-header header-style-6">

        <div class="top-bar top-bar-liner bgc-red">
            <div class="container">
                <div class="row">
                    <div class=" clearfix">
                        <ul class="list-unstyled pull-left tb-info-liner">
                            <?php if ($page['left_top_header']) print render($page['left_top_header'])?>
                        </ul>
                        <ul class="list-inline pull-right tb-social-liner">
                            <?php if ($page['right_top_header']) print html_entity_decode(render($page['right_top_header']))?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Link -->

        <div class="main-bar header-middle bg-white">
            <div class="container">
                <div class="logo-header">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
                <?php if($page['right-logo-header']) print html_entity_decode(render($page['right-logo-header']))?>
            </div>
        </div>

        <div class="sticky-header main-bar-wraper">
            <div class="main-bar header-botton nav-bg-primary">
                <div class="container">
                    <!-- NAV Toggle Button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- ETRA Nav -->


                    <!-- MAIN Vav -->
                    <div class="header-nav navbar-collapse collapse ">
                        <?php print getMainMenuLogistic()?>
                    </div>
                </div>
            </div>
        </div>

    </header>





    <div class="page-content">
        <!-- Inner Banner -->
        <div class="mt-bnr-inr overlay-wraper" style="background-image:url(/sites/all/themes/logistic/assets/images/banner/blog-banner.jpg);">
            <div class="overlay-main bg-black opacity-07"></div>
            <div class="container">
                <div class="mt-bnr-inr-entry">
                    <?php if ($title): ?><h1 class="title text-white" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <!-- Breadcrumb -->
                    <ul class="mt-breadcrumb breadcrumb-style-1">
                        <?php if ($breadcrumb): ?>
                            <li id="breadcrumb"><?php print $breadcrumb; ?></li>
                        <?php endif; ?>
                    </ul>

                </div>
            </div>
        </div>

        <div class="section-full p-t80 p-b50">
            <div class="container">
                <div class="row">
                    <?php $col = 12; ?>
                    <?php if($page['sidebar_first']){
                        $col = 9;
                    } ?>
                    <div class="col-md-<?=$col?> m-b30">
                        <?php print $messages; ?>
                        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                        <?php if ($page['hinhanh']) print render($page['hinhanh'])?>
                    </div>

                    <!-- Side Right -->
                    <?php if($page['sidebar_first']): ?>
                        <div class="col-md-3">
                            <aside  class="side-bar">
                                <?php  print render($page['sidebar_first'])?>
                            </aside>
                        </div>
                    <?php endif;?>

                </div>
            </div>

        </div>
        <footer class="site-footer footer-dark">
            <!-- Footer Top Part -->
            <div class="footer-top overlay-wraper">
                <div class="overlay-main"></div>
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-5 col-xs-12">
                            <?php if ($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])) ?>
                        </div>
                        <!-- Useful Links -->
                        <div class="col-md-3 col-xs-12">
                            <?php if ($page['col_2_footer']) print html_entity_decode(render($page['col_2_footer']))?>
                        </div>
                        <!-- Resent Post -->
                        <div class="col-md-4 col-xs-12">
                            <?php if ($page['col_3_footer']) print html_entity_decode(render($page['col_3_footer']))?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright Part -->
            <div class="footer-bottom overlay-wraper bg-white">
                <div class="overlay-main"></div>
                <div class="container p-t10">
                    <?php if ($page['lower_footer']) print html_entity_decode(render($page['lower_footer']))?>
                </div>
            </div>
        </footer>
        <button class="scroltop"><span class="fa fa-space-shuttle relative" id="btn-vibrate"></span></button>
    </div>
