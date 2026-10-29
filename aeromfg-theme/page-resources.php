<?php
/**
 * Template Name: Technical Resources & API
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
          <?php esc_html_e( 'Developer & Integration Hub', 'aeromfg-ai' ); ?>
        </div>
        <h1><?php esc_html_e( 'Technical Resources & RESTful API', 'aeromfg-ai' ); ?></h1>
        <p class="lead">
          <?php esc_html_e( 'Comprehensive specifications, hardware deployment schematics, and bi-directional API endpoints for seamless MES, ERP, and PLM integration.', 'aeromfg-ai' ); ?>
        </p>
        <p>
          <?php esc_html_e( 'Whether connecting edge sensor streams into Siemens Teamcenter, Dassault Systèmes DELMIA, or SAP S/4HANA Manufacturing, AeroMFG AI provides standardized, secure, and low-latency integration protocols.', 'aeromfg-ai' ); ?>
        </p>
      </div>
    </div>
  </section>

  <!-- API Reference & Schematics Section -->
  <section class="section">
    <div class="container">
      <div class="grid-2">
        <!-- API Documentation -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'RESTful API Architecture', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Engineered with JSON payloads, OpenAPI 3.1 specifications, and mTLS 1.3 cryptographic authentication for enterprise aerospace networks.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><code>GET /v1/telemetry/nodes/{id}</code>: <?php esc_html_e( 'Real-time 3D coordinates & signal quality.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><code>POST /v1/inspection/verify</code>: <?php esc_html_e( 'Submit optical frames for CAD twin defect inference.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><code>GET /v1/cleanroom/metrics</code>: <?php esc_html_e( 'Live particulate density & ISO compliance state.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><code>POST /v1/custody/transfer</code>: <?php esc_html_e( 'Immutable digital birth certificate custody ledger.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Deployment Schematics -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Deployment Schematics & Sizing', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Standardized architectural templates for hangar infrastructure planning, PoE network switch distribution, and antenna arrays.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'RF Anchor Density:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( '1 UWB master anchor per 450 m² for ±14cm 3D positioning.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'Power Over Ethernet (PoE+):', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'IEEE 802.3at power delivery to edge gateways.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'High-Availability Failover:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Dual-redundant local database clusters with hot standby.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><strong><?php esc_html_e( 'ATEX Zone 1 / Zone 2:', 'aeromfg-ai' ); ?></strong> <?php esc_html_e( 'Explosion-proof gateway enclosures for fuel bays.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <!-- SDK Grid -->
      <div style="margin-top: 4rem;">
        <div class="section-header">
          <h2><?php esc_html_e( 'Integration SDKs & Industrial Connectors', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Production libraries engineered for low-overhead edge execution and high-throughput MES streaming.', 'aeromfg-ai' ); ?></p>
        </div>

        <div class="grid-3">
          <div class="card">
            <h4 class="card-title"><?php esc_html_e( 'C++ / Rust Embedded SDK', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Micro-controller and edge gateway library with zero runtime allocations, ideal for real-time RTOS and embedded Linux sensor hubs.', 'aeromfg-ai' ); ?></p>
          </div>
          <div class="card">
            <h4 class="card-title"><?php esc_html_e( 'Python Analytics & AI Toolkit', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Pre-trained PyTorch and TensorRT pipelines for processing shop-floor optical feeds and training custom aerospace defect classifiers.', 'aeromfg-ai' ); ?></p>
          </div>
          <div class="card">
            <h4 class="card-title"><?php esc_html_e( 'OPC-UA & MQTT-SN Brokers', 'aeromfg-ai' ); ?></h4>
            <p class="card-body"><?php esc_html_e( 'Native industrial protocol bridges for legacy PLCs, robotic riveting cells, and cleanroom air handling SCADA networks.', 'aeromfg-ai' ); ?></p>
          </div>
        </div>
      </div>

      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Access the Full API Documentation & Schematics', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Request developer sandbox credentials, Postman collections, and CAD deployment templates.', 'aeromfg-ai' ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Request API Access', 'aeromfg-ai' ); ?>
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
