<?php
/*
Plugin Name: Modern AI Setup
Description: Creates 5 core pages with a friendly, modern design & adds a [modern-hero] shortcode.
Version: 1.0
Author: YourName
*/

// Create core pages on activation
function modern_ai_create_core_pages() {

    // Define the pages we want
    $pages = [
        'Home' => [
            'title' => 'Home',
            'content' => '
            <section style="
                padding: 60px; 
                max-width: 1000px; 
                margin: 0 auto; 
                text-align: center;">
              <h1 style="
                  font-size: 2.5rem; 
                  color: #333; 
                  margin-bottom: 20px;">
                  Welcome to <span style="color:#0073aa;">Your AI Blog Service</span>
              </h1>
              <p style="
                  font-size: 1.2rem; 
                  line-height: 1.6; 
                  color: #555; 
                  max-width: 700px; 
                  margin: 0 auto;">
                We create engaging, SEO-friendly blog posts using the latest AI technology. 
                Our content is tailor-made for your audience—whether they&apos;re tech-savvy or just starting to explore the digital space.
              </p>
              <a href="/services" style="
                  display: inline-block; 
                  margin-top: 30px; 
                  padding: 15px 30px; 
                  background: #0073aa; 
                  color: #fff; 
                  border-radius: 5px; 
                  text-decoration: none;
                  font-size: 1.1rem;">
                  View Our Services
              </a>
            </section>
            '
        ],
        'Services' => [
            'title' => 'Services',
            'content' => '
            <section style="
                padding: 60px; 
                max-width: 1000px; 
                margin: 0 auto;">
              <h2 style="
                  font-size: 2rem; 
                  color: #333; 
                  text-align: center; 
                  margin-bottom: 40px;">
                  Our AI Blog Packages
              </h2>
              <p style="
                  font-size: 1.1rem; 
                  color: #555; 
                  line-height: 1.6; 
                  max-width: 700px; 
                  margin: 0 auto 40px auto; 
                  text-align:center;">
                We offer flexible plans to match your content needs, ensuring top-notch quality and SEO optimization.
              </p>
              <div style="
                  display: flex; 
                  gap: 30px; 
                  justify-content: center; 
                  flex-wrap: wrap;">

                <div style="
                    border: 1px solid #ddd; 
                    border-radius: 8px; 
                    width: 300px; 
                    padding: 20px; 
                    text-align: center;">
                  <h3>Starter Package</h3>
                  <ul style="
                      list-style: none; 
                      padding: 0; 
                      margin: 20px 0;">
                    <li>2 Blogs / Month</li>
                    <li>Basic Keyword Research</li>
                    <li>1 Revision Round</li>
                  </ul>
                  <p><strong>$200/month</strong></p>
                </div>

                <div style="
                    border: 1px solid #ddd; 
                    border-radius: 8px; 
                    width: 300px; 
                    padding: 20px; 
                    text-align: center;">
                  <h3>Growth Package</h3>
                  <ul style="
                      list-style: none; 
                      padding: 0; 
                      margin: 20px 0;">
                    <li>4 Blogs / Month</li>
                    <li>Advanced Keyword Research</li>
                    <li>2 Revision Rounds</li>
                  </ul>
                  <p><strong>$400/month</strong></p>
                </div>

                <div style="
                    border: 1px solid #ddd; 
                    border-radius: 8px; 
                    width: 300px; 
                    padding: 20px; 
                    text-align: center;">
                  <h3>Premium Package</h3>
                  <ul style="
                      list-style: none; 
                      padding: 0; 
                      margin: 20px 0;">
                    <li>8 Blogs / Month</li>
                    <li>Full SEO Strategy</li>
                    <li>3 Revision Rounds</li>
                  </ul>
                  <p><strong>$600/month</strong></p>
                </div>
              </div>
              <p style="text-align:center; margin-top:40px;">
                Need something custom? <a href="/contact" style="color:#0073aa;">Reach out to us</a> for a tailored package.
              </p>
            </section>
            '
        ],
        'Pricing' => [
            'title' => 'Pricing',
            'content' => '
            <section style="
                padding: 60px; 
                max-width: 800px; 
                margin: 0 auto;">
              <h2 style="
                  font-size: 2rem; 
                  color: #333; 
                  text-align: center; 
                  margin-bottom: 30px;">
                  Pricing Overview
              </h2>
              <p style="
                  font-size: 1.1rem; 
                  color: #555; 
                  line-height: 1.6; 
                  text-align: center;">
                Our monthly packages start at just <strong>$200</strong> for engaging, AI-driven blog content. 
                Whether you&apos;re a small business or a larger enterprise, we have solutions that meet your budget and growth goals.
              </p>
              <p style="text-align:center; margin-top:30px;">
                <a href="/services" style="
                    background: #0073aa; 
                    color: #fff; 
                    padding: 12px 25px; 
                    border-radius: 5px; 
                    text-decoration: none;
                    font-size: 1.1rem;">
                  Compare Our Packages
                </a>
              </p>
            </section>
            '
        ],
        'About' => [
            'title' => 'About',
            'content' => '
            <section style="
                padding: 60px; 
                max-width: 800px; 
                margin: 0 auto;">
              <h2 style="
                  font-size: 2rem; 
                  color: #333; 
                  text-align: center; 
                  margin-bottom: 30px;">
                  About Our AI-Enhanced Team
              </h2>
              <p style="
                  font-size: 1.1rem; 
                  color: #555; 
                  line-height: 1.6; 
                  text-align: center;">
                We&apos;re writers, strategists, and tech enthusiasts on a mission to transform how businesses create content. 
                Our AI-driven approach balances efficiency with a personal touch—ensuring every piece reads naturally and resonates with your audience.
              </p>
              <p style="
                  text-align: center; 
                  margin-top: 40px; 
                  color: #777;">
                Curious about our process? <a href="/contact" style="color:#0073aa;">Contact us</a> to learn more or get started.
              </p>
            </section>
            '
        ],
        'Contact' => [
            'title' => 'Contact',
            'content' => '
            <section style="
                padding: 60px; 
                max-width: 700px; 
                margin: 0 auto; 
                text-align: center;">
              <h2 style="
                  font-size: 2rem; 
                  margin-bottom: 20px; 
                  color: #333;">
                  Get in Touch
              </h2>
              <p style="
                  font-size: 1.1rem; 
                  color: #555; 
                  line-height: 1.6; 
                  margin-bottom: 30px;">
                Have questions about our packages or ready to place an order? Fill out the form below, and we&apos;ll get back to you soon.
              </p>
              <!-- If you have WPForms or another contact form plugin, embed its shortcode here, e.g.: [wpforms id="123"] -->
              <p style="color: #777;">
                <em>(Contact form coming soon...)</em>
              </p>
            </section>
            '
        ],
    ];

    // Create each page if it doesn't exist
    foreach ($pages as $slug => $page) {
        $slug_name = sanitize_title($slug);
        $existing_page = get_page_by_path($slug_name);
        if (!$existing_page) {
            wp_insert_post([
                'post_title'   => $page['title'],
                'post_content' => $page['content'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_name'    => $slug_name,
            ]);
        }
    }
}

register_activation_hook(__FILE__, 'modern_ai_create_core_pages');

// [modern-hero] shortcode
function modern_ai_hero_shortcode($atts) {
    $a = shortcode_atts([
        'title' => 'Elevate Your Content Strategy',
        'subtitle' => 'Engaging, AI-Powered Blogs for Your Audience',
        'button_text' => 'Work With Us',
        'button_link' => '/contact',
    ], $atts);

    ob_start(); 
    ?>
    <section style="
        padding: 60px 20px; 
        text-align: center; 
        background: linear-gradient(135deg, #0073aa 0%, #00a2ff 100%);
        color: #fff;
        border-radius: 8px;
        max-width: 1000px;
        margin: 40px auto;">
        <h2 style="font-size: 2.2rem; margin-bottom: 15px;"><?php echo esc_html($a['title']); ?></h2>
        <p style="font-size:1.2rem; margin-bottom: 30px;"><?php echo esc_html($a['subtitle']); ?></p>
        <a href="<?php echo esc_url($a['button_link']); ?>" style="
            background: #fff;
            color: #0073aa;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 1.1rem;">
            <?php echo esc_html($a['button_text']); ?>
        </a>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('modern-hero', 'modern_ai_hero_shortcode');
