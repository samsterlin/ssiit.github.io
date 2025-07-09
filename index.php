<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Institute of Industrial Technology - Leading Provider of Industrial Solutions</title>
    <meta name="description" content="SSIIT specializes in ducting fabrication, industrial insulation works, plant fabrication services, and professional training programs for industrial technicians.">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="SS Institute of Industrial Technology">
    <meta property="og:description" content="Leading provider of ducting fabrication, industrial insulation works, and professional training programs">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ssiit.com">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"></meta>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --industrial-blue-50: hsl(214, 100%, 97%);
            --industrial-blue-100: hsl(214, 95%, 93%);
            --industrial-blue-500: hsl(214, 84%, 56%);
            --industrial-blue-600: hsl(221, 83%, 53%);
            --industrial-blue-700: hsl(230, 81%, 48%);
            --industrial-blue-800: hsl(226, 71%, 40%);
            --industrial-blue-900: hsl(224, 64%, 33%);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            scroll-behavior: smooth;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Navigation */
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--industrial-blue-800);
        }

        .logo-subtitle {
            font-size: 0.8rem;
            color: #666;
            margin-top: -5px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--industrial-blue-600);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--industrial-blue-50) 0%, #f8f9fa 100%);
            padding: 120px 0 80px;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
            border: none;
            display: inline-block;
        }

        .btn-primary {
            background: var(--industrial-blue-600);
            color: white;
        }

        .btn-primary:hover {
            background: var(--industrial-blue-700);
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            color: var(--industrial-blue-600);
            border: 2px solid var(--industrial-blue-600);
        }

        .btn-outline:hover {
            background: var(--industrial-blue-50);
        }

        .hero-image {
            position: relative;
        }

        .hero-image img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: white;
        }

        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        .section-header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 0 auto;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service-card {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .service-icon {
            width: 60px;
            height: 60px;
            background: var(--industrial-blue-100);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            color: var(--industrial-blue-600);
        }

        .service-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #333;
        }

        .service-card p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .service-link {
            color: var(--industrial-blue-600);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .service-link:hover {
            color: var(--industrial-blue-700);
        }

        /* Detailed Services */
        .detailed-services {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .service-detail {
            margin-bottom: 5rem;
        }

        .service-detail-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .service-detail h2 {
            font-size: 2.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .service-detail p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .service-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .service-features li {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
            color: #555;
        }

        .service-features li::before {
            content: "✓";
            color: var(--industrial-blue-600);
            font-weight: bold;
            margin-right: 0.8rem;
            font-size: 1.2rem;
        }

        .service-images {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .service-images img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* Training Section */
        .training {
            padding: 80px 0;
            background: white;
        }

        .training-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .training-card {
            background: var(--industrial-blue-50);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
        }

        .training-card h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #333;
        }

        .training-card p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .training-features {
            list-style: none;
            margin-bottom: 2rem;
            text-align: left;
        }

        .training-features li {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            color: #555;
        }

        .training-features li::before {
            content: "•";
            color: var(--industrial-blue-600);
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .training-images {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .training-images img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* About Section */
        .about {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text h2 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .about-text p {
            font-size: 1.1rem;
            color: #666;
            margin-bottom: 1.5rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .stat {
            text-align: center;
        }

        .stat h3 {
            font-size: 2rem;
            font-weight: bold;
            color: var(--industrial-blue-600);
            margin-bottom: 0.5rem;
        }

        .stat p {
            color: #666;
            font-size: 0.9rem;
        }

        .owner-card {
            background: white;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            text-align: center;
        }

        .owner-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .owner-card h3 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .owner-card .title {
            color: var(--industrial-blue-600);
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .owner-card p {
            color: #666;
            font-size: 0.9rem;
            font-style: italic;
        }

        /* Contact Section */
        .contact {
            padding: 80px 0;
            background: white;
        }

        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info h3 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #333;
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
        }

        .contact-icon {
            width: 48px;
            height: 48px;
            background: var(--industrial-blue-100);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
            margin-top: 0.25rem;
            color: var(--industrial-blue-600);
        }

        .contact-item h4 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .contact-item p {
            color: #666;
            margin: 0;
        }

        .contact-form {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 12px;
        }

        .contact-form h3 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 2rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--industrial-blue-500);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .required {
            color: #e74c3c;
        }

        /* Footer */
        .footer {
            background: #333;
            color: white;
            padding: 3rem 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .footer-section p {
            color: #ccc;
            margin-bottom: 1rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            color: #ccc;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        .social-links a:hover {
            color: white;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #555;
            padding-top: 2rem;
            text-align: center;
            color: #ccc;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                flex-direction: column;
                padding: 1rem;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .hero-buttons {
                justify-content: center;
            }

            .service-detail-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
                gap: 1rem;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }

            .hero {
                padding: 100px 0 60px;
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .services, .training, .about, .contact {
                padding: 60px 0;
            }

            .stats-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }
    
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
        font-size:30px;
            box-shadow: 2px 2px 3px #999;
        z-index:100;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-container">
                <div class="logo-section">
                    <div class="logo">SSIIT</div>
                    <div class="logo-subtitle">Industrial Technology</div>
                </div>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#training">Training</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button class="mobile-menu-btn" onclick="toggleMobileMenu()">☰</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>SS Institute of Industrial Technology</h1>
                    <p>Leading provider of ducting fabrication, industrial insulation works, plant fabrication services, and professional training programs for the next generation of industrial technicians.</p>
                    <div class="hero-buttons">
                        <a href="#services" class="btn btn-primary">Our Services</a>
                        <a href="#contact" class="btn btn-outline">Contact Us</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="images/banner-1.jpg" alt="Industrial ducting and piping systems">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Our Core Services</h2>
                <p>Delivering excellence in industrial solutions with decades of experience and cutting-edge technology</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-thermometer-half"></i></div>
                    <h3>Hot & Cold Insulation</h3>
                    <p>Expert ducting fabrication and thermal insulation solutions for industrial equipment, pipelines, and HVAC systems to maximize energy efficiency and temperature control.</p>
                    <a href="#insulation" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-industry"></i></div>
                    <h3>Plant Fabrication</h3>
                    <p>Precision ducting fabrication, custom piping systems, and industrial plant equipment manufacturing with expert craftsmanship and quality assurance.</p>
                    <a href="#fabrication" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h3>Professional Training</h3>
                    <p>Comprehensive training programs for freshers entering the industrial sector, covering safety, technical skills, and best practices.</p>
                    <a href="#training" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Services -->
    <section class="detailed-services">
        <div class="container">
            <!-- Hot & Cold Insulation -->
            <div id="insulation" class="service-detail">
                <div class="service-detail-content">
                    <div>
                        <h2>Ducting Fabrication & Insulation Works</h2>
                        <p>Specialized in ducting fabrication and comprehensive thermal insulation solutions for industrial applications. Our proven expertise ensures optimal energy efficiency, temperature control, and system performance.</p>
                        <ul class="service-features">
                            <li>Industrial ducting fabrication and installation</li>
                            <li>Hot and cold pipeline insulation</li>
                            <li>HVAC system insulation and cladding</li>
                            <li>Equipment and vessel thermal protection</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary">Get Quote</a>
                    </div>
                    <div class="service-images">
                        <img src="images/plant-5.jpg" alt="Industrial pipe insulation work">
                        <img src="images/plant-6.jpg" alt="Large scale ducting insulation">
                        <img src="images/plant-7.jpg" alt="Complex piping insulation systems">
                        <img src="images/plant-8.jpg" alt="Ducting fabrication and insulation">
                    </div>
                </div>
            </div>

            <!-- Plant Fabrication -->
            <div id="fabrication" class="service-detail">
                <div class="service-detail-content">
                    <div class="service-images">
                        <img src="images/plant-1.jpg" alt="Ducting fabrication work">
                        <img src="images/plant-2.jpg" alt="Industrial plant piping systems">
                        <img src="images/plant-3.jpg" alt="Precision fabrication equipment">
                        <img src="images/plant-4.jpg" alt="Large scale industrial piping">
                    </div>
                    <div>
                        <h2>Industrial Plant Fabrication</h2>
                        <p>Complete fabrication solutions for industrial plants featuring custom ducting systems, precision piping, and process equipment. Our experienced team delivers projects from design to installation with uncompromising quality.</p>
                        <ul class="service-features">
                            <li>Custom ducting system fabrication</li>
                            <li>Industrial piping and process equipment</li>
                            <li>Stainless steel and carbon steel fabrication</li>
                            <li>Complete installation and testing services</li>
                        </ul>
                        <a href="#contact" class="btn btn-primary">View Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Training Section -->
    <section id="training" class="training">
        <div class="container">
            <div class="section-header">
                <h2>Professional Training Programs</h2>
                <p>Empowering the next generation of industrial professionals with hands-on training and industry-relevant skills</p>
            </div>
            <div class="training-cards">
                <div class="training-card">
                    <h3>Foundational Course</h3>
                    <p>6-month comprehensive program covering industrial safety, ducting fabrication techniques, and thermal insulation fundamentals.</p>
                    <ul class="training-features">
                        <li>Duration: 6 months</li>
                        <li>Batch size: 20-25 students</li>
                        <li>Industry certification</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
                <div class="training-card">
                    <h3>Advanced Specialization</h3>
                    <p>3-month intensive program for experienced technicians specializing in advanced ducting fabrication and industrial insulation techniques.</p>
                    <ul class="training-features">
                        <li>Duration: 3 months</li>
                        <li>Batch size: 15-20 students</li>
                        <li>Advanced certification</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
                <div class="training-card">
                    <h3>Corporate Training</h3>
                    <p>Customized training programs for companies looking to upskill their workforce in ducting fabrication, insulation work, and industrial plant operations.</p>
                    <ul class="training-features">
                        <li>Duration: Flexible</li>
                        <li>On-site or facility based</li>
                        <li>Custom curriculum</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
            <div class="training-images">
                <img src="images/training-1.jpg" alt="Hands-on insulation training">
                <img src="images/training-2.jpg" alt="Ducting fabrication training">
                <img src="images/training-3.jpg" alt="Industrial piping systems training">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About SSIIT</h2>
                    <p>With over two decades of experience in the industrial sector, SS Institute of Industrial Technology has established itself as a trusted partner for companies seeking reliable insulation, fabrication, and training solutions.</p>
                    <p>Our commitment to excellence, safety, and innovation has made us the preferred choice for numerous industrial projects across various sectors. We combine traditional craftsmanship with modern technology to deliver superior results.</p>
                    <div class="stats-grid">
                        <div class="stat">
                            <h3>500+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat">
                            <h3>1000+</h3>
                            <p>Trained Professionals</p>
                        </div>
                        <div class="stat">
                            <h3>20+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat">
                            <h3>50+</h3>
                            <p>Corporate Clients</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="owner-card">
                        <img src="images/ssiit.jpeg" alt="Company Owner" class="owner-photo">
                        <h3>Managing Director</h3>
                        <p class="title">Founder & CEO</p>
                        <p>"Our mission is to bridge the gap between industry requirements and skilled professionals while delivering world-class industrial solutions."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Get In Touch</h2>
                <p>Ready to start your next project or join our training programs? Contact us today for a consultation.</p>
            </div>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Address</h4>
                            <p>Cheruvarakkonam, Parsssala (P.O), Thiruvananthapuram <br>Pin - 695 502, Kerala.<br>India</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <h4>Phone</h4>
                            <p>+91-94860 03799</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email</h4>
                            <p>info@ssiit.in<br>training@ssiit.in</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4>Business Hours</h4>
                            <p>Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 9:00 AM - 2:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm" action="send_email.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="firstName">First Name <span class="required">*</span></label>
                                <input type="text" id="firstName" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name <span class="required">*</span></label>
                                <input type="text" id="lastName" name="lastName" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="service">Service Interest</label>
                            <select id="service" name="service">
                                <option value="">Select a service</option>
                                <option value="insulation">Hot & Cold Insulation</option>
                                <option value="fabrication">Plant Fabrication</option>
                                <option value="training">Training Programs</option>
                                <option value="consultation">General Consultation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Tell us about your project or training needs"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>SSIIT</h3>
                    <p>SS Institute of Industrial Technology - Your trusted partner for industrial insulation, fabrication, and professional training solutions.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#insulation">Hot & Cold Insulation</a></li>
                        <li><a href="#fabrication">Plant Fabrication</a></li>
                        <li><a href="#training">Training Programs</a></li>
                        <li><a href="#contact">Consultation</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 SS Institute of Industrial Technology. All rights reserved.</p>
            </div>
        </div>
    </footer>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+919486003799&text=Hello! I would like more information about SSIIT..?" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>   

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    // Close mobile menu if open
                    document.getElementById('navMenu').classList.remove('active');
                }
            });
        });

        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.textContent;
            
            // Disable submit button and show loading state
            submitButton.disabled = true;
            submitButton.textContent = 'Sending...';

            // Get form data
            const formData = new FormData(this);

            // Send form data via AJAX
            fetch('send_email.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    this.reset();
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Sorry, there was an error sending your message. Please try again later.');
            })
            .finally(() => {
                // Re-enable submit button
                submitButton.disabled = false;
                submitButton.textContent = originalText;
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
                navbar.style.backdropFilter = 'blur(10px)';
            } else {
                navbar.style.backgroundColor = 'white';
                navbar.style.backdropFilter = 'none';
            }
        });

        // Intersection Observer for animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        });

        // Observe elements for animation
        document.querySelectorAll('.service-card, .training-card, .stat').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>
</html>