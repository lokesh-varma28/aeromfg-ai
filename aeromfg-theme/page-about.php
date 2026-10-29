<?php
/**
 * Template Name: About Us
 *
 * @package AeroMFG_AI
 */

get_header(); ?>

<main id="main-content">
  <section class="section section-hero">
    <div class="container">
      <div class="section-header text-left" style="max-width: 850px; margin-bottom: 2rem;">
        <div class="pill">
          <span class="pill-dot"></span>
          <?php esc_html_e( 'Engineering Pedigree & Mission', 'aeromfg-ai' ); ?>
        </div>
        <h1><?php esc_html_e( 'Built for High-Consequence Aerospace Manufacturing', 'aeromfg-ai' ); ?></h1>
        <p class="lead">
          <?php esc_html_e( 'AeroMFG AI was established by aerospace systems engineers and industrial IoT architects to solve the critical gap between physical shop-floor assembly and digital flight assurance.', 'aeromfg-ai' ); ?>
        </p>
        <p>
          <?php esc_html_e( 'Standard enterprise IoT platforms fail under the extreme conditions of aerospace manufacturing: complex multi-acre metallic reflection environments, ISO-classified cleanroom outgassing restrictions, volatile propulsion areas, and unyielding zero-defect flight certification mandates. AeroMFG AI was built specifically to excel in these environments.', 'aeromfg-ai' ); ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Core Mission & Vision -->
  <section class="section">
    <div class="container">
      <div class="grid-2">
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Our Institutional Mission', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'To empower aerospace manufacturers and space vehicle integrators with real-time operational intelligence, ensuring that every flight-critical component, calibrated tool, and cleanroom procedure meets exacting zero-tolerance quality standards.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Bridging the gap between physical assembly lines and digital ERP/MES systems.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Preventing schedule slippage and multi-million dollar hardware damage.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Our Engineering Vision', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'To cultivate an aerospace production ecosystem where every subassembly, environmental condition, and assembly action is autonomously tracked, verified, and preserved in an immutable digital thread from sub-tier supplier to orbital launch.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Real-time spatial awareness without electromagnetic interference (EMI).', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Autonomous visual quality inspection at production cadence.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Principles Grid -->
      <div style="margin-top: 4rem;">
        <div class="section-header">
          <h2><?php esc_html_e( 'Aerospace Engineering Principles', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Our architecture adheres strictly to the highest defense and commercial flight benchmarks.', 'aeromfg-ai' ); ?></p>
        </div>

        <div class="grid-3">
          <div class="card">
            <h4 class="card-title"><?php esc_html_e( 'Cleanroom Safe (Outgassing Verified)', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'All sensors, tags, and gateway enclosures are fabricated from low-outgassing polymers tested to ASTM E595 standards, safe for ISO Class 5 optical payload integration.', 'aeromfg-ai' ); ?></p>
          </div>
          <div class="card">
            <h4 class="card-title"><?php esc_html_e( 'EMI & RF Compliance', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Transmitters operate within stringent aerospace power envelopes, preventing electromagnetic interference with sensitive satellite payloads and aircraft avionics.', 'aeromfg-ai' ); ?></p>
          </div>
          <div class="card">
            <h4 class="card-title"><?php esc_html_e( 'Air-Gapped & On-Premise Ready', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Complete edge intelligence stack deploys within private government-cloud or local air-gapped server clusters, satisfying strict ITAR and defense data sovereignty mandates.', 'aeromfg-ai' ); ?></p>
          </div>
        </div>
      </div>

      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Partner with Our Aerospace Systems Engineers', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Learn how our specialized team collaborates with Tier-1 aerospace contractors to deploy custom telemetry meshes.', 'aeromfg-ai' ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Schedule Engineering Review', 'aeromfg-ai' ); ?>
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
