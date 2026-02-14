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
            
            <a href="cctpisotest.php" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Structure">
                    <div class="info-label">
                        <span>Piso Test</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Materials">
                    <div class="info-label">
                        <span>When to replace your tire?</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Functions">
                    <div class="info-label">
                        <span>How to choose the right tire</span>
                        <i class="fas fa-caret-right"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="info-card">
                <div class="info-img-box">
                    <img src="picture/samplepic.jpg" alt="Variety">
                    <div class="info-label">
                        <span>How to maximize your tire</span>
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
<script>
function filterCategories() {
    // 1. Kunin ang input value at gawing lowercase para hindi case-sensitive
    let input = document.getElementById('brandSearch').value.toLowerCase();
    
    // 2. Kunin lahat ng cards sa loob ng grid
    let cards = document.getElementsByClassName('info-card');

    // 3. I-loop ang bawat card
    for (let i = 0; i < cards.length; i++) {
        // Kunin ang text sa loob ng span (hal. "FUNCTION", "ANATOMY OF TIRES")
        let label = cards[i].querySelector('.info-label span').textContent.toLowerCase();

        // 4. I-check kung ang input ay nasa loob ng label
        if (label.includes(input)) {
            cards[i].style.display = ""; // Ipakita ang card
        } else {
            cards[i].style.display = "none"; // Itago ang card
        }
    }
}
</script>
