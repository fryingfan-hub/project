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
    <a href="news.php">News</a>
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
    <li><a href="#">Organizations</a></li>
    <li><a href="#">News</a></li>
    <li><a href="#">Achievements</a></li>
    <li><a href="#">Inquiries</a></li>
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
=======
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>ITTab - BSIT Department</title>

  <!-- Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="./css/homepage.css
 ">
  <!-- Main CSS (make sure this file is named exactly style.css and is in same folder) -->
  <style>
    /* ---------------------------
   BASE
   --------------------------- */
* { box-sizing: border-box; margin:0; padding:0; font-family:"Poppins",sans-serif; }
html,body { height:100%; background:#0d1b2a; color:#fff; scroll-behavior:smooth; }

/* Remove default anchor underline everywhere */
a { text-decoration:none; color:inherit; }

/* ---------------------------
   TOP NAV
   --------------------------- */
.top-nav {
  position:fixed; top:0; left:0; right:0;
  height:70px; background:#06121f; padding:0 28px;
  display:flex; align-items:center; justify-content:space-between;
  z-index:1100; box-shadow:0 4px 12px rgba(0,0,0,.45);
}

.logo { font-size:28px; font-weight:700; text-decoration:none; display:inline-block; }
.logo .it { color:#F2B632; }
.logo .tab { color:#fff; margin-left:4px; }

/* hamburger button */
.hamburger { background:none; border:none; color:#fff; font-size:30px; cursor:pointer; }

/* ---------------------------
   SECOND NAV
   --------------------------- */
.section-nav {
  position:fixed; top:70px; left:0; right:0;
  height:50px; background:#102840; display:flex; align-items:center; justify-content:center; gap:44px;
  z-index:1050;
}
.section-nav a { color:#fff; font-weight:600; letter-spacing:1px; }
.section-nav a:hover { color:#F2B632; }

/* ---------------------------
   SIDE MENU + OVERLAY
   --------------------------- */
#overlay {
  position:fixed; inset:0; background:rgba(0,0,0,0.52); display:none; z-index:1085;
}
#sideMenu {
  position:fixed; top:0; right:-320px; width:320px; height:100vh; background:#0f2a3a;
  padding:22px; box-shadow:-6px 0 18px rgba(0,0,0,0.5); transition:right .32s ease; z-index:1090;
}
#closeMenu { background:none; border:none; color:#fff; font-size:36px; cursor:pointer; align-self:flex-end; }
.menu-list { list-style:none; margin-top:26px; padding:0; }
.menu-list li { margin:18px 0; }
.menu-list a { color:#fff; font-size:18px; font-weight:600; }
.menu-list a:hover { color:#F2B632; }

/* ---------------------------
   HERO SECTION (parallax)
   --------------------------- */
.hero { position:relative; height:100vh; margin-top:120px; overflow:hidden; display:flex; align-items:center; }
.hero-bg {
  position:absolute; inset:0;
  background-image: url("img/school-bg.png"); /* update filename if needed */
  background-position:center; background-size:cover; background-attachment:fixed;
  z-index:0;
}
.hero-content { position:relative; z-index:2; width:100%; max-width:1300px; padding:40px 70px; display:flex; align-items:center; justify-content:space-between; }
.hero-logo { font-size:110px; font-weight:800; line-height:0.9; }
.hero-logo .it { color:#F2B632; } .hero-logo .tab { color:#fff; text-shadow: 3px 3px 0 rgba(0,0,0,.9); }
.hero-desc { color:rgba(255,255,255,0.86); max-width:520px; margin-top:16px; line-height:1.7; }

/* right placeholder */
.hero-right { width:340px; height:340px; border:2px dashed rgba(255,255,255,0.2); border-radius:8px; }

/* ---------------------------
   ABOUT (STATIC BG)
   --------------------------- */
.about-section { position:relative; min-height:100vh; display:flex; align-items:center; }
.about-bg {
  position:absolute; inset:0; background-image: url("img/about.png");
  background-size:cover; background-position:center; background-attachment:scroll; z-index:0;
}
.about-content { position:relative; z-index:2; padding:160px 80px; max-width:720px; color:#000; }
.about-title { font-size:80px; font-weight:800; color:#000; }
.about-title span { color:#F2B632; }
.about-content p { margin-top:20px; color:#000; font-size:18px; line-height:1.7; }

/* ---------------------------
   V&M (parallax)
   --------------------------- */
.vm-section { position:relative; min-height:100vh; display:flex; align-items:center; }
.vm-bg {
  position:absolute; inset:0; background-image:url("img/vandm-bg.png");
  background-size:cover; background-position:center; background-attachment:fixed; z-index:0;
}
.vm-content { position:relative; z-index:2; padding:160px 80px; max-width:720px; color:#fff; }
.vm-title { font-size:60px; font-weight:800; }

/* ---------------------------
   GOALS (static bg, text right)
   --------------------------- */
.goals-section { position:relative; min-height:100vh; display:flex; align-items:center; justify-content:flex-end; padding:0 80px; }
.goals-bg { position:absolute; inset:0; background-image:url("img/goals-bg.png"); background-size:cover; background-position:center; background-attachment:scroll; z-index:0; }
.goals-content { position:relative; z-index:2; max-width:550px; text-align:right; color:#fff; padding:140px 0; }
.goals-content h2 { color:#F2B632; font-size:40px; margin-bottom:12px; font-weight:800; }
.goals-content p { color:rgba(0, 0, 0, 0.9); line-height:1.8; }

/* ---------------------------
   MORE (parallax center)
   --------------------------- */
.more-section { position:relative; min-height:100vh; display:flex; align-items:center; justify-content:center; text-align:center; padding:0 40px; }
.more-bg { position:absolute; inset:0; background-image:url("img/more-bg.png"); background-size:cover; background-position:center; background-attachment:fixed; z-index:0; }
.more-content { position:relative; z-index:2; max-width:720px; color:#fff; }
.more-content h2 { color:#F2B632; font-size:42px; }

/* ---------------------------
   CONTACTS (simple)
   --------------------------- */
.contacts-section { min-height:100vh; display:flex; align-items:center; justify-content:center; padding:0 40px; background:#0d1b2a; color:#fff; }
.contacts-content { text-align:center; max-width:720px; }
.contacts-content h2 { color:#F2B632; font-size:42px; }

/* ---------------------------
   PAGE SECTION (fallback)
   --------------------------- */
.page-section { min-height:100vh; padding:160px 80px; }

/* ---------------------------
   RESPONSIVE
   --------------------------- */
@media (max-width:900px){
  .hero-logo { font-size:72px; }
  .hero-content { flex-direction:column; padding:40px; gap:30px; }
  .section-nav { gap:18px; padding:0 12px; }
  #sideMenu { width:260px; right:-320px; }
}
.ann-b:hover{
  border: solid;
  border-color: #083575;
}

  </style>
</head>
<body>

  <!-- SIDE MENU / OVERLAY (hidden by default) -->
  <div id="overlay" aria-hidden="true"></div>

  <nav id="sideMenu" aria-hidden="true">
    <button id="closeMenu" aria-label="Close menu">&times;</button>
    <ul class="menu-list">
      <li><a href="index.html">Home</a></li>
      <li><a href="faculty.html">Faculty</a></li>
      <li><a href="studentsorganization.html">Organizations</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="achievement.html">Achievements</a></li>
      <li><a href="inquires.php">Inquiries</a></li>
      <li><a href="Admin.php">Admin</a></li>

    </ul>
  </nav>

  <!-- TOP NAVBAR -->
  <header class="top-nav">
    <a href="#home" class="logo" id="logo-link"><span class="it">IT</span><span class="tab">Tab</span></a>
    <button class="hamburger" id="openMenu" aria-label="Open menu">&#9776;</button>
  </header>

  <!-- SECOND NAV -->
  <nav class="section-nav" role="navigation">
    <a href="#about">ABOUT</a>
    <a href="#vision">V&M</a>
    <a href="#goals">GOALS</a>
    <a href="#more">MORE</a>
    <a href="#contacts">CONTACTS</a>
  </nav>

  <!-- HERO (parallax) -->
  <section id="home" class="hero">
    <div class="hero-bg" aria-hidden="true"></div>

    <div class="hero-content">
      <div class="hero-left">
        <h1 class="hero-logo"><span class="it">IT</span><span class="tab">Tab</span></h1>
        <p class="hero-desc">Building the next generation of innovators, problem-solvers, and Empowering future IT professionals in the heart of Tabuelan.</p>
      </div>

      <div  class="hero-right" aria-hidden="true">
       <button class="ann-b" onclick="window.location.href='news.html'"><img style="width: 335px; height: 330px;" src="img/announcement-poster.png" alt=""></button>
      </div>
    </div>
  </section>

  <!-- ABOUT (static) -->
  <section id="about" class="about-section">
    <div class="about-bg" aria-hidden="true"></div>

    <div class="about-content">
      <h2 class="about-title">ABOUT <span>US</span></h2>
      <p>
       The Bachelor of Science in Information Technology (BSIT) program of CTU-Tabuelan focuses on developing students’ technical skills, problem-solving abilities, and readiness for the digital industry.
      </p>
      <p>
        Our program emphasizes hands-on experience, real-world application, and a strong foundation in programming, networking, and emerging technologies.
      </p>
    </div>
  </section>

  <!-- V&M (parallax) -->
  <section id="vision" class="vm-section">
    <div class="vm-bg" aria-hidden="true"></div>

    <div class="vm-content">
      <h2 class="vm-title">VISION</h2>
      <p>To be a leading IT program that produces competent, ethical, and innovative technology professionals who contribute to community and nation-building.</p>
       <h2 class="vm-title">MISSION</h2>
      <p>To provide quality IT education through innovative instruction, practical training, and community-responsive initiatives that prepare students for successful careers in the digital world.</p>
    </div>
  </section>

  <!-- GOALS (static bg, text right) -->
  <section id="goals" class="goals-section">
    <div class="goals-bg" aria-hidden="true"></div>

    <div class="goals-content">
      <h2>GOALS AND OBJECTIVES</h2>
      <p>The Bachelor of Science in Information Technology program is committed to developing graduates who possess a solid foundation in computing and information systems. It aims to cultivate analytical and technical skills through rigorous instruction, laboratory experience, and project-based learning. The program endeavors to produce competent professionals who can adapt to technological advancements, contribute to research and innovation, and uphold ethical and professional standards in the field of information technology.</p>
    </div>
  </section>

  <!-- MORE (parallax center) -->
  <section id="more" class="more-section">
    <div class="more-bg" aria-hidden="true"></div>

    <div class="more-content">
      <h2>WHY I.T.?</h2>
      <p>Choosing IT means choosing a future shaped by innovation and limitless opportunity. The world relies on technology more than ever, and IT professionals are at the center of progress. Students who take IT gain the skills to build apps, solve problems, protect systems, and create solutions that make life better. Whether you want to be a developer, a network engineer, a cybersecurity expert, or an innovator, IT gives you the power to turn ideas into reality.</p>
    </div>
  </section>

  <!-- CONTACTS -->
  <section id="contacts" class="contacts-section">
    <div class="contacts-content">
      <h2>CONTACT US</h2>
      <p>09XX-XXX-XXXX</p>
      <p>XXXX@gmail.com</p>
    </div>
  </section>

  <!-- Smooth scroll + menu JS -->
  <script>
    /* SMOOTH SCROLL (section nav) */
    document.querySelectorAll('.section-nav a').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        const offset = document.querySelector('.top-nav').offsetHeight + document.querySelector('.section-nav').offsetHeight;
        const y = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top: y, behavior: 'smooth' });
      });
    });

    /* Hamburger open/close */
    const openBtn = document.getElementById('openMenu');
    const closeBtn = document.getElementById('closeMenu');
    const sideMenu = document.getElementById('sideMenu');
    const overlay = document.getElementById('overlay');

    openBtn.addEventListener('click', () => {
      sideMenu.style.right = '0';
      overlay.style.display = 'block';
      sideMenu.setAttribute('aria-hidden','false');
      overlay.setAttribute('aria-hidden','false');
    });

    closeBtn.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);

    function closeMenu(){
      sideMenu.style.right = '-320px';
      overlay.style.display = 'none';
      sideMenu.setAttribute('aria-hidden','true');
      overlay.setAttribute('aria-hidden','true');
    }

    /* Make logo also smooth-scroll */
    document.getElementById('logo-link').addEventListener('click', function(e){
      e.preventDefault();
      const target = document.querySelector('#home');
      const offset = document.querySelector('.top-nav').offsetHeight + document.querySelector('.section-nav').offsetHeight;
      const y = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top: y, behavior: 'smooth' });
    });
  </script>
</body>
</html>

