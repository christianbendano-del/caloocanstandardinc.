<?php include 'header.php'; ?>

<section class="modern-hero" style="background-image: url('picture/samplepic.jpg');">
    <div class="hero-overlay">
        <div class="hero-container">
            <h1>Tires</h1>
            <p>Establishing the GOLD standard in the automotive industry— Our Caloocan way.</p>
        </div>
    </div>
</section>

<section class="product-categories">
    <div class="container">
        <h2 class="category-title">CAR CARE TIPS</h2>
        
        <div class="category-nav-wrapper">
            <div class="mobile-select-trigger" id="categoryToggle">
                <span id="current-category-name">Tires</span> 
                <i class="fas fa-chevron-down"></i>
            </div>

            <div class="category-tabs" id="categoryMenu">
                <a href="carcaretips.php" class="tab-btn active">Tires</a>
                <a href="" class="tab-btn">Batteries</a>
                <a href="" class="tab-btn">Others</a>
               
            </div>
        </div>

        <div class="middle-search-wrapper">
            <div class="modern-search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="brandSearch" placeholder="Search categories..." onkeyup="filterCategories()">
            </div>
        </div>

       <div class="carcare-grid" id="tires-grid">
            
            <a href="#" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Structure">
                    <div class="info-label">
                        <span>HOW TO CHOOSE TIREN</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Materials">
                    <div class="info-label">
                        <span>HOW TO MAXIMIZE TIRE</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Functions">
                    <div class="info-label">
                        <span>5 MUST DO BEFORE A TRIP</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Variety">
                    <div class="info-label">
                        <span>WHEN TO REPLACE</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

           

        </div>
    </div>
</section>
<div class="related-links-container">
    <h3 class="related-title">RELATED LINKS</h3>
    <div class="related-grid">
        <a href="pitstop.php" class="related-card">
            <span>PITSTOP</span>
        </a>
        <a href="carcareessentials.php" class="related-card">
            <span>CAR ESSENTIALS</span>
        </a>
    </div>
</div>
<?php include 'footer.php'; ?>

