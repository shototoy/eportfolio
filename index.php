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
        <h1 class="welcome-text">WELCOME TO MY EPORTFOLIO</h1>
    </div>

    <!-- New Innovative Navbar: Diamond Spine -->
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
        <div class="split-layout">
            <div class="content-left">
                <p class="greeting">Hi, I'm Greshl Angelene</p>
                <h1>Greshl Angelene D. Permosil</h1>
                <p class="intro">A Computer Engineering student growing, learning, and dreaming of building a brighter future.</p>
                <div class="welcome-card">
                    <p>Welcome to my personal portfolio. This site shares my journey, my background, and the moments that define who I am. From my roots in Sultan Kudarat to my aspirations in technology, I invite you to get to know me better.</p>
                </div>
            </div>
            <div class="content-right">
                <div class="image-frame">
                    <img src="profile.png" alt="Greshl Angelene Permosil">
                </div>
            </div>
        </div>
    </script>

    <script id="profileTemplate" type="text/template">
        <div class="tiled-grid">
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                    <h3>The Basics</h3>
                </div>
                <div class="card-right">
                    <p><strong>Name:</strong> Greshl Angelene D. Permosil</p>
                    <p><strong>Age:</strong> 20 years old</p>
                    <p><strong>Birthdate:</strong> August 02, 2005</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10v6M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                    <h3>Current Status</h3>
                </div>
                <div class="card-right">
                    <p><strong>Course:</strong> Bachelor of Science in Computer Engineering</p>
                    <p><strong>Institution:</strong> Sultan Kudarat State University</p>
                </div>
            </div>
            <div class="info-card">
                <div class="card-left">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <h3>Personal Interest</h3>
                </div>
                <div class="card-right">
                    <p><strong>Likes:</strong> Playing badminton and shopping.</p>
                    <p><strong>Dislikes:</strong> Socializing is not always my hobby; I value my quiet time.</p>
                    <p><strong>Greatest Achievement:</strong> Vacationing in my dad's hometown.</p>
                </div>
            </div>
        </div>
    </script>

    <script id="aboutTemplate" type="text/template">
        <div class="about-wrapper" style="overflow-y: auto; max-height: 80vh; padding-right: 1rem;">
            <div class="info-card" style="width: 100%;">
                <div class="card-left" style="margin-bottom: 2rem;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    <h3>My Autobiography</h3>
                </div>
                <div class="card-right" style="line-height: 1.8; font-size: 1.1rem; color: var(--color-text-dark);">
                    <p style="margin-bottom: 1.5rem;">My name is <strong>Greshl Angelene D. Permosil</strong>, and I was born on August 02, 2005, in Isulan, Sultan Kudarat. My father is Gregorio M. Permosil, and my mother is Sharlene Mae Permosil. I have two siblings, Georgiash Glory and Elora Therese. Growing up in a small, close-knit family taught me to value what I have and to be thankful for even the small blessings. We believed in working hard, having faith, and being kind. As a child, I enjoyed simple things—playing outside with friends and helping my parents at home.</p>
                    
                    <p style="margin-bottom: 1.5rem;">I began my education at Kalawag Central School for elementary and continued my high school studies at Notre Dame of Isulan, Inc. (Ultimart Day-Class), passing with flying colors. I went on to pursue my senior high school years at the same institution. During my school years, I discovered both challenges and opportunities. I was not always at the top of the class, but I learned to persevere and give my best in everything I did. I pushed myself to improve in areas I found difficult. Along the way, I built friendships that gave me support and laughter, and I faced struggles that made me stronger and more determined to reach my goals.</p>
                    
                    <p>Today, I see myself as someone who keeps growing and learning every day. My journey is not yet finished. As I currently study at Sultan Kudarat State University, pursuing a BS in Computer Engineering, I know the road will not always be easy. But every experience has helped me understand who I am and who I want to be. I dream of having a successful career, helping my family, and inspiring others with my story. My life is still moving forward, carrying lessons of the past, hope for today, and determination for a brighter future.</p>
                </div>
            </div>
        </div>
    </script>

    <script id="galleryTemplate" type="text/template">
        <div class="activities-slideshow">
            <div class="slide active" style="background-image: url('activity1.png');">
                <div class="slide-overlay"></div>
                <h1>MY JOURNEY</h1>
            </div>
            <div class="slide" style="background-image: url('activity2.png');">
                <div class="slide-overlay"></div>
                <h1>MEMORIES</h1>
            </div>
            <div class="slide" style="background-image: url('activity3.png');">
                <div class="slide-overlay"></div>
                <h1>ACHIEVEMENTS</h1>
            </div>
            <div class="slide" style="background-image: url('activity4.png');">
                <div class="slide-overlay"></div>
                <h1>FAMILY</h1>
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

    <script src="script.js"></script>
</body>
</html>
