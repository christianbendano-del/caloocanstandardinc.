<?php include 'header.php'; ?>



<div class="carcare-container">
    
  <div class="carcare-container">
    <nav class="breadcrumbs">
        <a href="index.php"><i class="fas fa-home"></i></a>
        <span class="separator">›</span>
        <a href="pitstop.php">PITSTOP</a>
        <span class="separator">›</span>
        <span class="current-page">Car-Care Tips</span>
    </nav>

    <h1 class="page-main-title">Basic Knowledge of Lubricants</h1>

   
    <?php $main_banner = "picture/samplepic.jpg"; ?>

    <section class="hero-banner" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('<?= $main_banner ?>');">
        <div class="hero-text">
           Car Care<br>
           Tips
        </div>
    </section>
<nav class="sub-menu-bar">
        <div class="sub-menu-container">
            <div class="custom-select-box" id="subToggle">
                <span>Tires</span> <i class="fas fa-chevron-down"></i>
            </div>

            <ul class="sub-menu-list" id="subMenuList">
                <li ><a href="carcaretips.php">Tires</a></li>
                <li><a href="carcaretipsbatteries.php">Batteries</a></li>
                <li class="active"><a href="carcaretipslubricants.php">Lubricants</a></li>
            </ul>
        </div>
    </nav>
    <section class="grid-container">
        <?php
        $items = [
            ['title' => 'Structure', 'img' => 'picture/samplepic.jpg'],
            ['title' => 'Materials', 'img' => 'picture/samplepic.jpg'],
            ['title' => 'Functions and performances', 'img' => 'picture/samplepic.jpg'],
            ['title' => 'Variety of tires', 'img' => 'picture/samplepic.jpg'],
            ['title' => 'Trivia', 'img' => 'picture/samplepic.jpg']
        ];

        foreach ($items as $item): ?>
            <a href="#" class="grid-item">
                <article>
                    <div class="img-wrapper">
                        <img src="<?= $item['img'] ?>" alt="<?= $item['title'] ?>">
                    </div>
                    <div class="label">
                        <span><?= strtoupper($item['title']) ?></span> 
                        <span style="font-size: 10px; opacity: 0.6;">┘</span>
                    </div>
                </article>
            </a>
        <?php endforeach; ?>
    </section>
</div>

<?php include 'footer.php'; ?>