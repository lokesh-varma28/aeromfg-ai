<?php
/**
 * AeroMFG AI - Footer Template
 *
 * @package AeroMFG_AI
 */
?>
  <!-- Global Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        
        <!-- Column 1: Brand & Mission -->
        <div class="footer-brand">
          <h3>AeroMFG<span>.AI</span></h3>
          <p>
            <?php esc_html_e( 'Mission-critical operational intelligence and AIoT sensing frameworks engineered specifically for commercial aircraft manufacturing, space integration, and launch complexes.', 'aeromfg-ai' ); ?>
          </p>
        </div>

        <!-- Column 2: Navigation Links -->
        <div class="footer-col">
          <h4><?php esc_html_e( 'Navigation', 'aeromfg-ai' ); ?></h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Command Center', 'aeromfg-ai' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="footer-link"><?php esc_html_e( 'About Us', 'aeromfg-ai' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/aiot-sensing/' ) ); ?>" class="footer-link"><?php esc_html_e( 'AIoT Sensing', 'aeromfg-ai' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/video-ai/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Video AI Inspection', 'aeromfg-ai' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/solutions/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Solutions', 'aeromfg-ai' ); ?></a></li>
          </ul>
        </div>

        <!-- Column 3: Platform Resources -->
        <div class="footer-col">
          <h4><?php esc_html_e( 'Platform', 'aeromfg-ai' ); ?></h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/insights/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Industry Insights', 'aeromfg-ai' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/resources/' ) ); ?>" class="footer-link"><?php esc_html_e( 'API & Schematics', 'aeromfg-ai' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/security/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Security & Compliance', 'aeromfg-ai' ); ?></a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="footer-link"><?php esc_html_e( 'Contact Support', 'aeromfg-ai' ); ?></a></li>
          </ul>
        </div>

        <!-- Column 4: Enterprise Standards -->
        <div class="footer-col">
          <h4><?php esc_html_e( 'Enterprise Standards', 'aeromfg-ai' ); ?></h4>
          <ul class="footer-links">
            <li class="footer-link"><?php esc_html_e( 'ISO 9001 / AS9100D Aligned', 'aeromfg-ai' ); ?></li>
            <li class="footer-link"><?php esc_html_e( 'ISO Class 5 & 7 Cleanroom Certified', 'aeromfg-ai' ); ?></li>
            <li class="footer-link"><?php esc_html_e( 'NIST 800-171 / ITAR Compliant Tunnels', 'aeromfg-ai' ); ?></li>
            <li class="footer-link"><?php esc_html_e( 'Zero-Trust Edge IAM Architecture', 'aeromfg-ai' ); ?></li>
          </ul>
        </div>

      </div>

      <!-- Bottom Bar -->
      <div class="footer-bottom">
        <div>
          &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved. Commercial Aircraft & Space Flight Intelligence.', 'aeromfg-ai' ); ?>
        </div>
        <div>
          <?php esc_html_e( 'Designed for enterprise aerospace prime contractors and tier-1 integration facilities.', 'aeromfg-ai' ); ?>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
