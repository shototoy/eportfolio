<!DOCTYPE html>
<html lang="en" data-builder="ready">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alshera Seravanez Montano - BS CPE | Portfolio</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="bg-gradient-1"></div>
    <div class="bg-gradient-2"></div>
    <div
      class="scroll-progress"
      role="progressbar"
      aria-label="Reading progress"
      aria-valuenow="0"
      style="width: 0%"
    ></div>
    <header>
      <nav
        data-element="nav"
        id="navbar"
        role="navigation"
        aria-label="Main navigation"
        style="opacity: 1; backdrop-filter: blur(10px)"
      >
        <div class="container">
          <a href="#hero" class="logo active"
            ><span data-content="fullName">Alshera Seravanez Montano</span></a
          >
          <button
            class="menu-toggle"
            id="menuToggle"
            aria-label="Toggle menu"
            aria-expanded="false"
            aria-controls="navMenu"
          >
            <span></span><span></span><span></span>
          </button>
          <ul id="navMenu">
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Activities</a></li>
            <li><a href="#reflection">Reflect</a></li>
            <li>
              <a href="#contact" class="nav-cta" style="transform: translate(0px, 0px);"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main id="main-content">
      <section class="hero" id="hero" data-section="hero">
        <div class="container">
          <div class="hero-content">
            <div class="hero-text">
              <h1>Hi!, I’m Alshera!</h1>
              <p>I’m someone who loves learning new things and finding better ways to do them. I enjoy taking on challenges, growing from experience, and connecting with people who inspire me.</p>
              <p><strong>Welcome!</strong> I’m really glad you found your way here. Take your time exploring the page, and I hope you find something useful and enjoyable along the way.</p>
              <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary"><i class="fas fa-envelope" aria-hidden="true"></i> Get in Touch</a>
                <a href="#projects" class="btn btn-secondary"><i class="fas fa-folder" aria-hidden="true"></i> View Activities</a>
              </div>
            </div>
            <div class="hero-image" data-content="heroImage">
              <div class="hero-image-wrapper">
                <img loading="lazy" src="profile.jpg" alt="Hero" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="about" data-section="about" class="fade-element">
        <div class="container">
          <div class="section-header">
            <p class="section-label">About</p>
            <h2 class="section-title">Who I Am</h2>
          </div>
          <div class="about-card reveal">
            <div class="about-image">
                  <?php
                    $about_images = glob('about*.jpg');
                    if ($about_images && count($about_images) > 0) {
                      echo '<img id="about-slideshow" src="' . $about_images[0] . '" alt="About" style="width:100%;border-radius:12px;max-height:350px;object-fit:cover;">';
                      echo '<script>window.ABOUT_IMAGES = ' . json_encode($about_images) . ';</script>';
                    } else {
                      echo '<img id="about-slideshow" src="profile.jpg" alt="About" style="width:100%;border-radius:12px;max-height:300px;object-fit:cover;">';
                      echo '<script>window.ABOUT_IMAGES = ["profile.jpg"];</script>';
                    }
                  ?>
            </div>
            <div class="about-details">
              <div class="about-block">
                <div class="about-h3-wrapper"><h3>Personal Information</h3></div>
                <div class="about-info-table" style="display:grid;grid-template-columns:120px 1fr;row-gap:0.3rem;column-gap:0.5rem;margin-bottom:0.5rem; font-size:0.9em;">
                  <div><strong>Name:</strong></div><div>Alshera S. Montano</div>
                  <div><strong>Age:</strong></div><div>20 years old</div>
                  <div><strong>Birthdate:</strong></div><div>April 26, 2005</div>
                  <div><strong>Address:</strong></div><div>Prk. Katipunan, Brgy. Reyes, Banga, South Cotabato</div>
                  <div><strong>Hobbies:</strong></div><div>Tennis, Dancing</div>
                </div>
              </div>
              <div class="about-block">
                <div class="about-h3-wrapper"><h3>Background</h3></div>
                <div class="about-info-table" style="display:grid;grid-template-columns:120px 1fr;row-gap:0.3rem;column-gap:0.5rem;margin-bottom:0.5rem; font-size:0.9em;">
                  <div><strong>Educational background:</strong></div><div>
                    Prk. Reyes, Banga, South Cotabato (2011-2016)<br>
                    Banga National High School (2016-2023)
                  </div>
                  <div><strong>Courses or trainings taken:</strong></div><div>
                    Sultan Kudarat State University<br>
                    Bachelor of Science in Computer Engineering
                  </div>
                </div>
              </div>
              <div class="about-block">
                <div class="about-h3-wrapper"><h3>Career Goals</h3></div>
                <div class="about-info-table" style="display:grid;grid-template-columns:120px 1fr;row-gap:0.3rem;column-gap:0.5rem;margin-bottom:0.5rem; font-size:0.9em;">
                  <div>Goal</div><div>To work in a reputable company where I can apply and grow my knowledge.</div>
                </div>
              </div>
              <div class="about-block">
                <div class="about-h3-wrapper"><h3>Strength and Unique Traits</h3></div>
                <div class="about-info-table" style="display:grid;grid-template-columns:250px 1fr;row-gap:0.3rem;column-gap:1rem;margin-bottom:0.5rem; font-size:0.9em;">
                  <div>Time management, Adaptability, Teamwork, Creativity</div><div>✔</div>
                  <div>Hardworking, Patient, Responsible, Curious and Goal-driven</div><div>✔</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="skills" data-section="skills" class="fade-element">
        <div class="container">
          <div class="section-header">
            <p class="section-label">Skills and Competencies</p>
            <h2 class="section-title">Skills and Competencies</h2>
          </div>
          <div class="skills-grid">
            <div class="skill-card reveal fade-element stagger-item" style="transition-delay: 0.1s">
              <div class="skill-icon"><img src="icons/css.png" alt="CSS" style="width:48px;height:48px;"></div>
              <h3 style="font-size:1.5rem;">CSS</h3>
            </div>
            <div class="skill-card reveal fade-element stagger-item" style="transition-delay: 0.2s">
              <div class="skill-icon"><img src="icons/javascript.png" alt="JavaScript" style="width:48px;height:48px;"></div>
              <h3 style="font-size:1.5rem;">JavaScript</h3>
            </div>
            <div class="skill-card reveal fade-element stagger-item" style="transition-delay: 0.3s">
              <div class="skill-icon"><img src="icons/php.png" alt="PHP" style="width:48px;height:48px;"></div>
              <h3 style="font-size:1.5rem;">PHP</h3>
            </div>
            <div class="skill-card reveal fade-element stagger-item" style="transition-delay: 0.4s">
              <div class="skill-icon"><img src="icons/verilog.png" alt="Verilog" style="width:48px;height:48px;"></div>
              <h3 style="font-size:1.5rem;">Verilog</h3>
            </div>
          </div>
        </div>
      </section>

      <section id="projects" data-section="projects" class="fade-element">
        <div class="container">
          <div class="section-header">
            <p class="section-label">Activities</p>
            <h2 class="section-title">Recent Activities</h2>
          </div>
          <div class="projects-grid">
            <div class="project-card reveal fade-element stagger-item" style="transition-delay: 0.4s">
              <div class="project-image">
                <img src="about3.jpg" alt="Intramurals" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
              </div>
              <div class="project-content">
                <p class="category">Intramurals</p>
                <h3>Intramurals</h3>
              </div>
            </div>
            <div class="project-card reveal fade-element stagger-item" style="transition-delay: 0.5s">
              <div class="project-image">
                <img src="about1.jpg" alt="Acquaintance" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
              </div>
              <div class="project-content">
                <p class="category">Acquaintance</p>
                <h3>Acquaintance</h3>
              </div>
            </div>
            <div class="project-card reveal fade-element stagger-item" style="transition-delay: 0.6s">
              <div class="project-image">
                <img src="about5.jpg" alt="ICpEP Convention 2024" style="width:100%;height:220px;object-fit:cover;border-radius:8px;" />
              </div>
              <div class="project-content">
                <p class="category">ICpEP Convention 2024</p>
                <h3>ICpEP Convention 2024</h3>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="reflection" data-section="reflection" class="fade-element">
        <div class="container">
          <div class="section-header">
            <p class="section-label">Reflection</p>
            <h2 class="section-title">Reflection</h2>
          </div>
          <div class="reflection-content">
            <div class="reflection-block" style="margin-bottom:2rem;">
              <h3 style="font-size:1.25rem; margin-bottom:0.5rem;">What you learned from the course</h3>
              <p>Throughout my Computer Engineering course, I learned how computer hardware and software work together, including the fundamentals of digital logic, electronic circuits, microprocessors, and computer architecture, as well as programming skills in languages like C and C++. The course strengthened my problem-solving skills, teamwork, technical writing, and overall understanding of designing and analyzing systems that combine both hardware and software.</p>
            </div>
            <div class="reflection-block" style="margin-bottom:2rem;">
              <h3 style="font-size:1.25rem; margin-bottom:0.5rem;">Challenges faced</h3>
              <p>One of the main challenges I faced in the Computer Engineering course was understanding complex hardware concepts such as digital logic, and circuit analysis, which required a lot of patience and practice. Despite these difficulties, each challenge helped strengthen my problem-solving skills and made me more confident in applying what I learned.</p>
            </div>
            <div class="reflection-block">
              <h3 style="font-size:1.25rem; margin-bottom:0.5rem;">How scripting language can help your future professional work</h3>
              <p>Scripting languages can help my future professional work by making tasks faster and easier to automate, allowing me to write short programs that handle repetitive processes such as data processing, file management, testing, and system configuration. They will also help me debug hardware and software more efficiently, create tools for monitoring or analyzing system performance, and integrate different technologies in engineering projects.</p>
            </div>
          </div>
        </div>
      </section>
      
      <section id="contact" data-section="contact" class="fade-element">
        <div class="container">
          <div class="section-header">
            <p class="section-label">Contact</p>
            <h2 class="section-title">Get in Touch</h2>
          </div>
          <div class="contact-card reveal">
            <h3>Let's Work Together</h3>
            <p>I'm always open to new projects and opportunities.</p>
            <div class="contact-links">
              <a href="mailto:alsheramontano@gmail.com" class="contact-link"
                ><img src="icons/mail.svg" alt="Mail" style="width:28px;height:28px;vertical-align:middle;margin-right:8px;">
                <span data-content="email">alsheramontano@gmail.com</span></a
              >
              <a href="tel:+12345678900" class="contact-link"
                ><img src="icons/phone.svg" alt="Phone" style="width:28px;height:28px;vertical-align:middle;margin-right:8px;">
                <span data-content="phone">+1 234 567 8900</span></a
              >
            </div>
            <div class="social-links">
              <a
                href=""
                class="social-link"
                data-element="social-link"
                target="_blank"
                rel="noopener noreferrer"
                ><img src="icons/github.svg" alt="GitHub" style="width:28px;height:28px;"></a>
              <a
                href=""
                class="social-link"
                data-element="social-link"
                target="_blank"
                rel="noopener noreferrer"
                ><img src="icons/linkedin.svg" alt="LinkedIn" style="width:28px;height:28px;"></a>
              <a
                href=""
                class="social-link"
                data-element="social-link"
                target="_blank"
                rel="noopener noreferrer"
                ><img src="icons/twitter.svg" alt="Twitter" style="width:28px;height:28px;"></a>
              <a
                href=""
                class="social-link"
                data-element="social-link"
                target="_blank"
                rel="noopener noreferrer"
                ><img src="icons/facebook.svg" alt="Facebook" style="width:28px;height:28px;"></a>
              <a
                href=""
                class="social-link"
                data-element="social-link"
                target="_blank"
                rel="noopener noreferrer"
                ><img src="icons/instagram.svg" alt="Instagram" style="width:28px;height:28px;"></a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer role="contentinfo">
      <p>
        © 2025 <span data-content="fullName">Alshera Seravanez Montano</span>.
        All rights reserved.
      </p>
    </footer>

    <script src="script.js" defer></script>
  </body>
</html>
