<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
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
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
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
 * - $page['content']: The main content of the current page.
 * - $page['sidebar']: Items for the sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div id="page-wrapper"><div id="page">

    <div id="header"><div class="section clearfix">

        <a href="<?php print $front_page; ?>"><img src="<?php print $base_path . $directory; ?>/images/banner.jpg" /></a>
        <?php print render($page['header']); ?>

    </div></div> <!-- /.section, /#header -->


    <div id="main-wrapper"><div id="main" class="clearfix">

        <div id="content" class="column"><div id="content-section-id" class="section">
            <div id="content-radius-title">
              <?php print render($title_prefix); ?>
              <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
              <?php print render($title_suffix); ?>
            </div>
            <div id="content-radius">

              <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>

              <?php print $messages; ?>

              <a id="main-content"></a>
              <?php print render($page['help']); ?>
              <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
              <div id="content-actually"><?php print render($page['content']); ?></div>
              <?php print $feed_icons; ?>
            </div>
        </div></div> <!-- /.section, /#content -->

        <?php if ($page['sidebar']): ?>
        <div id="sidebar" class="column sidebar"><div class="section">
            <?php print render($page['sidebar']); ?>
        </div></div> <!-- /.section, /#sidebar -->
        <?php endif; ?>

        <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
        <?php endif; ?>
    </div></div> <!-- /#main, /#main-wrapper -->

    <div id="footer"><div class="section">
        <?php print render($page['footer']); ?>

        <p>&copy; REMorse 2011</p>
    </div></div> <!-- /.section, /#footer -->

</div></div> <!-- /#page, /#page-wrapper -->
