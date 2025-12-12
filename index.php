<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maricel P. Andaya | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h2 class="logo">Cel<span>.</span></h2>
            <button class="close-btn" id="closeSidebar" aria-label="Close Sidebar">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <ul class="nav-links">
            <li><a href="#home" class="nav-link active">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                </svg>
                <span>Home</span>
            </a></li>
            <li><a href="#about" class="nav-link">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>About</span>
            </a></li>
            <li><a href="#skills" class="nav-link">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span>Skills</span>
            </a></li>
            <li><a href="#projects" class="nav-link">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
                <span>Activities</span>
            </a></li>
            <li><a href="#reflection" class="nav-link">
                <svg class="nav-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
                <span>Reflection</span>
            </a></li>
        </ul>
    </nav>

    <button class="sidebar-toggle" id="sidebarToggle" aria-label="Toggle Sidebar">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
    </button>

    <main class="main-content">
        <section id="home" class="hero-section">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-text">
                        <p class="greeting">Hi, I'm Cel!</p>
                        <h1>Maricel P. Andaya</h1>
                        <p class="intro">"I love exploring and challenging myself through learning, traveling, or trying new experiences. I'm not super social, but I still appreciate meaningful connections and I'm always excited to grow."</p>
                        <div class="welcome-card">
                            <p>"Welcome to my little corner! Make yourself at home in my small, cozy space."</p>
                        </div>
                    </div>
                    <div class="hero-image">
                        <div class="image-wrapper">
                            <img src="profile.png" alt="Maricel P. Andaya">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about-section">
            <div class="container">
                <div class="section-header">
                    <h2>About Me</h2>
                    <div class="header-line"></div>
                </div>
                <div class="about-content">
                    <div class="about-card">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h3>Personal Info</h3>
                        <div class="info-grid">
                            <div class="info-item">
                                <span class="label">Name:</span>
                                <span class="value">Maricel P. Andaya</span>
                            </div>
                            <div class="info-item">
                                <span class="label">Age:</span>
                                <span class="value">20 years old</span>
                            </div>
                        </div>
                    </div>

                    <div class="about-card">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <h3>Educational Background</h3>
                        <ul class="timeline">
                            <li>
                                <span class="year">2016-2017</span>
                                <span class="school">NICES</span>
                            </li>
                            <li>
                                <span class="year">2020-2021</span>
                                <span class="school">VMCACFI - JHS</span>
                            </li>
                            <li>
                                <span class="year">2022-2023</span>
                                <span class="school">VMCACFI - SHS</span>
                            </li>
                        </ul>
                    </div>

                    <div class="about-card">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v20M2 12h20"></path>
                            </svg>
                        </div>
                        <h3>Courses & Training</h3>
                        <ul class="course-list">
                            <li>Introduction to HDL</li>
                            <li>CpE Elective 1</li>
                            <li>Circuit and Logic Design</li>
                        </ul>
                    </div>

                    <div class="about-card">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <h3>Skills & Competencies</h3>
                        <ul class="trait-list">
                            <li>Flexible</li>
                            <li>Calm</li>
                            <li>Friendly</li>
                            <li>Easy to talk to once comfortable</li>
                            <li>Respectful towards others</li>
                        </ul>
                    </div>

                    <div class="about-card">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </div>
                        <h3>Hobbies & Interests</h3>
                        <ul class="hobby-list">
                            <li>Exploring new places</li>
                            <li>Listening to music</li>
                            <li>Enjoys quiet, cozy moments</li>
                        </ul>
                    </div>

                    <div class="about-card">
                        <div class="card-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <h3>Career Goals</h3>
                        <ul class="goal-list">
                            <li>Build a stable and meaningful career</li>
                            <li>Develop strong professional skills</li>
                            <li>Gain more experience and confidence</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="skills-section">
            <div class="container">
                <div class="section-header">
                    <h2>Skills & Competencies</h2>
                    <div class="header-line"></div>
                </div>
                <div class="skills-grid">
                    <div class="skill-card">
                        <div class="skill-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="16 18 22 12 16 6"></polyline>
                                <polyline points="8 6 2 12 8 18"></polyline>
                            </svg>
                        </div>
                        <h3>HTML</h3>
                        <p>Structure & Semantics</p>
                    </div>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            </svg>
                        </div>
                        <h3>CSS</h3>
                        <p>Styling & Design</p>
                    </div>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 3h18v18H3zM12 8v8m-4-4h8"></path>
                            </svg>
                        </div>
                        <h3>JavaScript</h3>
                        <p>Interactivity & Logic</p>
                    </div>
                    <div class="skill-card">
                        <div class="skill-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 16v-4M12 8h.01"></path>
                            </svg>
                        </div>
                        <h3>PHP</h3>
                        <p>Server-Side Development</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="projects-section">
            <div class="container">
                <div class="section-header">
                    <h2>Projects & Activities</h2>
                    <div class="header-line"></div>
                </div>
                <div class="projects-grid">
                    <div class="project-card">
                        <div class="project-images">
                            <img src="activity1.png" alt="Kambuniyan Activity 1">
                            <img src="activity2.png" alt="Kambuniyan Activity 2">
                        </div>
                        <div class="project-content">
                            <h3>Kambuniyan</h3>
                            <p class="project-type">School Activity</p>
                        </div>
                    </div>
                    <div class="project-card">
                        <div class="project-images">
                            <img src="activity3.png" alt="Intramurals Activity 1">
                            <img src="activity4.png" alt="Intramurals Activity 2">
                        </div>
                        <div class="project-content">
                            <h3>Intramurals</h3>
                            <p class="project-type">School Activity</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="reflection" class="reflection-section">
            <div class="container">
                <div class="section-header">
                    <h2>Reflection</h2>
                    <div class="header-line"></div>
                </div>
                <div class="reflection-grid">
                    <div class="reflection-card">
                        <div class="reflection-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                        </div>
                        <h3>What I Learned from the Course</h3>
                        <p>In CpE Elective 1, I learned the basics of HTML and CSS. I understood how to structure a webpage, add content, and style it to look simple and neat.</p>
                    </div>
                    <div class="reflection-card">
                        <div class="reflection-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="12"></line>
                                <line x1="12" y1="16" x2="12.01" y2="16"></line>
                            </svg>
                        </div>
                        <h3>Challenges Faced</h3>
                        <p>Some challenges I faced were aligning elements, choosing the right tags, and fixing small errors that affect the layout. With practice, I slowly improved.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="script.js"></script>
</body>
</html>
