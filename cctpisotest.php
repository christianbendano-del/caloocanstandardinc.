
<?php include 'header.php'; ?>

<section class="function-section">
    
        <h2 class="page-main-title">PISO TEST</h2>

        <div class="function-image-wrapper">
            <img src="picture/[CSI] Car Care Tip Piso Test.png" alt="Tire Function Diagram" class="center-tire-only">
        </div>

        <div class="function-content">
            <p class="intro-text">The Piso Test is the Philippines’ DIY standard for tire safety. It offers an easy and accessible way to check if tread has dropped below the 2/32” (1.6mm) legal limit, helping prevent hydroplaning and signaling when tires need replacement.</p>

           <div class="info-block">
    <div class="info-header">
       
        <h4 class="info-title">HOW TO DO THE PISO TEST</h4>
    </div>
    
    <div class="piso-test-container">
       
        
        <ol class="piso-steps-list">
            <li>Insert a Piso coin into your tire thread.</li>
            <li>Make sure the coin is upright.</li>
            <li>Observe how much of the coin is hidden by the rubber.</li>
            <li>Do the same for all grooves of every tire for the possibility of uneven wear.</li>
        </ol>
    </div>
</div>
<div class="piso-grid">
        <div class="piso-card">
            <div class="piso-img-wrapper" onmousemove="zoomIn(event)" onmouseleave="zoomOut(event)">
                <img src="picture/[CSI] Car Care Tip New Piso Passed.png" alt="Piso Test Passed">
            </div>
            <div class="piso-label passed">PASSED: It covers Rizal’s name and Tie</div>
        </div>
        <div class="piso-card">
            <div class="piso-img-wrapper" onmousemove="zoomIn(event)" onmouseleave="zoomOut(event)">
                <img src="picture/[CSI] Car Care Tip Old Piso Passed.png" alt="Piso Test Passed">
            </div>
            <div class="piso-label passed">PASSED: It covers the year of coin</div>
        </div>
        <div class="piso-card">
            <div class="piso-img-wrapper" onmousemove="zoomIn(event)" onmouseleave="zoomOut(event)">
                <img src="picture/[CSI] Car Care Tip New Piso Failed.png" alt="Piso Test Failed">
            </div>
            <div class="piso-label failed">NEW ONE PESO COIN</div>
        </div>
        <div class="piso-card">
            <div class="piso-img-wrapper" onmousemove="zoomIn(event)" onmouseleave="zoomOut(event)">
                <img src="picture/[CSI] Car Care Tip Old Piso Failed.png" alt="Piso Test Failed">
            </div>
            <div class="piso-label failed">OLD ONE PESO COIN</div>
        </div>
    </div>
            
            <p class="footer-note">It  is a small habit that leads to big savings and better safety. Perform this check once a month, but don't stop there—always inspect your tires for visual damage like cracks or "bukol" (bulges).  Proper tire care protects both your family and your wallet by preventing costly accidents.</p>
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
    function zoomIn(event) {
    const wrapper = event.currentTarget;
    const img = wrapper.querySelector('img');
    
    // Kunin ang posisyon ng mouse relative sa wrapper
    const rect = wrapper.getBoundingClientRect();
    const x = ((event.clientX - rect.left) / rect.width) * 100;
    const y = ((event.clientY - rect.top) / rect.height) * 100;
    
    // I-apply ang zoom at baguhin ang transform-origin sa posisyon ng mouse
    img.style.transformOrigin = `${x}% ${y}%`;
    img.style.transform = "scale(2)"; // 2x Zoom
}

function zoomOut(event) {
    const img = event.currentTarget.querySelector('img');
    img.style.transform = "scale(1)";
    img.style.transformOrigin = "center center";
}
</script>