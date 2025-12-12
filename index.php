<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Hope Felarca Escleto | Portfolio</title>
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
                <p class="greeting">Hi, I'm Christian!</p>
                <h1>My E-Portfolio</h1>
                <p class="intro">I am a simple and motivated person who enjoys learning new things and taking on challenges. I always try to stay responsible, respectful, and positive in everything I do. I aim to grow as a person and contribute to the people around me.</p>
                <div class="welcome-card">
                    <p>Welcome to my page! I’m happy to have you here. This space is where I share my thoughts, experiences, and the things I enjoy. Feel free to explore, learn, and connect.</p>
                </div>
            </div>
            <div class="content-right">
                <div class="image-frame">
                    <img src="profile.png" alt="Christian Hope Felarca Esclet">
                </div>
            </div>
        </div>
    </script>

    <script id="homeTemplate" type="text/template">
        <div class="split-layout">
            <div class="content-left">
                <p class="greeting">Hi, I'm Christian!</p>
                <h1>Christian Hope Felarca Escleto</h1>
                <p class="intro">I am a simple and motivated person who enjoys learning new things and taking on challenges. I always try to stay responsible, respectful, and positive in everything I do. I aim to grow as a person and contribute to the people around me.</p>
                <div class="welcome-card">
                    <p>Welcome to my page! I’m happy to have you here. This space is where I share my thoughts, experiences, and the things I enjoy. Feel free to explore, learn, and connect.</p>
                </div>
            </div>
            <div class="content-right">
                <div class="image-frame">
                    <img src="avatar.png" alt="Christian Hope Felarca Escleto">
                </div>
            </div>
        </div>
    </script>

    <script id="aboutTemplate" type="text/template">
        <div class="tiled-grid">        
            <div class="info-card">
                <h3><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg> Personal Info</h3>
                <ul>
                    <li><strong>Name:</strong> Christian Hope F. Escleto</li>
                    <li><strong>Age:</strong> 21 years old</li>
                    <li><strong>Birthdate:</strong> March 15, 2004</li>
                    <li><strong>Address:</strong> Zone 2-B, Brgy, Libertad, Surallah South Cotabato</li>
                </ul>
            </div>
            <div class="info-card">
                <h3><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10v6M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg> Background</h3>
                <p><strong>Educational background:</strong></p>
                <ul>
                    <li>Surallah Central Elementary School (2016-2017)</li>
                    <li>Libetrad National Highschool (2020-2023)</li>
                </ul>
                <br>
                <p><strong>Courses or trainings taken:</strong></p>
                <ul>
                    <li>Sultan Kudarat State University</li>
                    <li>Bachelor of Science in Computer Engineering</li>
                </ul>
            </div>
            <div class="info-card">
                <h3><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg> Competencies</h3>
                <ul>
                    <li>Creativity</li>
                    <li>Willingness to work well with others</li>
                    <li>Ability to follow instructions</li>
                    <li>Adaptability</li>
                </ul>
                <br>
                <p><strong>Strength and Unique traits:</strong></p>
                <ul>
                    <li>Hardworking, Dedicated, Responsible, Reliable</li>
                    <li>Willing to help others, Friendly and approachable</li>
                </ul>
            </div>
             <div class="info-card">
                <h3><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8"></polygon></svg> Interests & Goals</h3>
                 <p><strong>Hobbies:</strong></p>
                <ul>
                    <li>Watching movies/anime</li>
                    <li>Playing Pickleball</li>
                </ul>
                <br>
                <p><strong>Career goals:</strong></p>
                <p>To develop strong knowledge and skills that will help me in my future profession.</p>
            </div>
        </div>
    </script>

    <script id="skillsTemplate" type="text/template">
        <div class="tiled-grid">
            <div class="info-card">
                <h3><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg> Web Development</h3>
                <p>HTML & CSS</p>
                <p>Building responsive and structured web pages.</p>
            </div>
            <div class="info-card">
                <h3><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg> Attitude</h3>
                <p>Positive attitude and motivation to learn.</p>
                <p>Always ready to take on new challenges.</p>
            </div>
            <div class="info-card">
                <h3><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> Soft Skills</h3>
                <p>Time management and organization.</p>
                <p>Adaptability and flexibility in any situation.</p>
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
                <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">01.</span>Learnings</h3>
                <p>This course helped me gain both knowledge and practical skills in technology and problem-solving. I learned how to work on projects, think critically, and collaborate effectively with others. It also taught me the value of continuous learning and adapting to new challenges.</p>
            </div>
            <div class="info-card">
                <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">02.</span>Challenges</h3>
                <p>The challenges I faced, such as understanding new concepts, learning different tools, and managing my time for projects and assignments. Working with others and applying what I learned was sometimes difficult. Still, these challenges helped me grow, stay motivated, and improve my skills.</p>
            </div>
            <div class="info-card">
                <h3><span style="color:var(--imperial-gold); margin-right: 0.5rem;">03.</span>Future</h3>
                <p>Learning a scripting language can help me in my future work by allowing me to automate tasks and solve problems more efficiently. It also improves my technical skills and makes me more prepared for careers in programming, data analysis, web development, and other technology-related fields.</p>
            </div>
        </div>
    </script>

    <script src="script.js"></script>
</body>
</html>
