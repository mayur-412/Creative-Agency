<?php
/**
 * Template Name: Contact page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package creativw_agency
 */

get_header();
?>

<!-- contact inner banner start -->
<section class="container contact-inner-banner">
    <div class="row">
        <div class="contact-inner-banner-wrapper">
            <div class="contact-inner-banner-content">
                <span class="section-subtitle">contact us</span>
                <h1>Let's Start A <strong>Conversation</strong></h1>
                <p>We're always excited to discuss new ideas, answer your questions, and help bring your next project to life.</p>
                <div class="breadcrumb-wrap">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><i class="fa-solid fa-angle-right"></i></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <div class="contact-inner-banner-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/bg-1.jpg" alt="Contact Banner">
            </div>
        </div>
    </div>
</section>
<!-- contact inner banner end -->

<!-- contact form section start -->
<section class="container contact-form-section">
    <div class="row">
        <div class="contact-form-wrapper">
            <div class="contact-form-content">
                <span class="section-subtitle">get in touch</span>
                <h2>Send Us A <strong>Message</strong></h2>
                <p>Have a question or project in mind? Fill out the form below and our team will get back to you as soon as possible.</p>
                <form class="contact-form">

    <div class="contact-form-row">
        <div class="contact-form-group">
            <label>Full Name</label>
            <input type="text" placeholder="Enter your full name">
        </div>

        <div class="contact-form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Enter your email">
        </div>
    </div>

    <div class="contact-form-row">
        <div class="contact-form-group">
            <label>Phone Number</label>
            <input type="tel" placeholder="Enter your phone number">
        </div>

        <div class="contact-form-group">
            <label>Subject</label>
            <input type="text" placeholder="Enter subject">
        </div>
    </div>

    <div class="contact-form-group">
        <label>Your Message</label>
        <textarea placeholder="Write your message..."></textarea>
    </div>

    <button type="submit" class="theme-btn">Send Message</button>

</form>
            </div>
            <div class="contact-details">
                <div class="contact-details-box">
                    <div class="contact-details-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-details-content">
                        <h4>Office Address</h4>
                        <p>4517 Washington Ave, Manchester, Kentucky 39495</p>
                    </div>
                </div>
                <div class="contact-details-box">
                    <div class="contact-details-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-details-content">
                        <h4>Phone Number</h4>
                        <a href="tel:+1234567890">+1 (234) 567-890</a>
                        <a href="tel:+1987654321">+1 (987) 654-321</a>
                    </div>
                </div>
                <div class="contact-details-box">
                    <div class="contact-details-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-details-content">
                        <h4>Email Address</h4>
                        <a href="mailto:info@example.com">info@example.com</a>
                        <a href="mailto:support@example.com">support@example.com</a>
                    </div>
                </div>
                <div class="contact-details-box">
                    <div class="contact-details-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="contact-details-content">
                        <h4>Working Hours</h4>
                        <p>Monday - Friday</p>
                        <span>09:00 AM - 06:00 PM</span>
                    </div>
                </div>
                <div class="contact-social">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form section end -->


<!-- contact map section start -->
<section class="container contact-map-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">our location</span>
            <h2>Find <strong>Our Office</strong></h2>
            <p>Visit our office or schedule a meeting with our team. We'd love to hear about your next project.</p>
        </div>
        <div class="contact-map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.188995315034!2d72.571365!3d23.016423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f5b4c7e3c1%3A0x4b3d0f98c024aaa1!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1710000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- contact map section end -->

<!-- contact faq section start -->
<section class="container contact-faq-section">
    <div class="row">
        <div class="section-heading">
            <span class="section-subtitle">frequently asked questions</span>
            <h2>Have Any <strong>Questions?</strong></h2>
            <p>Find answers to the most common questions about our services and working process.</p>
        </div>
        <div class="contact-faq-wrapper">
            <div class="contact-faq-item active">
                <div class="contact-faq-title">
                    <h4>How long does a website project take?</h4>
                    <i class="fa-solid fa-minus"></i>
                </div>
                <div class="contact-faq-content">
                    <p>Most website projects are completed within 2 to 6 weeks depending on the scope, functionality and client feedback process.</p>
                </div>
            </div>
            <div class="contact-faq-item">
                <div class="contact-faq-title">
                    <h4>Do you build responsive websites?</h4>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="contact-faq-content">
                    <p>Yes. Every website we create is fully responsive and optimized for desktop, tablet and mobile devices.</p>
                </div>
            </div>
            <div class="contact-faq-item">
                <div class="contact-faq-title">
                    <h4>Can you redesign my existing website?</h4>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="contact-faq-content">
                    <p>Absolutely. We redesign existing websites with a modern look, improved performance and better user experience.</p>
                </div>
            </div>
            <div class="contact-faq-item">
                <div class="contact-faq-title">
                    <h4>Do you provide website maintenance?</h4>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="contact-faq-content">
                    <p>Yes. We provide regular maintenance, security updates, backups and technical support after project delivery.</p>
                </div>
            </div>
            <div class="contact-faq-item">
                <div class="contact-faq-title">
                    <h4>How can I request a quotation?</h4>
                    <i class="fa-solid fa-plus"></i>
                </div>
                <div class="contact-faq-content">
                    <p>You can fill out our contact form or call us directly. We'll review your requirements and send you a detailed quotation.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact faq section end -->

<?php
get_footer();
