<?php
/**
 * Template Name: Industry Insights
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
          <?php esc_html_e( 'Operational Engineering Analysis', 'aeromfg-ai' ); ?>
        </div>
        <h1><?php esc_html_e( 'Aerospace AIoT Industry Insights', 'aeromfg-ai' ); ?></h1>
        <p class="lead">
          <?php esc_html_e( 'Strategic analysis on scaling automated telemetry, mitigating technician cognitive overload, and modernizing legacy aerospace production lines.', 'aeromfg-ai' ); ?>
        </p>
        <p>
          <?php esc_html_e( 'Deploying AI and IoT across heavy manufacturing often falters not due to algorithmic limitations, but because of workflow friction, sensor battery maintenance fatigue, and fragmented software siloes. Here is how aerospace leaders overcome these challenges.', 'aeromfg-ai' ); ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Insights Articles -->
  <section class="section">
    <div class="container">
      <div class="grid-2">
        <!-- Insight 1 -->
        <article class="card card-accent-highlight">
          <div class="pill"><?php esc_html_e( 'Architecture Strategy', 'aeromfg-ai' ); ?></div>
          <h3 class="card-title"><?php esc_html_e( 'Mitigating Technology Fatigue in Aerospace Assembly', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Technicians in commercial aviation and rocket manufacturing already navigate complex work instructions, torque logs, and quality sign-offs. Adding intrusive handheld barcode scanners or fragile tablets creates friction and leads to process circumvention.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Passive Telemetry:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Shift from manual scanning to ambient UWB and RFID gateway detection.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Zero-Friction Tooling:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Automatic torque transmission without manual technician data entry.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Context-Aware HUDs:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Real-time visual confirmations right in the technician\'s line of sight.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </article>

        <!-- Insight 2 -->
        <article class="card card-copper-highlight">
          <div class="pill pill-copper"><?php esc_html_e( 'Predictive Analytics', 'aeromfg-ai' ); ?></div>
          <h3 class="card-title"><?php esc_html_e( 'Dynamic WIP Optimization Under Supply Volatility', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Spacecraft and commercial aircraft assembly involves long-lead structural alloys, precision titanium forgings, and specialized avionics chips. Unforeseen delays in one subassembly can bottleneck entire integration bays.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Station Takt Balancing:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Dynamic rescheduling of non-critical integration tasks when components are delayed.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Environmental Shelf-Life:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Automated tracking of composite pre-preg out-time and sealant pot life.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'ERP Telemetry Feeds:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Live physical inventory updates piped into SAP/Siemens Teamcenter.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </article>

        <!-- Insight 3 -->
        <article class="card card-copper-highlight">
          <div class="pill pill-copper"><?php esc_html_e( 'Computer Vision', 'aeromfg-ai' ); ?></div>
          <h3 class="card-title"><?php esc_html_e( 'Eliminating False Positives in Optical Inspection', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Traditional rule-based machine vision systems suffer from high false-reject rates due to shifting cleanroom lighting, reflections from mirror-finish aluminum, and slight positioning variations.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'CAD-Informed Priors:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Neural networks seeded with exact 3D geometric boundaries to reject shadows.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Multi-Spectral Lighting:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Polarized ultraviolet and infrared strobe feeds to highlight sealant voids.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Edge Inference Latency:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Sub-50ms execution on local industrial GPUs without cloud roundtrips.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </article>

        <!-- Insight 4 -->
        <article class="card card-accent-highlight">
          <div class="pill"><?php esc_html_e( 'Data Governance', 'aeromfg-ai' ); ?></div>
          <h3 class="card-title"><?php esc_html_e( 'Air-Gapped Telemetry for Defense & ITAR Compliance', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Contractors fabricating military airframes and orbital defense hardware cannot stream unencrypted telemetry to commercial multi-tenant clouds. The solution requires air-gapped zero-trust edge infrastructure.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Local Edge Processing:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( '100% of telemetry parsing and computer vision executed on facility servers.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Role-Based Access Control:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Strict cryptographic separation of secret and unclassified assembly lines.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'NIST SP 800-171:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Full compliance documentation for Controlled Unclassified Information (CUI).', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </article>
      </div>

      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Read Our Complete Aerospace Technical Whitepapers', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Access our peer-reviewed technical publications on edge telemetry, cleanroom monitoring, and digital thread integrity.', 'aeromfg-ai' ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Request Whitepaper Access', 'aeromfg-ai' ); ?>
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
