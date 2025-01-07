<?php
/*
Plugin Name: Fancy Extended About Page
Description: A comprehensive shortcode [fancy-about-extended] for a multi-section About page with a consistent, colorful style.
Version: 1.0
Author: YourName
*/

function fancy_extended_about_shortcode($atts) {
    // Merge user-defined attributes with default placeholders
    $defaults = array(
        // Overall styling
        'bg_color'        => '#ffffff',
        'text_color'      => '#333333',
        'accent_color'    => '#0073aa', // used for buttons or highlights

        // Banner / Intro
        'intro_heading'   => 'About PowerPlay Content',
        'intro_subheading'=> 'AI-Driven, SEO-Focused, and Ready to Elevate Your Brand',
        'intro_image'     => '', // URL for a wide banner image if you have one
        'intro_text'      => 'At PowerPlay Content, we specialize in merging AI technology with hands-on SEO expertise. Our mission? To help businesses rank higher, engage audiences, and grow their online presence.',

        // Founder Section
        'founder_name'    => 'Cole Williams',
        'founder_role'    => 'Founder & SEO Strategist',
        'founder_photo'   => '', // URL to your headshot
        'founder_bio'     => 'I have 2 years of SEO and digital marketing experience, crafting custom AI and research-based blogs that boost website visibility, enhance credibility, and drive real results. From keyword strategy to on-page optimization, I ensure every piece resonates with both search engines and readers.',

        // Bullet Points (Your Approach)
        'bullet_heading'  => 'My Approach',
        'bullet_1'        => 'In-depth keyword research for every niche',
        'bullet_2'        => 'AI-enhanced content creation tailored to your voice',
        'bullet_3'        => 'Data-driven revisions and performance tracking',

        // Why AI Section
        'why_heading'     => 'Why AI?',
        'why_text'        => 'In today’s fast-paced digital world, AI helps us deliver consistent, high-quality content quickly. Combined with human oversight, this hybrid approach ensures accuracy, creativity, and relevance across all deliverables.',

        // CTA at the bottom
        'cta_heading'     => 'Ready to Elevate Your Content?',
        'cta_subtext'     => 'Let’s combine AI efficiency with SEO strategy to help your brand dominate search rankings and captivate your audience.',
        'cta_button_text' => 'Get Started',
        'cta_button_link' => '/contact',
    );

    $args = shortcode_atts($defaults, $atts);

    ob_start(); 
    ?>
    <!-- Main Container -->
    <section style="background: <?php echo esc_attr($args['bg_color']); ?>; color: <?php echo esc_attr($args['text_color']); ?>; padding: 50px 20px; max-width: 1200px; margin: 0 auto; font-family: sans-serif;">

        <!-- Intro / Banner Section -->
        <div style="text-align: center; margin-bottom: 60px;">
            <?php if (!empty($args['intro_image'])) : ?>
                <img src="<?php echo esc_url($args['intro_image']); ?>" alt="Intro Banner" style="width:100%; max-height:400px; object-fit: cover; border-radius: 8px; margin-bottom: 20px;">
            <?php endif; ?>
            <h1 style="font-size: 2.5rem; margin-bottom: 10px;"><?php echo esc_html($args['intro_heading']); ?></h1>
            <p style="font-size: 1.2rem; color: #555; margin-bottom: 20px;"><?php echo esc_html($args['intro_subheading']); ?></p>
            <p style="max-width: 800px; margin: 0 auto; font-size:1.1rem; line-height:1.6;">
                <?php echo wp_kses_post($args['intro_text']); ?>
            </p>
        </div>

        <!-- Founder Section -->
        <div style="display: flex; flex-wrap: wrap; gap: 30px; align-items: center; margin-bottom: 60px;">
            <?php if (!empty($args['founder_photo'])) : ?>
            <div style="flex: 1; min-width: 300px;">
                <img src="<?php echo esc_url($args['founder_photo']); ?>" alt="Founder Photo" style="width: 100%; border-radius: 8px;">
            </div>
            <?php endif; ?>
            <div style="flex: 2; min-width: 300px;">
                <h2 style="font-size: 2rem; margin: 0;"><?php echo esc_html($args['founder_name']); ?></h2>
                <p style="font-style: italic; color:#666; margin-bottom: 20px;"><?php echo esc_html($args['founder_role']); ?></p>
                <p style="line-height:1.7; font-size:1.1rem;">
                    <?php echo wp_kses_post($args['founder_bio']); ?>
                </p>
            </div>
        </div>

        <!-- Bullet Points: Your Approach -->
        <div style="margin-bottom: 60px;">
            <h2 style="font-size: 1.8rem; margin-bottom: 20px;"><?php echo esc_html($args['bullet_heading']); ?></h2>
            <ul style="list-style: none; padding: 0; font-size:1.1rem; line-height:1.7;">
                <li style="margin-bottom: 10px;">&bull; <?php echo esc_html($args['bullet_1']); ?></li>
                <li style="margin-bottom: 10px;">&bull; <?php echo esc_html($args['bullet_2']); ?></li>
                <li style="margin-bottom: 10px;">&bull; <?php echo esc_html($args['bullet_3']); ?></li>
            </ul>
        </div>

        <!-- Why AI Section -->
        <div style="margin-bottom: 60px;">
            <h2 style="font-size: 1.8rem; margin-bottom: 15px;"><?php echo esc_html($args['why_heading']); ?></h2>
            <p style="font-size:1.1rem; line-height:1.7; max-width: 800px;">
                <?php echo wp_kses_post($args['why_text']); ?>
            </p>
        </div>

        <!-- Final CTA Section -->
        <div style="text-align:center; padding: 30px; border-radius: 8px; background: <?php echo esc_attr($args['accent_color']); ?>; color: #fff;">
            <h2 style="font-size: 2rem; margin-bottom: 10px;"><?php echo esc_html($args['cta_heading']); ?></h2>
            <p style="font-size:1.1rem; line-height:1.6; max-width: 800px; margin:0 auto 20px auto;">
                <?php echo wp_kses_post($args['cta_subtext']); ?>
            </p>
            <a href="<?php echo esc_url($args['cta_button_link']); ?>" style="
                background: #fff;
                color: <?php echo esc_attr($args['accent_color']); ?>;
                padding: 12px 30px;
                text-decoration: none;
                border-radius: 5px;
                font-weight: bold;
                font-size:1rem;">
                <?php echo esc_html($args['cta_button_text']); ?>
            </a>
        </div>

    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('fancy-about-extended', 'fancy_extended_about_shortcode');
