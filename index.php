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
        <button class="nav-item" data-section="reflection">Reflection</button>
    </nav>

    <div class="main-section" id="mainSection">
        <div class="split-layout">
            <div class="content-left" id="contentLeft"></div>
            <div class="content-right">
                <div class="text-portrait-container">
                    <div class="text-portrait" style="background-image: url('profile.png');">
<?php for($i = 0; $i < 94; $i++) { echo "MY NAME IS JELAND. "; } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script id="homeTemplate" type="text/template">
        <p class="greeting">Hi, I'm Jeland!</p>
        <h1>Jeland H. Daanoy</h1>
        <p class="intro">I'm just a guy who enjoys the simple things—good moments, real connections, and the little sparks that make life worth living. I believe in working hard, staying true to myself, and growing a bit more every day.</p>
    </script>

    <script id="aboutTemplate" type="text/template">
        <div class="about-content">
            <h2>About Me</h2>
            <h3>Personal Info</h3>
            <ul>
                <li><strong>Name:</strong> Jeland H. Daanoy</li>
                <li><strong>Age:</strong> 21 years old</li>
                <li><strong>Birthdate:</strong> November 07, 2004</li>
                <li><strong>Address:</strong> Prk. Sampaguita, Brgy. Buenaflor Tacurong City</li>
            </ul>
            
            <h3>Educational Background</h3>
            <ul>
                <li>Children Grace of Mary (CGM) 2010-2019</li>
                <li>Tacurong National High School 2020-2021</li>
                <li>STI College Inc. 2022-2023</li>
                <li>Sultan Kudarat State University - BS Computer Engineering</li>
            </ul>
            
            <h3>Skills & Competencies</h3>
            <ul>
                <li>Leadership in group projects</li>
                <li>Team collaboration and coordination</li>
                <li>Initiative and Self-motivation</li>
                <li>Adaptability</li>
            </ul>
            
            <h3>Hobbies</h3>
            <ul>
                <li>Motorcycle</li>
                <li>Playing Basketball</li>
            </ul>
        </div>
    </script>

    <script id="skillsTemplate" type="text/template">
        <div class="skills-content">
            <h2>Skills & Competencies</h2>
            
            <h3>Web Development</h3>
            <p>HTML & CSS - Building responsive and structured web pages.</p>
            
            <h3>Professional Skills</h3>
            <p>Adaptability and willingness to learn new technologies</p>
            <p>Time management and organization</p>
            
            <h3>Soft Skills</h3>
            <p>Teamwork and collaboration</p>
            <p>Initiative and self-motivation</p>
            
            <h3>Strengths</h3>
            <ul>
                <li>Time management</li>
                <li>Quick thinker</li>
                <li>Teamwork</li>
                <li>Creativity</li>
                <li>Strategic mindset</li>
            </ul>
        </div>
    </script>
    
    <script id="reflectionTemplate" type="text/template">
        <div class="reflection-content">
            <h2>Reflection</h2>
            
            <h3>01. Learnings</h3>
            <p>This course strengthened my understanding of technology and improved my analytical and problem-solving skills. I also gained practical experience in completing tasks and applying concepts effectively.</p>
            
            <h3>02. Challenges</h3>
            <p>I encountered difficulties with new topics, tools, and time management. Collaborative tasks also required extra effort. Despite these challenges, they helped me improve my discipline and adaptability.</p>
            
            <h3>03. Future</h3>
            <p>Knowledge of scripting languages will enable me to automate tasks, enhance efficiency, and support technical work. These skills are valuable in various fields such as programming, data processing, and system management.</p>
        </div>
    </script>

    <script src="script.js"></script>
</body>
</html>

