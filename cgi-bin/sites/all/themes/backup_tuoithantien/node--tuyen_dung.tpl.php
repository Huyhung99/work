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
<div class="body-tuyen-dung">
  <?='<h3 class="title-tuyendung-page">TUY???N D???NG '.strip_tags($node->title).' TR?????NG M???M NON TU???I TH???N TI??N</h3>'?>
  <p class="thoi-gian-tuyen-dung-lua"><?php $thoihanla=explode('T',$node->field_ngay_ket_thuc_tuyen_dung['und'][0]['value']);
    $date = getdate();
    $ngayconlai=strtotime($thoihanla[0])-$date[0];
    $ngayhethan=''.($ngayconlai/24/60/60).'';

    $thoihan=explode('-',$thoihanla[0]);
    $str=$thoihan[2].'/'.$thoihan[1].'/'.$thoihan[0];

    if(intval($ngayhethan)<=0)
    {
      $ngayhethan='h???t h???n';
      print 'C???p nh???t: ' . $str . ' - B???n ???? <span class="han-ung-tuyen">' . intval($ngayhethan) . '</span> ???ng tuy???n';
    }
    else
    {
      print 'C???p nh???t: '.$str .' - B???n c??n <span class="han-ung-tuyen">'.intval($ngayhethan).'</span> ng??y ????? ???ng tuy???n';
    }
  ?></p>
  <div class="content-body">
    <?php print render($content['body']);?>
  </div>
</div>
