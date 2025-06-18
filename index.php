<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NidusTime - Pre-Launch</title>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            overflow-x: hidden;
        }

        /* Animated 3D Bubbles Background */
        .bubbles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .bubble {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 15s infinite linear;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Header Section */
        .header {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 60px 20px 40px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }

        .logo {
            width: 350px;
            height: auto;
            margin-bottom: 8px;
        }

        .main-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: #2563eb;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sub-title {
            font-size: 1.2rem;
            color: #6b7280;
            font-weight: 500;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        .hero-text {
            font-size: 1.5rem;
            color: #374151;
            max-width: 800px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 40px;
        }

        .countdown-item {
            text-align: center;
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            padding: 20px;
            border-radius: 15px;
            min-width: 100px;
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
            transform: translateY(0);
            transition: transform 0.3s ease;
        }

        .countdown-item:hover {
            transform: translateY(-5px);
        }

        .countdown-number {
            font-size: 2.5rem;
            font-weight: bold;
            display: block;
        }

        .countdown-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        /* Features Section */
        .features-section {
            padding: 80px 20px;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 10;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 20px;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #6b7280;
            margin-bottom: 60px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 80px;
        }

        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(37, 99, 235, 0.1);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2563eb, #3b82f6);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }

        .feature-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 15px;
        }

        .feature-description {
            color: #6b7280;
            line-height: 1.6;
            font-size: 1rem;
        }

        /* Registration Section */
        .registration-section {
            padding: 80px 20px;
            background:#000000;
            color: white;
            position: relative;
            z-index: 10;
        }

        .registration-container {
            max-width: 90%;
            margin: 0 auto;
            text-align: center;
        }

        .registration-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .registration-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 40px;
        }

        .registration-form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .form-group {
            text-align: left;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: white;
        }

        .form-input, .form-select, .form-textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
		
		.form-textarea::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-input:focus, .form-select:focus, .form-textarea:focus {
            outline: none;
            border-color: #3b82f6;
            background: rgba(255, 255, 255, 0.15);
        }

        .form-textarea {
            resize: vertical;
            height: 120px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #2563eb, #3b82f6);
            color: white;
            border: none;
            padding: 18px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(37, 99, 235, 0.4);
        }

        /* Footer */
        .footer {
            background: #1f2937;
            color: white;
            text-align: center;
            padding: 40px 20px;
            position: relative;
            z-index: 10;
        }

        .footer-text {
            opacity: 0.8;
            font-size: 0.9rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .main-title {
                font-size: 2.5rem;
            }

            .countdown {
                flex-wrap: wrap;
                gap: 15px;
            }

            .countdown-item {
                min-width: 80px;
                padding: 15px;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }
        }
		
		
		
		
		
		
		
    </style>
<style>
   

    .container-inner {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .card {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .card-icon {
      font-size: 32px;
      color: #265bff;
    }

    .card-title {
      font-weight: bold;
      font-size: 1.1rem;
      margin: 0;
    }

    .card-desc {
      font-size: 0.95rem;
      color: #555;
    }
  </style>
<style>
    .registration {
        padding: 60px 20px;
        background-color: var(--light-bg);
    }

    .registration-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 30px;
        max-width: 1200px;
        margin: auto;
    }

    .registration-title,
    .registration-subtitle {
        text-align: center;
        margin-bottom: 10px;
    }

    .registration-info {
        background-color: #4B5563;
        color: white;
        padding: 40px;
        border-radius: 10px;
    }

    .registration-info h2 {
        font-size: 1.8rem;
        margin-bottom: 20px;
    }
	
	
	
	 .benefits-list {
            list-style: none;
        }
        
        .benefits-list li {
            margin: 15px 0;
            display: flex;
            align-items:left;
			line-height:27px;
        }
        
        .benefits-list li:before {
            content: "✓";
            margin-right: 10px;
            color: var(--secondary-color);
            font-weight: bold;
        }
	
	

    .form-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group.full-width {
        grid-column: span 1;
    }

    .form-input,
    .form-select,
    .form-textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 1rem;
		color:#161616;
    }

    .submit-btn {
        margin-top: 20px;
        padding: 12px 20px;
        background-color: #4B5563;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 1rem;
        cursor: pointer;
    }

    /* Responsive for tablet and up */
    @media (min-width: 768px) {
        .registration-container {
            grid-template-columns: 1fr 1fr;
        }

        .form-grid {
            grid-template-columns: 1fr 1fr;
        }

        .form-group.full-width {
            grid-column: span 2;
        }
    }

    /* Responsive for desktop and up */
    @media (min-width: 1024px) {
        .registration-title {
            font-size: 2rem;
        }

        .registration-subtitle {
            font-size: 1.2rem;
        }

        .form-input,
        .form-select,
        .form-textarea {
            font-size: 1.1rem;
        }
    }
