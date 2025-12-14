<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stephanie Marquez Tesora | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg-svg-layer"></div>
    
    <div id="welcomeOverlay">
        <h1 class="welcome-text">WELCOME TO MY EPORTFOLIO</h1>
    </div>

    <nav class="nav-overlay">
        <button class="nav-shard shard-tl" data-section="about" aria-label="About">
            <span class="shard-text">About</span>
            <div class="shard-bg"></div>
        </button>
        <button class="nav-shard shard-tr" data-section="skills" aria-label="Skills">
            <span class="shard-text">Skills</span>
            <div class="shard-bg"></div>
        </button>
        <button class="nav-shard shard-bl" data-section="projects" aria-label="Activities">
            <span class="shard-text">Activities</span>
            <div class="shard-bg"></div>
        </button>
        <button class="nav-shard shard-br" data-section="reflection" aria-label="Reflection">
            <span class="shard-text">Reflection</span>
            <div class="shard-bg"></div>
        </button>
        <button class="nav-shard shard-bc" data-section="home" aria-label="Home">
            <span class="shard-text">Home</span>
            <div class="shard-bg"></div>
        </button>
    </nav>

    <div class="clip-overlay" id="clipOverlay"></div>

    <div class="main-section" id="mainSection">
        <div class="section-content" id="sectionContent"></div>
    </div>

    <script id="homeTemplate" type="text/template">
        <div class="split-layout">
            <div class="content-left">
                <p class="greeting">Hi, I'm Stephanie Marquez</p>
                <h1>Stephanie Marquez Tesora</h1>
                <p class="intro">a passionate and motivated student exploring the world of technology and web development.</p>
                <div class="welcome-card">
                    <p>This website showcases who I am, the skills I’m building, and the projects I’ve created throughout my learning journey. Feel free to look around and get to know me better. I’m excited to share my growth, experiences, and goals with you!</p>
                </div>
            </div>
            <div class="content-right">
                <div class="image-frame">
                    <img src="profile.png" alt="Stephanie Marquez Tesora">
                </div>
            </div>
        </div>
    </script>



    <script id="aboutTemplate" type="text/template">
        <div class="about-wrapper">
            <div class="tiled-grid">        
                <div class="info-card">
                    <div class="card-left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10v6M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <h3>Background</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
                            <p><strong>Educational background:</strong></p>
                            <ul>
                                <li>Estrella Integrated School (2015-2016)</li>
                                <li>Central Mangilala National High School (2020-2021)</li>
                                <li>Central Mangilala National High School (2022-2023)</li>
                                <li>Currently taking a BSCPE at Sultan Kudarat State University</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Courses or trainings taken:</strong></p>
                            <ul>
                                <li>Training for CSS NC2</li>
                                <li>Elective 1</li>
                                <li>Electronic logic circuit</li>
                                <li>Data Structure</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <h3>Competencies</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
                            <p><strong>Skills and Competencies:</strong></p>
                            <ul>
                                <li>Computer System Servicing NC II Passer</li>
                                <li>Knowledgeable in computer hardware, troubleshooting, installation, and maintenance</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Strength and Unique traits:</strong></p>
                            <ul>
                                <li>Creative, hardworking, detail-oriented</li>
                                <li>Eager to learn</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg>
                        <h3>Interests & Goals</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
                            <p><strong>Hobbies:</strong></p>
                            <ul>
                                <li>Exploring new technologies</li>
                                <li>Watching tech-related videos</li>
                                <li>Reading</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Career goals:</strong></p>
                            <p>To become a skilled web developer and eventually work in the field of software development.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script id="skillsTemplate" type="text/template">
        <div class="tiled-grid">
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                    <h3>Technical Skills</h3>
                </div>
                <div class="card-right">
                    <p><strong>Web Development:</strong> HTML, CSS, basic JavaScript</p>
                    <p><strong>Multimedia:</strong> Basic layout and photo editing</p>
                    <p><strong>System:</strong> PC assembly, system configuration, software installation</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                    <h3>Soft Skills</h3>
                </div>
                <div class="card-right">
                    <p>Good communication, teamwork, adaptability, and problem-solving.</p>
                    <p>Detail-oriented, organized, and willing to learn new technologies.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2l3 6 5-4-3 6h7l-4 5 4 5h-7l3 6-5-4-3 6V2z"></path></svg>
                    <h3>Other</h3>
                </div>
                <div class="card-right">
                    <p><strong>Applications:</strong> MS Word, PowerPoint</p>
                    <p><strong>Knowledge in Military:</strong> ROTC graduate</p>
                </div>
            </div>
        </div>
    </script>

    <script id="projectsTemplate" type="text/template">
        <div class="activities-slideshow">
            <div class="slide active" style="background-image: url('activity1.png');">
                <div class="slide-overlay"></div>
                <h1>INTRAMURALS</h1>
            </div>
            <div class="slide" style="background-image: url('activity2.png');">
                <div class="slide-overlay"></div>
                <h1>KAMBUNIYAN</h1>
            </div>
            <div class="slide" style="background-image: url('activity3.png');">
                <div class="slide-overlay"></div>
                <h1>CALENDAR APP</h1>
            </div>
            <div class="slide-indicators">
                <span class="indicator active" data-slide="0"></span>
                <span class="indicator" data-slide="1"></span>
                <span class="indicator" data-slide="2"></span>
                <span class="indicator" data-slide="3"></span>
            </div>
            <button class="slide-nav prev">‹</button>
            <button class="slide-nav next">›</button>
        </div>
    </script>
    
    <script id="reflectionTemplate" type="text/template">
        <div class="tiled-grid">
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                    <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">01.</span>Learnings</h3>
                </div>
                <div class="card-right">
                    <p>Throughout this course, I learned how web pages are created and how important scripting languages are in making websites interactive and functional. I also discovered the importance of proper structure, design, and user experience.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                    <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">02.</span>Challenges</h3>
                </div>
                <div class="card-right">
                    <p>Some challenges I faced included debugging errors and learning how to organize my code, but these experiences helped me improve my patience and problem-solving skills.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                    <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">03.</span>Future</h3>
                </div>
                <div class="card-right">
                    <p>Overall, I realized that learning programming can open many opportunities in my future career and make me more confident in pursuing the field of web development.</p>
                </div>
            </div>
        </div>
    </script>

    <script src="script.js"></script>
</body>
</html>
