<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
  <link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> Feed" href="<?= home_url(); ?>/feed/">

  <?php require_once locate_template('/init/shortcodes.php'); ?>
</head>

<body <?php body_class(); ?> id="top-of-page">

  <!-- Accessibility Skip to Content -->
  <a class="skip-link screen-reader-text" href="#top-of-content"><?php esc_html_e( 'Skip to content', 'rc' ); ?></a>

  <header class="main-banner">
    <?php include locate_template('partials/elements/notice-bar.php'); ?>
    <nav>
      <?php get_template_part('partials/navs/nav-desktop', null, [ 
        'show_logo' => true,
      ]); ?>
    </nav>

  </header>

  <main id="top-of-content">