</style>
</head>
<body>
<!-- Animated Bubbles Background -->
<div class="bubbles" id="bubbles"></div>


<!-- Header Section -->
<header class="header"> 

  <h3> Coming soon </h3>
  
  <div style="height:25px">&nbsp;</div>

  <img src="NidusTime-Final-Logo.png"  alt="NidusTime Logo" class="logo">

  <p class="sub-title">Time. Task. Payroll. Recruit.</p>
  <p class="hero-text">Bangladesh's First AI-Integrated Multi-Feature Employee Management Platform Is Almost Here!</p>
  <div class="countdown">
    <div class="countdown-item"> <span class="countdown-number" id="days">77</span> <span class="countdown-label">Days</span> </div>
    <div class="countdown-item"> <span class="countdown-number" id="hours">04</span> <span class="countdown-label">Hours</span> </div>
    <div class="countdown-item"> <span class="countdown-number" id="minutes">24</span> <span class="countdown-label">Minutes</span> </div>
    <div class="countdown-item"> <span class="countdown-number" id="seconds">19</span> <span class="countdown-label">Seconds</span> </div>
  </div>
</header>
<!-- Features Section -->
<section class="features-section">
  <div class="container">
    <h2 class="section-title">Powerful Features Built for Modern Teams</h2>
    <p class="section-subtitle">From hiring to payroll and everything in between, our platform helps you manage employees effortlessly — saving time and boosting productivity.</p>
    <div class="container-inner">
      <div class="card">
        <div class="card-icon">🕒</div>
        <div class="card-title">Smart Attendance Tracking</div>
        <div class="card-desc">Automate check-ins, track hours, and monitor attendance in real-time — no manual work needed.</div>
      </div>
      <div class="card">
        <div class="card-icon">📊</div>
        <div class="card-title">Performance Analytics</div>
        <div class="card-desc">Gain real-time insights into the team productivity, track performance, and spot trends for smarter decisions.</div>
      </div>
      <div class="card">
        <div class="card-icon">💵</div>
        <div class="card-title">Payroll & Compensation</div>
        <div class="card-desc">Seamlessly calculate, schedule, and manage payroll with built-in compliance and tax support.</div>
      </div>
      <div class="card">
        <div class="card-icon">📅</div>
        <div class="card-title">Time-Off & Shift Scheduling</div>
        <div class="card-desc">Manage leave requests, approvals, and shift schedules effortlessly with an intuitive visual calendar.</div>
      </div>
      <div class="card">
        <div class="card-icon">🔒</div>
        <div class="card-title">Secure Employee Profiles</div>
        <div class="card-desc">Store and manage employee data securely in the cloud, with customizable profiles and advanced permission controls.</div>
      </div>
	  
      <div class="card">
        <div class="card-icon">👥</div>
        <div class="card-title">Role-Based Access Control</div>
        <div class="card-desc">Automate check-ins, track hours, and monitor attendance in real-time — no manual work needed.</div>
      </div>
	  
      <div class="card"> 
	    <div class="card-icon">🎯</div>
        <div class="card-title">Recruitment & Onboarding</div>
	    <div class="card-desc"> Streamline hiring with job posting creation, applicant tracking,
		 interview scheduling, and integrated onboarding workflows to build your perfect team.</div>
        
      </div>
	  
      
	   <div class="card">
        <div class="card-icon"> 📈</div>
        <div class="card-title">Performance Analytics</div>
        <div class="card-desc"> Gain real-time insights into team productivity, track performance metrics, and 
		      spot trends with comprehensive reporting and analytics dashboards. </div>
      </div>
	  
	  <div class="card">
        <div class="card-icon"> ⏰</div>
        <div class="card-title"> Overtime & Shift Management </div>
        <div class="card-desc"> Efficiently manage overtime requests, shift scheduling, work patterns,
		  and flexible schedules with automated calculations and approval workflows.</div>
      </div>
	  
	  
	  
    </div>
  </div>
