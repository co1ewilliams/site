<?php
/*
Plugin Name: Enhanced About Page Plugin
Description: Adds a shortcode [fancy-about-page] for a detailed, multi-section About page with consistent, customizable styling.
Version: 1.0
Author: YourName
*/

function fancy_about_page_shortcode($atts) {
    // Define default attributes with placeholders
    $defaults = array(
        // General Styling
        'bg_color'       => '#ffffff', // Background color for the section
        'text_color'     => '#333333', // Text color
        'accent_color'   => '#0073aa', // Accent color for buttons or highlights

        // Banner Section
        'banner_heading' => 'About PowerPlay Content',
        'banner_text'    => 'AI-driven blog services combined with proven SEO expertise to elevate your brand online.',
        'banner_image'   => '', // URL of the banner image

        // Founder Info Section
        'founder_name'   => 'Cole Williams',
        'founder_role'   => 'Founder & SEO Strategist',
        'founder_photo'  => '', // URL of the founder's photo
        'founder_bio'    => 'With 2 years of experience in SEO and digital marketing, I specialize in creating AI-powered blogs that increase website visibility, enhance credibility, and drive measurable results.',

        // Key Features Section
        'features_heading' => 'Why Choose Us?',
        'feature_1'       => 'In-depth keyword research for every niche',
        'feature_2'       => 'AI-enhanced content creation tailored to your audience',
        'feature_3'       => 'Data-driven SEO strategies that deliver results',

        // Why AI Section
        'ai_heading'      => 'The Power of AI',
        'ai_text'         => 'Our AI-powered approach allows us to deliver consistent, high-quality content quickly, helping your business stay ahead of the competition.',

        // Call-to-Action Section
        'cta_heading'     => 'Ready to Transform Your Content?',
        'cta_text'        => 'Let’s work together to craft AI-enhanced blogs and SEO strategies that make your brand stand out.',
        'cta_button_text' => 'Get Started',
        'cta_button_link' => '/contact',
    );

    // Merge user-defined attributes with defaults
    $attributes = shortcode_atts($defaults, $atts);

    // Start output buffering
    ob_start(); 
    ?>

    <!-- About Page Layout -->
    <section style="background: <?php echo esc_attr($attributes['bg_color']); ?>; color: <?php echo esc_attr($attributes['text_color']); ?>; padding: 50px 20px; font-family: Arial, sans-serif; line-height: 1.6;">

        <!-- Banner Section -->
        <div style="text-align: center; margin-bottom: 60px;">
            <?php if (!empty($attributes['banner_image'])) : ?>
                <img src="<?php echo esc_url($attributes['banner_image']); ?>" alt="Banner" style="width: 100%; max-height: 400px; object-fit: cover; border-radius: 8px; margin-bottom: 20px;">
            <?php endif; ?>
            <h1 style="font-size: 2.5rem; margin-bottom: 20px;"><?php echo esc_html($attributes['banner_heading']); ?></h1>
            <p style="font-size: 1.2rem; color: #555;"><?php echo esc_html($attributes['banner_text']); ?></p>
        </div>

        <!-- Founder Info Section -->
        <div style="display: flex; flex-wrap: wrap; gap: 30px; align-items: center; margin-bottom: 60px;">
            <?php if (!empty($attributes['founder_photo'])) : ?>
            <div style="flex: 1; min-width: 300px;">
                <img src="<?php echo esc_url($attributes['founder_photo']); ?>" alt="Founder" style="width: 100%; border-radius: 8px;">
            </div>
            <?php endif; ?>
            <div style="flex: 2; min-width: 300px;">
                <h2 style="font-size: 2rem; margin-bottom: 10px;"><?php echo esc_html($attributes['founder_name']); ?></h2>
                <p style="font-style: italic; color: #666;"><?php echo esc_html($attributes['founder_role']); ?></p>
                <p><?php echo wp_kses_post($attributes['founder_bio']); ?></p>
            </div>
        </div>

        <!-- Key Features Section -->
        <div style="margin-bottom: 60px;">
            <h2 style="text-align: center; font-size: 2rem; margin-bottom: 20px;"><?php echo esc_html($attributes['features_heading']); ?></h2>
            <ul style="list-style: none; padding: 0; max-width: 800px; margin: 0 auto; font-size: 1.2rem;">
                <li style="margin-bottom: 10px;">✔ <?php echo esc_html($attributes['feature_1']); ?></li>
                <li style="margin-bottom: 10px;">✔ <?php echo esc_html($attributes['feature_2']); ?></li>
                <li style="margin-bottom: 10px;">✔ <?php echo esc_html($attributes['feature_3']); ?></li>
            </ul>
        </div>

        <!-- Why AI Section -->
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2rem; margin-bottom: 20px;"><?php echo esc_html($attributes['ai_heading']); ?></h2>
            <p style="font-size: 1.1rem; max-width: 800px; margin: 0 auto;"><?php echo wp_kses_post($attributes['ai_text']); ?></p>
        </div>

        <!-- Call-to-Action Section -->
        <div style="text-align: center; padding: 40px; border-radius: 8px; background: <?php echo esc_attr($attributes['accent_color']); ?>; color: #fff;">
            <h2 style="font-size: 2rem; margin-bottom: 10px;"><?php echo esc_html($attributes['cta_heading']); ?></h2>
            <p style="font-size: 1.1rem; margin-bottom: 20px;"><?php echo wp_kses_post($attributes['cta_text']); ?></p>
            <a href="<?php echo esc_url($attributes['cta_button_link']); ?>" style="
                background: #fff; color: <?php echo esc_attr($attributes['accent_color']); ?>; padding: 15px 30px; text-decoration: none; border-radius: 5px; font-weight: bold; font-size: 1.1rem;">
                <?php echo esc_html($attributes['cta_button_text']); ?>
            </a>
        </div>

    </section>

    <?php
    return ob_get_clean();
}

add_shortcode('fancy-about-page', 'fancy_about_page_shortcode');
