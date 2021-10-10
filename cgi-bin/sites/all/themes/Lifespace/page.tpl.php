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

<div class="togo-fixed-sidebar togo-sidebar-left">
    <div class="togo-header-container">
        <!-- Logo -->
        <div class="logo">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            <?php endif; ?>
        </div>
        <!-- Burger menu -->
        <div class="togo-burger-menu">
            <div class="togo-line-menu togo-line-half togo-first-line"></div>
            <div class="togo-line-menu"></div>
            <div class="togo-line-menu togo-line-half togo-last-line"></div>
        </div>
        <!-- Navigation menu -->
        <nav class="togo-menu-fixed">
            <?php print get_main_menu()?>
        </nav>
        <!-- Menu social media -->
        <div class="togo-menu-social-media">
            <div class="social">
                <a href="https://www.facebook.com/kgslifespace"><i class="ti-facebook"></i></a>
                <a href="tel:0918968990"><span class="zalo"></span></a>
                <a href="mailto:kgs.lifespace@gmail.com"><i class="ti-email"></i></a>
            </div>
            <div class="togo-menu-copyright">
                <p>© 2020 Lifespace thiết kế bởi <a href="minhhien.com.vn">MinhHien Solutions</a></p>
            </div>
        </div>
    </div>
</div>

<div class="togo-side-content">
    <!-- Lines -->
    <!-- Post -->
    <section class="post mt-30 pb-30" data-scroll-index="5">

        <div class="container">
            <?php $col = 12;?>
            <?php if ($page['sidebar_first']): ?>
            <?php $col = 8;?>
            <?php endif;?>
            <div class="row">
                <div class="col-md-<?= $col?> mb-20">
                    <h6 class="small-title">LIFE SPACE</h6>
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <?php if ($breadcrumb): ?>
                        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <!-- Content -->
                <div class="col-md-<?=$col?>">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                            <?php print render($page['help']); ?>
                            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                            <?php print render($page['content']); ?>
                        </div>
                    </div>
                </div>
                <!-- Sidebar -->
                <?php if ($page['sidebar_first']): ?>
                <div class="col-md-4">
                    <div class="side-bar">
                        <?php print render($page['sidebar_first'])?>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </section>

    <section class="contact mt-30 pb-30" data-scroll-index="5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mb-20">
                    <h6 class="small-title">LIFESPACE</h6>
                    <h4 class="title">Liên hệ</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <?php if ($page['col1_footer']) print html_entity_decode(render($page['col1_footer']))?>
                </div>
                <div class="col-md-4">
                    <?php if ($page['col2_footer']) print html_entity_decode(render($page['col2_footer']))?>
                </div>
                <div class="col-md-4">
                    <?php if ($page['col3_footer']) print html_entity_decode(render($page['col3_footer']))?>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 offset-md-3">
                    <?php if ($page['form_contact']) print render($page['form_contact'])?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center pos-re">
        <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-8">
                    <?php if ($page['copyright']) print html_entity_decode(render($page['copyright']))?>
                </div>
            </div>
        </div>
    </footer>
</div>
