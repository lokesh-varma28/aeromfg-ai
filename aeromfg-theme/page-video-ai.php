<?php
/**
 * Template Name: Video AI & Optical Inspection
 *
 * @package AeroMFG_AI
 */

get_header(); ?>

<main id="main-content">
  <section class="section section-hero">
    <div class="container">
      <div class="section-header text-left" style="max-width: 840px; margin-bottom: 2rem;">
        <div class="pill">
          <span class="pill-dot"></span>
          <?php esc_html_e( 'Computer Vision Assurance', 'aeromfg-ai' ); ?>
        </div>
        <h1><?php esc_html_e( 'Video AI & Automated Quality Inspection', 'aeromfg-ai' ); ?></h1>
        <p class="lead">
          <?php esc_html_e( 'Transforming shop-floor camera feeds into real-time quality verification, shifting manufacturing from slow, manual sample-based checks to continuous, automated inline inspection.', 'aeromfg-ai' ); ?>
        </p>
        <p>
          <?php esc_html_e( 'By correlating edge optical sensors and high-speed multi-angle video feeds directly against digital twin CAD models and Bills of Process (BOP), AeroMFG AI catches micro-deviations before flight hardware advances down the assembly line.', 'aeromfg-ai' ); ?>
        </p>
      </div>

      <div class="diagram-container">
        <img src="<?php echo aeromfg_asset( 'video-inspection.svg' ); ?>" alt="<?php esc_attr_e( 'AeroMFG AI Computer Vision HUD showing automated locking pin verification and sealant bead tolerance analysis', 'aeromfg-ai' ); ?>" width="700" height="360" style="width:100%; height:auto;">
      </div>
    </div>
  </section>

  <!-- Visual AI Inspection Use Cases -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2><?php esc_html_e( 'High-Precision Visual Inspection Capabilities', 'aeromfg-ai' ); ?></h2>
        <p><?php esc_html_e( 'Deploying specialized neural architectures trained on aerospace composite and metallurgical inspection datasets.', 'aeromfg-ai' ); ?></p>
      </div>

      <div class="grid-3">
        <!-- Item 1 -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Aircraft-Door & Plug Inspection', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Automated verification of safety-critical plug mechanisms, stop-fittings, latch pin engagement, and secondary lock cotter pins prior to fuselage closing.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Lock pin insertion depth verified to ±0.1 mm precision.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Instant visual alerts if retaining hardware is missing or unseated.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Item 2 -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'FOD (Foreign Object Debris) Alerting', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'High-resolution spatial scanning of internal cavities, fuel tanks, avionics bays, and engine intakes to detect forgotten tools, loose washers, or stray composite strands.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Sub-millimeter particle and object detection in low-light compartments.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Automated quarantine lock preventing airframe station advancement.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Item 3 -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Sealant Continuity & Coating Uniformity', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Multi-spectral analysis of aerodynamic sealant beads and thermal protection barrier coatings on airframes and space reentry shields.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Continuous bead width, thickness profile, and void inspection.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Thermal dissipation profiling under non-destructive testing (NDT).', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Implement Computer Vision on Your Inspection Bays', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Pilot AeroMFG AI Video Intelligence across one assembly station in as few as 14 days without stopping line production.', 'aeromfg-ai' ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Request Pilot Proposal', 'aeromfg-ai' ); ?>
        </a>
      </div>

      <?php
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
              if ( get_the_content() ) :
                  echo '<div class="wordpress-page-entry" style="margin-top: 3rem;">';
                  the_content();
                  echo '</div>';
              endif;
          endwhile;
      endif;
      ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