</section>
<!-- Registration Section -->
<section class="registration-section">
  <div class="registration-container">
    <div class="registration-info">
      <h2 style="text-align:left">Be the First to Know</h2>
      <p style="text-align:left">Join our exclusive early access list and unlock:</p>
      <ul class="benefits-list">
        <li>Biometric attendance integration </li>
        <li>HR blog & article writing </li>
        <li>AI-powered onboarding</li>
        <li>Job Marketplace </li>
        <li>Advanced analytics dashboards for employees, HR & admin</li>
        <li>Special promotional rates </li>
        <li>Dedicated account manager </li>
        <li>Early access to beta features </li>
        <li>Priority support queue </li>
        <li>Exclusive HR resources </li>
        <li>Invitation to HR community </li>
      </ul>
    </div>
    <form class="registration-form" id="registrationForm">
        <div id="messageContainer"></div>
        <h2 style="text-align:left">Pre-register your business</h2>
        <div style="height:30px">&nbsp;</div>
        <div class="form-grid">
            <div class="form-group">
                <label class="form-label" for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" class="form-input" placeholder="Enter your first name" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="form-input" placeholder="Enter your last name" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="companyName">Company Name</label>
                <input type="text" id="companyName" name="companyName" class="form-input" placeholder="Enter your company name" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="industry">Industry</label>
                <select id="industry" name="industry" class="form-select" required>
                    <option value="">Select your industry</option>
                    <option value="technology">Technology</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="finance">Finance & Banking</option>
                    <option value="education">Education</option>
                    <option value="manufacturing">Manufacturing</option>
                    <option value="retail">Retail & E-commerce</option>
                    <option value="hospitality">Hospitality & Tourism</option>
                    <option value="construction">Construction</option>
                    <option value="consulting">Consulting</option>
                    <option value="telecommunications">Telecommunications</option>
                    <option value="logistics">Logistics & Transportation</option>
                    <option value="media">Media & Entertainment</option>
                    <option value="government">Government</option>
                    <option value="nonprofit">Non-profit</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="designation">Designation</label>
                <select id="designation" name="designation" class="form-select" required>
                    <option value="">Select your designation</option>
                    <option value="ceo">CEO</option>
                    <option value="hr-director">HR Director</option>
                    <option value="hr-manager">HR Manager</option>
                    <option value="head-of-hr">Head of HR</option>
                    <option value="others">Others</option>
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="phoneNumber">Phone Number</label>
                <input type="tel" id="phoneNumber" name="phoneNumber" class="form-input" placeholder="+880 1XXX-XXXXXX" required>
            </div>
            <div class="form-group full-width">
                <label class="form-label" for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address" required>
            </div>
            <div class="form-group full-width">
                <label class="form-label" for="message">Short Message (Optional)</label>
                <textarea id="message" name="message" class="form-textarea" placeholder="Tell us about your specific needs or questions..."></textarea>
            </div>
        </div>
        <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>
</section>
<!-- Footer -->
<footer class="footer">
  <p class="footer-text">© 2025 NidusLab. All rights reserved. | Revolutionizing Employee Management in Bangladesh</p>
