<!--4. dashboard.php – Main User Dashboard-->

<?php
session_start();
include 'includes/session.php';
?>
<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      body {
    background-color: lightblue;
    font-family: 'Segoe UI', sans-serif;
}

.top-bar {
    background-color: #002147;
    color: white;
    padding: 5px 15px;
    font-size: 13px;
}

.top-bar select,
.top-bar input[type="text"] {
    margin-left: 10px;
    padding: 2px 5px;
    border-radius: 3px;
    border: none;
}

.banner {
    background-color: rgb(106, 159, 238);
    color: white;
    padding: 20px;
    text-align: center;
}

.banner h1,
.banner h3 {
    margin: 0;
}

.navbar {
    background-color: #004080;
}

.navbar-nav .nav-link {
    color: white !important;
    padding: 10px 15px;
}

.main-content {
    margin-top: 20px;
}

.profile-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    padding: 15px;
    margin-bottom: 20px;
    text-align: center;
}

.profile-card img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 10px;
}

.welcome-box {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.main-image {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
}

footer {
    background-color:rgb(202, 223, 235);
    color: black;
    text-align: center;
    padding: 10px;
    margin-top: 30px;
}
a {
    color: #007b3a;
}

/* ✅ Image slider animation */
.image-slider {
    width: 100%;
    max-width: 800px;
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    height: 400px;
     object-fit: cover;
  border-radius: 8px;
  display: block;
}

.slides {
    display: flex;
    width: calc(100% * 6); /* 6 images */
    animation: slide 20s infinite;
}



@keyframes slide {
    0% { transform: translateX(0%); }
    16.6% { transform: translateX(0%); }
    33.2% { transform: translateX(-100%); }
    49.8% { transform: translateX(-200%); }
    66.4% { transform: translateX(-300%); }
    83% { transform: translateX(-400%); }
    100% { transform: translateX(-500%); }
}

    </style>
</head>
<body>
<?php if (isset($_GET['msg']) && $_GET['msg'] == 'reported'): ?>
    <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 15px auto; width: 80%; text-align: center;">
        ✅ Lost item reported successfully!
    </div>
<?php endif; ?>

    <!-- Top Bar -->
    <div class="top-bar d-flex justify-content-between align-items-center">
        <div>
            Huduma | <a href="contact.php">Wasiliana nasi</a> 
        </div>
        <div>
            <select>
                <option>Swahili</option>
                <option>English</option>
            </select>
            <input type="text" placeholder="Tafuta...">
        </div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <h1>CHUO KIKUU CHA DODOMA</h1>
        <h3>Ofisi ya Rais Serikali ya Wanafunzi - UDOSO | 2025/2026</h3>
    </div>

    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
            <ul class="navbar-nav mx-auto">
               
                <li class="nav-item"><a class="nav-link" href="report_lost.php">Ripoti Kitu Ulichopoteza</a> |                        
                     <li class="nav-item"><a class="nav-link" href="report_found.php">Ripoti Kitu Ulichokipata</a>  |              <li class="nav-item"><a class="nav-link" href="lost_items.php">Orodha ya Vitu Vilivyopotea</a> |
                       <li class="nav-item"><a class="nav-link" href="found_items.php">Orodha ya Vitu Vilivyopatikana</a> |
                        <li class="nav-item"><a class="nav-link" href="logout.php">Ondoka</a> |
            </ul>
        </div>
    </nav>

    <!-- Main Section -->
    <div class="container main-content">
        <div class="row">

            <!-- Left Column: Profiles -->
            <div class="col-md-4">
                <!-- Profile 1 -->
                <div class="profile-card">
                    <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrXx07j3ned40bPD2azhgESTwpl6PfosZh5OsPcT3QSlguma2CeNVNoQnKnCQX3xiEHyaODjzHZPMqjWbSGfgUHYav00iOvXCfRVsAo6_l6tWfkUh3Hjf357n2SsenPc3x5qe8=s680-w680-h510-rw" alt="chuo kikuu cha Dodoma">
                    <h5>Sehemu ya ndaki zilizopo chuo kikuu cha Dodoma</h5>
                    <p>Ndaki ya sayansi ya Jamii</p>
                    <a href="https://www.udom.ac.tz/home">Soma Zaidi</a>
                </div>

                <!-- Profile 2 -->
                <div class="profile-card">
                    <img src="https://portal.udom.ac.tz/frontend/web/uploads/photos/lughano_kusiluka_945.jpg" alt="Picha ya Makamu mkuu wa chuo">
                    <h5>Prof. Lughano Jeremy Kusiluka</h5>
                    <p>Makamu mkuu wa chuo</p>
                    <a href="https://www.udom.ac.tz/staff/staff_profile?id=VDFSUk1RPT0=">Wasifu</a>
                </div>
            </div>

            <!-- Right Column: Main Message -->
            <div class="col-md-8">
                <div class="welcome-box">
                    <h4>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo "Karibu " . $_SESSION['username'] . " kwenye mfumo wa taarifa.";
                        } else {
                            echo "Hongera Kwa kujisali kwenye mfumo wetu! Mfumo huu ni rahisi na mwepesi kutumia chagua huduma unayohitaji hapa chini au hapo juu.";
                        }
                        ?>
                    </h4>
                    <hr>
                    <p>
                        <a href="report_lost.php">Ripoti Kitu Ulichopoteza</a> |
                        <a href="report_found.php">Ripoti Kitu Ulichokipata</a> |
                        <a href="lost_items.php">Orodha ya Vitu Vilivyopotea</a> |
                        <a href="found_items.php">Orodha ya Vitu Vilivyopatikana</a> |
                         <a href="about.php">Kuhusu sisi</a>
                    </p>
                </div>

                <!-- Placeholder Image and Caption -->
                <div class="image-slider">
  <div class="slides">
    <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nr3fxOADHwamowqgifEHmUuXkDzptVJFYjN7rl5INFoaLkEG_RDKZPAylxXJjZUnszwoLdKKx_Nv05aUG14y0JeNxysuMCkPeRZqdFFfeiXmD6XHKAAvRXN-a3gp5xY6u19LvbC=s680-w680-h510-rw" alt="Image 1">
    <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4noyp3lPZBxtfQqUTC-80Njh3Rn1jNGZdaCG_CQv7vOGym1nAql-1KhcjW-NV6zOCsWHxJN-lXnxySkYhtXjQr-NYBeFliW0wyzvQx6jKk9ThaqWNAnSib_Qxjo_q7c-nVZTKqWe=s680-w680-h510-rw" alt="Image 2">
    <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrXx07j3ned40bPD2azhgESTwpl6PfosZh5OsPcT3QSlguma2CeNVNoQnKnCQX3xiEHyaODjzHZPMqjWbSGfgUHYav00iOvXCfRVsAo6_l6tWfkUh3Hjf357n2SsenPc3x5qe8=s680-w680-h510-rw" alt="Image 3">
    <img src="https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrWOU8pNHFknRiX0r0q-ylQ0JIdAcMM1Vy2nI_YZqLTbwFPNPVQKc1eLkhPn0-1TWz8oMQ3-j6Nfn-cSZ-vJOJhYzVPFhEnZrzqzRaA1L0frMai0kwCbUvajEXPTHAdwCLg0lq8Eg=s680-w680-h510-rw" alt="Image 4">
    <img src="https://portal.udom.ac.tz/frontend/web/uploads/files/images/service_1105_11_1_2024_06_2407_59_39.jpg" alt="Image 5">
    <img src="https://portal.udom.ac.tz/frontend/web/uploads/files/images/service_1105_11_1_2024_06_2408_00_26.jpg" alt="Image 6">

  </div>
