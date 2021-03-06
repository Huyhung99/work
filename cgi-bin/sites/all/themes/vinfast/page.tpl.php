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
<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <ul class="top-header-information">
                    <li>
                        <i class="flaticon-pin"></i>
                        565, Nyman Tower Melbourne, Australia
                    </li>
                    <li>
                        <i class="flaticon-clock"></i>
                        Monday 8:00 AM - 12:00 PM
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area navbar-two">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    <?php if ($logo): ?>
                        <a href="<?php print $front_page; ?>" title="<?php print t('VinFast H???i Ph??ng'); ?>" rel="home" id="logo">
                            <img src="<?php print $logo; ?>" alt="<?php print t('VinFast H???i Ph??ng'); ?>" />
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <?php if ($logo): ?>
                    <a  class="navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('VinFast H???i Ph??ng'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('VinFast H???i Ph??ng'); ?>" />
                    </a>
                <?php endif; ?>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <?php print getMenuVinfast()?>
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
                            <span>Hotline:
                            <a href="tel:882563789966">(+882) 563 789 966</a>
                            </span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option d-flex align-items-center">
                        <div class="option-item">
<span>
Hotline:
<a href="tel:882563789966">(+882) 563 789 966</a>
</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-banner-area item-bg3">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <?php print render($title_prefix); ?>
                    <?php if ($title): ?><h1 id="page-title"><?php print $title; ?></h1><?php endif; ?>
                    <?php print render($title_suffix); ?>
                    <ul>
                        <?php if ($breadcrumb): ?>
                            <li class="breadcrumb-item"><?php print str_replace(' ?? ','|',$breadcrumb); ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="products-details-area ptb-30">
    <?php print $messages;?>
    <div class="container">
        <div class="row">
            <?php $col = 12;
            if ($page['sidebar_first']): ?>
                <?php $col = 8; ?>
            <?php endif;?>
            <div class="col-lg-<?=$col?> col-md-<?=$col?>">
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
            </div>
            <?php if ($page['sidebar_first']): ?>
                <div class="col-lg-4 col-md-4">
                    <aside class="widget-area">
                        <?php print render($page['sidebar_first']); ?>
                    </aside>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>