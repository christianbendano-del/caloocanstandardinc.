<div class="contact-stack" id="contactStack">
    <div class="main-trigger" onclick="toggleModernContact()">
        <div class="tooltip" id="helpTooltip">Hello! How can we help you?</div>
        <div class="btn-circle">
            <img src="picture/operator.png" alt="Support">
            <span class="icon-bar"></span>
        </div>
    </div>

    <div class="social-icons-wrapper">
        <a href="viber://chat?number=+639998816400" class="btn-circle viber">
            <img src="picture/viber.png" alt="Viber">
        </a>
        <a href="https://www.messenger.com/t/104591254588832" class="btn-circle messenger">
            <img src="picture/messenger.png" alt="Messenger">
        </a>
        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Sales@caloocanstandard.com" 
           target="_blank" 
           rel="noopener noreferrer" 
           class="btn-circle email">
            <img src="picture/communication.png" alt="Gmail">
        </a>
    </div>
</div>

<footer class="modern-footer">
    <div class="footer-container">
        
        <div class="footer-col brand-col">
            <img src="picture/csilogo.png" alt="CSI Logo" class="footer-logo">
            <p class="company-desc">
                Established in 1969, Caloocan Standard Inc. is one of the country’s most trusted distributors of tires and batteries.
            </p>
            <div class="google-rating-box">
                <p class="rating-title">GOOGLE REVIEW RATING</p>
                <div class="rating-content">
                    <div class="stars">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <span class="score-num">5.0</span>
                </div>
            </div>
        </div>

        <div class="footer-col content-col">
            <h4>Company</h4>
            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="tires.php">Products</a></li>
                <li><a href="pitstop.php">Pitstop</a></li>
                <li><a href="beadealer.php">Be a dealer</a></li>
            </ul>
        </div>

        <div class="footer-col content-col">
            <div class="product-grid">
                <div class="grid-column">
                    <a href="tires.php" class="category-label">TIRES</a>
                    <ul>
                        <li><a href="#">Alliance</a></li>
                        <li><a href="#">LEAO</a></li>
                        <li><a href="#">MRL</a></li>
                        <li><a href="#">TVS EUROGRIP</a></li>
                        <li><a href="#">Wonderland</a></li>
                    </ul>
                </div>

                <div class="grid-column">
                    <a href="batteries.php" class="category-label">BATTERIES</a>
                    <ul>
                        <li><a href="#">Megaforce</a></li>
                        <li><a href="#">Primera</a></li>
                        <li><a href="#">Superking</a></li>
                        <li><a href="#">Black Panther</a></li>
                        <li><a href="#">SF Sonic</a></li>
                    </ul>
                </div>

                <div class="grid-column">
                    <a href="tubeandflaps.php" class="category-label">OTHERS</a>
                    <ul>
                        <li><a href="#">Samic</a></li>
                        <li><a href="#">Eiffel</a></li>
                        <li><a href="#">Matrix</a></li>
                        <li><a href="#">Tube Master</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-col content-col">
            <h4>Contact us</h4>
            <ul class="contact-info">
                <li><i class="fas fa-mobile-alt"></i> 0917-835-5884</li>
                <li><i class="fas fa-phone-alt"></i> (02) 8363-8370 to 72</li>
                <li><i class="fas fa-envelope"></i> Sales@caloocanstandard.com</li>
            </ul>
            <p class="follow-text">Follow us</p>
            <div class="social-icons-only">
                <a href="https://www.facebook.com/caloocanstandardinc" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="viber://chat?number=+639998816400"><i class="fab fa-viber"></i></a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=Sales@caloocanstandard.com" target="_blank"><i class="fas fa-envelope"></i></a>
                <a href="https://waze.com/ul/hwdw531vpv" target="_blank"><i class="fab fa-waze"></i></a>
            </div>
        </div>

    </div>
    
    <div class="footer-bottom">
        <p>Copyright © 2026 Caloocan Standard Inc. All Rights Reserved.</p>
    </div>
</footer>

<script src="script.js"></script>
<?php 
        $current_page = basename($_SERVER['PHP_SELF']); 
        
        // Pagsamahin ang mga pages na nangangailangan ng confetti gamit ang OR (||)
        if ($current_page == 'joinus.php' || $current_page == 'missionandvision.php'|| $current_page == 'index.php'|| $current_page == 'about.php'|| $current_page == 'tires.php'|| $current_page == 'tubeandflap.php'|| $current_page == 'beadealer.php'|| $current_page == 'pitstop.php'|| $current_page == 'batteries.php'|| $current_page == 'lubricants.php') {
            echo '<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>';
        }
    ?>
</body>

</html>