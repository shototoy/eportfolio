<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Johnica Keira M. Sulmaca | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="circular-nav">
        <div class="nav-center" data-section="home">
            <div class="profile-circle">
                <img src="avatar.png" alt="Johnica Keira M. Sulmaca">
            </div>
        </div>
        <div class="nav-items">
            <button class="nav-item" data-section="about" style="--angle: -20deg">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>About</span>
            </button>
            <button class="nav-item" data-section="skills" style="--angle: 23deg">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span>Skills</span>
            </button>
            <button class="nav-item" data-section="projects" style="--angle: 66deg">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                </svg>
                <span>Activities</span>
            </button>
            <button class="nav-item" data-section="reflection" style="--angle: 110deg">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                </svg>
                <span>Reflection</span>
            </button>
        </div>
    </div>

    <div class="clip-overlay" id="clipOverlay"></div>

    <div class="main-section" id="mainSection">
        <div class="section-content" id="sectionContent"></div>
    </div>

    <script id="homeTemplate" type="text/template">
        <div class="split-layout">
            <div class="content-left">
                <p class="greeting">Hi, I'm Johnica Keira!</p>
                <h1>Johnica Keira M. Sulmaca</h1>
                <p class="intro">Hi, I'm Johnica Keira M. Sulmaca, a computer engineering student exploring web development and design. Welcome to my site where I showcase projects, share learning, and connect with others.</p>
                <div class="welcome-card">
                    <p>Hey there! Welcome to my digital playground--hope you find inspiration.</p>
                </div>
            </div>
            <div class="content-right">
                <div class="image-frame">
                    <img src="profile.png" alt="Johnica Keira M. Sulmaca">
                </div>
            </div>
        </div>
    </script>

    <script id="aboutTemplate" type="text/template">
        <div class="hexagon-grid">
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <h3>Personal Info</h3>
                    <p><strong>Name:</strong> Johnica Keira M. Sulmaca</p>
                    <p><strong>Age:</strong> 20 years old</p>
                    <p><strong>Birthdate:</strong> July 29, 2005</p>
                    <p><strong>Address:</strong> Isulan, Sultan Kudarat</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                    <h3>Grade School</h3>
                    <p>Salaman Central Elementary School</p>
                    <p>(2016-2017)</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                    <h3>Junior High School</h3>
                    <p>Notre Dame of Salaman College</p>
                    <p>(2020-2021)</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                    <h3>Senior High School</h3>
                    <p>Lebak Legislated National High School</p>
                    <p>(2022-2023)</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v20M2 12h20"></path>
                    </svg>
                    <h3>Courses & Training</h3>
                    <p>• Electronic Logic Circuits</p>
                    <p>• CPE Elective 1</p>
                    <p>• Data Structure</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    <h3>Interests</h3>
                    <p>• Web Development</p>
                    <p>• Design</p>
                    <p>• Learning & Sharing</p>
                    <p>• Connecting with Others</p>
                </div>
            </div>
        </div>
    </script>

    <script id="skillsTemplate" type="text/template">
        <div class="hexagon-grid">
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"></polyline>
                        <polyline points="8 6 2 12 8 18"></polyline>
                    </svg>
                    <h3>HTML</h3>
                    <p>Structure & Semantics</p>
                    <p>Web Markup</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                    </svg>
                    <h3>CSS</h3>
                    <p>Styling & Design</p>
                    <p>Responsive Layouts</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 3h18v18H3zM12 8v8m-4-4h8"></path>
                    </svg>
                    <h3>JavaScript</h3>
                    <p>Interactivity & Logic</p>
                    <p>Dynamic Content</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4M12 8h.01"></path>
                    </svg>
                    <h3>PHP</h3>
                    <p>Server-Side Development</p>
                    <p>Backend Logic</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                    </svg>
                    <h3>Verilog</h3>
                    <p>Hardware Description</p>
                    <p>Digital Design</p>
                </div>
            </div>
            <div class="hex-card">
                <div class="hex-content">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v20M2 12h20"></path>
                    </svg>
                    <h3>Problem Solving</h3>
                    <p>Analytical Thinking</p>
                    <p>Creative Solutions</p>
                </div>
            </div>
        </div>
    </script>

    <script id="projectsTemplate" type="text/template">
        <h2 class="section-title">Projects & Activities</h2>
        <div class="activities-container">
            <div class="activity-row">
                <div class="activity-carousel">
                    <div class="carousel-images" data-carousel="1">
                        <img src="activity1.png" alt="PCB 1" class="active">
                        <img src="activity2.png" alt="PCB 2">
                    </div>
                </div>
                <div class="activity-content">
                    <h3>Kambuniyan</h3>
                    <p>School Activity</p>
                    <p>Cultural celebration showcasing traditional performances and community engagement.</p>
                </div>
            </div>
            <div class="activity-row">
                <div class="activity-carousel">
                    <div class="carousel-images" data-carousel="2">
                        <img src="activity3.png" alt="Intramurals 1" class="active">
                        <img src="activity4.png" alt="Intramurals 2">
                        <img src="activity5.png" alt="Intramurals 3">
                    </div>
                </div>
                <div class="activity-content">
                    <h3>Intramurals</h3>
                    <p>School Activity</p>
                    <p>Sports and recreational events promoting teamwork, fitness, and school spirit.</p>
                </div>
            </div>
        </div>
    </script>

    <script id="reflectionTemplate" type="text/template">
        <h2 class="section-title">Reflection</h2>
        <div class="reflection-layout">
            <div class="reflection-card">
                <div class="reflection-number">01</div>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                </svg>
                <h3>What I Learned</h3>
                <p>In CpE Elective 1, I learned the basics of HTML and CSS. I understood how to structure a webpage, add content, and style it to look simple and neat.</p>
            </div>
            <div class="reflection-card">
                <div class="reflection-number">02</div>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                </svg>
                <h3>Challenges Faced</h3>
                <p>Some challenges I faced were aligning elements, choosing the right tags, and fixing small errors that affect the layout. With practice, I slowly improved.</p>
            </div>
        </div>
    </script>

    <script src="script.js"></script>
</body>
</html>
