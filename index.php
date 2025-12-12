<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeland H. Daanoy | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="nav-container">
        <button class="nav-item active" data-section="home">Home</button>
        <button class="nav-item" data-section="about">About Me</button>
        <button class="nav-item" data-section="skills">Skills</button>
        <button class="nav-item" data-section="projects">Activities</button>
        <button class="nav-item" data-section="reflection">Reflection</button>
    </nav>

    <div class="main-section" id="mainSection">
        <div class="section-content" id="sectionContent"></div>
    </div>

    <script id="homeTemplate" type="text/template">
        <div class="split-layout">
            <div class="content-left">
                <p class="greeting">Hi, I'm Jeland!</p>
                <h1>Jeland H. Daanoy</h1>
                <p class="intro">I'm just a guy who enjoys the simple things—good moments, real connections, and the little sparks that make life worth living. I believe in working hard, staying true to myself, and growing a bit more every day.</p>
            </div>
            <div class="content-right">
                <div class="text-portrait-container">
                    <div class="text-portrait" style="background-image: url('profile.png');">
<?php for($i = 0; $i < 500; $i++) { echo "DAANOY "; } ?>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script id="aboutTemplate" type="text/template">
        <div class="about-wrapper">
            <div class="tiled-grid">        
                <div class="info-card">
                    <div class="card-left">
                        <h3>Personal Info</h3>
                    </div>
                    <div class="card-right">
                        <ul>
                            <li><strong>Name:</strong> Jeland H. Daanoy</li>
                            <li><strong>Age:</strong> 21 years old</li>
                            <li><strong>Birthdate:</strong> November 07, 2004</li>
                            <li><strong>Address:</strong> Prk. Sampaguita, Brgy. Buenaflor Tacurong City</li>
                        </ul>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-left">
                        <h3>Background</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
                            <p><strong>Educational background:</strong></p>
                            <ul>
                                <li>Children Grace of Mary (CGM) 2010-2019</li>
                                <li>Tacurong National High School 2020-2021</li>
                                <li>STI College Inc. 2022-2023</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Courses or trainings taken:</strong></p>
                            <ul>
                                <li>Sultan Kudarat State University</li>
                                <li>Bachelor of Science in Computer Engineering</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-left">
                        <h3>Skills & Competencies</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
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
                                <li>Time management</li>
                                <li>Quick thinker</li>
                                <li>Teamwork</li>
                                <li>Creativity</li>
                                <li>Strategic mindset</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="info-card">
                    <div class="card-left">
                        <h3>Interests</h3>
                    </div>
                    <div class="card-right card-right-columns">
                        <div class="column">
                            <p><strong>Hobbies:</strong></p>
                            <ul>
                                <li>Motorcycle</li>
                                <li>Playing Basketball</li>
                            </ul>
                        </div>
                        <div class="column">
                            <p><strong>Career goals:</strong></p>
                            <p>To build a career shaped by hard work, determination, and real-life strategy.</p>
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
                    <h3>Web Development</h3>
                </div>
                <div class="card-right">
                    <p>HTML & CSS</p>
                    <p>Building responsive and structured web pages.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <h3>Professional Skills</h3>
                </div>
                <div class="card-right">
                    <p>Adaptability and willingness to learn new technologies</p>
                    <p>Time management and organization</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <h3>Soft Skills</h3>
                </div>
                <div class="card-right">
                    <p>Teamwork and collaboration</p>
                    <p>Initiative and self-motivation</p>
                </div>
            </div>
        </div>
    </script>

    <script id="projectsTemplate" type="text/template">
        <div class="activities-fullscreen" style="background-image: url('activity1.png');">
            <h1>INTRAMURALS</h1>
        </div>
    </script>
    
    <script id="reflectionTemplate" type="text/template">
        <div class="tiled-grid">
            <div class="info-card">
                <div class="card-left">
                    <h3><span style="color:#ffd60a;">01.</span> Learnings</h3>
                </div>
                <div class="card-right">
                    <p>This course strengthened my understanding of technology and improved my analytical and problem-solving skills. I also gained practical experience in completing tasks and applying concepts effectively.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <h3><span style="color:#ffd60a;">02.</span> Challenges</h3>
                </div>
                <div class="card-right">
                    <p>I encountered difficulties with new topics, tools, and time management. Collaborative tasks also required extra effort. Despite these challenges, they helped me improve my discipline and adaptability.</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <h3><span style="color:#ffd60a;">03.</span> Future</h3>
                </div>
                <div class="card-right">
                    <p>Knowledge of scripting languages will enable me to automate tasks, enhance efficiency, and support technical work. These skills are valuable in various fields such as programming, data processing, and system management.</p>
                </div>
            </div>
        </div>
    </script>

    <script src="script.js"></script>
</body>
</html>
