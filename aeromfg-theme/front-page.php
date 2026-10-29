<?php
/**
 * Template Name: Command Center (Homepage)
 *
 * @package AeroMFG_AI
 */

get_header(); ?>

<main id="main-content">
  
  <!-- Hero Section -->
  <section class="section section-hero">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="pill">
            <span class="pill-dot"></span>
            <?php esc_html_e( 'Mission-Critical Operational Intelligence', 'aeromfg-ai' ); ?>
          </div>
          <h1><?php esc_html_e( 'Commercial Aircraft Manufacturing Intelligence Command', 'aeromfg-ai' ); ?></h1>
          <p class="lead">
            <?php esc_html_e( 'AeroMFG AI delivers high-integrity AIoT sensing frameworks and real-time operational intelligence tailored for commercial aircraft manufacturing, space integration, and launch vehicle assembly.', 'aeromfg-ai' ); ?>
          </p>
          <p>
            <?php esc_html_e( 'By fusing sub-meter radio frequency telemetry, edge computer vision, and predictive analytics, AeroMFG AI guarantees complete digital thread traceability, workforce hazard protection, and absolute configuration control across high-consequence aerospace facilities.', 'aeromfg-ai' ); ?>
          </p>
          <div style="margin-top: 2rem;">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
              <?php esc_html_e( 'Contact Us', 'aeromfg-ai' ); ?>
            </a>
          </div>
        </div>
        <div class="hero-visual">
          <img src="<?php echo aeromfg_asset( 'hero-diagram.svg' ); ?>" alt="<?php esc_attr_e( 'AeroMFG AI telemetry schematic showing commercial aircraft frame, UWB sensors, and digital twin correlation', 'aeromfg-ai' ); ?>" width="600" height="400">
        </div>
      </div>

      <!-- Telemetry Metrics Banner -->
      <div class="stats-strip">
        <div class="stat-item">
          <div class="stat-value">&lt;10<span>ms</span></div>
          <div class="stat-label"><?php esc_html_e( 'Edge Telemetry Ingestion Latency', 'aeromfg-ai' ); ?></div>
        </div>
        <div class="stat-item">
          <div class="stat-value">0.14<span>m</span></div>
          <div class="stat-label"><?php esc_html_e( 'Sub-meter 3D Asset Triangulation', 'aeromfg-ai' ); ?></div>
        </div>
        <div class="stat-item">
          <div class="stat-value">ISO <span>5/7</span></div>
          <div class="stat-label"><?php esc_html_e( 'Cleanroom Telemetry & Compliance', 'aeromfg-ai' ); ?></div>
        </div>
        <div class="stat-item">
          <div class="stat-value">100<span>%</span></div>
          <div class="stat-label"><?php esc_html_e( 'Digital Thread Hardware Traceability', 'aeromfg-ai' ); ?></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Operational Core Pillars Section -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <div class="pill pill-copper">
          <span class="pill-dot"></span>
          <?php esc_html_e( 'System Architecture', 'aeromfg-ai' ); ?>
        </div>
        <h2><?php esc_html_e( 'Operational Intelligence Across the Aerospace Lifecycle', 'aeromfg-ai' ); ?></h2>
        <p>
          <?php esc_html_e( 'From raw composite layup and precision CNC machining through final avionics integration, vacuum testing, and launch countdown, AeroMFG AI unifies disparate sensor streams into actionable decision models.', 'aeromfg-ai' ); ?>
        </p>
      </div>

      <div class="grid-3">
        <!-- Card 1 -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Workforce Security & Proximity', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Automates hazard-zone safety compliance around volatile propellant loading systems, high-voltage test cells, and cleanroom airlocks using active wearable telemetry.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Automated exclusion zone breach alarms (<100ms response).', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Cleanroom gowning certification & credential validation.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Card 2 -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Orbital Hardware Traceability', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Eliminates assembly bottlenecks and physical loss through real-time 3D tracking of mission-critical subassemblies, flight-certified sensors, and tooling.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Sub-meter spatial tracking across multi-acre hangars.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Complete digital chain of custody from fabrication to launch pad.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Card 3 -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Edge Video Inspection AI', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Deep learning models cross-reference live optical assembly feeds against engineering CAD models, catching micro-defects and improper fastener torque before rollout.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Aircraft-door lock pin and seal bead micro-inspection.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Foreign Object Debris (FOD) autonomous visual detection.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Integrated Callout Banner -->
      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Integrate Mission-Critical Intelligence into Your Assembly Line', 'aeromfg-ai' ); ?></h2>
          <p>
            <?php esc_html_e( 'Connect with an AeroMFG AI solutions architect to arrange an on-site operational facility assessment and technical demonstration.', 'aeromfg-ai' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Request Assessment', 'aeromfg-ai' ); ?>
        </a>
      </div>

      <!-- WordPress Gutenberg / Classic Editor Loop Support -->
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
