<?php include 'header.php'; ?>

<section class="function-section">
    <div class="container">
        <h2 class="page-main-title">FUNCTION</h2>

        <div class="function-image-wrapper">
            <img src="picture/[CSI] Pitstop Tire Functions.png" alt="Tire Function Diagram" class="center-tire-only">
        </div>

        <div class="function-content">
            <p class="intro-text">Tires are often overlooked, but they are the only part of your vehicle designed to touch the ground. To keep you moving safely, they perform four essential functions:</p>

            <div class="info-block" id="direction">
                <div class="info-header">
                    <span class="info-num">01</span>
                    <h4>CHANGE DIRECTION</h4>
                </div>
                <p>Tires respond to steering inputs and help maintain stability and control during cornering</p>
            </div>

            <div class="info-block" id="weight">
                <div class="info-header">
                    <span class="info-num">02</span>
                    <h4>SUPPORT WEIGHT</h4>
                </div>
                <p>Tires carry the weight of the vehicle, its passengers, and cargo</p>
            </div>

            <div class="info-block" id="shock">
                <div class="info-header">
                    <span class="info-num">03</span>
                    <h4>SHOCK ABSORPTION</h4>
                </div>
                <p>Tires absorbs bumps and irregularities on the road for comfort and safety</p>
            </div>

            <div class="info-block" id="grip">
                <div class="info-header">
                    <span class="info-num">04</span>
                    <h4>GRIP AND TRACTION</h4>
                </div>
                <p>Tires ensure grip on the road surface during acceleration, braking, and turning</p>
            </div>

            <p class="footer-note">All of these critical functions are performed through a contact patch roughly the size of your hand — a small area carrying a massive responsibility. Next time you drive, take care of your tires.</p>
        </div>

        <div class="interactive-container-landscape">
            <div class="ls-card" onclick="scrollToSection('direction')" onmouseover="highlightText('direction')" onmouseout="removeHighlight('direction')">
                <div class="ls-image">
                    <img src="picture/samplepic.jpg" alt="PCR">
                </div>
                <div class="ls-label">
                    <span>CHANGE DIRECTION</span>
                    <i class="fas fa-chevron-up"></i>
                </div>
            </div>

            <div class="ls-card" onclick="scrollToSection('weight')" onmouseover="highlightText('weight')" onmouseout="removeHighlight('weight')">
                <div class="ls-image">
                    <img src="picture/samplepic.jpg" alt="LCV">
                </div>
                <div class="ls-label">
                    <span>SUPPORT WEIGHT</span>
                    <i class="fas fa-chevron-up"></i>
                </div>
            </div>

            <div class="ls-card" onclick="scrollToSection('shock')" onmouseover="highlightText('shock')" onmouseout="removeHighlight('shock')">
                <div class="ls-image">
                    <img src="picture/samplepic.jpg" alt="TBR">
                </div>
                <div class="ls-label">
                    <span>SHOCK ABSORPTION)</span>
                    <i class="fas fa-chevron-up"></i>
                </div>
            </div>

            <div class="ls-card" onclick="scrollToSection('grip')" onmouseover="highlightText('grip')" onmouseout="removeHighlight('grip')">
                <div class="ls-image">
                    <img src="picture/samplepic.jpg" alt="OTR">
                </div>
                <div class="ls-label">
                    <span>GRIP AND TRACTION</span>
                    <i class="fas fa-chevron-up"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>

