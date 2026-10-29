<?php
/**
 * AeroMFG AI - Default Page Template
 *
 * @package AeroMFG_AI
 */

get_header(); ?>

<main id="main-content">
  <section class="section section-hero">
    <div class="container">
      <?php
      while ( have_posts() ) :
          the_post();
          ?>
          <div class="section-header text-left">
            <h1><?php the_title(); ?></h1>
          </div>
          <?php
      endwhile;
      ?>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <?php
      while ( have_posts() ) :
          the_post();
          ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'card' ); ?>>
            <div class="card-body">
              <?php the_content(); ?>
            </div>
          </article>
          <?php
      endwhile;
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
