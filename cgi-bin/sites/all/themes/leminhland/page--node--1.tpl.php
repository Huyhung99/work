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

<!-- navbar start -->
<div class="navbar-area">
    <nav class="navbar navbar-area navbar-expand-lg navbar-area-3">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-target="#realdeal_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="btn btn-yellow" href="add-new-property.html">ADD LISTING <span class="right"><i class="la la-plus"></i></span></a>
            </div>
            <div class="collapse navbar-collapse" id="realdeal_main_menu">
                <?php print getMenuLeMinhLand()?>
            </div>
        </div>
    </nav>
</div>


<div class="breadcrumb-area jarallax" style="background-image:url('/sites/all/themes/leminhland/assets/img/bg/4.png');">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php if ($breadcrumb||$title): ?>
          <div class="breadcrumb-inner">
            <?php print '<h1 class="page-title">'.$title.'</h1><ul class="page-list">
            <li><a href="'.$front_page.'">Trang ch???</a></li>
            <li>'.$title.'</li>
          </ul>'; ?></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<!-- footer area start -->
<div class="contact-area pd-top-100 pd-bottom-65">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="contact-page-map">
          <?php if ($page['form_lien_he']) {
            print html_entity_decode(render($page['form_lien_he']));
          } ?>
        </div>
      </div>
      <div class="col-lg-4">
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</div>
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <?php if ($page['footer_col_1']) print render($page['footer_col_1'])?>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">Li??n k???t</h4>
                    <ul>
                        <li><a href="https://leminhland.com/">Trang ch???</a></li>
                        <li><a href="/gioi-thieu">Gi???i thi???u</a></li>
                        <li><a href="/du-an">D??? ??n</a></li>
                        <li><a href="/can-ho">C??n h???</a></li>
                        <li><a href="/san-pham">S???n ph???m</a></li>
                        <li><a href="/lien-he">Li??n h???</a></li>
                    </ul>
                </div>
                <?php if ($page['footer_col_2']) print render($page['footer_col_2'])?>
            </div>
            <div class="col-lg-4 col-sm-6">
                <?php if ($page['footer_col_3']) print render($page['footer_col_3'])?>
            </div>
        </div>
        <div class="copy-right text-center">
            ?? 2021 - Leminhland  <i class="fa fa-heart"></i> thi???t k??? b???i <a href="https://minhhien.com.vn/" target="_blank"> <span> MinhHien Solutions</span></a>.
            <?php if ($page['bottom_footer']) print render($page['bottom_footer'])?>
        </div>
    </div>
</footer>

<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
  <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
