<?php
/**
 * Template Name: Security & Cleanroom Compliance
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
          <?php esc_html_e( 'Defense & Flight Assurance', 'aeromfg-ai' ); ?>
        </div>
        <h1><?php esc_html_e( 'Enterprise Security, Cleanroom Compliance & Governance', 'aeromfg-ai' ); ?></h1>
        <p class="lead">
          <?php esc_html_e( 'A compliance-first architecture engineered to protect Controlled Unclassified Information (CUI), sensitive space vehicle telemetry, and proprietary tooling blueprints.', 'aeromfg-ai' ); ?>
        </p>
        <p>
          <?php esc_html_e( 'In aerospace defense and commercial space programs, data security is indistinguishable from operational safety. AeroMFG AI implements hardware-rooted identity, granular role-based authorization, and air-gapped cryptographic tunnels built to withstand rigorous federal and international scrutiny.', 'aeromfg-ai' ); ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Core Security Pillars -->
  <section class="section">
    <div class="container">
      <div class="grid-2">
        <!-- Pillar 1: Zero Trust & IAM -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Zero-Trust Edge IAM Architecture', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Every sensor beacon, optical camera, gateway hub, and technician terminal possesses an immutable cryptographic identity rooted in hardware TPM 2.0 enclaves.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Mutual TLS (mTLS 1.3) enforced on all edge-to-server communications.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Automatic node revocation upon detection of RF tampering or physical disconnection.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Granular role-based access control (RBAC) segmented by security clearance levels.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Pillar 2: ITAR & Defense Governance -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'ITAR & NIST 800-171 Compliance', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Designed specifically for programs bound by International Traffic in Arms Regulations (ITAR) and Department of Defense cybersecurity mandates.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Self-contained on-premise deployment mode with zero outbound internet egress.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'AES-256 GCM encryption at rest with FIPS 140-3 validated key storage modules.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Audit trail logging meeting DFARS 252.204-7012 and CMMC Level 2 controls.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Compliance Matrix -->
      <div style="margin-top: 4rem;">
        <div class="section-header">
          <h2><?php esc_html_e( 'Aerospace Quality & Regulatory Certifications', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Our platform components are validated against rigorous global aerospace standards.', 'aeromfg-ai' ); ?></p>
        </div>

        <div class="grid-4">
          <div class="card">
            <div class="pill"><?php esc_html_e( 'Quality', 'aeromfg-ai' ); ?></div>
            <h4 class="card-title"><?php esc_html_e( 'AS9100 Rev D & ISO 9001', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Complete digital thread traceability for flight-grade subassembly tracking and calibration assurance.', 'aeromfg-ai' ); ?></p>
          </div>
          <div class="card">
            <div class="pill"><?php esc_html_e( 'Cleanroom', 'aeromfg-ai' ); ?></div>
            <h4 class="card-title"><?php esc_html_e( 'ISO 14644-1 (Class 5 & 7)', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Continuous particulate verification and outgassing compliance tested under ASTM E595 protocols.', 'aeromfg-ai' ); ?></p>
          </div>
          <div class="card">
            <div class="pill"><?php esc_html_e( 'Defense', 'aeromfg-ai' ); ?></div>
            <h4 class="card-title"><?php esc_html_e( 'CMMC 2.0 & NIST 800-171', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Satisfies 110 security requirements for handling defense aerospace CUI and technical data.', 'aeromfg-ai' ); ?></p>
          </div>
          <div class="card">
            <div class="pill"><?php esc_html_e( 'Aviation', 'aeromfg-ai' ); ?></div>
            <h4 class="card-title"><?php esc_html_e( 'FAA AC 21-43 Compliant', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Production certificate audit trail generation for commercial airframe major assembly milestones.', 'aeromfg-ai' ); ?></p>
          </div>
        </div>
      </div>

      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Review Our Complete Security & Compliance Dossier', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Contact our security compliance officers to request the AeroMFG AI SOC2 Type II, FedRAMP alignment, and ITAR compliance packet.', 'aeromfg-ai' ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Request Security Dossier', 'aeromfg-ai' ); ?>
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
