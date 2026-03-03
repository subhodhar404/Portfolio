<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Subho Dhar | Software Engineer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap 5 CSS (grid, navbar, buttons, utilities) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- AOS CSS (scroll animations) -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Bootstrap Icons (icons for skills / education) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Custom CSS -->
  <style>
    /* =========================
       Global Variables
       ========================= */
    :root{
      --brand:#00c6ff;          /* Primary accent color */
      --brand2:#0072ff;         /* Secondary accent color */
      --nav:rgba(73,146,112,.75); /* Navbar background (semi-transparent) */
      --text:#111;              /* Default text color */
    }

    /* =========================
       Base / Page Defaults
       ========================= */
    body{
      font-family:'Segoe UI',sans-serif; /* Site font */
      scroll-behavior:smooth;            /* Smooth scroll to anchors (#about, #skills, etc.) */
      color:var(--text);                 /* Default text color */
    }

    /* Section spacing used in About/Skills/Education/Contact */
    .section-padding{
      padding:90px 0;
    }

    /* =========================
       Navbar
       ========================= */
    .glass-nav{
      background:var(--nav);                 /* Glassy green navbar color */
      backdrop-filter:blur(10px);            /* Blur behind navbar */
      box-shadow:0 8px 25px rgba(0,0,0,.12); /* Soft shadow */
    }

    /* Navbar links (About/Skills/Education) */
    .navbar .nav-link{
      position:relative;
      font-weight:500;
      opacity:.95;
    }
    .navbar .nav-link:hover{
      opacity:1;
    }

    /* Underline animation for navbar links (not applied to the Contact button because it has .btn) */
    .navbar .nav-link:not(.btn)::after{
      content:"";
      position:absolute;
      left:.5rem;
      right:.5rem;
      bottom:.3rem;
      height:2px;
      background:rgba(255,255,255,.8);
      transform:scaleX(0);
      transform-origin:left;
      transition:.25s;
    }
    .navbar .nav-link:not(.btn):hover::after{
      transform:scaleX(1);
    }

    /* =========================
       Buttons
       ========================= */
    .btn-main{
      background:var(--brand);
      color:#fff;
      padding:10px 26px;
      border-radius:999px; /* fully rounded pill */
      border:0;
      transition:.25s;
    }
    .btn-main:hover{
      background:var(--brand2);
      transform:translateY(-2px);
      color:#fff;
    }

    /* Secondary rounded button shape (used with Bootstrap outline/light buttons) */
    .btn-round{
      border-radius:999px;
      padding:10px 22px;
    }

    /* =========================
       Hero Section
       ========================= */
    .hero{
      min-height:100vh;                /* Full screen height */
      display:grid;                    /* Center content */
      place-items:center;
      text-align:center;
      color:#fff;
      padding-top:80px;                /* Offset for fixed navbar */
      position:relative;

      /* Animated gradient background */
      background:linear-gradient(-45deg,#1f4037,#99f2c8,#0f2027,#2c5364);
      background-size:400% 400%;
      animation:gradientMove 10s ease infinite;
    }

    /* Dark overlay to improve readability on gradient */
    .hero-overlay{
      position:absolute;
      inset:0;
      background:rgba(0,0,0,.28);
    }

    /* Gradient animation keyframes */
    @keyframes gradientMove{
      0%{background-position:0% 50%;}
      50%{background-position:100% 50%;}
      100%{background-position:0% 50%;}
    }

    /* Small hero label (SOFTWARE ENGINEER) */
    .hero-kicker{
      letter-spacing:.15em;
      text-transform:uppercase;
      font-weight:600;
      opacity:.9;
    }

    /* Hero subtitle width control */
    .hero-subtitle{
      max-width:800px;
      margin:0 auto;
      opacity:.95;
    }

    /* Big hero name line-height */
    .hero-title{
      line-height:1.05;
    }

    /* Hero highlight list layout */
    .hero-highlights{
      display:grid;
      gap:10px;
      max-width:560px;
    }

    /* Each highlight row */
    .highlight-item{
      display:flex;
      align-items:center;
      gap:10px;
      color:rgba(255,255,255,.92);
    }

    /* Small dot before highlight text */
    .highlight-item .dot{
      width:10px;
      height:10px;
      border-radius:50%;
      background:rgba(255,255,255,.75);
    }

    /* Hero tech chips container */
    .hero-chips{
      display:flex;
      flex-wrap:wrap;
      gap:10px;
      max-width:650px;
    }

    /* Tech chip style */
    .chip{
      padding:8px 12px;
      border-radius:999px;
      background:rgba(255,255,255,.14);
      border:1px solid rgba(255,255,255,.18);
      color:rgba(255,255,255,.95);
      font-weight:600;
      backdrop-filter:blur(6px);
    }

    /* Social links under hero buttons */
    .hero-social .social-link{
      color:rgba(255,255,255,.85);
      text-decoration:none;
      padding:8px 12px;
      border-radius:999px;
      border:1px solid rgba(255,255,255,.18);
      background:rgba(0,0,0,.10);
      transition:.2s;
    }
    .hero-social .social-link:hover{
      color:#fff;
      transform:translateY(-2px);
    }

    /* Right-side hero glass card */
    .hero-card{
      border-radius:24px;
      padding:22px;
      background:rgba(0,0,0,.18);
      border:1px solid rgba(255,255,255,.18);
      backdrop-filter:blur(10px);
    }

    /* Top row inside hero card */
    .hero-card-top{
      display:flex;
      align-items:center;
      gap:14px;
    }

    /* Big avatar circle (SD) */
    .avatar-lg{
      width:62px;
      height:62px;
      border-radius:50%;
      display:grid;
      place-items:center;
      font-weight:900;
      letter-spacing:.06em;
      color:#fff;
      background:rgba(255,255,255,.16);
      border:1px solid rgba(255,255,255,.22);
    }

    /* Stats grid inside hero card */
    .hero-stats{
      display:grid;
      grid-template-columns:repeat(3, 1fr);
      gap:12px;
    }

    /* Each stat block */
    .stat{
      padding:14px 12px;
      border-radius:18px;
      background:rgba(255,255,255,.12);
      border:1px solid rgba(255,255,255,.16);
      text-align:center;
    }

    /* Stat title (Flutter/Go/SQL) */
    .stat-num{
      color:#fff;
      font-weight:800;
      font-size:18px;
      line-height:1.1;
    }

    /* Stat label (Mobile UI, etc.) */
    .stat-label{
      margin-top:4px;
      color:rgba(255,255,255,.75);
      font-size:13px;
      font-weight:600;
    }

    /* Bottom note inside hero card */
    .hero-card-bottom{
      padding:16px;
      border-radius:18px;
      background:rgba(0,0,0,.14);
      border:1px solid rgba(255,255,255,.12);
    }

    /* “Scroll ↓” text under hero */
    .scroll-indicator{
      opacity:.9;
      font-size:14px;
    }

    /* Hero layout tweaks for tablet/mobile */
    @media (max-width: 991px){
      .hero-highlights,
      .hero-chips{
        margin-left:auto;
        margin-right:auto;
      }
      .hero-card{
        max-width:520px;
        margin:0 auto;
      }
    }

    /* =========================
       Shared Section Titles
       ========================= */
    .section-title{
      font-weight:800;           /* Bold headings */
      margin-bottom:8px;
      position:relative;         /* Needed for underline (::after) */
      display:inline-block;      /* Underline fits the text width nicely */
    }

    /* Gradient underline under section headings */
    .section-title::after{
      content:"";
      position:absolute;
      left:50%;
      transform:translateX(-50%);
      bottom:-10px;
      width:60px;
      height:4px;
      border-radius:4px;
      background:linear-gradient(90deg,#00c6ff,#0072ff);
    }

    .section-subtitle{
      color:#6c757d;
      margin-bottom:0;
    }

    /* =========================
       About Section (Advanced)
       ========================= */
    .about-section{
      position:relative;
    }

    /* Left about profile card */
    .about-profile{
      border-radius:24px;
      padding:22px;
      background:linear-gradient(135deg, rgba(15,32,39,.95), rgba(44,83,100,.85));
      border:1px solid rgba(255,255,255,.15);
      overflow:hidden;
      position:relative;
      transition:.25s;
    }
    .about-profile:hover{
      transform:translateY(-6px);
    }

    /* Header row inside about profile card */
    .about-profile-top{
      display:flex;
      align-items:center;
      gap:14px;
    }

    /* Avatar in about card */
    .about-avatar{
      width:62px;
      height:62px;
      border-radius:50%;
      display:grid;
      place-items:center;
      font-weight:900;
      letter-spacing:.06em;
      color:#fff;
      background:rgba(255,255,255,.16);
      border:1px solid rgba(255,255,255,.22);
    }

    /* About card meta rows container */
    .about-meta{
      display:grid;
      gap:10px;
    }

    /* Each meta row (Specialty/Location/Email) */
    .meta-item{
      display:flex;
      justify-content:space-between;
      gap:10px;
      padding:10px 12px;
      border-radius:16px;
      background:rgba(255,255,255,.10);
      border:1px solid rgba(255,255,255,.12);
    }
    .meta-label{
      color:rgba(255,255,255,.75);
      font-weight:600;
      font-size:13px;
    }
    .meta-value{
      color:rgba(255,255,255,.95);
      font-weight:700;
      font-size:13px;
      text-align:right;
    }

    /* About badges (chips) */
    .about-badges{
      display:flex;
      flex-wrap:wrap;
      gap:10px;
    }
    .chip-dark{
      padding:8px 12px;
      border-radius:999px;
      background:rgba(255,255,255,.14);
      border:1px solid rgba(255,255,255,.18);
      color:rgba(255,255,255,.95);
      font-weight:700;
      font-size:13px;
    }

    /* Right about content card */
    .about-card-advanced{
      border-radius:24px;
      padding:26px;
      background:#fff;
      border:1px solid rgba(0,0,0,.06);
      transition:.25s;
    }
    .about-card-advanced:hover{
      transform:translateY(-4px);
    }

    /* Highlight points list in about section */
    .about-points{
      display:grid;
      gap:14px;
    }

    /* Each point row */
    .point{
      display:flex;
      gap:12px;
      padding:14px;
      border-radius:18px;
      background:rgba(0,0,0,.03);
      border:1px solid rgba(0,0,0,.06);
      transition:.2s;
    }
    .point:hover{
      transform:translateY(-3px);
    }

    /* Icon box inside each point */
    .point-icon{
      width:42px;
      height:42px;
      border-radius:14px;
      display:grid;
      place-items:center;
      font-size:18px;
      background:rgba(0,0,0,.06);
    }

    /* Mini cards under about section (Mobile Apps / Backend APIs / Databases) */
    .mini-card{
      border-radius:18px;
      padding:16px;
      background:rgba(0,0,0,.03);
      border:1px solid rgba(0,0,0,.06);
      transition:.2s;
    }
    .mini-card:hover{
      transform:translateY(-4px);
    }

    /* About section responsiveness */
    @media (max-width: 991px){
      .about-card-advanced,
      .about-profile{
        max-width:900px;
        margin:0 auto;
      }
    }

    /* =========================
       Skills Section
       ========================= */
    .skills-section{
      position:relative;
    }

    /* Skills title/subtitle typography overrides (only inside skills) */
    .skills-section .section-title{
      font-size:38px;
      font-weight:800;
      letter-spacing:-0.5px;
      background:linear-gradient(90deg,#111,#444);
      -webkit-background-clip:text;
      -webkit-text-fill-color:transparent;
    }
    .skills-section .section-subtitle{
      font-size:17px;
      font-weight:500;
      color:#6b7280;
    }

    /* Main skills card */
    .skill-box{
      border-radius:24px;
      padding:22px;
      background:#fff;
      border:1px solid #e5e7eb;
      transition:.25s;
      overflow:hidden;
      position:relative;
      box-shadow:0 15px 35px rgba(0,0,0,.06);
    }

    /* Decorative bubble in corner */
    .skill-box::before{
      content:"";
      position:absolute;
      inset:-80px -80px auto auto;
      width:180px;
      height:180px;
      background:rgba(0, 198, 255, .12);
      border-radius:50%;
      filter:blur(2px);
    }

    /* Hover lift */
    .skill-box:hover{
      transform:translateY(-6px);
      box-shadow:0 20px 40px rgba(0,0,0,.08);
    }

    /* Skills card header row */
    .skill-head{
      display:flex;
      align-items:center;
      gap:14px;
      position:relative;
    }

    /* Icon box in skills card */
    .skill-icon{
      width:54px;
      height:54px;
      border-radius:18px;
      display:grid;
      place-items:center;
      background:rgba(0,0,0,.06);
      border:1px solid rgba(0,0,0,.08);
      font-size:22px;
    }

    /* Skills card title/subtitle typography */
    .skill-head h5{
      font-weight:800;
      font-size:20px;
      letter-spacing:-0.3px;
      color:#111;
    }
    .skill-head p{
      font-size:14px;
      font-weight:500;
      color:#6b7280;
    }

    /* Skills chips grid */
    .skill-grid{
      display:grid;
      grid-template-columns:repeat(2, minmax(0, 1fr));
      gap:12px;
      position:relative;
    }

    /* Each skill chip */
    .skill-chip{
      display:flex;
      align-items:center;
      gap:10px;
      padding:12px 12px;
      border-radius:16px;
      font-size:15px;
      font-weight:700;
      letter-spacing:.2px;
      color:#111;
      background:#f3f4f6;
      border:1px solid #e5e7eb;
      transition:.2s;
    }

    /* Icon inside chip */
    .skill-chip i{
      color:#00c6ff;
      font-size:18px;
      opacity:.95;
    }

    /* Chip hover */
    .skill-chip:hover{
      transform:translateY(-3px);
      background:#e0f7ff;
      border-color:#00c6ff;
      color:#000;
    }

    /* Tools strip container */
    .tools-strip{
      border-radius:24px;
      padding:18px 20px;
      background:#fff;
      border:1px solid rgba(0,0,0,.06);
      display:flex;
      align-items:center;
      justify-content:space-between;
      flex-wrap:wrap;
      gap:12px;
    }

    /* Tools strip title */
    .tools-title{
      font-weight:800;
      display:flex;
      align-items:center;
    }

    /* Tools pills wrapper */
    .tools-items{
      display:flex;
      flex-wrap:wrap;
      gap:10px;
    }

    /* Tool pill style */
    .tool-pill{
      padding:10px 12px;
      border-radius:999px;
      background:rgba(0,0,0,.04);
      border:1px solid rgba(0,0,0,.06);
      font-weight:700;
      display:flex;
      align-items:center;
      gap:8px;
      transition:.2s;
    }
    .tool-pill:hover{
      transform:translateY(-2px);
      background:rgba(0,0,0,.06);
    }

    /* Skills grid becomes 1 column on small devices */
    @media (max-width: 576px){
      .skill-grid{
        grid-template-columns:1fr;
      }
    }

    /* ===== Education Timeline Design ===== */
.education-section{
  background: #fff;
}

.edu-wrap{
  max-width: 900px;
  margin: 0 auto;
  display: grid;
  gap: 22px;
}

.edu-item{
  display: grid;
  grid-template-columns: 50px 1fr;
  gap: 18px;
  align-items: stretch;
}

.edu-left{
  position: relative;
  display: flex;
  justify-content: center;
}

.edu-dot{
  width: 16px;
  height: 16px;
  border-radius: 50%;
  background: linear-gradient(90deg,#00c6ff,#0072ff);
  box-shadow: 0 8px 18px rgba(0,114,255,.35);
  position: relative;
  top: 18px;
  z-index: 2;
}

.edu-line{
  position: absolute;
  top: 0;
  bottom: 0;
  width: 3px;
  background: rgba(0,0,0,.08);
  border-radius: 10px;
}

.edu-card{
  border-radius: 24px;
  padding: 22px;
  background: #fff;
  border: 1px solid rgba(0,0,0,.06);
  box-shadow: 0 15px 35px rgba(0,0,0,.06);
  transition: .25s;
  position: relative;
  overflow: hidden;
}

.edu-card::before{
  content:"";
  position:absolute;
  top:-60px;
  right:-60px;
  width: 180px;
  height: 180px;
  border-radius: 50%;
  background: rgba(0, 198, 255, .12);
}

.edu-card:hover{
  transform: translateY(-6px);
  box-shadow: 0 20px 40px rgba(0,0,0,.08);
}

.edu-top{
  display:flex;
  align-items:flex-start;
  justify-content: space-between;
  gap: 12px;
  position: relative;
}

.edu-top h5{
  font-weight: 800;
  color: #111;
  letter-spacing: -.2px;
}

.edu-badge{
  padding: 8px 12px;
  border-radius: 999px;
  font-weight: 800;
  font-size: 13px;
  display: inline-flex;
  align-items: center;
  white-space: nowrap;
}

.edu-badge.completed{
  background: rgba(34,197,94,.12);
  color: #15803d;
  border: 1px solid rgba(34,197,94,.25);
}

.edu-badge.running{
  background: rgba(245,158,11,.12);
  color: #b45309;
  border: 1px solid rgba(245,158,11,.25);
}

.edu-meta{
  display:flex;
  flex-wrap: wrap;
  gap: 10px;
  position: relative;
}

.meta-pill{
  padding: 10px 12px;
  border-radius: 999px;
  background: rgba(0,0,0,.04);
  border: 1px solid rgba(0,0,0,.06);
  font-weight: 800;
  color: #111;
  font-size: 13px;
  display:inline-flex;
  align-items:center;
}

.edu-desc{
  color: #6b7280;
  font-weight: 500;
  position: relative;
}

/* Responsive */
@media (max-width: 576px){
  .edu-item{
    grid-template-columns: 36px 1fr;
    gap: 12px;
  }
  .edu-card{
    padding: 18px;
  }
}

    /* =========================
       Contact + Footer
       ========================= */
    .contact-section{
      background:#0f2027;
    }
    .footer{
      background:#111;
      color:#aaa;
    }
  </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#navmenu" data-bs-offset="90" tabindex="0">
  <!-- =====================================================
       NAVBAR (fixed top)
       ===================================================== -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top glass-nav">
    <div class="container">
      <!-- Brand / Logo -->
      <a class="navbar-brand fw-bold" href="#home">Subho Dhar</a>

      <!-- Mobile menu button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation links -->
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto gap-lg-2">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>

          <!-- Contact styled as button -->
          <li class="nav-item">
            <a class="nav-link btn btn-sm btn-main px-3 ms-lg-2" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- =====================================================
       HERO / HOME
       ===================================================== -->
  <section id="home" class="hero">
    <!-- Overlay layer for contrast -->
    <div class="hero-overlay"></div>

    <div class="container position-relative">
      <div class="row align-items-center gy-5">

        <!-- Left: Main intro content -->
        <div class="col-lg-7 text-center text-lg-start" data-aos="fade-up">
          <p class="hero-kicker mb-2">SOFTWARE ENGINEER</p>

          <h1 class="display-3 fw-bold mb-3 hero-title">
            Subho Dhar
          </h1>

          <p class="lead hero-subtitle mb-4">
            Flutter Developer • Golang Backend Engineer • Problem Solver
          </p>

          <!-- Quick highlights list -->
          <div class="hero-highlights mb-4">
            <div class="highlight-item">
              <span class="dot"></span>
              <span>Cross-platform mobile apps with Flutter</span>
            </div>
            <div class="highlight-item">
              <span class="dot"></span>
              <span>REST API & backend services with Go/Python</span>
            </div>
            <div class="highlight-item">
              <span class="dot"></span>
              <span>Clean architecture, reusable components, SQL</span>
            </div>
          </div>

          <!-- Tech chips row -->
          <div class="hero-chips mb-4">
            <span class="chip">Flutter</span>
            <span class="chip">Dart</span>
            <span class="chip">Golang</span>
            <span class="chip">Python</span>
            <span class="chip">SQL</span>
            <span class="chip">Git</span>
          </div>

          <!-- CTA buttons -->
          <div class="d-flex justify-content-center justify-content-lg-start gap-3 flex-wrap">
            <a href="#contact" class="btn btn-main">Contact Me</a>
            <a href="#skills" class="btn btn-outline-light btn-round">View Skills</a>
            <a href="#" class="btn btn-light btn-round">Download CV</a>
          </div>

          <!-- Social links -->
          <div class="hero-social mt-4 d-flex justify-content-center justify-content-lg-start gap-3 flex-wrap">
            <a class="social-link" href="#" target="_blank" rel="noopener">GitHub</a>
            <a class="social-link" href="#" target="_blank" rel="noopener">LinkedIn</a>
            <a class="social-link" href="mailto:subho@example.com">Email</a>
          </div>
        </div>

        <!-- Right: Highlight card -->
        <div class="col-lg-5" data-aos="fade-left">
          <div class="hero-card shadow-lg">
            <div class="hero-card-top">
              <div class="avatar-lg">SD</div>
              <div>
                <h5 class="mb-1 text-white">Available for Opportunities</h5>
                <p class="mb-0 text-white-50">Mobile • Backend • Full-time/Remote</p>
              </div>
            </div>

            <div class="hero-stats mt-4">
              <div class="stat">
                <div class="stat-num">Flutter</div>
                <div class="stat-label">Mobile UI</div>
              </div>
              <div class="stat">
                <div class="stat-num">Go</div>
                <div class="stat-label">Backend APIs</div>
              </div>
              <div class="stat">
                <div class="stat-num">SQL</div>
                <div class="stat-label">Databases</div>
              </div>
            </div>

            <div class="hero-card-bottom mt-4">
              <p class="mb-2 text-white-50 small">Quick Note</p>
              <p class="mb-0 text-white">
                I focus on building fast, scalable and maintainable software systems with clean code and solid fundamentals.
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="scroll-indicator text-center text-white-50 mt-5">
        Scroll ↓
      </div>
    </div>
  </section>

  <!-- =====================================================
       ABOUT
       ===================================================== -->
  <section id="about" class="section-padding about-section">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title">About Me</h2>
        <p class="section-subtitle">Who I am, what I build, and what I focus on.</p>
      </div>

      <div class="row g-4 align-items-stretch">
        <!-- Left: profile card -->
        <div class="col-lg-4" data-aos="fade-right">
          <div class="about-profile shadow-lg h-100">
            <div class="about-profile-top">
              <div class="about-avatar">SD</div>
              <div>
                <h5 class="mb-1 text-white">Subho Dhar</h5>
                <p class="mb-0 text-white-50">Software Engineer</p>
              </div>
            </div>

            <div class="about-meta mt-4">
              <div class="meta-item">
                <span class="meta-label">Specialty</span>
                <span class="meta-value">Flutter • Golang • Backend</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Location</span>
                <span class="meta-value">Bangladesh</span>
              </div>
              <div class="meta-item">
                <span class="meta-label">Email</span>
                <span class="meta-value">subho@example.com</span>
              </div>
            </div>

            <div class="about-badges mt-4">
              <span class="chip-dark">Clean Code</span>
              <span class="chip-dark">Problem Solving</span>
              <span class="chip-dark">API Design</span>
            </div>

            <div class="about-actions mt-4">
              <a href="#contact" class="btn btn-main w-100">Let’s Talk</a>
              <a href="#skills" class="btn btn-outline-light btn-round w-100 mt-3">Explore Skills</a>
            </div>
          </div>
        </div>

        <!-- Right: about content -->
        <div class="col-lg-8" data-aos="fade-left">
          <div class="about-card-advanced shadow-lg h-100">
            <h4 class="mb-3">I build modern apps & scalable backends.</h4>
            <p class="text-muted mb-4">
              I am <strong>Subho Dhar</strong>, a passionate Software Engineer. I enjoy building smooth user experiences with
              <strong>Flutter</strong> and developing reliable backend services using <strong>Golang</strong> and <strong>Python</strong>.
              I focus on clean architecture, reusable components, and maintainable systems.
            </p>

            <!-- About highlights -->
            <div class="about-points mb-4">
              <div class="point" data-aos="zoom-in" data-aos-delay="50">
                <div class="point-icon">⚡</div>
                <div>
                  <h6 class="mb-1">Performance-minded</h6>
                  <p class="mb-0 text-muted">Optimized UI rendering and efficient API design.</p>
                </div>
              </div>

              <div class="point" data-aos="zoom-in" data-aos-delay="120">
                <div class="point-icon">🧩</div>
                <div>
                  <h6 class="mb-1">Clean Architecture</h6>
                  <p class="mb-0 text-muted">Readable structure, scalable codebase, reusable components.</p>
                </div>
              </div>

              <div class="point" data-aos="zoom-in" data-aos-delay="190">
                <div class="point-icon">🔐</div>
                <div>
                  <h6 class="mb-1">Reliable Systems</h6>
                  <p class="mb-0 text-muted">Secure APIs, database design, and production-ready practices.</p>
                </div>
              </div>
            </div>

            <!-- What I do cards -->
            <div class="row g-3">
              <div class="col-md-4" data-aos="flip-left" data-aos-delay="50">
                <div class="mini-card h-100">
                  <h6 class="mb-2">Mobile Apps</h6>
                  <p class="mb-0 text-muted">Flutter UI, state management, responsive design.</p>
                </div>
              </div>

              <div class="col-md-4" data-aos="flip-left" data-aos-delay="120">
                <div class="mini-card h-100">
                  <h6 class="mb-2">Backend APIs</h6>
                  <p class="mb-0 text-muted">REST APIs, auth, scalable services in Golang.</p>
                </div>
              </div>

              <div class="col-md-4" data-aos="flip-left" data-aos-delay="190">
                <div class="mini-card h-100">
                  <h6 class="mb-2">Databases</h6>
                  <p class="mb-0 text-muted">SQL design, queries, integration & optimization.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================
       SKILLS
       ===================================================== -->
  <section id="skills" class="section-padding bg-light skills-section">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title">Technical Skills</h2>
        <p class="section-subtitle">A clean overview of my core stack and tools.</p>
      </div>

      <div class="row g-4">
        <!-- Mobile -->
        <div class="col-lg-4" data-aos="zoom-in">
          <div class="skill-box shadow h-100">
            <div class="skill-head">
              <div class="skill-icon">
                <i class="bi bi-phone-fill"></i>
              </div>
              <div>
                <h5 class="mb-1">Mobile Development</h5>
                <p class="mb-0 text-muted">Cross-platform apps</p>
              </div>
            </div>

            <div class="skill-grid mt-4">
              <div class="skill-chip"><i class="bi bi-lightning-charge-fill"></i> Flutter</div>
              <div class="skill-chip"><i class="bi bi-code-slash"></i> Dart</div>
            </div>
          </div>
        </div>

        <!-- Backend -->
        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="80">
          <div class="skill-box shadow h-100">
            <div class="skill-head">
              <div class="skill-icon">
                <i class="bi bi-hdd-network-fill"></i>
              </div>
              <div>
                <h5 class="mb-1">Backend Development</h5>
                <p class="mb-0 text-muted">APIs & services</p>
              </div>
            </div>

            <div class="skill-grid mt-4">
              <div class="skill-chip"><i class="bi bi-gear-fill"></i> Golang</div>
              <div class="skill-chip"><i class="bi bi-braces"></i> Python</div>
              <div class="skill-chip"><i class="bi bi-cup-hot-fill"></i> Java</div>
              <div class="skill-chip"><i class="bi bi-database-fill"></i> SQL</div>
            </div>
          </div>
        </div>

        <!-- Web & Core -->
        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="160">
          <div class="skill-box shadow h-100">
            <div class="skill-head">
              <div class="skill-icon">
                <i class="bi bi-window-stack"></i>
              </div>
              <div>
                <h5 class="mb-1">Web & Core</h5>
                <p class="mb-0 text-muted">Front-end + fundamentals</p>
              </div>
            </div>

            <div class="skill-grid mt-4">
              <div class="skill-chip"><i class="bi bi-filetype-html"></i> HTML</div>
              <div class="skill-chip"><i class="bi bi-filetype-css"></i> CSS</div>
              <div class="skill-chip"><i class="bi bi-code"></i> C</div>
              <div class="skill-chip"><i class="bi bi-cpu-fill"></i> C++</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tools strip -->
      <div class="row g-4 mt-1">
        <div class="col-lg-12" data-aos="fade-up">
          <div class="tools-strip shadow">
            <div class="tools-title">
              <i class="bi bi-tools me-2"></i> Tools & Workflow
            </div>

            <div class="tools-items">
              <span class="tool-pill"><i class="bi bi-git"></i> Git</span>
              <span class="tool-pill"><i class="bi bi-github"></i> GitHub</span>
              <span class="tool-pill"><i class="bi bi-bug-fill"></i> Debugging</span>
              <span class="tool-pill"><i class="bi bi-check2-circle"></i> Testing</span>
              <span class="tool-pill"><i class="bi bi-kanban-fill"></i> Agile</span>
              <span class="tool-pill"><i class="bi bi-terminal-fill"></i> CLI</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- =====================================================
       EDUCATION
       (Note: you did not include custom education CSS here,
       so this section is currently mostly Bootstrap-styled.)
       ===================================================== -->
  <section id="education" class="section-padding education-section">
    <div class="container">
      <div class="text-center mb-5" data-aos="fade-up">
        <h2 class="section-title">Academic Background</h2>
        <p class="section-subtitle">My education journey and current status.</p>
      </div>

      <div class="edu-wrap">
        <!-- Item 1 -->
        <div class="edu-item" data-aos="fade-right">
          <div class="edu-left">
            <div class="edu-dot"></div>
            <div class="edu-line"></div>
          </div>

          <div class="edu-card shadow">
            <div class="edu-top">
              <div>
                <h5 class="mb-1">Diploma in Computer Engineering</h5>
                <p class="mb-0 text-muted">Moulvibazar Polytechnic Institute, Moulvibazar</p>
              </div>

              <span class="edu-badge completed">
                <i class="bi bi-check2-circle me-1"></i> Completed
              </span>
            </div>

            <div class="edu-meta mt-3">
              <span class="meta-pill"><i class="bi bi-mortarboard-fill me-2"></i> Computer Engineering</span>
              <span class="meta-pill"><i class="bi bi-lightning-charge-fill me-2"></i> Practical Skills</span>
            </div>

            <p class="edu-desc mt-3 mb-0">
              Built strong fundamentals in programming, problem-solving, and core computer engineering concepts.
            </p>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="edu-item" data-aos="fade-left">
          <div class="edu-left">
            <div class="edu-dot"></div>
            <div class="edu-line"></div>
          </div>

          <div class="edu-card shadow">
            <div class="edu-top">
              <div>
                <h5 class="mb-1">BSc in Computer Engineering</h5>
                <p class="mb-0 text-muted">Metropolitan University, Sylhet</p>
              </div>

              <span class="edu-badge running">
                <i class="bi bi-hourglass-split me-1"></i> Final Semester
              </span>
            </div>

            <div class="edu-meta mt-3">
              <span class="meta-pill"><i class="bi bi-diagram-3-fill me-2"></i> Software & Systems</span>
              <span class="meta-pill"><i class="bi bi-cpu-fill me-2"></i> Engineering Focus</span>
            </div>

            <p class="edu-desc mt-3 mb-0">
              Currently focusing on advanced topics and preparing for professional software engineering opportunities.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- =====================================================
       CONTACT
       ===================================================== -->
  <section id="contact" class="section-padding text-white text-center contact-section">
    <div class="container" data-aos="fade-up">
      <h2 class="fw-bold text-white">Contact</h2>
      <p class="text-white-50 mb-0">Let’s build something amazing together.</p>

      <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
        <a class="btn btn-main" href="mailto:subho@example.com">Email Me</a>
        <a class="btn btn-outline-light btn-round" href="#" target="_blank" rel="noopener">GitHub</a>
        <a class="btn btn-outline-light btn-round" href="#" target="_blank" rel="noopener">LinkedIn</a>
      </div>

      <p class="mt-4 mb-0 text-white-50">subho@example.com</p>
    </div>
  </section>

  <!-- =====================================================
       FOOTER
       ===================================================== -->
  <footer class="text-center py-3 footer">
    © 2026 Subho Dhar | All Rights Reserved
  </footer>

  <!-- =====================================================
       SCRIPTS
       ===================================================== -->
  <!-- Bootstrap JS bundle (navbar toggler etc.) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- AOS JS (scroll animation engine) -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- AOS initialization -->
  <script>
    // duration: animation time in ms
    // once: true means animation runs once per element
    AOS.init({ duration: 1000, once: true });
  </script>
</body>
</html>