</footer>
<script>
        // Create animated bubbles
        function createBubbles() {
            const bubblesContainer = document.getElementById('bubbles');
            const bubbleCount = 15;

            for (let i = 0; i < bubbleCount; i++) {
                const bubble = document.createElement('div');
                bubble.className = 'bubble';
                
                const size = Math.random() * 100 + 50;
                bubble.style.width = size + 'px';
                bubble.style.height = size + 'px';
                bubble.style.left = Math.random() * 100 + '%';
                bubble.style.animationDelay = Math.random() * 15 + 's';
                bubble.style.animationDuration = (Math.random() * 10 + 10) + 's';
                
                bubblesContainer.appendChild(bubble);
            }
        }

        // Initialize bubbles
        createBubbles();

        // Form submission handler
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (!data.firstName || !data.lastName || !data.companyName || !data.industry || !data.designation || !data.phoneNumber || !data.email) {
                alert('Please fill in all required fields.');
                return;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(data.email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Show success message
            alert('Thank you for registering! We\'ll notify you as soon as NidusTime launches.');
            
            // Reset form
            this.reset();
        });

        // Countdown timer (simplified for demo)
        function updateCountdown() {
            const now = new Date().getTime();
            const targetDate = new Date('September 1, 2025 00:00:00').getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').textContent = days.toString().padStart(2, '0');
            document.getElementById('hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').textContent = seconds.toString().padStart(2, '0');
        }

        // Update immediately
        updateCountdown();
        
        // Update every second
        setInterval(updateCountdown, 1000);

        // Smooth scrolling for any anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll animation for feature cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Initially hide feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });


        
    </script>

<script>
        // Form submission handler
        document.getElementById('registrationForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const submitBtn = document.querySelector('.submit-btn');
            const messageContainer = document.getElementById('messageContainer');
            
            // Disable submit button
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';
            
            // Clear previous messages
            messageContainer.innerHTML = '';
            
            // Get form data
            const formData = new FormData(this);
            const data = {
                name: (formData.get('firstName') + ' ' + formData.get('lastName')).trim(),
                email: formData.get('email'),
                businessName: formData.get('companyName'),
                businessType: formData.get('industry'),
                phone: formData.get('phoneNumber'),
                message: formData.get('message') || ''
            };
            
            try {
                const response = await fetch('send_email.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data)
                });
                
                const result = await response.json();
                
                if (result.success) {
                    messageContainer.innerHTML = '<div class="success-message">Thank you! Your registration has been submitted successfully. We\'ll be in touch soon.</div>';
                    this.reset(); // Clear form
                } else {
                    throw new Error(result.message || 'Something went wrong');
                }
                
            } catch (error) {
                console.error('Error:', error);
                messageContainer.innerHTML = `<div class="error-message">Sorry, there was an error: ${error.message}</div>`;
            } finally {
                // Re-enable submit button
                submitBtn.disabled = false;
                submitBtn.textContent = 'Submit';
            }
        });

        // Update immediately
        updateCountdown();
        
        // Update every second
        setInterval(updateCountdown, 1000);

        // Smooth scrolling for any anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Add scroll animation for feature cards
        // const observerOptions = {
        //     threshold: 0.1,
        //     rootMargin: '0px 0px -50px 0px'
        // };

        // const observer = new IntersectionObserver((entries) => {
        //     entries.forEach(entry => {
        //         if (entry.isIntersecting) {
        //             entry.target.style.opacity = '1';
        //             entry.target.style.transform = 'translateY(0)';
        //         }
        //     });
        // }, observerOptions);

        // Initially hide feature cards
        document.querySelectorAll('.feature-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });


        
    </script>
</body>
</html>

<style>
    /* Message Styles */
    .success-message, .error-message {
        padding: 15px;
        margin-bottom: 20px;
        border-radius: 8px;
        text-align: left;
    }

    .success-message {
        background-color: rgba(0, 255, 0, 0.1);
        color: #0f5132;
        border: 1px solid rgba(0, 255, 0, 0.2);
    }

    .error-message {
        background-color: rgba(255, 0, 0, 0.1);
        color: #ff3333;
        border: 1px solid rgba(255, 0, 0, 0.2);
    }
</style>
</head>
