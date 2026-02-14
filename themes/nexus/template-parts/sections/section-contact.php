<?php
    $phone_number = get_field('event_phone_number', 'option');
    $email = get_field('event_email', 'option');
    $location = get_field('event_location', 'option');
?>

<div class="section section-contact">
    <div class="contact-card">

        <div class="contact-top">
            <div class="contact-text">
                <h4 class="front-page-subtitle">We're here to connect and assist you</h4>
                <p class="contact-desc">
                    Have questions about the summit? Need help with registration or travel? Our team is ready to assist you.
                </p>

                <div class="contact-grid">
                    <h5 class="contact-subtitle">Contact us</h5>
                    <h5 class="contact-subtitle">Event location</h5>
                    <p class="contact-paragraph"><?=$phone_number; ?></p>
                    <p class="contact-paragraph"><?=$location; ?></p>
                    <h5 class="contact-subtitle">Email</h5>
                    <h5 class="contact-subtitle">Follow us</h5>
                    <p class="contact-paragraph"><?=$email; ?></p>
                    
                    <div class="social-icons">
                        <?php
                            echo file_get_contents(
                                get_stylesheet_directory() . '/assets/icons/icon-fb.svg'
                            );
                            echo file_get_contents(
                                get_stylesheet_directory() . '/assets/icons/icon-linkedin.svg'
                            );
                            echo file_get_contents(
                                get_stylesheet_directory() . '/assets/icons/icon-ig.svg'
                            );
                            echo file_get_contents(
                                get_stylesheet_directory() . '/assets/icons/icon-yt.svg'
                            );
                        ?>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <?php echo do_shortcode('[wpforms id="51" title="true" description="true"]'); ?>
            </div>
        </div>

        <img src="<?=get_template_directory_uri(); ?>/assets/img/contact_map.png" alt="">

    </div>

</div>