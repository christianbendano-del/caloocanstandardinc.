<?php include 'header.php'; ?>

<main class="main-page-wrapper">
    <section class="modern-hero" style="background-image: url('picture/[CSI] Home Cover Photo - Alliance.png');">
        <div class="hero-overlay">
            <div class="hero-container">
                <h1>Be a Dealer</h1>
                <p>Moving Forward Together</p>
            </div>
        </div>
    </section>

    <section class="dealer-section">
        <div class="breadcrumb-area">
            <nav class="breadcrumbs">
                <a href="index.php"><i class="fas fa-home"></i></a>
                <span class="separator">›</span>
                <span class="current-page">Be a Dealer</span>
            </nav>
        </div>

        <div class="dealer-container">
            <div class="dealer-form-box">
                <div class="form-header">
                    <h3 class="form-title">Start Your Dealership Today!</h3>
                    <p>Fill out the form with any query on your mind.</p>
                </div>
                
                <form id="my-form" action="https://formspree.io/f/mgozdnno" method="POST">
                    <div class="form-grid">
                        <div class="input-group">
                            <label>First Name *</label>
                            <input type="text" name="first_name" required>
                        </div>
                        <div class="input-group">
                            <label>Last Name *</label>
                            <input type="text" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-grid">
                        <div class="input-group">
                            <label>Email *</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="input-group">
                            <label>Contact Number *</label>
                            <input type="tel" name="contact_number" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <label>Subject</label>
                        <input type="text" name="subject">
                    </div>
                    <div class="input-group">
                        <label>Message *</label>
                        <textarea name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" id="submit-button" class="submit-app-btn">
                        <span>Submit Application</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

            <div class="dealer-info-card">
                <div class="modern-map-wrapper">
                    <div class="map-info-header">
                        <h4>Caloocan Standard Inc. Main Office</h4>
                        <p>110 6th St, Grace Park East, Caloocan City</p>
                    </div>
                    
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.123456789!2d120.985!3d14.65!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDM5JzAwLjAiTiAxMjDCsDU5JzAwLjAiRQ!5e0!3m2!1sen!2sph!4v123456789" 
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>

                    <div class="map-overlay">
                        <a href="https://waze.com/ul/hwdw531vpv" target="_blank" class="get-directions-btn">
                            <i class="fas fa-directions"></i>
                            <span>Get Directions</span>
                        </a>
                    </div>
                </div>

                <div class="info-details-padding">
                    <h2 class="dealer-subtitle">Location</h2>
                    
                    <div class="location-entry">
                        <h4 class="branch-name">Caloocan Standard Inc (Head Office)</h4>
                        <div class="contact-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>110 6th St, Grace Park East, Caloocan, Metro Manila</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-mobile-alt"></i>
                            <p>0917-835-5884</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-phone"></i>
                            <p>(02) 8363-8370 to 72</p>
                        </div>
                    </div>

                    <div class="location-entry separator">
                        <h4 class="branch-name">Tyregetz Inc (Retail Partner)</h4>
                        <div class="contact-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>109 Calamba St, Santa Mesa Heights, Quezon City</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-mobile-alt"></i>
                            <p>0999-881-6400</p>
                        </div>
                        <div class="contact-detail">
                            <i class="fas fa-phone"></i>
                            <p>(02) 8363-8081</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div id="thankYouModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-icon"><i class="fas fa-check-circle"></i></div>
        <h2>Dealer Application Received!</h2>
        <p>Thanks for reaching out! We’re excited about the possibility of working together.</p>
        <button onclick="closeModal()" class="close-btn">Close</button>
    </div>
</div>

<?php include 'footer.php'; ?>