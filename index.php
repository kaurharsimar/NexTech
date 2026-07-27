<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexTech | The Tech Hub</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css?v=<?= time() ?>">
</head>
<body>

    <!-- Custom Cursor -->
    <div class="cursor-dot"></div>
    <div class="cursor-outline"></div>

    <!-- 1. Sticky Navigation Bar -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <i class="fas fa-layer-group"></i> NexTech.
            </a>
            
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#events">Events</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#team">Team</a></li>
            </ul>
            
            <div class="nav-actions">
                <a href="javascript:void(0)" onclick="nexOpenModal('clubModal')" class="btn btn-primary btn-glow" id="btnJoinClubNav">Join the Club</a>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- 2. Hero Section (Dribbble V9 Upgrade) -->
    <section class="hero" id="home">
        <!-- Canvas for Network Animation -->
        <canvas id="networkCanvas" class="network-canvas"></canvas>
        
        <div class="container text-center reveal-up dribbble-hero" style="position:relative; z-index:10;">
            
            <div class="dribbble-badge">
                ✨ 48 Hours of Innovation • Spring 2024
            </div>
            
            <h1 class="hero-title dribbble-title">
                Build What's<br>
                <span class="dribbble-text-gradient">Impossible.</span>
            </h1>
            
            <p class="hero-subtitle dribbble-subtitle">
                Join the brightest minds from across the country for an adrenaline-<br>
                fueled weekend of coding, creating, and disrupting.
            </p>
            
            <!-- Dribbble 3-Part Countdown Timer -->
            <div class="dribbble-countdown-group">
                <div class="dribbble-countdown-card card-days">
                    <div class="countdown-digits text-gradient-purple" id="cd-days">02</div>
                    <div class="countdown-label">DAYS</div>
                </div>
                <div class="dribbble-countdown-colon">:</div>
                <div class="dribbble-countdown-card card-hours">
                    <div class="countdown-digits text-gradient-blue" id="cd-hours">14</div>
                    <div class="countdown-label">HOURS</div>
                </div>
                <div class="dribbble-countdown-colon">:</div>
                <div class="dribbble-countdown-card card-mins">
                    <div class="countdown-digits text-gradient-teal" id="cd-mins">45</div>
                    <div class="countdown-label">MINS</div>
                </div>
            </div>

            <div class="dribbble-hero-cta">
                <a href="javascript:void(0)" onclick="nexOpenModal('clubModal')" class="btn btn-dribbble-primary" id="btnRegisterHero">Start Your Journey</a>
                <a href="javascript:void(0)" onclick="nexOpenModal('guideModal')" class="btn btn-dribbble-secondary" id="btnViewRulesHero">View Guide</a>
            </div>
        </div>
    </section>

    <!-- 2.5 Competition Workflow & Challenges -->
    <section class="section pt-0" id="competition-details">
        <div class="container">

            <!-- Challenges Grid -->
            <div class="challenges-section-wrapper mt-40 pt-20 border-top reveal-up">
                <div class="text-center mb-60">
                    <span class="section-label display-block">Themes</span>
                    <h2 class="section-title">Hackathon Challenges</h2>
                    <p class="section-desc" style="max-width:600px; margin: 16px auto 0;">Choose your challenge. Each track is designed to push the limits of what's technically possible.</p>
                </div>

                <div class="challenges-grid-v2">
                    <!-- Card 1: AI Innovation -->
                    <div class="challenge-card-v2 reveal-up">
                        <div class="challenge-deco-blob"></div>
                        <div class="challenge-icon-wrap gradient-purple">
                            <i class="fas fa-robot"></i>
                        </div>
                        <span class="challenge-tag tag-ai">AI / Machine Learning</span>
                        <h4 class="challenge-title">AI Innovation</h4>
                        <p class="challenge-desc">Build intelligent agents, machine learning models, and AI-driven solutions to solve real-world problems.</p>
                        <div class="challenge-explore-btn">
                            <a href="#" class="btn btn-sm btn-ghost">Explore Challenge <i class="fas fa-arrow-right ml-5"></i></a>
                        </div>
                    </div>

                    <!-- Card 2: Sustainability Tech -->
                    <div class="challenge-card-v2 reveal-up delay-1">
                        <div class="challenge-deco-blob blob-green"></div>
                        <div class="challenge-icon-wrap gradient-green">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <span class="challenge-tag tag-sustainability">Sustainability</span>
                        <h4 class="challenge-title">Sustainability Tech</h4>
                        <p class="challenge-desc">Create eco-friendly tools, platforms, and systems to reduce carbon footprint and promote a greener future.</p>
                        <div class="challenge-explore-btn">
                            <a href="#" class="btn btn-sm btn-ghost">Explore Challenge <i class="fas fa-arrow-right ml-5"></i></a>
                        </div>
                    </div>

                    <!-- Card 3: Smart Campus -->
                    <div class="challenge-card-v2 reveal-up delay-2">
                        <div class="challenge-deco-blob blob-blue"></div>
                        <div class="challenge-icon-wrap gradient-blue">
                            <i class="fas fa-university"></i>
                        </div>
                        <span class="challenge-tag tag-campus">Campus Innovation</span>
                        <h4 class="challenge-title">Smart Campus</h4>
                        <p class="challenge-desc">Optimize digital infrastructure for student life — from smart scheduling to campus navigation systems.</p>
                        <div class="challenge-explore-btn">
                            <a href="#" class="btn btn-sm btn-ghost">Explore Challenge <i class="fas fa-arrow-right ml-5"></i></a>
                        </div>
                    </div>

                    <!-- Card 4: Open Innovation -->
                    <div class="challenge-card-v2 reveal-up delay-3">
                        <div class="challenge-deco-blob blob-orange"></div>
                        <div class="challenge-icon-wrap gradient-orange">
                            <i class="fas fa-globe"></i>
                        </div>
                        <span class="challenge-tag tag-open">Open Challenge</span>
                        <h4 class="challenge-title">Open Innovation</h4>
                        <p class="challenge-desc">No constraints. Solve any real-world problem using your unique technology stack and creative vision.</p>
                        <div class="challenge-explore-btn">
                            <a href="#" class="btn btn-sm btn-ghost">Explore Challenge <i class="fas fa-arrow-right ml-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Trust / Community Section -->
    <section class="trust-section section border-top" id="stats">
        <div class="container container-sm">
            <p class="section-label text-center">Under the hood</p>
            <h2 class="section-title text-center mb-50">Pure Innovation.</h2>
            
            <!-- Stats Grid with connecting line -->
            <div class="stats-grid-v2">
                <!-- Connecting progress line -->
                <div class="stats-connector-line"></div>

                <div class="stat-card-v2 reveal-up">
                    <div class="stat-icon-wrap" style="background: linear-gradient(135deg, #7c3aed, #3b82f6);">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="stat-number" data-target="1500">0</h3>
                    <p class="stat-label">Active Members</p>
                </div>

                <div class="stat-card-v2 reveal-up delay-1">
                    <div class="stat-icon-wrap" style="background: linear-gradient(135deg, #3b82f6, #06b6d4);">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="stat-number" data-target="120">0</h3>
                    <p class="stat-label">Projects Built</p>
                </div>

                <div class="stat-card-v2 reveal-up delay-2">
                    <div class="stat-icon-wrap" style="background: linear-gradient(135deg, #10b981, #06b6d4);">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="stat-number" data-target="45">0</h3>
                    <p class="stat-label">Workshops Hosted</p>
                </div>

                <div class="stat-card-v2 reveal-up delay-3">
                    <div class="stat-icon-wrap" style="background: linear-gradient(135deg, #f59e0b, #ef4444);">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3 class="stat-number" data-target="15">0</h3>
                    <p class="stat-label">Hackathons Organized</p>
                </div>
            </div>
            
            <!-- Sponsors / Supported By -->
            <div class="trusted-by mt-60 reveal-up">
                <p class="trusted-label">Supported By</p>
                <div class="sponsor-logos">
                    <div class="sponsor-item">
                        <i class="fas fa-building"></i>
                        <span>ACME Corp</span>
                    </div>
                    <div class="sponsor-item">
                        <i class="fas fa-microchip"></i>
                        <span>TechVertex</span>
                    </div>
                    <div class="sponsor-item">
                        <i class="fas fa-globe-asia"></i>
                        <span>GlobalHub</span>
                    </div>
                    <div class="sponsor-item">
                        <i class="fas fa-bolt"></i>
                        <span>Stripe Dev</span>
                    </div>
                    <div class="sponsor-item">
                        <i class="fas fa-layer-group"></i>
                        <span>LayerAI</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Activities / Features Section -->
    <section class="features-v2 section border-top relative" id="about">
        <!-- Subtle dotted background -->
        <div class="features-bg-pattern"></div>
        
        <div class="container relative z-10">
            <div class="section-header text-center reveal-up">
                <span class="section-label display-block">What you'll experience</span>
                <h2 class="section-title">Learn. Build. Innovate.</h2>
                <p class="section-desc" style="max-width:700px; margin: 16px auto 0;">NexTech is a community where students learn modern technologies, collaborate on real projects, and participate in hackathons that turn ideas into real solutions.</p>
            </div>

            <div class="features-grid-v2 mt-60">
                <!-- Feature 1 -->
                <div class="feature-card-v2 reveal-up">
                    <div class="feature-icon-v2 gradient-purple">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Workshops</h3>
                    <p>Learn modern technologies through hands-on workshops led by mentors and experienced developers.</p>
                </div>
                <!-- Feature 2 -->
                <div class="feature-card-v2 reveal-up delay-1">
                    <div class="feature-icon-v2 gradient-blue">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <h3>Hackathons</h3>
                    <p>Compete in exciting 24–48 hour coding events and collaborate with teammates to build innovative solutions.</p>
                </div>
                <!-- Feature 3 -->
                <div class="feature-card-v2 reveal-up delay-2">
                    <div class="feature-icon-v2 gradient-green">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <h3>Real-world Projects</h3>
                    <p>Work on meaningful projects that solve real problems and strengthen your technical portfolio.</p>
                </div>
                <!-- Feature 4 -->
                <div class="feature-card-v2 reveal-up delay-3">
                    <div class="feature-icon-v2 gradient-orange">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>AI & Development</h3>
                    <p>Explore emerging technologies like artificial intelligence, machine learning, and modern software development tools.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Featured Club Events Section -->
    <section class="featured-events section border-top" id="projects">
        <div class="container">
            <div class="section-header reveal-up text-center">
                <p class="section-label">Club Highlights</p>
                <h2 class="section-title">Featured Events</h2>
                <p class="section-desc">Explore some of the exciting events organized by the NexTech club where students collaborate, innovate, and build real-world solutions.</p>
            </div>

            <div class="events-grid">
                <!-- Event 1: Hackathon -->
                <div class="event-card card-accent-blue reveal-up">
                    <div class="event-card-img">
                        <div class="abstract-bg"></div>
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="event-card-body">
                        <h3>NexTech Innovation Hackathon</h3>
                        <p class="event-desc">A 24-hour coding competition where teams build innovative solutions to real-world challenges using AI, web technologies, and IoT.</p>
                        
                        <div class="event-meta">
                            <div class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>Oct 15–16</span>
                            </div>
                            <div class="meta-item">
                                <i class="far fa-clock"></i>
                                <span>24 Hours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-users"></i>
                                <span>2–4 Students</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-award"></i>
                                <span>₹30,000</span>
                            </div>
                        </div>

                        <div class="event-footer">
                            <a href="javascript:void(0)" onclick="nexOpenModal('eventModal')" class="btn btn-primary btn-glow">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Event 2: AI Workshop -->
                <div class="event-card card-accent-purple reveal-up delay-1">
                    <div class="event-card-img">
                        <div class="abstract-bg"></div>
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="event-card-body">
                        <h3>AI & Machine Learning Workshop</h3>
                        <p class="event-desc">A hands-on workshop where students learn how to build AI models and deploy machine learning applications.</p>
                        
                        <div class="event-meta">
                            <div class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>Nov 5</span>
                            </div>
                            <div class="meta-item">
                                <i class="far fa-clock"></i>
                                <span>3 Hours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-graduation-cap"></i>
                                <span>Beginner Friendly</span>
                            </div>
                        </div>

                        <div class="event-footer">
                            <a href="javascript:void(0)" onclick="nexOpenModal('clubModal')" class="btn btn-primary btn-glow">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Events Section -->
    <section class="events section border-top relative overflow-hidden" id="events">
        <!-- Subtle background pattern -->
        <div class="events-bg-pattern"></div>
        
        <div class="container container-sm relative z-10">
            <div class="section-header reveal-up text-center">
                <span class="section-label">Stay Updated</span>
                <h2 class="section-title">Live Updates & Events.</h2>
                <p class="section-desc">Real-time notifications for upcoming workshops, speaker sessions, and hackathons.</p>
            </div>

            <div class="timeline-v2">
                <!-- Vertical Progress Line -->
                <div class="timeline-line">
                    <div class="timeline-progress"></div>
                </div>

                <!-- Event 1 -->
                <div class="timeline-item-v2 reveal-right">
                    <div class="timeline-node">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="timeline-card glass-card">
                        <div class="event-type-badge type-workshop">Workshop</div>
                        <h3>Fullstack Architecture 101</h3>
                        <p class="event-tagline">Learn how to connect React frontends to Node backends securely.</p>
                        
                        <div class="event-meta-info">
                            <div class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>Oct 15</span>
                            </div>
                            <div class="meta-item">
                                <i class="far fa-clock"></i>
                                <span>3 Hours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Innovation Lab</span>
                            </div>
                        </div>

                        <a href="javascript:void(0)" onclick="nexOpenModal('clubModal')" class="event-action-btn">
                            <span>Register Now</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Event 2 -->
                <div class="timeline-item-v2 reveal-right delay-1">
                    <div class="timeline-node">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="timeline-card glass-card">
                        <div class="event-type-badge type-hackathon">Hackathon</div>
                        <h3>Fall Innovate 2024</h3>
                        <p class="event-tagline">48 hours of non-stop coding, collaborating with teammates, and winning prizes.</p>
                        
                        <div class="event-meta-info">
                            <div class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>Nov 02</span>
                            </div>
                            <div class="meta-item">
                                <i class="far fa-clock"></i>
                                <span>48 Hours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Campus Hub</span>
                            </div>
                        </div>

                        <a href="javascript:void(0)" onclick="nexOpenModal('eventModal')" class="event-action-btn">
                            <span>Join the Challenge</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="timeline-item-v2 reveal-right delay-2">
                    <div class="timeline-node">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <div class="timeline-card glass-card">
                        <div class="event-type-badge type-seminar">Tech Talk</div>
                        <h3>Future of Open Source</h3>
                        <p class="event-tagline">A deep dive into contributing to high-impact open source projects and communities.</p>
                        
                        <div class="event-meta-info">
                            <div class="meta-item">
                                <i class="far fa-calendar-alt"></i>
                                <span>Nov 12</span>
                            </div>
                            <div class="meta-item">
                                <i class="far fa-clock"></i>
                                <span>1.5 Hours</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-broadcast-tower"></i>
                                <span>Online / Discord</span>
                            </div>
                        </div>

                        <a href="javascript:void(0)" onclick="nexOpenModal('clubModal')" class="event-action-btn">
                            <span>Reserve Seat</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Team Section -->
    <section class="team section border-top" id="team">
        <!-- Floating background elements for depth -->
        <div class="team-bg-elements">
            <div class="bg-dot dot-1"></div>
            <div class="bg-dot dot-2"></div>
            <div class="bg-dot dot-3"></div>
        </div>

        <div class="container">
            <div class="section-header reveal-up text-center">
                <p class="section-label">Leadership</p>
                <h2 class="section-title">Meet the NexTech Team</h2>
                <p class="section-desc">Meet the core infrastructure maintainers—our club leadership.</p>
            </div>

            <div class="team-grid">
                <!-- Alex Johnson -->
                <div class="team-card reveal-up">
                    <div class="card-inner">
                        <div class="image-wrapper">
                            <div class="gradient-ring ring-blue"></div>
                            <img src="1 (2).jpg" alt="Alex Johnson" class="team-photo">
                        </div>
                        <div class="card-content">
                            <h3>Alex Johnson</h3>
                            <span class="role">Club President</span>
                            <p class="bio">Leads NexTech initiatives and organizes innovation events.</p>
                            <div class="social-links-team">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sarah Chen -->
                <div class="team-card reveal-up delay-1">
                    <div class="card-inner">
                        <div class="image-wrapper">
                            <div class="gradient-ring ring-purple"></div>
                            <img src="2 (2).jpg" alt="Sarah Chen" class="team-photo">
                        </div>
                        <div class="card-content">
                            <h3>Sarah Chen</h3>
                            <span class="role">Vice President – Engineering</span>
                            <p class="bio">Manages technical workshops and hackathon challenges.</p>
                            <div class="social-links-team">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mike Doe -->
                <div class="team-card reveal-up delay-2">
                    <div class="card-inner">
                        <div class="image-wrapper">
                            <div class="gradient-ring ring-blue"></div>
                            <img src="3 (2).jpg" alt="Mike Doe" class="team-photo">
                        </div>
                        <div class="card-content">
                            <h3>Mike Doe</h3>
                            <span class="role">Design Lead</span>
                            <p class="bio">Oversees UI/UX design and creative direction for club projects.</p>
                            <div class="social-links-team">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-github"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6.5 Leaderboard Section -->
    <section class="leaderboard section bg-white" id="leaderboard">
        <div class="container relative z-10">
            <div class="section-header reveal-up text-center">
                <span class="section-label">Hackathon Leaderboard</span>
                <h2 class="section-title">Top Innovators</h2>
                <div class="leaderboard-indicator">
                    <span class="pulse-dot"></span>
                    <span>Live Leaderboard • Updated recently</span>
                </div>
            </div>
            
            <div class="podium-wrapper">
                <!-- Rank 2 -->
                <div class="podium-item rank-2 reveal-up delay-1">
                    <div class="podium-card glass-card">
                        <div class="medal-icon silver">
                            <i class="fas fa-medal"></i>
                            <span class="rank-number">2</span>
                        </div>
                        <div class="podium-body">
                            <h3>Binary Bosses</h3>
                            <p class="project-name">EcoTrack App</p>
                            <div class="team-meta">
                                <div class="avatar-group">
                                    <img src="https://i.pravatar.cc/150?u=20" alt="m1">
                                    <img src="https://i.pravatar.cc/150?u=21" alt="m2">
                                    <img src="https://i.pravatar.cc/150?u=22" alt="m3">
                                </div>
                                <div class="score-display">
                                    <span class="points-val count-up" data-target="920">0</span>
                                    <span class="pts-unit">PTS</span>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-bar-fill" data-width="92"></div>
                            </div>
                            <div class="project-details">
                                <p>Building a sustainable energy tracking system for smart campuses.</p>
                                <a href="javascript:void(0)" class="btn-text">View Project <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rank 1 (Center & Larger) -->
                <div class="podium-item rank-1 reveal-up">
                    <div class="podium-card glass-card">
                        <div class="medal-icon gold">
                            <i class="fas fa-crown"></i>
                            <span class="rank-number">1</span>
                        </div>
                        <div class="podium-body">
                            <h3>Code Ninjas</h3>
                            <p class="project-name">AI Smart Grid</p>
                            <div class="team-meta">
                                <div class="avatar-group">
                                    <img src="1 (2).jpg" alt="m1">
                                    <img src="2 (2).jpg" alt="m2">
                                    <img src="3 (2).jpg" alt="m3">
                                </div>
                                <div class="score-display">
                                    <span class="points-val count-up" data-target="985">0</span>
                                    <span class="pts-unit">PTS</span>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-bar-fill" data-width="100"></div>
                            </div>
                            <div class="project-details">
                                <p>An intelligent energy distribution system powered by neural networks.</p>
                                <a href="javascript:void(0)" class="btn-text">View Project <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rank 3 -->
                <div class="podium-item rank-3 reveal-up delay-2">
                    <div class="podium-card glass-card">
                        <div class="medal-icon bronze">
                            <i class="fas fa-award"></i>
                            <span class="rank-number">3</span>
                        </div>
                        <div class="podium-body">
                            <h3>Quantum Leaps</h3>
                            <p class="project-name">EduVR Platform</p>
                            <div class="team-meta">
                                <div class="avatar-group">
                                    <img src="https://i.pravatar.cc/150?u=30" alt="m1">
                                    <img src="https://i.pravatar.cc/150?u=31" alt="m2">
                                    <img src="https://i.pravatar.cc/150?u=32" alt="m3">
                                </div>
                                <div class="score-display">
                                    <span class="points-val count-up" data-target="890">0</span>
                                    <span class="pts-unit">PTS</span>
                                </div>
                            </div>
                            <div class="progress-wrap">
                                <div class="progress-bar-fill" data-width="89"></div>
                            </div>
                            <div class="project-details">
                                <p>Revolutionizing education through immersive virtual reality experiences.</p>
                                <a href="javascript:void(0)" class="btn-text">View Project <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Wall of Fame Section -->
    <section class="gallery section border-top bg-light" id="gallery">
        <div class="container">
            <div class="section-header reveal-up text-center">
                <p class="section-label">Our Legacy</p>
                <h2 class="section-title text-gradient">Wall of Fame</h2>
                <p class="section-desc">Celebrating the brilliant minds and innovative solutions from our previous NexTech hackathons and events.</p>
            </div>
            
            <div class="gallery-grid reveal-up">
                <!-- Winner 1 -->
                <div class="gallery-item">
                    <span class="winner-badge badge-1st">🥇 1st Place</span>
                    <div class="gallery-img">
                        <div class="abstract-bg bg-primary"></div>
                        <i class="fas fa-brain gallery-icon"></i>
                    </div>
                    <div class="gallery-overlay">
                        <span class="event-name">Spring Hackathon 2025</span>
                        <h3>AI Study Planner</h3>
                        <p class="team-name">by CodeCatalysts</p>
                        <p>An AI-powered app that creates personalized study schedules for students based on their goals.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">AI</span>
                        </div>
                    </div>
                </div>

                <!-- Winner 2 -->
                <div class="gallery-item">
                    <span class="winner-badge badge-2nd">🥈 2nd Place</span>
                    <div class="gallery-img">
                        <div class="abstract-bg bg-secondary"></div>
                        <i class="fas fa-university gallery-icon"></i>
                    </div>
                    <div class="gallery-overlay">
                        <span class="event-name">Web Development Challenge 2024</span>
                        <h3>Smart Campus Portal</h3>
                        <p class="team-name">by PixelBuilders</p>
                        <p>A centralized platform for students to manage schedules, events, and campus services effortlessly.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">Firebase</span>
                        </div>
                    </div>
                </div>

                <!-- Winner 3 -->
                <div class="gallery-item">
                    <span class="winner-badge badge-3rd">🥉 3rd Place</span>
                    <div class="gallery-img">
                        <div class="abstract-bg bg-primary" style="background: linear-gradient(135deg, #10b981, transparent)"></div>
                        <i class="fas fa-file-invoice gallery-icon"></i>
                    </div>
                    <div class="gallery-overlay">
                        <span class="event-name">AI Innovation Sprint</span>
                        <h3>AI Resume Analyzer</h3>
                        <p class="team-name">by Neural Ninjas</p>
                        <p>A machine learning tool that analyzes resumes and suggests actionable improvements for job seekers.</p>
                        <div class="tech-stack">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">AI</span>
                            <span class="tech-tag">Next.js</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 8. Final Call-to-Action -->
    <section class="final-cta section border-top text-center" id="join">
        <!-- Floating abstract shapes for background -->
        <div class="cta-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>

        <div class="container reveal-up">
            <div class="cta-content">
                <h2 class="section-title massive">Ready to Build Something Amazing?</h2>
                <p class="section-desc mx-auto" style="max-width: 600px;">
                    Join NexTech and collaborate with developers, designers, and innovators. 
                    Participate in hackathons, workshops, and real-world tech projects.
                </p>
                
                <div class="cta-actions mt-40">
                    <div class="btn-group-center">
                        <a href="javascript:void(0)" class="btn btn-primary btn-glow btn-lg" onclick="nexOpenModal('clubModal')">Join the NexTech Club</a>
                        <a href="javascript:void(0)" class="btn btn-outline btn-lg" onclick="nexOpenModal('eventModal')">Register for Hackathon</a>
                    </div>
                </div>

                <div class="cta-badges mt-60">
                    <div class="badge-item">
                        <span class="badge-icon">🚀</span>
                        <span class="badge-text">Hackathons</span>
                    </div>
                    <div class="badge-item">
                        <span class="badge-icon">💡</span>
                        <span class="badge-text">Workshops</span>
                    </div>
                    <div class="badge-item">
                        <span class="badge-icon">👨‍💻</span>
                        <span class="badge-text">Real Projects</span>
                    </div>
                    <div class="badge-item">
                        <span class="badge-icon">🏆</span>
                        <span class="badge-text">Competitions</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Footer -->
    <footer class="footer border-top">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="logo"><i class="fas fa-layer-group"></i> NexTech.</a>
                    <p class="text-secondary mt-3">The Operating System for Creative Studios and Student Developers.</p>
                </div>
                
                <div class="footer-links">
                    <h4>Platform</h4>
                    <ul>
                        <li><a href="#about">Features</a></li>
                        <li><a href="#stats">Analytics</a></li>
                        <li><a href="#projects">Use Cases</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">API Access</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
                
                <div class="footer-links">
                    <h4>Connect</h4>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                    <a href="mailto:hello@nextech.io" class="text-secondary display-block mt-3">hello@nextech.io</a>
                </div>
            </div>
            
            <div class="footer-bottom border-top mt-40 pt-20 flex-between">
                <p class="text-secondary">&copy; 2024 NexTech OS Inc. All rights reserved.</p>
                <div class="legal-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Custom Script -->
    <!-- Script Files (Cache Busted) -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script src="script.js?v=<?= time() ?>"></script>

    <!-- Rules Modal -->
    <div class="modal-overlay hidden" id="rulesModal">
        <div class="modal-content">
            <button class="modal-close" id="closeModal" onclick="document.getElementById('rulesModal').classList.add('hidden'); return false;"><i class="fas fa-times"></i></button>
            <h2 class="section-title" style="font-size: 2rem; margin-bottom: 20px;">Rules & Regulations</h2>
            <ul class="rules-list">
                <li><i class="fas fa-clock text-gradient"></i> Complete the challenge within the given timeframe.</li>
                <li><i class="fas fa-users text-gradient"></i> Teams of maximum 3 members.</li>
                <li><i class="fas fa-laptop-code text-gradient"></i> Use any technology stack.</li>
                <li><i class="fas fa-upload text-gradient"></i> Submit the project before time ends.</li>
                <li><i class="fas fa-gavel text-gradient"></i> Judges decision is final.</li>
            </ul>
        </div>
    </div>

    <!-- Club Membership Modal -->
    <div class="modal-overlay hidden" id="clubModal">
        <div class="modal-content modal-form-container">
            <button class="modal-close" id="closeClubModal" onclick="document.getElementById('clubModal').classList.add('hidden'); document.body.style.overflow=''; return false;"><i class="fas fa-times"></i></button>
            <div class="form-header text-center hide-when-success">
                <i class="fas fa-layer-group icon-gradient" style="font-size: 2.5rem; margin-bottom:15px;"></i>
                <h3 class="mb-10 text-xl font-bold">Join NexTech Club</h3>
                <p class="text-secondary">Unlock your potential, join a community of innovators.</p>
            </div>

            <form id="clubForm" class="modern-form hide-when-success" method="POST">
                <div class="input-grid">
                    <div class="input-group full-width">
                        <label for="clubName">Full Name</label>
                        <input type="text" id="clubName" name="name" required placeholder="Jane Doe">
                    </div>
                    <div class="input-group full-width">
                        <label for="clubEmail">Email Address</label>
                        <input type="email" id="clubEmail" name="email" required placeholder="jane@university.edu">
                    </div>
                    <div class="input-group">
                        <label for="clubPhone">Phone Number</label>
                        <input type="tel" id="clubPhone" name="phone" required placeholder="+1 (555) 000-0000">
                    </div>
                    
                    <div class="input-group">
                        <label for="clubDepartment">Department</label>
                        <input type="text" id="clubDepartment" name="department" required placeholder="e.g. Computer Science">
                    </div>

                    <div class="input-group">
                        <label for="clubYear">Year of Study</label>
                        <div class="select-wrapper">
                            <select id="clubYear" name="year" required>
                                <option value="" disabled selected>Select Year</option>
                                <option value="Freshman">Freshman</option>
                                <option value="Sophomore">Sophomore</option>
                                <option value="Junior">Junior</option>
                                <option value="Senior">Senior</option>
                                <option value="Graduate">Graduate</option>
                            </select>
                            <i class="fas fa-chevron-down select-icon"></i>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="clubInterest">Areas of Interest</label>
                        <div class="select-wrapper">
                            <select id="clubInterest" name="interest" required>
                                <option value="" disabled selected>Select Interest</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Artificial Intelligence">Artificial Intelligence</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Robotics / IoT">Robotics / IoT</option>
                                <option value="Cybersecurity">Cybersecurity</option>
                            </select>
                            <i class="fas fa-chevron-down select-icon"></i>
                        </div>
                    </div>

                    <div class="input-group full-width">
                        <label for="clubSkills">Tech Stack / Skills</label>
                        <input type="text" id="clubSkills" name="skills" required placeholder="e.g. React, UX/UI, Python">
                    </div>

                    <div class="input-group full-width mb-20">
                        <label for="clubReason">Why do you want to join NexTech?</label>
                        <textarea id="clubReason" name="reason" rows="3" required placeholder="Tell us briefly about your goals..."></textarea>
                    </div>
                </div>

                <div id="clubFormMessage" class="alert hidden"></div>

                <button type="submit" class="btn btn-primary btn-glow btn-submit mt-20" id="clubSubmitBtn" style="width:100%;">
                    <span>Join the NexTech Club <i class="fas fa-arrow-right"></i></span>
                    <div class="loader-spinner hidden"></div>
                </button>
            </form>

            <!-- Club Success State -->
            <div id="clubSuccessState" class="hidden text-center" style="padding: 40px 20px;">
                <div class="success-icon mb-20">
                    <i class="fas fa-check-circle" style="font-size: 4rem; color: #10b981;"></i>
                </div>
                <h3 class="mb-10 text-xl font-bold">Welcome to the Club!</h3>
                <p class="text-secondary mb-30">Your membership application has been submitted. Watch your inbox!</p>
                <button class="btn btn-primary btn-glow" id="btnDoneClub">Done</button>
            </div>
        </div>
    </div>

    <!-- Hackathon Event Registration Modal -->
    <div class="modal-overlay hidden" id="eventModal">
        <div class="modal-content modal-form-container">
            <button class="modal-close" id="closeEventModal" onclick="document.getElementById('eventModal').classList.add('hidden'); document.body.style.overflow=''; return false;"><i class="fas fa-times"></i></button>
            
            <div class="form-header text-center hide-when-success">
                <i class="fas fa-code icon-gradient" style="font-size: 2.5rem; margin-bottom:15px;"></i>
                <h3 class="mb-10 text-xl font-bold">Register for Hackathon</h3>
                <p class="text-secondary">Enter the ultimate 48-hour coding competition.</p>
            </div>

            <!-- Mini Event Info Card inside Modal -->
            <div class="event-info-card glass-card mb-30 hide-when-success" style="padding: 15px;">
                <div class="event-info-grid" style="gap:10px;">
                    <div class="info-item">
                        <i class="fas fa-calendar-alt icon-gradient" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom:0;">Oct 15–16</h4></div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock icon-gradient" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom:0;">48 Hours</h4></div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-trophy icon-gradient" style="font-size: 1.2rem;"></i>
                        <div><h4 style="font-size: 0.9rem; margin-bottom:0;">₹30,000</h4></div>
                    </div>
                </div>
            </div>

            <form id="eventForm" class="modern-form hide-when-success" method="POST">
                <div class="input-grid">
                    <div class="input-group full-width">
                        <label for="eventName">Full Name</label>
                        <input type="text" id="eventName" name="name" required placeholder="Jane Doe">
                    </div>
                    <div class="input-group full-width">
                        <label for="eventEmail">Email Address</label>
                        <input type="email" id="eventEmail" name="email" required placeholder="jane@university.edu">
                    </div>
                    <div class="input-group">
                        <label for="eventPhone">Phone Number</label>
                        <input type="tel" id="eventPhone" name="phone" required placeholder="+1 (555) 000-0000">
                    </div>
                    
                    <div class="input-group">
                        <label for="eventDepartment">College / Department</label>
                        <input type="text" id="eventDepartment" name="department" required placeholder="e.g. Computer Science">
                    </div>

                    <div class="input-group">
                        <label for="eventYear">Year of Study</label>
                        <div class="select-wrapper">
                            <select id="eventYear" name="year" required>
                                <option value="" disabled selected>Select Year</option>
                                <option value="Freshman">Freshman</option>
                                <option value="Sophomore">Sophomore</option>
                                <option value="Junior">Junior</option>
                                <option value="Senior">Senior</option>
                                <option value="Graduate">Graduate</option>
                            </select>
                            <i class="fas fa-chevron-down select-icon"></i>
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="eventSkills">Preferred Tech Stack</label>
                        <input type="text" id="eventSkills" name="skills" required placeholder="e.g. React, UX/UI, Python">
                    </div>

                    <div class="input-group">
                        <label for="eventTeamName">Team Name <span class="text-secondary" style="font-weight:normal;font-size:0.8rem;">(Optional)</span></label>
                        <input type="text" id="eventTeamName" name="team_name" placeholder="e.g. Code Ninjas">
                    </div>
                    
                    <div class="input-group">
                        <label for="eventTeamMembers">Team Members <span class="text-secondary" style="font-weight:normal;font-size:0.8rem;">(Optional)</span></label>
                        <input type="text" id="eventTeamMembers" name="team_members" placeholder="Comma separated names">
                    </div>

                    <div class="input-group full-width mb-20">
                        <label for="eventIdea">Project Idea <span class="text-secondary" style="font-weight:normal;font-size:0.8rem;">(Optional)</span></label>
                        <textarea id="eventIdea" name="idea" rows="2" placeholder="Briefly describe what you plan to build..."></textarea>
                    </div>
                </div>

                <div id="eventFormMessage" class="alert hidden"></div>

                <button type="submit" class="btn btn-dribbble-primary btn-submit mt-20" id="eventSubmitBtn" style="width: 100%; border-radius:8px;">
                    <span>Register for Hackathon <i class="fas fa-arrow-right"></i></span>
                    <div class="loader-spinner hidden"></div>
                </button>
            </form>

            <!-- Event Success State -->
            <div id="eventSuccessState" class="hidden text-center" style="padding: 40px 20px;">
                <div class="success-icon mb-20">
                    <i class="fas fa-check-circle" style="font-size: 4rem; color: #10b981;"></i>
                </div>
                <h3 class="mb-10 text-xl font-bold">Registration Successful!</h3>
                <p class="text-secondary mb-30">You've registered for the Hackathon! Updates will be sent to your email.</p>
                <button class="btn btn-primary btn-glow" id="btnDoneEvent">Done</button>
            </div>

        </div>
    </div>
    <!-- Participation Guide Modal -->
    <div class="modal-overlay hidden" id="guideModal" style="backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px);">
        <div class="modal-content modal-guide-container">
            <button class="modal-close" id="closeGuideModal" onclick="nexCloseModal('guideModal'); return false;"><i class="fas fa-times"></i></button>
            
            <div class="modal-guide-header text-center">
                <i class="fas fa-book-open icon-gradient mb-15" style="font-size: 2.5rem;"></i>
                <h3 class="mb-20 text-2xl font-bold">Participation Guide</h3>
                <div class="guide-tabs">
                    <button class="guide-tab-btn active" data-tab="event" onclick="switchGuideTab('event')">Event Rules</button>
                    <button class="guide-tab-btn" data-tab="club" onclick="switchGuideTab('club')">Club Membership</button>
                </div>
            </div>

            <div class="guide-scroll-area">
                <!-- Event Rules Tab -->
                <div id="eventGuideTab" class="guide-tab-content active">
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-id-badge"></i></div>
                        <div class="rule-info">
                            <h4>Eligibility</h4>
                            <p>Open to all tech enthusiasts, designers, and students across the country.</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-users"></i></div>
                        <div class="rule-info">
                            <h4>Team Size</h4>
                            <p>Teams must consist of 2–4 members. Cross-disciplinary teams are encouraged.</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-terminal"></i></div>
                        <div class="rule-info">
                            <h4>Hackathon Rules</h4>
                            <p>48 hours of pure coding. Projects must be built from scratch during the event timeframe.</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-file-export"></i></div>
                        <div class="rule-info">
                            <h4>Submission Guidelines</h4>
                            <p>Final project submission must include source code link and a 2-minute demonstration video.</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-balance-scale"></i></div>
                        <div class="rule-info">
                            <h4>Judging Criteria</h4>
                            <p>Evaluated on Innovation (40%), Execution (30%), Design (20%), and Presentation (10%).</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-user-shield"></i></div>
                        <div class="rule-info">
                            <h4>Code of Conduct</h4>
                            <p>NexTech maintains a harassment-free environment for everyone regardless of level of experience.</p>
                        </div>
                    </div>
                </div>

                <!-- Club Rules Tab -->
                <div id="clubGuideTab" class="guide-tab-content">
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-user-graduate"></i></div>
                        <div class="rule-info">
                            <h4>Eligibility for Joining</h4>
                            <p>Applications are open to all university students with a drive to learn and contribute.</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-clipboard-list"></i></div>
                        <div class="rule-info">
                            <h4>Member Responsibilities</h4>
                            <p>Active participation in at least 2 workshops per semester and contributing to one club project.</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-rocket"></i></div>
                        <div class="rule-info">
                            <h4>Benefits of Joining</h4>
                            <p>Access to premium resources, mentorship from industry experts, and internship opportunities.</p>
                        </div>
                    </div>
                    <div class="rule-card">
                        <div class="rule-icon"><i class="fas fa-hands-helping"></i></div>
                        <div class="rule-info">
                            <h4>Community Guidelines</h4>
                            <p>Respectful collaboration, knowledge sharing, and fostering a supportive tech environment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer pt-20 border-top text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-glow" style="width: 100%;">
                    <i class="fas fa-download mr-10"></i> Download Rulebook (PDF)
                </a>
            </div>
        </div>
    <!-- Celebration Success Modal -->
    <div class="modal-overlay hidden" id="successModal" style="backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); z-index: 100001;">
        <div class="modal-content modal-success-container text-center">
            <button class="modal-close" id="closeSuccessModal" onclick="nexCloseModal('successModal'); return false;"><i class="fas fa-times"></i></button>
            
            <div class="success-animation-icon mb-30">
                <div class="success-glow"></div>
                <i class="fas fa-check-circle icon-gradient" style="font-size: 5rem;"></i>
            </div>
            
            <h2 class="text-3xl font-bold mb-15">Registration Successful!</h2>
            <p class="text-secondary text-lg mb-40">You're officially registered! We can't wait to see you at the event.</p>
            
            <div class="modal-footer pt-0 border-0">
                <button class="btn btn-primary btn-glow" style="width: 100%; padding: 16px;" onclick="nexCloseModal('successModal')">
                    Back to Website
                </button>
            </div>
        </div>
    </div>
</body>
</html>
