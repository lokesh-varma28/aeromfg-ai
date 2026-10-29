<?php
/**
 * Template Name: AIoT Sensing Technologies
 *
 * @package AeroMFG_AI
 */

get_header(); ?>

<main id="main-content">
  <section class="section section-hero">
    <div class="container">
      <div class="section-header text-left" style="max-width: 820px; margin-bottom: 2rem;">
        <div class="pill">
          <span class="pill-dot"></span>
          <?php esc_html_e( 'Hardware & Telemetry Stack', 'aeromfg-ai' ); ?>
        </div>
        <h1><?php esc_html_e( 'Aerospace AIoT Sensing Technologies', 'aeromfg-ai' ); ?></h1>
        <p class="lead">
          <?php esc_html_e( 'High-integrity, industrial-grade connectivity protocols and ruggedized hardware nodes designed to overcome metallic multi-path interference in flight vehicle assembly bays.', 'aeromfg-ai' ); ?>
        </p>
        <p>
          <?php esc_html_e( 'AeroMFG AI deploys a hybrid multi-sensor mesh combining Ultra-Wideband (UWB) precision positioning, low-power BLE 5.3 proximity beacons, specialized on-metal UHF RFID tags, and continuous cleanroom micro-climate telemetry.', 'aeromfg-ai' ); ?>
        </p>
      </div>

      <div class="diagram-container">
        <img src="<?php echo aeromfg_asset( 'aiot-architecture.svg' ); ?>" alt="<?php esc_attr_e( 'Detailed 3-layer AIoT architecture diagram showing sensor edge layer, zero-trust edge gateway bus, and aerospace AI core', 'aeromfg-ai' ); ?>" width="700" height="360" style="width:100%; height:auto;">
      </div>
    </div>
  </section>

  <!-- Detailed Sensor Capabilities -->
  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2><?php esc_html_e( 'Mission-Critical Hardware Nodes', 'aeromfg-ai' ); ?></h2>
        <p><?php esc_html_e( 'Engineered for outgassing compliance, extreme vibration tolerance, and micro-watt power consumption.', 'aeromfg-ai' ); ?></p>
      </div>

      <div class="grid-2">
        <!-- Sensor 1: UWB -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Ultra-Wideband (UWB) 3D Positioning', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Delivers sub-meter real-time spatial positioning (±14 cm precision) within multi-acre metallic assembly hangars where GPS and traditional RF fail.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Operates in 3.5 GHz – 6.5 GHz IEEE 802.15.4z aerospace bands.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Time-Difference-of-Arrival (TDoA) algorithms immune to metallic multipath reflection.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( '5-year battery life in active subassembly tracking modes.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Sensor 2: On-Metal RFID -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Specialized On-Metal UHF RFID', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Engineered specifically for aerospace composite layups, titanium engine mounts, and airframe spars without signal detuning or mechanical degradation.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'EPC Gen2 / ISO 18000-6C compliant with anti-collision protocols.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Withstands autoclave composite cure cycles up to 230°C and 7 bar pressure.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Direct laser-etched 2D matrix fallback for optical verification.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Sensor 3: Environmental Telemetry -->
        <div class="card card-copper-highlight">
          <div class="card-icon copper">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 00-9.78 2.096A4.001 4.001 0 003 15z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Cleanroom Environmental Nodes', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Continuous monitoring of airborne particulate density, ambient temperature, barometric pressure, and relative humidity inside ISO Class 5–8 cleanrooms.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Real-time optical particle counters (0.3µm, 0.5µm, and 5.0µm).', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'ASTM E595 outgassing compliance (<1.0% CVCM).', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check copper"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Direct interface with cleanroom HVAC BMS and alarm dampers.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>

        <!-- Sensor 4: Smart Tooling -->
        <div class="card card-accent-highlight">
          <div class="card-icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <h3 class="card-title"><?php esc_html_e( 'Calibrated Smart Tool Telemetry', 'aeromfg-ai' ); ?></h3>
          <p class="card-body">
            <?php esc_html_e( 'Wireless integration with torque wrenches, rivet guns, and fastener measurement instruments to verify exact engineering specifications during payload integration.', 'aeromfg-ai' ); ?>
          </p>
          <ul class="bullet-list">
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Automatic lock-out when tools are outside calibration certificate dates.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'Live recording of applied torque and angle directly to the digital birth record.', 'aeromfg-ai' ); ?></span>
            </li>
            <li class="bullet-item">
              <span class="bullet-check"><svg fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
              <span><?php esc_html_e( 'FOD prevention via autonomous tool check-out/check-in verification.', 'aeromfg-ai' ); ?></span>
            </li>
          </ul>
        </div>
      </div>

      <div class="cta-banner">
        <div>
          <h2><?php esc_html_e( 'Evaluate AIoT Hardware for Your Facility', 'aeromfg-ai' ); ?></h2>
          <p><?php esc_html_e( 'Our RF test engineers provide complete site heatmapping and metallic multipath feasibility studies.', 'aeromfg-ai' ); ?></p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
          <?php esc_html_e( 'Request Hardware Kit', 'aeromfg-ai' ); ?>
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
