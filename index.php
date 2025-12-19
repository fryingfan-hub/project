<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ITTab – BSIT Program</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>
/* =====================================================
   BASE
===================================================== */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

html, body {
  background: #0d1b2a;
  color: #ffffff;
  scroll-behavior: smooth;
}

a {
  text-decoration: none;
  color: inherit;
}

/* =====================================================
   TOP NAV
===================================================== */
.top-nav {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 70px;
  background: #06121f;
  padding: 0 28px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 1000;
  box-shadow: 0 4px 12px rgba(0,0,0,0.45);
}

.logo {
  font-size: 28px;
  font-weight: 800;
}

.logo .it { color: #F2B632; }
.logo .tab { color: #ffffff; margin-left: 4px; }

/* DESKTOP NAV */
.nav-links {
  display: flex;
  gap: 28px;
}

.nav-links a {
  font-weight: 600;
  letter-spacing: 0.5px;
}

.nav-links a:hover {
  color: #F2B632;
}

/* HAMBURGER (hidden by default) */
.hamburger {
  display: none;
  background: none;
  border: none;
  font-size: 30px;
  color: #ffffff;
  cursor: pointer;
}

/* =====================================================
   SIDE MENU (MOBILE)
===================================================== */
#overlay {
  position: fixed;
  inset: 0;
  background: rgba(0,0,0,0.5);
  display: none;
  z-index: 998;
}

#sideMenu {
  position: fixed;
  top: 0;
  right: -300px;
  width: 300px;
  height: 100vh;
  background: #0f2a3a;
  padding: 24px;
  transition: right 0.3s ease;
  z-index: 999;
}

#closeMenu {
  background: none;
  border: none;
  font-size: 34px;
  color: #ffffff;
  cursor: pointer;
}

.menu-list {
  list-style: none;
  margin-top: 30px;
}

.menu-list li {
  margin: 18px 0;
}

.menu-list a {
  font-size: 18px;
  font-weight: 600;
}

.menu-list a:hover {
  color: #F2B632;
}

/* =====================================================
   HERO
===================================================== */
.hero {
  position: relative;
  height: 100vh;
  margin-top: 70px;
  display: flex;
  align-items: center;
  overflow: hidden;
}

.hero-bg {
  position: absolute;
  inset: 0;
  background: url("img/school-bg.png") center / cover no-repeat;
  background-attachment: fixed;
}

.hero-bg::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(6, 18, 31, 0.65);
}

.hero-content {
  position: relative;
  z-index: 2;
  max-width: 1300px;
  padding: 40px 70px;
}

.hero-logo {
  font-size: 100px;
  font-weight: 800;
  line-height: 0.95;
}

.hero-logo .it { color: #F2B632; }
.hero-logo .tab { color: #ffffff; }

.hero-desc {
  max-width: 520px;
  margin-top: 18px;
  font-size: 16px;
  line-height: 1.7;
  opacity: 0.9;
}

/* =====================================================
   SHARED BACKGROUND SECTIONS
===================================================== */
.shared-bg {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.shared-bg::before {
  content: "";
  position: absolute;
  inset: 0;
  background: url("img/vandm-bg.png") center / cover no-repeat;
  background-attachment: fixed;
  filter: brightness(0.35);
}

.shared-content {
  position: relative;
  z-index: 2;
  max-width: 800px;
  padding: 140px 80px;
}

.shared-title {
  font-size: 64px;
  font-weight: 800;
  color: #F2B632;
}

.shared-text {
  margin-top: 20px;
  font-size: 17px;
  line-height: 1.8;
}

/* =====================================================
   CONTACTS
===================================================== */
.contacts {
  min-height: 100vh;
  background: #0d1b2a;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.contacts-content {
  max-width: 700px;
  padding: 120px 40px;
}

.contacts-content h2 {
  font-size: 48px;
  color: #F2B632;
  font-weight: 800;
}

.contacts-content p {
  margin-top: 20px;
  font-size: 16px;
  line-height: 1.7;
  opacity: 0.9;
}

/* =====================================================
   RESPONSIVE (MOBILE)
===================================================== */
@media (max-width: 900px) {

  /* Hide desktop nav */
  .nav-links {
    display: none;
  }

  /* Show hamburger */
  .hamburger {
    display: block;
  }

  .hero-logo {
    font-size: 60px;
  }

  .hero-content {
    padding: 30px;
  }

  .shared-content {
    padding: 100px 30px;
  }

  .shared-title {
    font-size: 42px;
  }

  /* Disable parallax on mobile */
  .hero-bg,
  .shared-bg::before {
    background-attachment: scroll;
  }
}
</style>
</head>

<body>

<header class="top-nav">
  <a href="index.php" class="logo">
  <span class="it">IT</span><span class="tab">Tab</span>
</a>


  <nav class="nav-links">
    <a href="faculty.html">Faculty</a>
    <a href="studentsorganization.html">Organizations</a>
    <a href="news.html">News</a>
    <a href="achievement.html">Achievements</a>
    <a href="inquires.php">Inquiries</a>
  </nav>

  <button class="hamburger" onclick="openMenu()">☰</button>
</header>

<div id="overlay" onclick="closeMenu()"></div>

<div id="sideMenu">
  <button id="closeMenu" onclick="closeMenu()">×</button>
  <ul class="menu-list">
    <li><a href="faculty.html">Faculty</a></li>
    <li><a href="studentsorganization.html">Organizations</a></li>
    <li><a href="news.html">News</a></li>
    <li><a href="achievement.html">Achievements</a></li>
    <li><a href="inquires.php">Inquiries</a></li>
  </ul>
</div>

<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-content">
    <h1 class="hero-logo">
      <span class="it">IT</span><span class="tab">Tab</span>
    </h1>
    <p class="hero-desc">
      The official website of the BSIT program of CTU Tabuelan Campus,
      dedicated to innovation, excellence, and future-ready IT education.
    </p>
  </div>
</section>

<section class="shared-bg">
  <div class="shared-content">
    <h2 class="shared-title">About Us</h2>
    <p class="shared-text">
      The BSIT program develops skilled and adaptable IT professionals through
      quality education, hands-on learning, and industry-relevant training.
    </p>
  </div>
</section>

<section class="shared-bg">
  <div class="shared-content">
    <h2 class="shared-title">Mission</h2>
    <p class="shared-text">
      To provide students with strong technical foundations and ethical values
      needed to thrive in the information technology industry.
    </p>
    <h2 class="shared-title">Vision</h2>
    <p class="shared-text">
      To be a leading IT program producing globally competitive and innovative graduates.
    </p>
  </div>
</section>

<section class="shared-bg">
  <div class="shared-content">
    <h2 class="shared-title">Objectives</h2>
    <p class="shared-text">
      To equip students with technical competence, critical thinking skills,
      and lifelong learning abilities.
    </p>
  </div>
</section>

<section class="shared-bg">
  <div class="shared-content">
    <h2 class="shared-title">Why Choose IT?</h2>
    <p class="shared-text">
      Information Technology empowers innovation and problem-solving.
      Choosing IT opens doors to dynamic careers in a rapidly evolving digital world.
    </p>
  </div>
</section>

<section class="contacts">
  <div class="contacts-content">
    <h2>Contacts</h2>
    <p>09XX-XXX-XXXX</p>
    <p>example@email.com</p>
  </div>
</section>

<script>
function openMenu() {
  document.getElementById("sideMenu").style.right = "0";
  document.getElementById("overlay").style.display = "block";
}

function closeMenu() {
  document.getElementById("sideMenu").style.right = "-300px";
  document.getElementById("overlay").style.display = "none";
}
</script>

</body>
</html>
