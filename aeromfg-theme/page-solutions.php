<?php
/**
 * Template Name: Aerospace Solutions
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
          <?php esc_html_e( 'Mission-Tailored Deployments', 'aeromfg-ai' ); ?>
        </div>
        <h1><?php esc_html_e( 'Aerospace & Space Flight Manufacturing Solutions', 'aeromfg-ai' ); ?></h1>
        <p class="lead">
          <?php esc_html_e( 'Turnkey operational intelligence engineered for the rigorous demands of commercial airframe production, satellite constellations, and orbital launch complexes.', 'aeromfg-ai' ); ?>
        </p>
        <p>
          <?php esc_html_e( 'Whether tracking high-value titanium wing spars across final assembly lines, ensuring particulate compliance during optical payload mating, or managing GSE readiness at the launch pad, AeroMFG AI scales seamlessly.', 'aeromfg-ai' ); ?>
        </p>
      </div>

      <div class="diagram-container">
        <img src="<?php echo aeromfg_asset( 'cleanroom-monitoring.svg' ); ?>" alt="<?php esc_attr_e( 'AeroMFG AI Cleanroom and Hazardous Zone monitoring schematic detailing optical payload bay and propellant loading safety locks', 'aeromfg-ai' ); ?>" width="700" height="360" style="width:100%; height:auto;">
      </div>
    </div>
  </section>

  <!-- 4 Core Solution Pillars -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2><?php esc_html_e( 'Enterprise Solution Frameworks', 'aeromfg-ai' ); ?></h2>
        <p><?php esc_html_e( 'Four specialized operational frameworks engineered for tier-1 aerospace defense contractors.', 'aeromfg-ai' ); ?></p>
      </div>

      <div class="grid-2">
        <!-- Solution 1 -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Commercial Aircraft Final Assembly Lines (FAL)', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Eliminates line stops, out-of-sequence work, and tool misplacement across multi-station commercial jet manufacturing hangars.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Active 3D locating of major structural subassemblies (wings, nacelles, empennage).', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Automated step-by-step digital traveler validation linked to technician credentials.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Real-time bottleneck alerts when station cycle time exceeds takttime thresholds.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Solution 2 -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Satellite AI&T (Assembly, Integration & Test)', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Ensures total traceability and environmental safety for high-value spacecraft payloads, solar array deployment mechanisms, and optical sensors.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Continuous ESD (electrostatic discharge) and outgassing monitoring.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Torque telemetry logging on every precision fastener prior to thermal vacuum testing.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Chain-of-custody logging between cleanrooms, vibration tables, and anechoic chambers.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Solution 3 -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Launch Pad GSE & Ground Logistics', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Real-time asset management and hazard safety across multi-acre launch complexes, cryogenic umbilicals, and mobile launcher platforms.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Automated exclusion zone verification during toxic/cryogenic propellant loading.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Location and maintenance state tracking for Ground Support Equipment (GSE).', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Emergency personnel muster accountability during red-line launch pad alerts.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Solution 4 -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'ISO Cleanroom Environmental Traceability', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Automates compliance logging, gowning validation, and airlock pressure interlock telemetry to preserve ISO Class 5 and Class 7 environments.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Automated particle concentration alerts prior to out-of-spec excursions.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Badge credential checks preventing unauthorized access to sterile flight hardware.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Immutable audit logs formatted directly for FAA and NASA quality audits.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Discuss Your Aerospace Facility Architecture', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Our solutions architects evaluate your hangar layouts, cleanroom classes, and ERP systems to map a tailored implementation roadmap.', 'aeromfg-ai' ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Request Architecture Review', 'aeromfg-ai' ); ?>
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
