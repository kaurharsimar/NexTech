/* 
   NexTech SaaS Landing Page Script (Light Mode Version)
   Handles interactions, scroll animations, counters, cursor follow, and AJAX form submissions 
*/

document.addEventListener('DOMContentLoaded', () => {

    // 0. Custom Cursor Follower Update
    const cursorDot = document.querySelector('.cursor-dot');
    const cursorOutline = document.querySelector('.cursor-outline');

    if (cursorDot && cursorOutline && !window.matchMedia('(hover: none)').matches) {
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            // Dot follows instantly
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Outline animates slightly slower
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 500, fill: "forwards" });
        });

        const interactiveElements = document.querySelectorAll('a, button, input, select, .feature-card, .team-card, .showcase-item');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursorOutline.classList.add('hovering');
            });
            el.addEventListener('mouseleave', () => {
                cursorOutline.classList.remove('hovering');
            });
        });

        // V17 Global Trail Particles
        let lastParticleTime = 0;
        let isHoveringInteractive = false;

        window.addEventListener('mousemove', (e) => {
            const now = Date.now();
            if (now - lastParticleTime > (isHoveringInteractive ? 20 : 40)) { // Increase density on hover
                createCursorTrailParticle(e.clientX + window.scrollX, e.clientY + window.scrollY);
                lastParticleTime = now;
            }
        });

        function createCursorTrailParticle(x, y) {
            const particle = document.createElement('div');
            particle.className = 'cursor-trail-particle';
            
            // NexTech Palette: Purple, Blue, Cyan
            const colors = [
                'rgba(124, 58, 237, 0.4)', // Purple
                'rgba(59, 130, 246, 0.4)',  // Blue
                'rgba(6, 182, 212, 0.4)'   // Cyan
            ];
            
            let color = colors[Math.floor(Math.random() * colors.length)];
            
            if (isHoveringInteractive) {
                // Brighter/More opaque on hover
                color = color.replace('0.4)', '0.8)');
                particle.style.filter = 'blur(2px) brightness(1.5)';
            }
            
            particle.style.background = color;
            particle.style.left = `${x}px`;
            particle.style.top = `${y}px`;
            
            // Random small size
            const size = Math.random() * 6 + 4;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            
            document.body.appendChild(particle);
            
            // Subtle trail motion
            const tx = (Math.random() - 0.5) * 30;
            const ty = (Math.random() - 0.5) * 30;
            
            setTimeout(() => {
                particle.style.transform = `translate(${tx}px, ${ty}px) scale(0)`;
                particle.style.opacity = '0';
            }, 10);
            
            setTimeout(() => {
                particle.remove();
            }, 800);
        }

        // Global hover detection for particle density/brightness
        document.addEventListener('mouseover', (e) => {
            if (e.target.closest('a, button, .feature-card, .team-card, .badge-item, .gallery-item')) {
                isHoveringInteractive = true;
            }
        });

        document.addEventListener('mouseout', (e) => {
            if (e.target.closest('a, button, .feature-card, .team-card, .badge-item, .gallery-item')) {
                isHoveringInteractive = false;
            }
        });
    }

    // 1. Sticky Navbar Effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 2. Scroll Reveal Animations using Intersection Observer
    const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');
    
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!prefersReducedMotion && 'IntersectionObserver' in window) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target); // Run once
                }
            });
        }, {
            root: null,
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px"
        });

        revealElements.forEach(el => revealObserver.observe(el));
    } else {
        revealElements.forEach(el => el.classList.add('is-revealed'));
    }

    // 3. Animated Number Counters
    const counters = document.querySelectorAll('.stat-number');
    let hasAnimatedCounters = false;

    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const duration = 2000;
            const increment = target / (duration / 16); 
            
            let current = 0;
            
            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.innerText = Math.ceil(current) + (target > 1000 ? '+' : '');
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.innerText = target + (target > 1000 ? '+' : '');
                }
            };
            
            updateCounter();
        });
    };

    const statsSection = document.getElementById('stats');
    if (statsSection && 'IntersectionObserver' in window) {
        const statsObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !hasAnimatedCounters) {
                animateCounters();
                hasAnimatedCounters = true;
            }
        }, { threshold: 0.5 });
        
        statsObserver.observe(statsSection);
    } else if (statsSection) {
        animateCounters();
    }

    // 3.5 Leaderboard Animations (Points & Progress Bars)
    const leaderboardSection = document.getElementById('leaderboard');
    let hasAnimatedLeaderboard = false;

    const animateLeaderboard = () => {
        // Points Count-Up
        document.querySelectorAll('.count-up').forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const duration = 2000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCount = () => {
                current += increment;
                if (current < target) {
                    counter.innerText = Math.ceil(current);
                    requestAnimationFrame(updateCount);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        });

        // Progress Bars Fill
        document.querySelectorAll('.progress-bar-fill').forEach(bar => {
            const width = bar.getAttribute('data-width');
            bar.style.width = width + '%';
        });
    };

    if (leaderboardSection && 'IntersectionObserver' in window) {
        const leaderboardObserver = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !hasAnimatedLeaderboard) {
                animateLeaderboard();
                hasAnimatedLeaderboard = true;
            }
        }, { threshold: 0.3 });
        leaderboardObserver.observe(leaderboardSection);
    } else if (leaderboardSection) {
        animateLeaderboard();
    }

    // 4. Legacy Form Submission (old single-form handler - kept for backward compat)
    const _legacyForm = document.getElementById('registrationForm');
    const _legacySubmitBtn = document.getElementById('submitBtn');
    if (_legacyForm && _legacySubmitBtn) {
        const formMessage = document.getElementById('formMessage');
        const loader  = _legacySubmitBtn.querySelector('.loader-spinner');
        const btnText = _legacySubmitBtn.querySelector('span');

        _legacyForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (formMessage) { formMessage.textContent = ''; formMessage.className = 'alert hidden'; }
            _legacySubmitBtn.disabled = true;
            if (btnText) btnText.classList.add('hidden');
            if (loader)  loader.classList.remove('hidden');

            try {
                const response = await fetch('register.php', { method: 'POST', body: new FormData(_legacyForm) });
                const result = await response.json();
                _legacySubmitBtn.disabled = false;
                if (btnText) btnText.classList.remove('hidden');
                if (loader)  loader.classList.add('hidden');
                if (result.success) {
                    if (formMessage) { formMessage.textContent = 'Welcome aboard!'; formMessage.className = 'alert alert-success'; }
                    _legacyForm.reset();
                } else {
                    if (formMessage) { formMessage.textContent = result.message || 'Error.'; formMessage.className = 'alert alert-error'; }
                }
            } catch (error) {
                console.error('Legacy form error:', error);
                _legacySubmitBtn.disabled = false;
                if (btnText) btnText.classList.remove('hidden');
                if (loader)  loader.classList.add('hidden');
            }
        });
    }

    // 5. Modal Close Logic
    const closeModals = () => {
        document.querySelectorAll('.modal-overlay').forEach(modal => {
            modal.classList.add('hidden');
        });
    };

    document.querySelectorAll('.modal-close').forEach(btn => {
        btn.addEventListener('click', closeModals);
    });

    document.querySelectorAll('.modal-overlay').forEach(overlay => {
        overlay.addEventListener('click', (e) => {
            if (e.target === overlay) {
                closeModals();
            }
        });
    });

    // 6. Mobile Navigation Toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            const isFlex = navLinks.style.display === 'flex';
            if (isFlex) {
                navLinks.style.display = 'none';
                hamburger.innerHTML = '<i class="fas fa-bars"></i>';
            } else {
                navLinks.style.display = 'flex';
                navLinks.style.flexDirection = 'column';
                navLinks.style.position = 'absolute';
                navLinks.style.top = '100%';
                navLinks.style.left = '0';
                navLinks.style.width = '100%';
                navLinks.style.background = 'rgba(255, 255, 255, 0.95)';
                navLinks.style.padding = '20px';
                hamburger.innerHTML = '<i class="fas fa-times"></i>';
            }
        });
    }

    // 4. Timeline Progress Animation
    const timeline = document.querySelector('.timeline-v2');
    const timelineProgress = document.querySelector('.timeline-progress');

    if (timeline && timelineProgress) {
        window.addEventListener('scroll', () => {
            const timelineRect = timeline.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            
            if (timelineRect.top < windowHeight && timelineRect.bottom > 0) {
                const totalHeight = timelineRect.height;
                const scrollOffset = windowHeight * 0.5; // Offset to start animation when half-visible
                const visiblePart = windowHeight - timelineRect.top - (windowHeight * 0.2);
                let progress = (visiblePart / totalHeight) * 100;
                
                progress = Math.min(Math.max(progress, 0), 100);
                timelineProgress.style.height = `${progress}%`;
            }
        });
    }

    // 5. Team Section Hover Parallax


    // 7. Competition Countdown Timer (48 Hours Dribbble Hero)
    const cdDays = document.getElementById('cd-days');
    const cdHours = document.getElementById('cd-hours');
    const cdMins = document.getElementById('cd-mins');
    
    if (cdDays && cdHours && cdMins) {
        // Set fixed end time to 48 hours for demo
        const endTime = new Date().getTime() + (48 * 60 * 60 * 1000);

        const updateTimer = () => {
            const now = new Date().getTime();
            const distance = endTime - now;

            if (distance < 0) {
                cdDays.textContent = "00";
                cdHours.textContent = "00";
                cdMins.textContent = "00";
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            // Format with leading zeros
            const dStr = days < 10 ? "0" + days : days;
            const hStr = hours < 10 ? "0" + hours : hours;
            const mStr = minutes < 10 ? "0" + minutes : minutes;

            cdDays.textContent = dStr;
            cdHours.textContent = hStr;
            cdMins.textContent = mStr;
        };

        // Update every second
        setInterval(updateTimer, 60000); // Only need to update every minute since we don't show seconds
        updateTimer(); // Initial call
    }

    // 8. Rules Modal Toggle
    const rulesModal = document.getElementById('rulesModal');
    const btnViewRules = document.getElementById('btnViewRules');
    const closeModal = document.getElementById('closeModal');

    if (rulesModal && btnViewRules && closeModal) {
        btnViewRules.addEventListener('click', (e) => {
            e.preventDefault();
            rulesModal.classList.remove('hidden');
        });

        closeModal.addEventListener('click', () => {
            rulesModal.classList.add('hidden');
        });

        // Close when clicking outside modal content
        rulesModal.addEventListener('click', (e) => {
            if (e.target === rulesModal) {
                rulesModal.classList.add('hidden');
            }
        });
    }

    // 9. Split Registration Modals Logic
    const clubModal = document.getElementById('clubModal');
    const eventModal = document.getElementById('eventModal');
    
    // Triggers
    const btnJoinClubNav = document.getElementById('btnJoinClubNav');
    const btnRegisterHero = document.getElementById('btnRegisterHero');
    
    // Close Buttons
    const closeClubModal = document.getElementById('closeClubModal');
    const closeEventModal = document.getElementById('closeEventModal');
    const btnDoneClub = document.getElementById('btnDoneClub');
    const btnDoneEvent = document.getElementById('btnDoneEvent');

    // 10. AJAX Form Submission
    const handleFormSubmit = async (formId, endpoint) => {
        const form = document.getElementById(formId);
        if (!form) return;

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = form.querySelector('.btn-submit');
            const spinner   = submitBtn ? submitBtn.querySelector('.loader-spinner') : null;
            const btnText   = submitBtn ? submitBtn.querySelector('span') : null;
            // msgEl is optional — only used for error messages
            const msgEl = form.querySelector('.alert') || document.getElementById(formId + 'Message');

            // Loading state
            if (btnText)   btnText.classList.add('hidden');
            if (spinner)   spinner.classList.remove('hidden');
            if (submitBtn) submitBtn.disabled = true;
            if (msgEl)     { msgEl.textContent = ''; msgEl.className = 'alert hidden'; }

            try {
                const response = await fetch(endpoint, {
                    method: 'POST',
                    body: new FormData(form)
                });

                const data = await response.json();
                console.log('[NexTech] Form response:', data);

                if (data.status === 'success') {
                    // 1. Close current form modal
                    const currentOverlay = form.closest('.modal-overlay');
                    if (currentOverlay) {
                        nexCloseModal(currentOverlay.id);
                    }

                    // 2. Show the success celebration modal
                    nexOpenModal('successModal');

                    // 3. Fire confetti from both sides for 3 seconds
                    if (typeof confetti === 'function') {
                        const end = Date.now() + 3000;
                        const shoot = () => {
                            confetti({ particleCount: 4, angle: 60,  spread: 60, origin: { x: 0, y: 0.6 }, colors: ['#7c3aed','#2563eb','#10b981','#f59e0b'] });
                            confetti({ particleCount: 4, angle: 120, spread: 60, origin: { x: 1, y: 0.6 }, colors: ['#7c3aed','#2563eb','#10b981','#f59e0b'] });
                            if (Date.now() < end) requestAnimationFrame(shoot);
                        };
                        shoot();
                    }

                    form.reset();

                } else {
                    const message = data.message || 'An error occurred. Please try again.';
                    if (msgEl) {
                        msgEl.textContent = message;
                        msgEl.className = 'alert alert-error';
                    } else {
                        alert(message);
                    }
                }
            } catch (err) {
                console.error('[NexTech] Submission error:', err);
                const errMsg = 'Connection failed. Please try again.';
                if (msgEl) {
                    msgEl.textContent = errMsg;
                    msgEl.className = 'alert alert-error';
                } else {
                    alert(errMsg);
                }
            } finally {
                if (btnText)   btnText.classList.remove('hidden');
                if (spinner)   spinner.classList.add('hidden');
                if (submitBtn) submitBtn.disabled = false;
            }
        });
    };

    handleFormSubmit('clubForm',  'submit_club.php');
    handleFormSubmit('eventForm', 'submit_event.php');


    // 11. Theme Switcher Logic (Dark/Light Mode)
    const themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
        // Check for saved theme or system preference
        const currentTheme = localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        
        if (currentTheme === 'dark') {
            document.documentElement.setAttribute('data-theme', 'dark');
            themeToggle.checked = true;
        }

        themeToggle.addEventListener('change', (e) => {
            if (e.target.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.removeAttribute('data-theme');
                localStorage.setItem('theme', 'light');
            }
        });
    }

});

