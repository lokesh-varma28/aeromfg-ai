<?php
/**
 * AeroMFG AI - Main Fallback Template
 *
 * @package AeroMFG_AI
 */

get_header(); ?>

<main id="main-content">
  <section class="section">
    <div class="container">
      <?php
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
              ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?> style="margin-bottom: 2rem;">
                <h1 class="card-title"><?php the_title(); ?></h1>
                <div class="card-body">
                  <?php the_content(); ?>
                </div>
              </article>
              <?php
          endwhile;

          the_posts_navigation();
      else :
          ?>
          <div class="card">
            <h2><?php esc_html_e( 'No Content Found', 'aeromfg-ai' ); ?></h2>
            <p><?php esc_html_e( 'It seems there is nothing here. Please navigate using the top menu.', 'aeromfg-ai' ); ?></p>
          </div>
          <?php
      endif;
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
