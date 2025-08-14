<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="ربات روبی چت - اولین و پیشرفته‌ترین ربات چت ناشناس هوشمند در روبیکا با قابلیت اتصال تصادفی به همشهری، هم‌جنسیت و هم‌سن. تجربه‌ای امن و متفاوت از گفتگوی ناشناس">
    <meta name="keywords" content="روبیکا چت, چت ناشناس, روبی چت, Ruby Chat, چت تصادفی, چت همشهری, چت هم‌جنسیت, روبیکا بات, چت روبیکا, چت بدون نام">
    <meta name="author" content="تیم روبی چت">
    <meta property="og:title" content="ربات روبی چت - چت ناشناس هوشمند در روبیکا">
    <meta property="og:description" content="تجربه‌ی متفاوت چت ناشناس و تصادفی با افراد هم‌شهری، هم‌جنسیت و هم‌سن در روبیکا با حفظ کامل حریم خصوصی">
    <meta property="og:url" content="https://rubika.ir/rubychat">
    <meta property="og:type" content="website">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://rubika.ir/rubychat">
    
   
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "ربات روبی چت",
      "url": "https://rubika.ir/rubychat",
      "description": "ربات چت ناشناس هوشمند در پیام‌رسان روبیکا با قابلیت تطبیق هوشمند کاربران",
      "operatingSystem": "Android, iOS",
      "applicationCategory": "CommunicationApplication"
    }
    </script>
    
    <title>ربات روبی چت | چت ناشناس و تصادفی در روبیکا | Ruby Chat</title>
    
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css">
    
  
    <style>
        :root {
            --primary-color: #E91E63;
            --primary-light: #F48FB1;
            --secondary-color: #9C27B0;
            --accent-color: #FF9800;
            --dark-color: #212121;
            --light-color: #F5F5F5;
            --gradient: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        body {
            font-family: 'Vazir', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark-color);
            overflow-x: hidden;
            line-height: 1.7;
            scroll-behavior: smooth;
        }
        
       
        .navbar {
            background-color: white;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }
        
        .navbar-brand i {
            font-size: 1.8rem;
            margin-left: 10px;
        }
        
        .nav-link {
            font-weight: 500;
            margin: 0 10px;
            color: var(--dark-color);
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--primary-color);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            right: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
        
       
        .btn {
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background: var(--gradient);
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            transition: width 0.3s ease;
            z-index: -1;
        }
        
        .btn-primary:hover::before {
            width: 100%;
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(233, 30, 99, 0.3);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(233, 30, 99, 0.3);
        }
        
      
        .hero {
            background: var(--gradient);
            color: white;
            padding: 180px 0 100px;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom center;
            background-size: cover;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            line-height: 1.3;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .hero-subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .hero-buttons .btn {
            margin-left: 15px;
        }
        
        .hero-image {
            position: relative;
            animation: float 6s ease-in-out infinite;
        }
        
        .hero-image .chat-illustration {
            width: 100%;
            height: auto;
            background: rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2);
        }
        
        .chat-illustration i {
            font-size: 10rem;
            color: white;
            opacity: 0.8;
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
      
        .section {
            padding: 100px 0;
            position: relative;
        }
        
        .section-white {
            background-color: white;
        }
        
        .section-light {
            background-color: #f5f6fa;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--dark-color);
            position: relative;
            display: inline-block;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 50%;
            height: 4px;
            background: var(--gradient);
            border-radius: 2px;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 60px;
            max-width: 700px;
            margin-right: auto;
            margin-left: auto;
        }
        
      
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            height: 100%;
            overflow: hidden;
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(233, 30, 99, 0.2);
        }
        
        .step-number {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 3rem;
            font-weight: 700;
            color: rgba(233, 30, 99, 0.1);
            line-height: 1;
        }
        
       
        .cta {
            background-color: var(--secondary-color);
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.1)" d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>') no-repeat bottom center;
            background-size: cover;
            z-index: 0;
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
        }
        
        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .cta-text {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 700px;
            margin-right: auto;
            margin-left: auto;
        }
        
      
        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 80px 0 30px;
        }
        
        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: white;
            display: flex;
            align-items: center;
        }
        
        .footer-logo i {
            font-size: 2rem;
            margin-left: 10px;
        }
        
        .footer-about {
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.7;
        }
        
        .footer-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 25px;
            color: white;
            position: relative;
        }
        
        .footer-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            right: 0;
            width: 40px;
            height: 3px;
            background: var(--gradient);
            border-radius: 2px;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            transition: all 0.3s ease;
            position: relative;
            padding-right: 15px;
        }
        
        .footer-links a:hover {
            color: white;
            padding-right: 20px;
            text-decoration: none;
        }
        
        .footer-links a::before {
            content: '\F285';
            font-family: bootstrap-icons;
            position: absolute;
            right: 0;
            top: 2px;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover::before {
            opacity: 1;
            right: -5px;
        }
        
        .footer-contact li {
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.7);
            position: relative;
            padding-right: 30px;
        }
        
        .footer-contact i {
            position: absolute;
            right: 0;
            top: 5px;
            color: var(--primary-color);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 30px;
            margin-top: 50px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }
        

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }
        
        .delay-1 { transition-delay: 0.2s; }
        .delay-2 { transition-delay: 0.4s; }
        .delay-3 { transition-delay: 0.6s; }
        .delay-4 { transition-delay: 0.8s; }
        
      
        @media (max-width: 1199px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .feature-icon {
                width: 70px;
                height: 70px;
                font-size: 1.8rem;
            }
        }
        
        @media (max-width: 991px) {
            .hero {
                padding: 150px 0 80px;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section {
                padding: 80px 0;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .card {
                margin-bottom: 20px;
            }
            
            .navbar-collapse {
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                margin-top: 15px;
                box-shadow: var(--shadow);
            }
        }
        
        @media (max-width: 767px) {
            .hero {
                padding: 130px 0 60px;
                text-align: center;
            }
            
            .hero-title {
                font-size: 2rem;
                margin-top: 20px;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .hero-buttons .btn {
                margin: 10px 0;
                display: block;
                width: 100%;
            }
            
            .hero-image {
                margin-top: 40px;
            }
            
            .chat-illustration i {
                font-size: 8rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .section-title::after {
                right: auto;
                left: auto;
                margin: 0 auto;
            }
            
            .footer-logo {
                justify-content: center;
            }
            
            .footer-about, .footer-links, .footer-contact {
                text-align: center;
            }
            
            .footer-title::after {
                right: auto;
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-links a::before {
                display: none;
            }
            
            .footer-links a:hover {
                padding-right: 15px;
            }
            
            .cta-title {
                font-size: 2rem;
            }
            
            .cta .btn {
                display: block;
                width: 100%;
                margin: 10px 0;
            }
        }
        
        @media (max-width: 575px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
            }
            
            .cta-title {
                font-size: 1.8rem;
            }
            
            .cta-text {
                font-size: 1rem;
            }
            
            .navbar-brand {
                font-size: 1.3rem;
            }
            
            .navbar-brand i {
                font-size: 1.5rem;
            }
            
            .btn, .btn-lg {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
        
     
        .btn-rubika {
            background-color: #00AEEF;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-rubika:hover {
            background-color: #0088cc;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 174, 239, 0.3);
        }
        
        .btn-outline-rubika {
            color: #00AEEF;
            border-color: #00AEEF;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
        }
        
        .btn-outline-rubika:hover {
            background-color: #00AEEF;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 174, 239, 0.3);
        }
    </style>
</head>
<body>
   
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-chat-dots"></i>
                روبی چت
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">امکانات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">نحوه کار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#matching">تنظیمات چت</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">نظرات کاربران</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="privacy.html" class="btn btn-outline-light me-2">
                        <i class="bi bi-shield-lock"></i> حریم خصوصی
                    </a>
                    <a href="https://rubika.ir/rubychat" class="btn btn-rubika me-2" target="_blank">
                        <i class="bi bi-people"></i> کانال ما
                    </a>
                    <a href="https://rubika.ir/rubychat_bot" class="btn btn-primary" target="_blank">
                        <i class="bi bi-robot"></i> شروع چت
                    </a>
                </div>
            </div>
        </div>
    </nav>

   
    <section class="hero" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title animate-on-scroll">
                            تجربه‌ی متفاوت چت ناشناس و تصادفی
                        </h1>
                        <p class="hero-subtitle animate-on-scroll delay-1">
                            با ربات روبی چت می‌توانید به صورت کاملا ناشناس با افراد هم‌شهری، هم‌جنسیت و هم‌سن خود گفتگو کنید. محیطی امن و جذاب برای آشنایی و گفتگوی آزاد.
                        </p>
                        <div class="hero-buttons animate-on-scroll delay-2">
                            <a href="https://rubika.ir/rubychat_bot" class="btn btn-primary btn-lg" target="_blank">
                                <i class="bi bi-robot"></i> شروع گفتگو
                            </a>
                            <a href="https://rubika.ir/rubychat" class="btn btn-rubika btn-lg me-2" target="_blank">
                                <i class="bi bi-people"></i> کانال روبیکا
                            </a>
                            <a href="privacy.html" class="btn btn-outline-light btn-lg mt-2">
                                <i class="bi bi-shield-check"></i> قوانین و حریم خصوصی
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image animate-on-scroll delay-1">
                        <div class="chat-illustration text-center">
                            <i class="bi bi-chat-square-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="section section-white" id="features">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-on-scroll">
                    امکانات ویژه روبی چت
                </h2>
                <p class="section-subtitle animate-on-scroll delay-1">
                    روبی چت با ارائه امکانات منحصر به فرد، تجربه‌ای متفاوت از چت ناشناس را برای شما فراهم می‌کند
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card animate-on-scroll delay-1">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <h3 class="feature-title">چت کاملا ناشناس</h3>
                            <p class="feature-text">
                                حفظ حریم خصوصی شما اولویت ماست. هیچ اطلاعات شخصی شما با طرف مقابل به اشتراک گذاشته نمی‌شود.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card animate-on-scroll delay-2">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3 class="feature-title">اتصال هوشمند</h3>
                            <p class="feature-text">
                                امکان چت با همشهری‌ها، هم‌استانی‌ها و افراد نزدیک به شما برای تجربه‌ای واقعی‌تر و جذاب‌تر.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card animate-on-scroll delay-3">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-gender-ambiguous"></i>
                            </div>
                            <h3 class="feature-title">فیلتر جنسیت</h3>
                            <p class="feature-text">
                                می‌توانید ترجیح دهید فقط با دختران، فقط با پسران یا هر دو جنسیت گفتگو کنید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card animate-on-scroll delay-1">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="feature-title">هم‌سن و سال</h3>
                            <p class="feature-text">
                                با افراد هم‌سن خود چت کنید تا موضوعات مشترک بیشتری برای گفتگو داشته باشید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card animate-on-scroll delay-2">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <h3 class="feature-title">محیط گفتگوی امن</h3>
                            <p class="feature-text">
                                سیستم گزارش و مسدودسازی پیشرفته برای حفظ امنیت و آرامش شما در محیط چت.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card animate-on-scroll delay-3">
                        <div class="card-body text-center">
                            <div class="feature-icon">
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                            <h3 class="feature-title">سرعت بالا</h3>
                            <p class="feature-text">
                                اتصال سریع و بدون تاخیر به بهترین سرورها برای تجربه‌ای روان و لذت‌بخش.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="section section-light" id="how-it-works">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-on-scroll">
                    روبی چت چگونه کار می‌کند؟
                </h2>
                <p class="section-subtitle animate-on-scroll delay-1">
                    تنها در ۳ مرحله ساده می‌توانید چت ناشناس را شروع کنید
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card step-card animate-on-scroll delay-1">
                        <div class="card-body">
                            <div class="step-number">۱</div>
                            <h3 class="step-title">ربات را شروع کنید</h3>
                            <p class="step-text">
                                روی دکمه شروع گفتگو کلیک کنید یا ربات را در روبیکا با آدرس 
                                <a href="https://rubika.ir/rubychat_bot" target="_blank">rubika.ir/rubychat_bot</a> 
                                پیدا کنید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card step-card animate-on-scroll delay-2">
                        <div class="card-body">
                            <div class="step-number">۲</div>
                            <h3 class="step-title">ترجیحات خود را انتخاب کنید</h3>
                            <p class="step-text">
                                جنسیت، محدوده سنی، شهر و استان مورد نظر خود برای چت را انتخاب کنید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card step-card animate-on-scroll delay-3">
                        <div class="card-body">
                            <div class="step-number">۳</div>
                            <h3 class="step-title">شروع گفتگو</h3>
                            <p class="step-text">
                                سیستم به صورت هوشمند فردی متناسب با انتخاب‌های شما پیدا می‌کند و چت آغاز می‌شود.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="section section-white" id="matching">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-on-scroll">
                    تنظیمات هوشمند چت
                </h2>
                <p class="section-subtitle animate-on-scroll delay-1">
                    می‌توانید چت خود را دقیقا بر اساس ترجیحات شخصی خود تنظیم کنید
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card matching-option animate-on-scroll delay-1">
                        <div class="card-body text-center">
                            <div class="matching-icon">
                                <i class="bi bi-gender-male"></i>
                            </div>
                            <h3 class="matching-title">چت با پسران</h3>
                            <p class="matching-text">
                                اگر ترجیح می‌دهید فقط با پسران گفتگو کنید، این گزینه را انتخاب کنید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card matching-option animate-on-scroll delay-2">
                        <div class="card-body text-center">
                            <div class="matching-icon">
                                <i class="bi bi-gender-female"></i>
                            </div>
                            <h3 class="matching-title">چت با دختران</h3>
                            <p class="matching-text">
                                اگر می‌خواهید فقط با دختران چت کنید، این گزینه برای شماست.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card matching-option animate-on-scroll delay-3">
                        <div class="card-body text-center">
                            <div class="matching-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3 class="matching-title">همشهری‌ها</h3>
                            <p class="matching-text">
                                با افراد هم‌شهر یا هم‌استان خود چت کنید و از موضوعات مشترک لذت ببرید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card matching-option animate-on-scroll delay-4">
                        <div class="card-body text-center">
                            <div class="matching-icon">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="matching-title">هم‌سن و سال</h3>
                            <p class="matching-text">
                                محدوده سنی مورد نظر خود را انتخاب کنید تا با افراد هم‌سن خود چت کنید.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
    <section class="section section-light" id="testimonials">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title animate-on-scroll">
                    نظرات کاربران روبی چت
                </h2>
                <p class="section-subtitle animate-on-scroll delay-1">
                    تجربه‌های واقعی کاربران از چت ناشناس با روبی چت
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card testimonial-card animate-on-scroll delay-1">
                        <div class="card-body">
                            <p class="testimonial-text">
                                بهترین ربات چت ناشناسیه که تاحالا استفاده کردم. مخصوصا امکان چت با همشهری‌ها واقعا عالیه!
                            </p>
                            <div class="testimonial-author">
                                <div class="user-icon">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <div class="author-info">
                                    <h5>سارا</h5>
                                    <p>تهران</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card animate-on-scroll delay-2">
                        <div class="card-body">
                            <p class="testimonial-text">
                                محیط امن و حرفه‌ای داره. می‌تونم با خیال راحت با افراد هم‌سن خودم چت کنم.
                            </p>
                            <div class="testimonial-author">
                                <div class="user-icon">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <div class="author-info">
                                    <h5>علی</h5>
                                    <p>مشهد</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card testimonial-card animate-on-scroll delay-3">
                        <div class="card-body">
                            <p class="testimonial-text">
                                سرعت اتصال فوق‌العاده‌ست و فیلتر جنسیت کمک زیادی به پیدا کردن دوستان هم‌فکر می‌کنه.
                            </p>
                            <div class="testimonial-author">
                                <div class="user-icon">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                                <div class="author-info">
                                    <h5>نازنین</h5>
                                    <p>اصفهان</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title animate-on-scroll">
                    آماده‌ی تجربه‌ی چت ناشناس هوشمند هستید؟
                </h2>
                <p class="cta-text animate-on-scroll delay-1">
                    همین حالا ربات روبی چت را در روبیکا شروع کنید و با افراد هم‌فکر خود آشنا شوید.
                </p>
                <div class="animate-on-scroll delay-2">
                    <a href="https://rubika.ir/rubychat_bot" class="btn btn-light btn-lg me-2" target="_blank">
                        <i class="bi bi-robot"></i> شروع چت ناشناس
                    </a>
                    <a href="https://rubika.ir/rubychat" class="btn btn-rubika btn-lg me-2" target="_blank">
                        <i class="bi bi-people"></i> کانال روبیکا
                    </a>
                    <a href="privacy.html" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-shield-check"></i> قوانین و حریم خصوصی
                    </a>
                </div>
            </div>
        </div>
    </section>

  
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="#" class="footer-logo">
                        <i class="bi bi-chat-dots"></i>
                        روبی چت
                    </a>
                    <p class="footer-about">
                        روبی چت یک ربات چت ناشناس هوشمند در پیام‌رسان روبیکا است که به شما امکان می‌دهد به صورت تصادفی و با حفظ حریم خصوصی با افراد جدید آشنا شوید.
                    </p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h3 class="footer-title">لینک‌های سریع</h3>
                    <ul class="footer-links">
                        <li><a href="#home">خانه</a></li>
                        <li><a href="#features">امکانات</a></li>
                        <li><a href="#how-it-works">نحوه کار</a></li>
                        <li><a href="#matching">تنظیمات چت</a></li>
                        <li><a href="#testimonials">نظرات کاربران</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-title">لینک‌های مفید</h3>
                    <ul class="footer-links">
                        <li><a href="https://rubika.ir/rubychat_bot" target="_blank">شروع چت در روبیکا</a></li>
                        <li><a href="https://rubika.ir/rubychat" target="_blank">کانال روبی چت</a></li>
                        <li><a href="https://rubika.ir/arsham_kurd_30" target="_blank">پشتیبانی روبیکا</a></li>
                        <li><a href="privacy.html">قوانین و حریم خصوصی</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-title">تماس با ما</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="bi bi-robot"></i>
                            <span>@rubychat_bot</span>
                        </li>
                        <li>
                            <i class="bi bi-people"></i>
                            <span>@rubychat</span>
                        </li>
                        <li>
                            <i class="bi bi-shield-lock"></i>
                            <span><a href="privacy.html" style="color: rgba(255,255,255,0.7);">صفحه حریم خصوصی</a></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright text-center">
                <p>© ۲۰۲۳ روبی چت. تمام حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

      
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-on-scroll');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;
                
                if (elementPosition < screenPosition) {
                    element.classList.add('animated');
                }
            });
        }

       
        window.addEventListener('load', animateOnScroll);
        window.addEventListener('scroll', animateOnScroll);
    </script>
</body>
</html>