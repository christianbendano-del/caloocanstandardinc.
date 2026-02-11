<?php include 'header.php'; ?>
<main class="main-page-wrapper">
<section class="modern-hero" style="background-image: url('picture/[CSI] About Cover.png');">
    <div class="hero-overlay">
        <div class="hero-container">
            <h1>Join Us</h1>
            <p>Career in Motion</p>
        </div>
    </div>
</section>
    <nav class="sub-menu-bar">
        <div class="sub-menu-container">
            <div class="custom-select-box" id="subToggle">
                <span>Join Us</span> <i class="fas fa-chevron-down"></i>
            </div>

            <ul class="sub-menu-list" id="subMenuList">
                <li><a href="about.php">Who We Are</a></li>
                <li><a href="missionandvision.php">Mission & Vision</a></li>
                <li class="active"><a href="joinus.php">Join Us</a></li>
            </ul>
        </div>
    </nav>
<div class="breadcrumb-area">
        <nav class="breadcrumbs">
            <a href="index.php"><i class="fas fa-home"></i></a>
            <span class="separator">›</span>
             <span class="current-page">About Us</span>
            <span class="separator">›</span>
            <span class="current-page">Join Us</span>
        </nav>
    </div>

 
<section class="join-us-section">

    <div class="application-container">

        <div class="form-header-box">
            <h2 class="form-title">Join Our Team</h2>
            <p>Drive your career forward with Caloocan Standard! Join our team and make an impact in tires, batteries, and lubricants—where innovation meets opportunity.</p>
        </div>

        <form id="my-form" action="https://formspree.io/f/xlgldlkj" method="POST">
            <div class="input-group full-width">
                <label>Position Applying For *</label>
                <select name="position" required class="modern-select">
                    <option value="" disabled selected>Select a position</option>
                    <option value="Secretary">Secretary</option>
                    <option value="Company Driver">Company Driver</option>
                    <option value="Warehouse Helper">Warehouse Helper</option>
                    <option value="Sales Representative">Sales Representative</option>
                </select>
            </div>

            <div class="form-grid">
                <div class="input-group">
                    <label>Full Name *</label>
                    <input type="text" name="full_name" required placeholder="Juan Dela Cruz">
                </div>
                <div class="input-group">
                    <label>Contact Number *</label>
                    <input type="tel" name="phone" required placeholder="0917XXXXXXX">
                </div>
            </div>

            <div class="form-grid">
                <div class="input-group">
                    <label>Email Address *</label>
                    <input type="email" name="email" required placeholder="example@mail.com">
                </div>
                <div class="input-group">
                    <label>Years of Experience *</label>
                    <input type="number" name="experience" required placeholder="e.g. 2">
                </div>
            </div>

            <div class="input-group full-width">
                <label>Link to your Resume (Google Drive / Dropbox) *</label>
                <div class="link-input-wrapper">
                    <i class="fas fa-link link-icon"></i>
                    <input type="url" name="resume_link" required placeholder="https://drive.google.com/your-resume-link">
                </div>
                <p class="file-hint">Note: Please ensure the link is set to "Anyone with the link can view".</p>
            </div>

            <div class="input-group full-width">
                <label>Why should we hire you? (Short Bio) *</label>
                <textarea name="cover_letter" rows="4" required placeholder="Tell us about your skills..."></textarea>
            </div>

            <button type="submit" id="submit-button" class="submit-app-btn">
                <span>Submit Application</span>
                <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</section>

<div id="thankYouModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-icon">
            <i class="fas fa-check-circle"></i>
        </div>
        <h2>Application Received!</h2>
        <p>Thank you for applying. Your application has been received. Our HR team will reach out to you via phone or email for the next steps.</p>
        <button onclick="closeModal()" class="close-btn">Close</button>
    </div>
</div>

<?php include 'footer.php'; ?>