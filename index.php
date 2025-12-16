<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greshl Angelene D. Permosil | Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg-svg-layer"></div>
    
    <div id="welcomeOverlay">
        <h1 class="welcome-text">WELCOME</h1>
    </div>

    <audio id="bgMusic" loop preload="auto">
        <source src="bg.mp3" type="audio/mpeg">
    </audio>

    <nav class="nav-spine">
        <button class="spine-item" data-section="home" aria-label="Home">
            <div class="spine-shape"></div>
            <span class="spine-label">Home</span>
            <div class="spine-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
            </div>
        </button>
        <button class="spine-item" data-section="profile" aria-label="Profile">
            <div class="spine-shape"></div>
            <span class="spine-label">Profile</span>
            <div class="spine-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
            </div>
        </button>
        <button class="spine-item" data-section="about" aria-label="About">
            <div class="spine-shape"></div>
            <span class="spine-label">About</span>
            <div class="spine-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
            </div>
        </button>
        <button class="spine-item" data-section="reflection" aria-label="Reflection">
            <div class="spine-shape"></div>
            <span class="spine-label">Reflection</span>
            <div class="spine-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
            </div>
        </button>
        <button class="spine-item" data-section="gallery" aria-label="Gallery">
            <div class="spine-shape"></div>
            <span class="spine-label">Gallery</span>
            <div class="spine-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
            </div>
        </button>
    </nav>

    <div class="clip-overlay" id="clipOverlay"></div>

    <div class="main-section" id="mainSection">
        <div class="section-content" id="sectionContent"></div>
    </div>

    <script id="homeTemplate" type="text/template">
        <div class="home-modern-layout">
            <div class="home-visual">
                <img src="profile.png" alt="Greshl Angelene">
                <div class="visual-accent"></div>
            </div>
            <div class="home-text-content">
                <h2 class="pre-title">Hello, It's</h2>
                <h1 class="main-title">GRESHL<br>ANGELENE</h1>
                <h3 class="sub-title">Computer Engineering Student</h3>
                <p class="description">Creating, Building, & Dreaming in Code.</p>
                <div class="status-badge">
                    <span class="pulse"></span> Open to Opportunities
                </div>
            </div>
        </div>
    </script>

    <script id="profileTemplate" type="text/template">
        <div class="profile-specs-layout">
            <div class="specs-header">
                <h1>Profile</h1>
                <div class="specs-line"></div>
            </div>
            
            <div class="specs-body">
                <div class="spec-column">
                    <div class="spec-group">
                        <span class="spec-label">FULL NAME</span>
                        <span class="spec-value">Greshl Angelene D. Permosil</span>
                    </div>
                    <div class="spec-group">
                        <span class="spec-label">AGE / DOB</span>
                        <span class="spec-value">20 Yrs / Aug 02, 2005</span>
                    </div>
                    <div class="spec-group">
                        <span class="spec-label">LOCATION</span>
                        <span class="spec-value">Isulan, Sultan Kudarat</span>
                    </div>
                </div>

                <div class="spec-column">
                    <div class="spec-group">
                        <span class="spec-label">ACADEMIC</span>
                        <span class="spec-value highlight">BS Computer Engineering</span>
                        <span class="spec-sub">Sultan Kudarat State University</span>
                    </div>
                    <div class="spec-group">
                        <span class="spec-label">INTERESTS</span>
                        <span class="spec-value">Badminton, Shopping</span>
                    </div>
                </div>

                <div class="spec-column">
                    <div class="spec-group">
                        <span class="spec-label">ACHIEVEMENT</span>
                        <span class="spec-value">Hometown Vacation (Dad's)</span>
                    </div>
                    <div class="spec-group">
                        <span class="spec-label">TRAIT</span>
                        <span class="spec-value">Quiet Observer</span>
                    </div>
                </div>
            </div>
        </div>
    </script>

    <script id="aboutTemplate" type="text/template">
        <div class="editorial-layout">
            <article class="bio-article">
                <h1 class="bio-title">MY STORY</h1>
                
                <p>
                    <img src="pic1.png" class="float-img left" alt="Childhood">
                    My name is <strong>Greshl Angelene D. Permosil</strong>, and I was born on August 02, 2005, in Isulan, Sultan Kudarat. My father is Gregorio M. Permosil, and my mother is Sharlene Mae Permosil. I have two siblings, Georgiash Glory and Elora Therese. Growing up in a small, close-knit family taught me to value what I have and to be thankful for even the small blessings. We believed in working hard, having faith, and being kind. As a child, I enjoyed simple things—playing outside with friends and helping my parents at home.
                </p>
                
                <p>
                    I began my education at Kalawag Central School for elementary and continued my high school studies at Notre Dame of Isulan, Inc. (Ultimart Day-Class), passing with flying colors. I went on to pursue my senior high school years at the same institution.
                </p>

                <p>
                    <img src="pic4.png" class="float-img right" alt="School Life">
                    During my school years, I discovered both challenges and opportunities. I was not always at the top of the class, but I learned to persevere and give my best in everything I did. I pushed myself to improve in areas I found difficult. Along the way, I built friendships that gave me support and laughter, and I faced struggles that made me stronger and more determined to reach my goals.
                </p>
                
                <p>
                    Today, I see myself as someone who keeps growing and learning every day. My journey is not yet finished. As I currently study at Sultan Kudarat State University, pursuing a BS in Computer Engineering, I know the road will not always be easy. 
                </p>

                <p>
                    <img src="pic7.png" class="float-img left" alt="Future">
                    But every experience has helped me understand who I am and who I want to be. I dream of having a successful career, helping my family, and inspiring others with my story. My life is still moving forward, carrying lessons of the past, hope for today, and determination for a brighter future.
                </p>
            </article>
        </div>
    </script>

    <script id="reflectionTemplate" type="text/template">
        <div class="editorial-layout">
            <article class="bio-article">
                <h1 class="bio-title">REFLECTION</h1>
                
                <h3 style="margin-top: 2rem;">What you learned from the course</h3>
                <ul style="list-style-type: disc; margin-left: 20px; margin-top: 1rem;">
                    <li>Learning scripting in Elective 1 is initially tough due to new logic, confusing syntax, and frustrating debugging, but success comes from practicing persistence and breaking down complex problems.</li>
                </ul>

                <h3 style="margin-top: 2rem;">Challenges faced</h3>
                <ul style="list-style-type: disc; margin-left: 20px; margin-top: 1rem;">
                    <li>Managing the frustration that comes with frequent syntax errors, logical bugs, and the necessity of debugging—a process that requires patience and a systematic approach to tracing errors. Furthermore, understanding the difference between various data structures, control flow (like loops and conditionals), and translating a real-world problem into an efficient algorithmic solution can be difficult.</li>
                </ul>

                <h3 style="margin-top: 2rem;">How scripting languages can help your future professional work</h3>
                <ul style="list-style-type: disc; margin-left: 20px; margin-top: 1rem;">
                    <li>The real professional benefit of learning scripting is the long-term advantage of having strong problem-solving skills. Scripting teaches you to think logically and structure solutions efficiently, which is valuable everywhere. By being able to automate tasks and systems, you will stand out from others, handle bigger projects, and save time by reducing manual work. This skill makes you a proactive person who can build your own tools, making your abilities essential in the future world of work.</li>
                </ul>
            </article>
        </div>
    </script>

    <script id="galleryTemplate" type="text/template">
        <div class="gallery-split-layout">
            <div class="gallery-list">
                <h2>Collections</h2>
                <button class="gallery-item-btn active" data-img="pic1.png">
                    <span>01</span> Pic 1
                </button>
                <button class="gallery-item-btn" data-img="pic2.png">
                    <span>02</span> Pic 2
                </button>
                <button class="gallery-item-btn" data-img="pic3.png">
                    <span>03</span> Pic 3
                </button>
                <button class="gallery-item-btn" data-img="pic4.png">
                    <span>04</span> Pic 4
                </button>
                <button class="gallery-item-btn" data-img="pic5.png">
                    <span>05</span> Pic 5
                </button>
                <button class="gallery-item-btn" data-img="pic6.png">
                    <span>06</span> Pic 6
                </button>
                <button class="gallery-item-btn" data-img="pic7.png">
                    <span>07</span> Pic 7
                </button>
                <button class="gallery-item-btn" data-img="profile.png">
                    <span>08</span> Profile Portrait
                </button>
            </div>
            <div class="gallery-display">
                <img id="galleryDisplayImg" src="pic1.png" alt="Selected Image">
            </div>
        </div>
    </script>

    <script src="script.js"></script>
</body>
</html>
