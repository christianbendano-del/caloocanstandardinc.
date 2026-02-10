<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caloocan Standard Inc. | The Right Tire Changes Everything!</title>
    
    <link rel="stylesheet" href="style.css">
        <?php 
        $current_page = basename($_SERVER['PHP_SELF']); 

        if ($current_page == 'pitstop.php') {
            echo '<link rel="stylesheet" href="pitstop.css">';
        } 
        elseif (in_array($current_page, ['tires.php', 'lubricants.php', 'batteries.php','tubeandflaps.php'])) {
            echo '<link rel="stylesheet" href="product.css">';
        }
        elseif (in_array($current_page, ['about.php', 'missionandvision.php'])) {
            echo '<link rel="stylesheet" href="aboutus.css">';
        }
         elseif (in_array($current_page, ['beadealer.php'])) {
            echo '<link rel="stylesheet" href="beadealer.css">';
        }
        elseif (in_array($current_page, ['joinus.php'])) {
            echo '<link rel="stylesheet" href="joinus.css">';
        }
        
    ?>
    <link rel="icon" type="image/png" href="picture/csiicon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Oswald:wght@500;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-left">
                <div class="top-bar-item">
                    <i class="fas fa-phone-alt"></i> (02) 8363-8370 to 72
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-envelope"></i> Sales@caloocanstandard.com
                </div>
            </div>

            <div class="top-bar-right">
                <div class="top-bar-item">
                    <i class="far fa-clock"></i> Mon-Sat: 08:00 - 17:00
                </div>
            </div>
        </div>
    </div>

    <header>
        <div class="container header-content">
            <div class="logo">
                <a href="index.php"><img src="picture/csilogo.png" alt="CSI Logo"></a>
            </div>

            <nav id="main-nav">
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    
                    <li class="has-dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle">
                            Products <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="tires.php">Tires</a></li>
                            <li><a href="batteries.php">Batteries</a></li>
                            <li><a href="lubricants.php">Lubricants</a></li>
                            <li><a href="tubeandflaps.php">Others</a></li>
                        </ul>
                    </li>

                    <li><a href="about.php">About Us</a></li>
                    
                    <li><a href="pitstop.php">Pitstop</a></li>
                    
                    <li><a href="beadealer.php">Be a Dealer</a></li>
                </ul>
            </nav>

            <div class="menu-toggle" id="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

    <div class="menu-overlay" id="menu-overlay"></div>