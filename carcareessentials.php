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
        <h2 class="category-title">CAR ESSENTIALS</h2>
        
        <div class="category-nav-wrapper">
            <div class="mobile-select-trigger" id="categoryToggle">
                <span id="current-category-name">Tires</span> 
                <i class="fas fa-chevron-down"></i>
            </div>

            <div class="category-tabs" id="categoryMenu">
                <a href="carcareessentials.php" class="tab-btn active">Tires</a>
                <a href="carcareessentialsbatteries.php" class="tab-btn">Batteries</a>
                <a href="carcareessentialslubricants.php" class="tab-btn">Others</a>
               
            </div>
        </div>

        <div class="middle-search-wrapper">
            <div class="modern-search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="brandSearch" placeholder="Search categories..." onkeyup="filterCategories()">
            </div>
        </div>

       <div class="carcare-grid" id="tires-grid">
            
            <a href="ccefunction.php" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Structure">
                    <div class="info-label">
                        <span>FUNCTION</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="tire-materials.php" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Materials">
                    <div class="info-label">
                        <span>ANATOMY OF TIRES</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="tire-functions.php" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Functions">
                    <div class="info-label">
                        <span>SPECIFICATIONS</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="tire-variety.php" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Variety">
                    <div class="info-label">
                        <span>TYPES OF TIRES</span>
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
        <a href="carcaretips.php" class="related-card">
            <span>CAR CARE TIPS</span>
        </a>
    </div>
</div>
<?php include 'footer.php'; ?>

