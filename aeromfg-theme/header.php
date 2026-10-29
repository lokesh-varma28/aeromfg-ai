<?php
/**
 * AeroMFG AI - Header Template
 *
 * @package AeroMFG_AI
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Accessible Skip Link -->
<a href="#main-content" class="sr-only" style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;">
  <?php esc_html_e( 'Skip to main content', 'aeromfg-ai' ); ?>
</a>

<!-- Global Navigation Header -->
<header class="site-header">
  <div class="container">
    <div class="nav-wrapper">
      
      <!-- Brand Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" aria-label="<?php esc_attr_e( 'AeroMFG AI Home', 'aeromfg-ai' ); ?>">
        <div class="brand-icon">A</div>
        <div class="brand-text">AeroMFG<span>.AI</span></div>
        <span class="brand-badge"><?php esc_html_e( 'Flight Grade', 'aeromfg-ai' ); ?></span>
      </a>

      <!-- Mobile Hamburger Button -->
      <button class="nav-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'aeromfg-ai' ); ?>" aria-controls="primary-navigation">
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

      <!-- Primary Navigation -->
      <?php
      if ( has_nav_menu( 'primary' ) ) {
          wp_nav_menu( array(
              'theme_location' => 'primary',
              'container'      => 'nav',
              'container_id'   => 'primary-navigation',
              'container_class'=> 'nav-menu',
              'items_wrap'     => '%3$s',
              'depth'          => 1,
              'fallback_cb'    => 'aeromfg_default_primary_nav',
          ) );
      } else {
          aeromfg_default_primary_nav();
      }
      ?>

    </div>
  </div>
</header>