</div>


                <p>Picha mbalimbali zikionyesha mandhari ya chuo pamoja viongozi wa chuo upande wa utawala na serikali ya wanafunzi udoso na baadhi ya majengo ya chuo kikuu cha Dodoma.</p>
            </div>
        </div>
    </div>
<!-- Scroll to Top Button -->
<button onclick="scrollToTop()" id="scrollBtn" title="Go to top" style="
  display:none;
  position:fixed;
  bottom:30px;
  right:20px;
  background-color:#004080;
  color:white;
  border:none;
  padding:10px 15px;
  border-radius:5px;
  z-index:1000;
">⬆</button>

<script>
  // Scroll-to-top Button
  const scrollBtn = document.getElementById("scrollBtn");
  window.onscroll = function () {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  };
  function scrollToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

  // Pause Slider on Hover
  const slides = document.querySelector('.slides');
  slides.addEventListener('mouseover', () => {
    slides.style.animationPlayState = 'paused';
  });
  slides.addEventListener('mouseout', () => {
    slides.style.animationPlayState = 'running';
  });

  // Welcome Fade-in
  window.addEventListener('DOMContentLoaded', () => {
    const welcomeBox = document.querySelector('.welcome-box');
    if (welcomeBox) {
      welcomeBox.style.opacity = 0;
      welcomeBox.style.transition = 'opacity 1.5s ease-in-out';
      setTimeout(() => {
        welcomeBox.style.opacity = 1;
      }, 300);
    }
  });

  // Language Switch (Simple Demo)
  const langSelector = document.querySelector('.top-bar select');
  langSelector.addEventListener('change', function () {
    const bannerTitle = document.querySelector('.banner h1');
    const bannerSubtitle = document.querySelector('.banner h3');

    if (this.value === 'English') {
      bannerTitle.textContent = "THE UNIVERSITY OF DODOMA ";
      bannerSubtitle.textContent = "President’s Office - Student Government (UDOSO) | 2025/2026";
    } else {
      bannerTitle.textContent = "CHUO KIKUU CHA DODOMA";
      bannerSubtitle.textContent = "Ofisi ya Rais Serikali ya Wanafunzi - UDOSO | 2025/2026";
    }
  });
