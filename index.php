<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>China Joy Aguilar Eria | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dock-container">
        <button class="dock-item active" data-section="home" data-label="Home">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        </button>
        <button class="dock-item" data-section="about" data-label="About Me">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </button>
        <button class="dock-item" data-section="skills" data-label="Skills">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
        </button>
        <button class="dock-item" data-section="projects" data-label="Activities">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
        </button>
        <button class="dock-item" data-section="reflection" data-label="Reflection">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8.56 2.9A7 7 0 0 1 19 9c0 2.38-1.19 4.47-3 5.74V17a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-2.26C6.19 13.47 5 11.38 5 9a7 7 0 0 1 3.56-6.1z"></path><line x1="9" y1="21" x2="15" y2="21"></line></svg>
        </button>
    </div>

    <div class="clip-overlay" id="clipOverlay"></div>

    <div class="main-section" id="mainSection">
        <div class="section-content" id="sectionContent"></div>
    </div>

    <script id="homeTemplate" type="text/template">
        <div class="split-layout">
            <div class="content-left">
                <p class="greeting">Hi, I'm China Joy!</p>
                <h1>China Joy Aguilar Eria</h1>
                <p class="intro">I am a simple girl who sees life like a fairytale—full of small wonders, quiet magic, and everyday moments worth cherishing. I believe in dreaming big, staying kind, and creating my own story one step at a time.</p>
                <div class="welcome-card">
                    <p>Welcome to my page! Step into my little world where dreams, creativity, and passion meet. I'm excited to share my journey with you.</p>
                </div>
            </div>
            <div class="content-right">
                <div class="image-frame">
                    <img src="profile.png" alt="China Joy Aguilar Eria">
                </div>
            </div>
        </div>
    </script>



    <script id="aboutTemplate" type="text/template">
        <div class="about-wrapper">
            <div class="tiled-grid">        
                <div class="info-card">
                    <div class="card-left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                        <h3>Personal Info</h3>
                    </div>
                    <div class="card-right">
                        <ul>
                            <li><strong>Name:</strong> China Joy A. Eria</li>
                            <li><strong>Age:</strong> 20 years old</li>
                            <li><strong>Birthdate:</strong> February 09, 2005</li>
                            <li><strong>Address:</strong> Prk. Maligaya, Brgy. Bukay Pait Tantangan South Cotabato</li>
                        </ul>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10v6M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        <h3>Background</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
                            <p><strong>Educational background:</strong></p>
                            <ul>
                                <li>Bukay Pait Elementary School (2016-2017)</li>
                                <li>Korbel Foundation College Inc. (2020-2021)</li>
                                <li>STI College Inc. (2022-2023)</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Courses or trainings taken:</strong></p>
                            <ul>
                                <li>Circuit and Logic Design</li>
                                <li>CpE Elective 1</li>
                                <li>Introduction to HDL</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        <h3>Competencies</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
                            <p><strong>Skills and Competencies:</strong></p>
                            <ul>
                                <li>Leadership in a group project</li>
                                <li>Team collaboration and coordination</li>
                                <li>Initiative</li>
                                <li>Self-motivation</li>
                                <li>Adaptability</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Strength and Unique traits:</strong></p>
                            <ul>
                                <li>Time management, Adaptability, Teamwork, Creativity</li>
                                <li>Hardworking, Patient, Responsible, Curious and Goal-driven</li>
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
                                <li>Dancing</li>
                                <li>Playing Volleyball</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Career goals:</strong></p>
                            <p>To work in a reputable company where I can apply and grow my knowledge.</p>
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
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    <h3>Web Development</h3>
                </div>
                <div class="card-right">
                    <p>HTML & CSS</p>
                    <p>Building responsive and structured web pages with modern design principles.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                    <h3>Attitude</h3>
                </div>
                <div class="card-right">
                    <p>Adaptability and willingness to learn new technologies.</p>
                    <p>Initiative and self-motivation in every project.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <h3>Soft Skills</h3>
                </div>
                <div class="card-right">
                    <p>Time management and organization.</p>
                    <p>Adaptability and flexibility in any situation.</p>
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
                <h1>INTRAMURALS</h1>
            </div>
            <div class="slide" style="background-image: url('activity3.png');">
                <div class="slide-overlay"></div>
                <h1>ACQUAINTANCE PARTY</h1>
            </div>
            <div class="slide" style="background-image: url('activity4.png');">
                <div class="slide-overlay"></div>
                <h1>ACQUAINTANCE PARTY</h1>
            </div>
            <div class="slide" style="background-image: url('activity5.png');">
                <div class="slide-overlay"></div>
                <h1>ICpEP CONVENTION 2024</h1>
            </div>
            <div class="slide" style="background-image: url('activity6.png');">
                <div class="slide-overlay"></div>
                <h1>ICpEP CONVENTION 2024</h1>
            </div>
            <div class="slide-indicators">
                <span class="indicator active" data-slide="0"></span>
                <span class="indicator" data-slide="1"></span>
                <span class="indicator" data-slide="2"></span>
                <span class="indicator" data-slide="3"></span>
                <span class="indicator" data-slide="4"></span>
                <span class="indicator" data-slide="5"></span>
            </div>
            <button class="slide-nav prev">‹</button>
            <button class="slide-nav next">›</button>
        </div>
    </script>
    
    <script id="reflectionTemplate" type="text/template">
        <div class="tiled-grid">
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 2v12l4 2"></path></svg>
                    <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">01.</span>Learnings</h3>
                </div>
                <div class="card-right">
                    <p>I learned that this course I've taken is very hard, that even though my best is not enough to pass sometimes. I also learned that failure is not the end but it is a part of the beginning. I am here not just to take this course but I am here to pursue my dreams.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L2 7l10 5 10-5-10-5z"></path><path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path></svg>
                    <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">02.</span>Challenges</h3>
                </div>
                <div class="card-right">
                    <p>I think the challenges I already been faced is the moment I cannot accept the fact that sometimes in our life we fail and get disappointed, but we didn't notice that this is a step to a better life and to a better future.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">03.</span>Future</h3>
                </div>
                <div class="card-right">
                    <p>Learning scripting languages can greatly help my future professional work because they allow me to automate repetitive tasks, develop software and web applications faster, and solve problems efficiently. They also enhance my ability to work with data, create interactive programs, and adapt to different technologies—skills that are highly valued in the tech industry.</p>
                </div>
            </div>
        </div>
    </script>

    <script src="script.js"></script>
</body>
</html>
