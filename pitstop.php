
 <?php include 'header.php'; ?>
<section class="modern-hero" style="background-image: url('picture/[CSI] Pitstop Cover.png');">
   
    <div class="hero-overlay">
        <div class="hero-container">
            <h1>Pit Stop</h1>
            <p>Drive Smarter, Stay Ahead</p>
        </div>
    </div>
</section>
<section class="news-section">
    <div class="news-header">
        <h2 class="section-title">NEWS</h2>
      
    </div>

    <div class="carousel-container">
        <button class="btn-scroll left" onclick="scrollNews(-350)">&#10094;</button>
        
        <div class="news-wrapper" id="newsWrapper">
            <div class="news-card">
                <div class="img-container">
                    <span class="date-tag">15 <br> JUN</span>
                    <img src="picture/samplepic.jpg" alt="F1 News">
                </div>
                <div class="news-content">
                    <h3>CSI SAMPLE NEWS</h3>
                    <p class="category">HEADLINES</p>
                    <p class="summary">For the first time in six seasons, Fernando Alonso will no longer line up in the...</p>
                    <a href="#" class="show-more">Show More ⊕</a>
                </div>
            </div>

            <div class="news-card">
                <div class="img-container">
                    <span class="date-tag">14 <br> JUN</span>
                    <img src="picture/samplepic.jpg" alt="F1 News">
                </div>
                <div class="news-content">
                    <h3>CSI SAMPLE NEWS</h3>
                    <p class="category">FEATURES</p>
                    <p class="summary">The new machine, once again to be raced by Jenson Button and Fernando Alonso.</p>
                    <a href="#" class="show-more">Show More ⊕</a>
                </div>
            </div>

            <div class="news-card">
                <div class="img-container">
                    <span class="date-tag">13 <br> JUN</span>
                    <img src="picture/samplepic.jpg" alt="F1 News">
                </div>
                <div class="news-content">
                    <h3>CSI SAMPLE NEWS</h3>
                    <p class="category">HEADLINES</p>
                    <p class="summary">Unlike last winter, which saw the teams coping with an unprecedented...</p>
                    <a href="#" class="show-more">Show More ⊕</a>
                </div>
            </div>

            <div class="news-card">
                <div class="img-container">
                    <span class="date-tag">11 <br> JUN</span>
                    <img src="picture/samplepic.jpg" alt="F1 News">
                </div>
                <div class="news-content">
                    <h3>CSI SAMPLE NEWS</h3>
                    <p class="category">FEATURES</p>
                    <p class="summary">The layout phase of the new car was completed by the annual summer break.</p>
                    <a href="#" class="show-more">Show More ⊕</a>
                </div>
            </div>

            <div class="news-card">
                <div class="img-container"><span class="date-tag">10 <br> JUN</span>
                    <img src="picture/samplepic.jpg"></div>
                <div class="news-content"><h3>CSI SAMPLE NEWS</h3><p class="category">TECHNICAL</p><p class="summary">The team focuses on aerodynamics during the morning session.</p><a href="#" class="show-more">Show More ⊕</a></div>
            </div>
        </div>

        <button class="btn-scroll right" onclick="scrollNews(350)">&#10095;</button>
    </div>
</section>
<section class="modern-news-container">
    <div class="news-feed-overlay">
        
        <div class="overlay-card">
            <div class="card-bg-img" style="background-image: url('picture/[CSI]\ Home\ Pitstop\ -\ Car\ Care\ Tips.png');"></div>
            <div class="overlay-content">
                <p class="overlay-subtitle">Maintenance Guide</p>
                <h2 class="overlay-title">Car-Care Tips</h2>
                <p class="overlay-description">Keep your engine running like new with these expert tips.</p>
                <a href="carcaretips.php" class="btn-discover">
                    <span class="plus-icon">⊕</span> DISCOVER MORE
                </a>
            </div>
        </div>

        <div class="overlay-card">
            <div class="card-bg-img" style="background-image: url('picture/[CSI]\ Home\ Pitstop\ -\ Car\ Talks.png');"></div>
            <div class="overlay-content">
                <p class="overlay-subtitle">Basic Car Knowledge</p>
                <h2 class="overlay-title">Car Essentials</h2>
                <p class="overlay-description">Join the conversation about the future of automotive tech.</p>
                <a href="carcareessentials.php" class="btn-discover">
                    <span class="plus-icon">⊕</span> DISCOVER MORE
                </a>
            </div>
        </div>

    </div>
</section>
 <?php include 'footer.php'; ?>