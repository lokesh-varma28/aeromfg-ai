<?php
/**
 * Template Name: Engineering Contact & Assessment
 *
 * @package AeroMFG_AI
 */

get_header(); ?>

<main id="main-content">
  <section class="section section-hero">
    <div class="container">
      <div class="hero-grid" style="grid-template-columns: 1fr 1.15fr; gap: 3.5rem;">
        
        <!-- Contact Left Info Column -->
        <div>
          <div class="pill">
            <span class="pill-dot"></span>
            <?php esc_html_e( 'Direct Engineering Consultation', 'aeromfg-ai' ); ?>
          </div>
          <h1><?php esc_html_e( 'Aerospace Facility Assessment & Inquiries', 'aeromfg-ai' ); ?></h1>
          <p class="lead">
            <?php esc_html_e( 'Collaborate directly with our aerospace systems engineers and deployment specialists to evaluate your hangar RF topology, cleanroom classes, and digital thread architecture.', 'aeromfg-ai' ); ?>
          </p>
          <p>
            <?php esc_html_e( 'We conduct comprehensive on-site RF heatmapping, electromagnetic compatibility (EMC) testing, and ERP/MES data pathway evaluations to ensure rapid, zero-downtime commissioning.', 'aeromfg-ai' ); ?>
          </p>

          <div style="margin-top: 2rem; display: flex; flex-direction: column; gap: 1.25rem;">
            <div class="card" style="padding: 1.25rem 1.5rem;">
              <h4 style="font-size: 1.05rem; margin-bottom: 0.25rem;"><?php esc_html_e( 'Technical Response Timeline', 'aeromfg-ai' ); ?></h4>
              <p style="margin-bottom: 0; font-size: 0.92rem; color: var(--color-text-muted);">
                <?php esc_html_e( 'Inquiries are assigned directly to an aerospace solutions architect within 1 business day.', 'aeromfg-ai' ); ?>
              </p>
            </div>

            <div class="card" style="padding: 1.25rem 1.5rem;">
              <h4 style="font-size: 1.05rem; margin-bottom: 0.25rem;"><?php esc_html_e( 'ITAR & Classified Program Inquiries', 'aeromfg-ai' ); ?></h4>
              <p style="margin-bottom: 0; font-size: 0.92rem; color: var(--color-text-muted);">
                <?php esc_html_e( 'Security-cleared engineering personnel are available upon request for classified defense program reviews.', 'aeromfg-ai' ); ?>
              </p>
            </div>
          </div>
        </div>

        <!-- Contact Right Form Column -->
        <div>
          <form class="contact-form" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="POST" novalidate>
            <input type="hidden" name="action" value="aeromfg_contact_form">
            <?php wp_nonce_field( 'aeromfg_contact_action', 'aeromfg_contact_nonce' ); ?>

            <h2 style="font-size: 1.75rem; margin-bottom: 0.5rem;"><?php esc_html_e( 'Request Engineering Assessment', 'aeromfg-ai' ); ?></h2>
            <p style="font-size: 0.95rem; margin-bottom: 2rem;">
              <?php esc_html_e( 'Provide your facility specifications and technical requirements below.', 'aeromfg-ai' ); ?>
            </p>

            <div class="form-group">
              <label for="contact-name" class="form-label"><?php esc_html_e( 'Full Name & Title', 'aeromfg-ai' ); ?></label>
              <input type="text" id="contact-name" name="name" class="form-input" placeholder="<?php esc_attr_e( 'e.g. Dr. Elena Vance, Chief Systems Engineer', 'aeromfg-ai' ); ?>" required>
            </div>

            <div class="form-group">
              <label for="contact-email" class="form-label"><?php esc_html_e( 'Corporate or Government Email', 'aeromfg-ai' ); ?></label>
              <input type="email" id="contact-email" name="email" class="form-input" placeholder="<?php esc_attr_e( 'e.g. e.vance@aerospace-prime.com', 'aeromfg-ai' ); ?>" required>
            </div>

            <div class="form-group">
              <label for="contact-org" class="form-label"><?php esc_html_e( 'Organization / Prime Contractor', 'aeromfg-ai' ); ?></label>
              <input type="text" id="contact-org" name="organization" class="form-input" placeholder="<?php esc_attr_e( 'e.g. Commercial Airframe / Orbital Launch Division', 'aeromfg-ai' ); ?>" required>
            </div>

            <div class="form-group">
              <label for="facility-type" class="form-label"><?php esc_html_e( 'Primary Facility Focus', 'aeromfg-ai' ); ?></label>
              <select id="facility-type" name="facility_type" class="form-select">
                <option value="commercial-fal"><?php esc_html_e( 'Commercial Aircraft Final Assembly Line (FAL)', 'aeromfg-ai' ); ?></option>
                <option value="cleanroom"><?php esc_html_e( 'ISO Class 5 / 7 Cleanroom Satellite Integration', 'aeromfg-ai' ); ?></option>
                <option value="launch-pad"><?php esc_html_e( 'Launch Complex GSE & Cryogenic Hazard Zone', 'aeromfg-ai' ); ?></option>
                <option value="tier1-machining"><?php esc_html_e( 'Tier-1 Aerostructures & Engine Component Machining', 'aeromfg-ai' ); ?></option>
                <option value="other"><?php esc_html_e( 'Other High-Consequence Aerospace Operation', 'aeromfg-ai' ); ?></option>
              </select>
            </div>

            <div class="form-group">
              <label for="contact-message" class="form-label"><?php esc_html_e( 'Scope of Operational Requirements', 'aeromfg-ai' ); ?></label>
              <textarea id="contact-message" name="message" class="form-textarea" rows="4" placeholder="<?php esc_attr_e( 'Describe facility square footage, target tracking assets, video inspection stations, or integration timelines...', 'aeromfg-ai' ); ?>"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" style="width: 100%; padding: 0.85rem 1.5rem; font-size: 1.05rem;">
              <?php esc_html_e( 'Submit Technical Inquiry', 'aeromfg-ai' ); ?>
            </button>
          </form>
        </div>

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
