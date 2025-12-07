<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vishnu Kumar S A - Backend Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
        
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="logo">VK</div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <button id="themeToggle" class="theme-toggle" aria-label="Toggle theme">
                        <i class="bi bi-moon-stars-fill"></i>
                    </button>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="about">
        <div class="hero-container">
            <div class="hero-content" data-aos="fade-right">
                <h1>
                    Hi, I'm<br>
                    <span class="gradient-text">Vishnu Kumar S A</span>
                </h1>
                <p class="hero-subtitle">PHP Developer</p>
                <p class="hero-description">
                    Experienced PHP developer specializing in POS systems, eCommerce platforms, and high-performance
                    backend solutions. Proficient in Laravel, CodeIgniter, CakePHP, and modern API development with a
                    focus on scalability and optimization.
                </p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn btn-primary">View My Work</a>
                    <a href="#contact" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image aos-init aos-animate" data-aos="fade-left" data-aos-delay="200" aria-hidden="true">
                <div class="profile-wrapper">
                    <div class="profile-circle">
                        <div class="profile-inner">
                            <div class="profile-text" aria-hidden="true">VK</div>
                        </div>
                    </div>

                    <div class="floating-shapes" aria-hidden="true">
                        <div class="shape" style="width:90px;height:90px;top:-10px;left:-10px;"></div>
                        <div class="shape" style="width:70px;height:70px;bottom:-10px;right:-10px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title"><span class="gradient-text">Work Experience</span></h2>
            <p class="section-subtitle">My professional journey building scalable solutions</p>
        </div>
        <div class="experience-grid">
            <div class="exp-card" data-aos="fade-up" data-aos-delay="100">
                <div class="exp-header">
                    <div>
                        <h3 class="exp-title">PHP Programmer</h3>
                        <p class="company-name">Kliotech LLP</p>
                    </div>
                    <span class="exp-duration">Mar 2024 - Present</span>
                </div>
                <ul>
                    <li>Developed and maintained DiveShop360 POS and inventory management system using CakePHP and
                        Angular</li>
                    <li>Built core modules for products, orders, and warehouse management with complex business logic
                    </li>
                    <li>Optimized SQL queries for large datasets, improving system performance by 40%</li>
                    <li>Implemented RESTful APIs for seamless integration with third-party services</li>
                </ul>
            </div>

            <div class="exp-card" data-aos="fade-up" data-aos-delay="200">
                <div class="exp-header">
                    <div>
                        <h3 class="exp-title">Software Engineer </h3>
                        <p class="company-name">Hatsm Software LLP</p>
                    </div>
                    <span class="exp-duration">2023 - 2024</span>
                </div>
                <ul>
                    <li>Developed backend modules for multi-store POS system handling concurrent transactions</li>
                    <li>Enhanced existing PHP/CodeIgniter modules with new features and performance improvements</li>
                    <li>Conducted code reviews and implemented best practices for team development</li>
                </ul>
            </div>

            <div class="exp-card" data-aos="fade-up" data-aos-delay="300">
                <div class="exp-header">
                    <div>
                        <h3 class="exp-title">PHP Programmer</h3>
                        <p class="company-name">Shriyaditha Graphics Universe</p>
                    </div>
                    <span class="exp-duration">2021 - 2023</span>
                </div>
                <ul>
                    <li>Worked on PHP applications and API integrations with payment gateways and shipping providers
                    </li>
                    <li>Handled client-side updates and custom feature enhancements for web applications</li>
                    <li>Collaborated with design team to implement responsive user interfaces</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title"><span class="gradient-text">Technical Skills</span></h2>
            <p class="section-subtitle">Technologies I work with</p>
        </div>
        <div class="skills-grid">
            <div class="skill-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="skill-icon"><i class="bi bi-code-slash"></i></div>
                <h3 class="skill-title">Backend Development</h3>
                <p class="skill-list">PHP • Laravel • CodeIgniter • CakePHP • Node.js</p>
            </div>
            <div class="skill-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="skill-icon"><i class="bi bi-database"></i></div>
                <h3 class="skill-title">Database</h3>
                <p class="skill-list">MySQL • PostgreSQL • Query Optimization • Data Modeling</p>
            </div>
            <div class="skill-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="skill-icon"><i class="bi bi-grid"></i></div>
                <h3 class="skill-title">Frontend</h3>
                <p class="skill-list">Angular • JavaScript • jQuery • HTML/CSS</p>
            </div>
            <div class="skill-card" data-aos="zoom-in" data-aos-delay="400">
                <div class="skill-icon"><i class="bi bi-tools"></i></div>
                <h3 class="skill-title">Tools & Others</h3>
                <p class="skill-list">Git • Postman • REST APIs • MVC Architecture</p>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title"><span class="gradient-text">Featured Projects</span></h2>
            <p class="section-subtitle">Key projects I've worked on</p>
        </div>
        <div class="projects-timeline">
            <div class="timeline-line"></div>

            <div class="project-item" data-aos="fade-left">
                <div class="timeline-dot"></div>
                <div class="project-year">2024</div>
                <div class="project-card">
                    <h3 class="project-title">DiveShop360 - POS & Inventory System</h3>
                    <p class="project-description">
                        Comprehensive point-of-sale and inventory management platform built with CakePHP and Angular.
                        Enhanced XPanel and POS modules, improved stock workflows, optimized SQL queries for better
                        performance, upgraded billing system, and successfully supported multi-store data migration for
                        enterprise clients.
                    </p>
                </div>
            </div>

            <div class="project-item" data-aos="fade-left" data-aos-delay="100">
                <div class="timeline-dot"></div>
                <div class="project-year">2023</div>
                <div class="project-card">
                    <h3 class="project-title">Nokomis Funshop - Multi-Store eCommerce</h3>
                    <p class="project-description">
                        Developed a robust multi-store eCommerce platform managing product synchronization across
                        multiple locations, automated order updates, real-time inventory tracking, and seamless
                        marketplace integrations. Built with WordPress and core PHP backend for optimal flexibility.
                    </p>
                </div>
            </div>

            <div class="project-item" data-aos="fade-left" data-aos-delay="200">
                <div class="timeline-dot"></div>
                <div class="project-year">2022</div>
                <div class="project-card">
                    <h3 class="project-title">ACHYQ - Social Blogging Platform</h3>
                    <p class="project-description">
                        Created an interactive social blogging platform with features for creating posts, user
                        engagement through likes and comments, and real-time interactions. Implemented using Laravel
                        Blade templates, Bootstrap for responsive design, and AJAX with jQuery for dynamic content
                        loading.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="section-header" data-aos="fade-up">
            <h2 class="section-title"><span class="gradient-text">Get In Touch</span></h2>
            <p class="section-subtitle">Let's discuss your next project</p>
        </div>
        <div class="contact-grid">
            <div class="contact-item" data-aos="zoom-in" data-aos-delay="100">
                <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
                <div class="contact-info">
                    <strong>Email</strong><br>
                    <a href="mailto:savishnukumar@gmail.com">savishnukumar@gmail.com</a>
                </div>
            </div>
            <div class="contact-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="contact-icon"><i class="bi bi-github"></i></div>
                <div class="contact-info">
                    <strong>GitHub</strong><br>
                    <a href="https://github.com/vishnukumarsa" target="_blank"
                        rel="noopener noreferrer">vishnukumar sa</a>
                </div>
            </div>
            <div class="contact-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="contact-icon"><i class="bi bi-linkedin"></i></div>
                <div class="contact-info">
                    <strong>LinkedIn</strong><br>
                    <a href="https://linkedin.com/in/vishnu-kumar-s-a-05b718216" target="_blank"
                        rel="noopener noreferrer">vishnu-kumar-s-a</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Vishnu Kumar S A. All rights reserved.</p>
    </footer>

    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js">
       
    </script>
</body>

</html>

