 <?php include 'header.php'; ?>
<section class="modern-hero" style="background-image: url('picture/[CSI]\ Product\ Cover.png');">
    <div class="hero-overlay">
        <div class="hero-container">
            <h1>Others</h1>
            <p>Establishing the GOLD standard in the automotive industry— Our Caloocan way.</p>
        </div>
    </div>
</section>
<section class="product-categories">
    <div class="container">
        <h2 class="category-title">CATEGORIES</h2>
        
       <div class="category-nav-wrapper">
            <div class="mobile-select-trigger" id="categoryToggle">
                <span id="current-category-name">Tires</span> <i class="fas fa-chevron-down"></i>
            </div>

            <div class="category-tabs" id="categoryMenu">
                <a href="tires.php" class="tab-btn">Tires</a>
                <a href="batteries.php" class="tab-btn">Batteries</a>
                <a href="lubricants.php" class="tab-btn">Lubricants</a>
                <a href="tubeandflaps.php" class="tab-btn active">Others</a>
            </div>
        </div>
 <div class="middle-search-wrapper">
            <div class="modern-search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="brandSearch" placeholder="Search brands..." onkeyup="filterBrands()">
            </div>
        </div>
        <div class="product-grid" id="tires-grid">
    <a href="#" class="brand-card">
        <div class="brand-img-box"><img src="picture/matrix-logo.png" alt="Others"></div>
    </a>
    
</div>
    </div>
</section>
 <?php include 'footer.php'; ?>