</script>
<script>
  const sliderImages = [
    "https://lh3.googleusercontent.com/gps-cs-s/AC9h4nr3fxOADHwamowqgifEHmUuXkDzptVJFYjN7rl5INFoaLkEG_RDKZPAylxXJjZUnszwoLdKKx_Nv05aUG14y0JeNxysuMCkPeRZqdFFfeiXmD6XHKAAvRXN-a3gp5xY6u19LvbC=s680-w680-h510-rw",
    "https://lh3.googleusercontent.com/gps-cs-s/AC9h4noyp3lPZBxtfQqUTC-80Njh3Rn1jNGZdaCG_CQv7vOGym1nAql-1KhcjW-NV6zOCsWHxJN-lXnxySkYhtXjQr-NYBeFliW0wyzvQx6jKk9ThaqWNAnSib_Qxjo_q7c-nVZTKqWe=s680-w680-h510-rw",
    "https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrXx07j3ned40bPD2azhgESTwpl6PfosZh5OsPcT3QSlguma2CeNVNoQnKnCQX3xiEHyaODjzHZPMqjWbSGfgUHYav00iOvXCfRVsAo6_l6tWfkUh3Hjf357n2SsenPc3x5qe8=s680-w680-h510-rw",
    "https://lh3.googleusercontent.com/gps-cs-s/AC9h4nrWOU8pNHFknRiX0r0q-ylQ0JIdAcMM1Vy2nI_YZqLTbwFPNPVQKc1eLkhPn0-1TWz8oMQ3-j6Nfn-cSZ-vJOJhYzVPFhEnZrzqzRaA1L0frMai0kwCbUvajEXPTHAdwCLg0lq8Eg=s680-w680-h510-rw",
    "https://portal.udom.ac.tz/frontend/web/uploads/files/images/service_1105_11_1_2024_06_2407_59_39.jpg",
    "https://portal.udom.ac.tz/frontend/web/uploads/files/images/service_1105_11_1_2024_06_2408_00_26.jpg"
  ];

  let currentIndex = 0;
  const sliderImage = document.getElementById("slider-image");

  function showNextImage() {
    sliderImage.src = sliderImages[currentIndex];
    currentIndex = (currentIndex + 1) % sliderImages.length;
  }

  // Show the first image immediately
  showNextImage();

  // Rotate every 20 seconds
  setInterval(showNextImage, 10000); // 10,000 ms = 20 seconds
</script>



    <!-- Footer -->
    <footer>
        Developed by G11 copywrite &copy2025 | All right reserved | Version No 2.0
    </footer>

</body>
</html>

 