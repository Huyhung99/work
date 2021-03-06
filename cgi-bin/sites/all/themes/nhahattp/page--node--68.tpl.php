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
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php print render($page['content']['metatags']); ?>
<!-- Header Area Start -->
<header class="header-area fixed header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="logo">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                </div>
            </div>
            <div class="col-md-9 hidden-xs">
                <?php if ($page['header_top']) print html_entity_decode(render($page['header_top']))?>
                <!-- Mainmenu Start -->
                <div class="main-menu hidden-xs pull-right">
                    <nav>
                        <?php print getMainMenuFLC()?>
                    </nav>
                </div>
                <!-- Mainmenu End -->
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <?php print getMainMenuFLC()?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Area end -->
</header>


<section class="breadcrumb-area overlay-dark-2 bg-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text text-center">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb">
                            <?php if ($breadcrumb): ?>
                                <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="room-area pt-90 room-grid">
    <div class="container">
        <div class="row">
            <?php
                $col = 6;
                ?>
            <div class="col-md-<?=$col?> col-lg-<?=$col?>">
                <?php print $messages; ?>
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['content']); ?>
            </div>
            <div class="col-md-6">
                <?php if ($page['booking']) print render($page['booking'])?>
            </div>
        </div>
    </div>
</section>
<!-- Footer Bottom Area Start -->
<footer class="footer-area">
  <!-- Footer Widget Start -->
  <div class="footer-widget-area bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-xs-12">
          <?php print getNodeContent(14) ?>
        </div>
        <div class="col-md-3 col-xs-12">
          <?php print getNodeContent(15) ?>
        </div>
        <div class="col-md-4 col-xs-12">
          <?php print getNodeContent(16) ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer Widget End -->
  <!-- Footer Bottom Area Start -->
  <?php if($page['footer']) print str_replace('2020', date("Y"), render($page['footer']))?>

  <!-- Footer Bottom Area End -->
</footer>



