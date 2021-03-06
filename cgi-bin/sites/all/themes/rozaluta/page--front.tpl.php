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

<div class="wrapper">
    <!-- Header Area Start Here -->
  <header>
    <div class="header2-area">
      <div class="header-top-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="header-top-left">
                <?php if ($page['top_header']) print html_entity_decode(render($page['top_header']))?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-bottom-area" id="sticker">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
              <div class="logo-area">
                <?php if ($logo): ?>
                  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img class="img-responsive" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                  </a>
                <?php endif; ?>
              </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
              <div class="main-menu-area">
                <nav>
                  <?php print getMainMenuRozaluta(); ?>
                </nav>
              </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
              <ul class="header-cart-area">
                <li class="header-search">
                  <?php if($page['header_search']) print render($page['header_search']);?>
                </li>
                <li>
                  <?php if($page['mini_cart_wrap']) print render($page['mini_cart_wrap']) ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area Start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <?php print getMainMenuRozaluta(); ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu Area End -->
  </header>
    <?php if($page['slider']) print html_entity_decode(render($page['slider'])) ?>
    <div class="food-menu4-area">
        <div class="container menu-list-wrapper">
            <h1 class="title-color"><?php print t('S???N PH???M ROZALUTA') ?></h1>
            <span class="subtitle-color">S???a chua truy???n th???ng Bulgari</span>
            <div class="menu-list">
              <div class="row">
                <div class="col-md-3">
                  <?php if($page['banner_right']) print html_entity_decode(render($page['banner_right']))?>
                </div>
                <div class="col-md-9">
                  <div class="row"><?php if($page['product_left']) print render($page['product_left'])?>
                    <?php if($page['main_product_1']) print render($page['main_product_1']) ?>  </div>
                </div>
              </div>

              <div class="row">
                <?php if($page['banner_left']) print html_entity_decode(render($page['banner_left']) )?>
                <?php if($page['product_right']) print render($page['product_right']) ?>
              </div>
            </div>
        </div>
    </div>
    <?php if($page['main_content_front']) print render($page['main_content_front']) ?>
  <footer>
    <div class="footer-area-top section-space">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php if($page['col_1_footer']) print html_entity_decode(render($page['col_1_footer'])) ?>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <?php if($page['col_2_footer']) print render($page['col_2_footer']) ?>
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
            <?php if($page['col_3_footer']) print render($page['col_3_footer']) ?>
          </div>
          <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12">
            <?php if($page['col_4_footer']) print render($page['col_4_footer']) ?>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <p class="mb-10">&copy; <?=date("Y")?> Rozaluta.Thi???t k??? b???i<a target="_blank" href="http://minhhien.com.vn"> MinhHien Solutions</a></p>
      </div>
    </div>

  </footer>

  <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-left">
          <h4 class="modal-title ">S???a chua Rozaluta - S???a chua truy???n th???ng Bulgari</h4>
        </div>
        <div class="modal-body text-center">
          <img src="https://rozaluta.com/sites/default/files/styles/810_x_861/public/_un_2838.jpg?itok=gNQs4Oi9" width="150px" alt="S???a chua Rozaluta">
          <p class="text-center mt-20">
            <a href="/" class="btn btn-primary text-center modal-popup""><i class="fa fa-cart-plus icon mr-10"></i>?????t h??ng ngay</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Area End Here -->
</div>