// 6. Premium Constellation Background Animation
// Initialized on window.load to ensure hero section height is computed accurately
window.addEventListener('load', () => {
    const canvas = document.getElementById('networkCanvas');
    if (!canvas) {
        console.error("Canvas #networkCanvas not found!");
        return;
    }

    const ctx = canvas.getContext('2d');
    let width, height;
    let particles = [];
    const mouse = { x: null, y: null, radius: 130 };

    function resizeCanvas() {
        const hero = document.querySelector('.hero');
        width = canvas.width = window.innerWidth;
        const heroH = hero ? hero.offsetHeight : 0;
        height = canvas.height = (heroH > 0) ? heroH : window.innerHeight;
        initParticles();
    }

    window.addEventListener('resize', resizeCanvas);
    window.addEventListener('mousemove', (e) => {
        const heroEl = document.querySelector('.hero');
        if (!heroEl) return;
        const rect = heroEl.getBoundingClientRect();
        if (e.clientY >= rect.top && e.clientY <= rect.bottom) {
            mouse.x = e.clientX - rect.left;
            mouse.y = e.clientY - rect.top;
        } else {
            mouse.x = null;
            mouse.y = null;
        }
    });

    window.addEventListener('mouseout', () => { mouse.x = null; mouse.y = null; });

    class Particle {
        constructor() { this._init(); }
        _init() {
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            const angle = Math.random() * Math.PI * 2;
            const speed = Math.random() * 0.25 + 0.05;
            this.vx = Math.cos(angle) * speed;
            this.vy = Math.sin(angle) * speed;
            this.radius      = Math.random() * 1.5 + 1.5;
            this.baseOpacity = Math.random() * 0.3 + 0.55;
            this.opacity     = this.baseOpacity;
        }
        update() {
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < 0)      { this.x = 0;      this.vx =  Math.abs(this.vx); }
            if (this.x > width)  { this.x = width;  this.vx = -Math.abs(this.vx); }
            if (this.y < 0)      { this.y = 0;      this.vy =  Math.abs(this.vy); }
            if (this.y > height) { this.y = height; this.vy = -Math.abs(this.vy); }

            this.opacity = this.baseOpacity;
            if (mouse.x !== null && mouse.y !== null) {
                const dx = mouse.x - this.x;
                const dy = mouse.y - this.y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < mouse.radius && dist > 0) {
                    const t = 1 - dist / mouse.radius;
                    this.x += dx * t * 0.01; // Refined subtle drift (0.01 force)
                    this.y += dy * t * 0.01;
                    this.opacity = Math.min(0.9, this.baseOpacity + t * 0.4);
                }
            }
        }
        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(120, 120, 135, ${this.opacity})`;
            ctx.fill();
        }
    }

    function initParticles() {
        particles = [];
        const count = Math.min(100, Math.max(70, Math.floor((width * height) / 8500)));
        for (let i = 0; i < count; i++) particles.push(new Particle());
    }

    const MAX_DIST = 170; // Optimized for mesh density
    function drawLines() {
        // Soft slate color for the mesh
        const col = '40, 45, 60'; 
        
        ctx.save();
        // 1. Light General Particle-to-Particle Network
        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);
                if (dist > MAX_DIST) continue;
                
                // Extremely light base opacity for the background fabric
                const alpha = (1 - dist / MAX_DIST) * 0.08; 
                
                ctx.beginPath();
                ctx.moveTo(particles[i].x, particles[i].y);
                ctx.lineTo(particles[j].x, particles[j].y);
                ctx.strokeStyle = `rgba(${col},${alpha})`;
                ctx.lineWidth = 0.35; 
                ctx.stroke();
            }
        }
        ctx.restore();

        // 2. Cursor Hub: Targeted Triangulation (Dense Faint Triangles)
        if (mouse.x !== null && mouse.y !== null) {
            const near = particles
                .map(p => ({ p, dist: Math.hypot(p.x - mouse.x, p.y - mouse.y) }))
                .sort((a, b) => a.dist - b.dist)
                .slice(0, 32); // Increased density (30-35 range)

            // Lines from cursor to particles
            near.forEach(item => {
                const alpha = Math.max(0.1, (1 - item.dist / 800) * 0.3);
                ctx.beginPath();
                ctx.moveTo(mouse.x, mouse.y);
                ctx.lineTo(item.p.x, item.p.y);
                ctx.strokeStyle = `rgba(${col}, ${alpha})`;
                ctx.lineWidth = 0.6;
                ctx.stroke();
            });

            // Internal connections between the particles to form dense triangles
            for (let i = 0; i < near.length; i++) {
                for (let j = i + 1; j < near.length; j++) {
                    const d = Math.hypot(near[i].p.x - near[j].p.x, near[i].p.y - near[j].p.y);
                    if (d < MAX_DIST * 1.2) {
                        ctx.beginPath();
                        ctx.moveTo(near[i].p.x, near[i].p.y);
                        ctx.lineTo(near[j].p.x, near[j].p.y);
                        ctx.strokeStyle = `rgba(${col}, 0.08)`; // Slightly lighter lines for dense overlap
                        ctx.stroke();

                        // Fill triangles formed with the cursor
                        ctx.beginPath();
                        ctx.moveTo(mouse.x, mouse.y);
                        ctx.lineTo(near[i].p.x, near[i].p.y);
                        ctx.lineTo(near[j].p.x, near[j].p.y);
                        ctx.closePath();
                        ctx.fillStyle = `rgba(${col}, 0.025)`; // Reduced opacity for high density
                        ctx.fill();
                    }
                }
            }
        }
    }

    function animate() {
        ctx.clearRect(0, 0, width, height);
        for (const p of particles) p.update();
        drawLines();
        for (const p of particles) p.draw();
        requestAnimationFrame(animate);
    }

    // Diagnostics
    console.log("Canvas Constellation Loaded. Starting resizeCanvas...");
    resizeCanvas();
    animate();
});

// Global Modal Helper Functions (Accessible by inline onclick)
function toggleModal(modal, forceClose = false) {
    if (!modal) return;
    if (forceClose) {
        modal.classList.add('hidden');
        document.body.style.overflow = '';
        document.documentElement.style.overflow = '';
    } else {
        const isHidden = modal.classList.contains('hidden');
        if (isHidden) {
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            document.documentElement.style.overflow = 'hidden';
        } else {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
            document.documentElement.style.overflow = '';
        }
    }
}

function nexOpenModal(modalId) {
    const modal = document.getElementById(modalId);
    if (!modal) return;
    
    // Reset success states and forms
    const successState = modal.querySelector('[id$="SuccessState"]');
    const form = modal.querySelector('form');
    if (successState) successState.classList.add('hidden');
    if (form) {
        form.classList.remove('hidden');
        form.reset();
    }
    
    toggleModal(modal);
}

function nexCloseModal(modalId) {
    const modal = document.getElementById(modalId);
    toggleModal(modal, true);
}

// Global outside click listener
window.addEventListener('click', (e) => {
    if (e.target.classList.contains('modal-overlay')) {
        e.target.classList.add('hidden');
        document.body.style.overflow = '';
    }
});

/* Participation Guide Tab Switcher */
function switchGuideTab(tabType) {
    const eventTab = document.getElementById('eventGuideTab');
    const clubTab = document.getElementById('clubGuideTab');
    const buttons = document.querySelectorAll('.guide-tab-btn');

    if (tabType === 'event') {
        eventTab.classList.add('active');
        clubTab.classList.remove('active');
    } else {
        clubTab.classList.add('active');
        eventTab.classList.remove('active');
    }

    buttons.forEach(btn => {
        if (btn.getAttribute('data-tab') === tabType) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });
}

/* =====================
   Celebration Confetti
   ===================== */
function triggerCelebration() {
    const end = Date.now() + 3000; // 3 seconds

    const frame = () => {
        // Left side burst
        confetti({
            particleCount: 3,
            angle: 60,
            spread: 55,
            origin: { x: 0, y: 0.65 },
            colors: ['#7c3aed', '#2563eb', '#10b981', '#f59e0b']
        });
        // Right side burst
        confetti({
            particleCount: 3,
            angle: 120,
            spread: 55,
            origin: { x: 1, y: 0.65 },
            colors: ['#7c3aed', '#2563eb', '#10b981', '#f59e0b']
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame);
        }
    };

    frame();
}
