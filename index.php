<?php include 'header.php'; ?>

<div class="main-hero-wrapper">
    <div class="background-slider">
        <div class="bg-slide active" style="background-image: url('picture/[CSI] Home Cover Photo - Alliance.png');"></div>
        <div class="bg-slide" style="background-image: url('picture/[CSI] Home Cover Photo - Wonderland.png');"></div>
        <div class="bg-slide" style="background-image: url('picture/[CSI] Home Cover - MRL.png');"></div>
    </div>

    <div class="static-content">
        <div class="hero-text-area">
            <p class="sub-title">YOUR TRUSTED</p>
            <h1>PARTNER ON THE ROAD</h1>
            <a href="about.php" class="btn-modern">LEARN MORE <span>›</span></a>
        </div>

        <div class="categories-container">
            <div class="glass-grid">
                <a href="tires.php" class="cat-card">
                    <div class="cat-label"><span class="brand-name">TIRES</span></div>
                    <div class="img-box">
                        <img src="picture/_CSI__Home_Category_Photo_-_Tires.png" alt="Tires">
                    </div>
                </a>

                <a href="batteries.php" class="cat-card">
                    <div class="cat-label"><span class="brand-name">BATTERIES</span></div>
                    <div class="img-box">
                        <img src="picture/_CSI__Home_Category_Photo_-_Battery.png" alt="Batteries">
                    </div>
                </a>

                <a href="tubeandflaps.php" class="cat-card">
                    <div class="cat-label"><span class="brand-name">LUBRICANTS</span></div>
                    <div class="img-box">
                        <img src="picture/[CSI] Home Category Photo - Lubricants.png" alt="Lubricants">
                    </div>
                </a>

                <a href="tubeandflaps.php" class="cat-card">
                    <div class="cat-label"><span class="brand-name">OTHERS</span></div>
                    <div class="img-box">
                        <img src="picture/_CSI__Home_Category_Photo_-_Others.png" alt="Others">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<section class="feature-cta-row">
    <div class="cta-wrapper">
        <div class="cta-block">
            <div class="cta-icon"><i class="fas fa-info-circle"></i></div>
            <h2 class="cta-title">Who We Are</h2>
            <p class="cta-text">At Caloocan Standard Inc., quality isn’t an exception—it’s the baseline. For over 60 years, we’ve been a trusted automotive partner, driving a stronger, more efficient future—the Caloocan way.</p>
            <a href="about.php" class="ultra-modern-btn">
                <span class="btn-label">CLICK HERE</span>
                <span class="btn-arrow-box"><i class="fas fa-chevron-right"></i></span>
            </a>
        </div>

        <div class="cta-middle-divider"></div>

        <div class="cta-block">
            <div class="cta-icon"><i class="fas fa-warehouse"></i></div>
            <h2 class="cta-title">Be a Dealer</h2>
            <p class="cta-text">More than products—we offer partnership. Join Caloocan Standard Inc. and bring your customers quality, choice, and service they can rely on.</p>
            <a href="beadealer.php" class="ultra-modern-btn">
                <span class="btn-label">CLICK HERE</span>
                <span class="btn-arrow-box"><i class="fas fa-chevron-right"></i></span>
            </a>
        </div>
    </div>
</section>

<section class="tire-modern-clean">
    <div class="tire-bg-white-layer"></div>
    <div class="tire-content-wrap">
        <div class="tire-text-col">
            <h1 class="tire-main-title">PITSTOP</h1>
            <p class="tagline">Drive smarter, stay ahead</p>
            <a href="pitstop.php" class="tire-action-red">SEE ALL ARTICLES</a>
        </div>

        <div class="tire-cards-col">
            <div class="tire-card-no-border">
                <a href="pitstop.php" class="tire-link-box">
                    <div class="tire-img-clipper">
                        <img src="picture/[CSI] Home Pitstop - News & Updates.png" alt="News">
                        <div class="tire-card-label">NEWS AND EVENT</div>
                    </div>
                </a>
            </div>
            <div class="tire-card-no-border">
                <a href="carcaretips.php" class="tire-link-box">
                    <div class="tire-img-clipper">
                        <img src="picture/[CSI] Home Pitstop - Car Care Tips.png" alt="Tips">
                        <div class="tire-card-label">CAR CARE TIPS</div>
                    </div>
                </a>
            </div>
            <div class="tire-card-no-border">
                <a href="carcareessentials.php" class="tire-link-box">
                    <div class="tire-img-clipper">
                        <img src="picture/[CSI] Home Pitstop - Car Talks.png" alt="Talks">
                        <div class="tire-card-label">CAR ESSENTIALS</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* CTA Reveal Animations */
    .cta-wrapper { display: flex; justify-content: center; align-items: stretch; max-width: 1200px; margin: 0 auto; }
    .cta-block { flex: 1; display: flex; flex-direction: column; justify-content: space-between; padding: 40px 60px; opacity: 0; transform: translateY(50px); filter: blur(5px); transition: all 1s cubic-bezier(0.16, 1, 0.3, 1); }
    .cta-middle-divider { width: 1px; background-color: #ddd; margin: 40px 0; opacity: 0; transition: opacity 1s ease; }
    .reveal-now .cta-block { opacity: 1 !important; transform: translateY(0) !important; filter: blur(0) !important; }
    .reveal-now .cta-middle-divider { opacity: 1 !important; }
    .reveal-now .cta-block:nth-child(1) { transition-delay: 0.5s; }
    .reveal-now .cta-block:nth-child(3) { transition-delay: 0.8s; }

    /* Pitstop Reveal Animations */
    .tire-text-col, .tire-img-clipper img { opacity: 0; will-change: transform, filter, opacity; }
    .reveal-now .tire-text-col { animation: textModernSlide 1s cubic-bezier(0.19, 1, 0.22, 1) forwards; animation-delay: 0.2s; }
    .reveal-now .tire-card-no-border img { animation: imageHarurot 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards; }
    .reveal-now .tire-card-no-border:nth-child(3) img { animation-delay: 0.1s; }
    .reveal-now .tire-card-no-border:nth-child(2) img { animation-delay: 0.4s; }
    .reveal-now .tire-card-no-border:nth-child(1) img { animation-delay: 0.7s; }

    @keyframes imageHarurot {
        0% { transform: translateX(100px) scale(1.3); filter: blur(15px) brightness(1.5); opacity: 0; }
        100% { transform: translateX(0) scale(1); filter: blur(0) brightness(1); opacity: 1; }
    }
    @keyframes textModernSlide {
        0% { transform: translateX(-50px); opacity: 0; filter: blur(5px); }
        100% { transform: translateX(0); opacity: 1; filter: blur(0); }
    }

    .tire-img-clipper { position: relative; overflow: hidden; background: #000; clip-path: polygon(10% 0, 100% 0, 90% 100%, 0 100%); }
    .tagline { font-size: 29px; font-weight: normal; color: black; margin-top: 5px; letter-spacing: 1px; }
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const observerOptions = { threshold: 0.2 };
    
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-now');
                revealObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.feature-cta-row, .tire-modern-clean').forEach(section => {
        revealObserver.observe(section);
    });
});
</script>
<?php include 'footer.php'; ?>