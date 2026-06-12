<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Union Physical Academy Basuara - Premium Training Hub</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ==========================================================================
           1. ROOT VARIABLES & THEME SETUP
           ========================================================================== */
        :root {
            --primary: #ff4500;         /* Flame Orange - Energy & Action */
            --primary-hover: #e03d00;
            --secondary: #111111;       /* Deep Tactical Black */
            --bg-dark: #070707;          /* Pitch Black Background */
            --bg-card: #121212;          /* Matte Black for Cards */
            --bg-card-hover: #1a1a1a;
            --text-main: #ffffff;        /* Pure White */
            --text-muted: #b3b3b3;       /* Athletic Gray */
            --accent-green: #00ff66;     /* Success Green */
            --transition-fast: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --transition-slow: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ==========================================================================
           2. GLOBAL RESET & BASE STYLES
           ========================================================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            list-style: none;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
            overflow-x: hidden;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-main);
            line-height: 1.6;
        }

        /* Custom Premium Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-dark);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--primary);
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-hover);
        }

        /* Generic Utility Classes for Layout */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 25px;
        }

        .section-padding {
            padding: 100px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-family: 'Oswald', sans-serif;
            font-size: 3rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--text-main);
            position: relative;
            display: inline-block;
        }

        .section-header h2 span {
            color: var(--primary);
        }

        .section-header p {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-top: 15px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ==========================================================================
           3. ADVANCED ANIMATION UTILITIES (Intersection Observer Engine)
           ========================================================================== */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: var(--transition-slow);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: var(--transition-slow);
        }

        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(50px);
            transition: var(--transition-slow);
        }

        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .scale-up {
            opacity: 0;
            transform: scale(0.9);
            transition: var(--transition-slow);
        }

        .scale-up.active {
            opacity: 1;
            transform: scale(1);
        }

        /* Staggered Delay Utilities */
        .delay-1 { transition-delay: 0.1s; }
        .delay-2 { transition-delay: 0.2s; }
        .delay-3 { transition-delay: 0.3s; }
        .delay-4 { transition-delay: 0.4s; }

        /* ==========================================================================
           4. TOP HEADER BAR & NAVIGATION MENU
           ========================================================================== */
        .top-bar {
            background-color: var(--secondary);
            padding: 10px 0;
            font-size: 0.85rem;
            border-bottom: 1px solid rgba(255,69,0,0.2);
        }

        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .top-info span {
            margin-right: 20px;
            color: var(--text-muted);
        }

        .top-info i {
            color: var(--primary);
            margin-right: 6px;
        }

        .top-flash {
            color: var(--accent-green);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: pulseText 2s infinite;
        }

        @keyframes pulseText {
            0% { opacity: 0.6; }
            50% { opacity: 1; }
            100% { opacity: 0.6; }
        }

        /* Premium Floating Navigation Menu */
        header {
            position: fixed;
            top: 40px; /* Below top bar initially */
            left: 0;
            width: 100%;
            z-index: 999;
            transition: var(--transition-fast);
        }

        header.sticky {
            top: 0;
            background-color: rgba(7, 7, 7, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border-bottom: 1px solid rgba(255,69,0,0.1);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            transition: var(--transition-fast);
        }

        header.sticky .navbar {
            padding: 15px 0;
        }

        .logo {
            font-family: 'Oswald', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-main);
        }

        .logo span {
            color: var(--primary);
        }

        .nav-menu {
            display: flex;
            align-items: center;
        }

        .nav-item {
            margin-left: 35px;
        }

        .nav-link {
            color: var(--text-main);
            font-weight: 500;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            padding: 5px 0;
            transition: var(--transition-fast);
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary);
            transition: var(--transition-fast);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-btn {
            background-color: var(--primary);
            color: var(--text-main);
            padding: 10px 22px;
            border-radius: 4px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(255, 69, 0, 0.3);
            transition: var(--transition-fast);
        }

        .nav-btn:hover {
            background-color: transparent;
            color: var(--primary);
            box-shadow: 0 4px 15px rgba(255, 69, 0, 0.1);
            border: 1px solid var(--primary);
            transform: translateY(-2px);
        }

        /* Responsive Mobile Toggle Bar (Hamburger Menu) */
        .hamburger {
            display: none;
            cursor: pointer;
            background: transparent;
        }

        .bar {
            display: block;
            width: 28px;
            height: 3px;
            margin: 5px auto;
            transition: var(--transition-fast);
            background-color: var(--text-main);
            border-radius: 2px;
        }

        /* Hamburger Active State Animations */
        .hamburger.active .bar:nth-child(2) {
            opacity: 0;
        }
        .hamburger.active .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
            background-color: var(--primary);
        }
        .hamburger.active .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
            background-color: var(--primary);
        }

        /* ==========================================================================
           5. HERO LANDING SECTION
           ========================================================================== */
        .hero {
            height: 100vh;
            min-height: 700px;
            background: linear-gradient(135deg, rgba(7,7,7,0.95) 30%, rgba(255,69,0,0.1) 100%), 
                        url('https://images.unsplash.com/photo-1517838357463-d25dfeac3438?q=80&w=1920&auto=format&fit=crop') center/cover no-repeat;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 150px;
            background: linear-gradient(to top, var(--bg-dark), transparent);
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            max-width: 800px;
        }

        .hero-badge {
            background-color: rgba(255, 69, 0, 0.15);
            border: 1px solid var(--primary);
            color: var(--primary);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            display: inline-block;
            margin-bottom: 25px;
            animation: fadeInDown 1s ease;
        }

        .hero h1 {
            font-family: 'Oswald', sans-serif;
            font-size: 4.5rem;
            line-height: 1.1;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 25px;
            animation: fadeInLeft 1s ease 0.2s both;
        }

        .hero h1 span {
            color: var(--primary);
            position: relative;
        }

        .hero p {
            font-size: 1.2rem;
            color: var(--text-muted);
            margin-bottom: 40px;
            max-width: 650px;
            animation: fadeInLeft 1s ease 0.4s both;
        }

        .hero-btns {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease 0.6s both;
        }

        .btn-primary {
            background-color: var(--primary);
            color: var(--text-main);
            padding: 15px 35px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 4px;
            box-shadow: 0 5px 20px rgba(255, 69, 0, 0.4);
            transition: var(--transition-fast);
            display: inline-block;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 69, 0, 0.6);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--text-main);
            padding: 15px 35px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 4px;
            border: 2px solid rgba(255,255,255,0.2);
            transition: var(--transition-fast);
            display: inline-block;
        }

        .btn-secondary:hover {
            border-color: var(--primary);
            background-color: rgba(255, 69, 0, 0.05);
            color: var(--primary);
            transform: translateY(-3px);
        }

        /* Core CSS Animations for Landing */
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(40px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-40px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ==========================================================================
           6. TRAINING ACADEMY PROGRAMS SECTION
           ========================================================================== */
        .programs {
            background-color: var(--bg-dark);
            position: relative;
        }

        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .program-card {
            background-color: var(--bg-card);
            border: 1px solid rgba(255,255,255,0.03);
            border-radius: 8px;
            padding: 40px 30px;
            position: relative;
            overflow: hidden;
            transition: var(--transition-fast);
        }

        .program-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background-color: var(--primary);
            transform: scaleX(0);
            transform-origin: left;
            transition: var(--transition-fast);
        }

        .program-card:hover::before {
            transform: scaleX(1);
        }

        .program-card:hover {
            transform: translateY(-10px);
            background-color: var(--bg-card-hover);
            box-shadow: 0 15px 40px rgba(0,0,0,0.6);
            border-color: rgba(255, 69, 0, 0.15);
        }

        .program-icon {
            width: 70px;
            height: 70px;
            background-color: rgba(255, 69, 0, 0.1);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            transition: var(--transition-fast);
        }

        .program-icon i {
            font-size: 2rem;
            color: var(--primary);
        }

        .program-card:hover .program-icon {
            background-color: var(--primary);
        }

        .program-card:hover .program-icon i {
            color: var(--text-main);
            transform: scale(1.1);
        }

        .program-card h3 {
            font-family: 'Oswald', sans-serif;
            font-size: 1.6rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .program-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .program-features {
            border-top: 1px solid rgba(255,255,255,0.05);
            padding-top: 15px;
        }

        .program-features li {
            font-size: 0.9rem;
            color: var(--text-main);
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .program-features li i {
            color: var(--accent-green);
            margin-right: 10px;
            font-size: 0.85rem;
        }

        /* ==========================================================================
           7. INTERACTIVE ADMISSION ELIGIBILITY CHECKER
           ========================================================================== */
        .eligibility-checker {
            background: linear-gradient(rgba(7,7,7,0.9), rgba(7,7,7,0.95)), 
                        url('https://images.unsplash.com/photo-1486218119243-13883505764c?q=80&w=1200&auto=format&fit=crop') center/cover fixed;
        }

        .checker-box {
            background-color: var(--bg-card);
            border: 1px solid rgba(255, 69, 0, 0.2);
            border-radius: 12px;
            padding: 45px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }

        .checker-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            align-items: flex-end;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 10px;
            color: var(--text-muted);
            letter-spacing: 0.5px;
        }

        .form-group select, .form-group input {
            background-color: var(--secondary);
            border: 1px solid rgba(255,255,255,0.1);
            color: var(--text-main);
            padding: 14px;
            border-radius: 6px;
            font-size: 1rem;
            font-family: inherit;
            transition: var(--transition-fast);
        }

        .form-group select:focus, .form-group input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 10px rgba(255, 69, 0, 0.2);
        }

        .checker-btn {
            background-color: var(--primary);
            color: var(--text-main);
            padding: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 6px;
            cursor: pointer;
            transition: var(--transition-fast);
        }

        .checker-btn:hover {
            background-color: var(--primary-hover);
        }

        .checker-result {
            margin-top: 35px;
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,0.08);
            text-align: center;
            display: none;
        }

        .result-title {
            font-family: 'Oswald', sans-serif;
            font-size: 1.8rem;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .result-pass { color: var(--accent-green); }
        .result-fail { color: #ff3333; }

        .result-text {
            color: var(--text-muted);
            font-size: 1rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* ==========================================================================
           8. TIMETABLE & DAILY ROUTINE SCHEDULE
           ========================================================================== */
        .timetable-section {
            background-color: #0b0b0b;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.05);
            box-shadow: 0 15px 40px rgba(0,0,0,0.4);
        }

        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 700px;
        }

        .schedule-table th, .schedule-table td {
            padding: 20px 25px;
        }

        .schedule-table th {
            background-color: var(--secondary);
            font-family: 'Oswald', sans-serif;
            font-size: 1.2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--primary);
            border-bottom: 2px solid var(--primary);
        }

        .schedule-table tr {
            border-bottom: 1px solid rgba(255,255,255,0.03);
            transition: var(--transition-fast);
        }

        .schedule-table tr:nth-child(even) {
            background-color: rgba(255,255,255,0.01);
        }

        .schedule-table tr:hover {
            background-color: rgba(255, 69, 0, 0.03);
        }

        .time-slot {
            font-weight: 700;
            color: var(--text-main);
            font-family: 'Oswald', sans-serif;
            font-size: 1.1rem;
        }

        .activity-tag {
            display: inline-block;
            padding: 4px 12px;
            background-color: rgba(255,255,255,0.05);
            border-radius: 4px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
        }

        .activity-tag.field {
            background-color: rgba(255, 69, 0, 0.1);
            color: var(--primary);
            border: 1px solid rgba(255, 69, 0, 0.2);
        }

        /* ==========================================================================
           9. STATS COUNTER & ACHIVEMENTS
           ========================================================================== */
        .stats-bar {
            background-color: var(--secondary);
            padding: 60px 0;
            border-top: 1px solid rgba(255,69,0,0.1);
            border-bottom: 1px solid rgba(255,69,0,0.1);
        }

        .stats-grid {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
        }

        .stat-item {
            text-align: center;
            flex: 1;
            min-width: 200px;
        }

        .stat-number {
            font-family: 'Oswald', sans-serif;
            font-size: 3.8rem;
            font-weight: 700;
            color: var(--primary);
            line-height: 1;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 1px;
            color: var(--text-main);
        }

        /* ==========================================================================
           10. ACORDION FAQ SECTION
           ========================================================================== */
        .faq {
            background-color: var(--bg-dark);
        }

        .faq-wrapper {
            max-width: 800px;
            margin: 0 auto;
        }

        .faq-item {
            background-color: var(--bg-card);
            border: 1px solid rgba(255,255,255,0.03);
            margin-bottom: 15px;
            border-radius: 6px;
            overflow: hidden;
            transition: var(--transition-fast);
        }

        .faq-header {
            padding: 22px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            user-select: none;
            transition: var(--transition-fast);
        }

        .faq-header h3 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-main);
        }

        .faq-icon {
            font-size: 1.2rem;
            color: var(--primary);
            transition: var(--transition-fast);
        }

        .faq-content {
            max-height: 0;
            overflow: hidden;
            padding: 0 30px;
            transition: max-height 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: rgba(0,0,0,0.2);
        }

        .faq-content p {
            padding-bottom: 25px;
            color: var(--text-muted);
            font-size: 0.95rem;
            line-height: 1.7;
        }

        /* Active FAQ State classes handled by JS */
        .faq-item.active {
            border-color: rgba(255, 69, 0, 0.2);
            box-shadow: 0 10px 20px rgba(0,0,0,0.3);
        }

        .faq-item.active .faq-icon {
            transform: rotate(180deg);
        }

        /* ==========================================================================
           11. HIGH CONVERSION CONTACT & REGISTRATION FORM
           ========================================================================== */
        .contact-section {
            background-color: #0b0b0b;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 50px;
        }

        .contact-details h3 {
            font-family: 'Oswald', sans-serif;
            font-size: 2rem;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .contact-details p {
            color: var(--text-muted);
            margin-bottom: 35px;
        }

        .info-link-card {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            background-color: var(--bg-card);
            padding: 20px;
            border-radius: 8px;
            border-left: 3px solid var(--primary);
        }

        .info-link-icon {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 69, 0, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .info-link-icon i {
            color: var(--primary);
            font-size: 1.3rem;
        }

        .info-link-text h4 {
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--text-main);
        }

        .info-link-text p {
            margin-bottom: 0;
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-top: 5px;
        }

        .contact-form-wrapper {
            background-color: var(--bg-card);
            padding: 45px;
            border-radius: 8px;
            border: 1px solid rgba(255,255,255,0.02);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .input-box {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .input-box input, .input-box textarea {
            background-color: var(--secondary);
            border: 1px solid rgba(255,255,255,0.08);
            color: var(--text-main);
            padding: 15px;
            border-radius: 4px;
            font-family: inherit;
            font-size: 0.95rem;
            transition: var(--transition-fast);
        }

        .input-box input:focus, .input-box textarea:focus {
            border-color: var(--primary);
        }

        .submit-btn {
            background-color: var(--primary);
            color: var(--text-main);
            width: 100%;
            padding: 16px;
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition-fast);
            box-shadow: 0 5px 15px rgba(255, 69, 0, 0.3);
        }

        .submit-btn:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
        }

        /* ==========================================================================
           12. ULTIMATE 4-COLUMN MEGA FOOTER
           ========================================================================== */
        footer {
            background-color: #030303;
            border-top: 2px solid rgba(255, 69, 0, 0.2);
            padding-top: 80px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr 0.8fr 1.2fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        .footer-column h3 {
            font-family: 'Oswald', sans-serif;
            font-size: 1.4rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 25px;
            color: var(--text-main);
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 45px;
            height: 3px;
            background-color: var(--primary);
        }

        .footer-about p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 25px;
            line-height: 1.7;
        }

        .footer-socials a {
            display: inline-flex;
            width: 40px;
            height: 40px;
            background-color: var(--secondary);
            color: var(--text-main);
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            transition: var(--transition-fast);
            border: 1px solid rgba(255,255,255,0.05);
        }

        .footer-socials a:hover {
            background-color: var(--primary);
            color: var(--text-main);
            transform: translateY(-5px) rotate(360deg);
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: var(--text-muted);
            font-size: 0.95rem;
            transition: var(--transition-fast);
            display: inline-block;
        }

        .footer-links a:hover {
            color: var(--primary);
            transform: translateX(5px);
        }

        .footer-links a i {
            margin-right: 8px;
            font-size: 0.8rem;
            color: var(--primary);
        }

        .footer-newsletter p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .newsletter-form {
            display: flex;
            position: relative;
        }

        .newsletter-form input {
            width: 100%;
            padding: 14px 60px 14px 16px;
            background-color: var(--secondary);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 4px;
            color: var(--text-main);
            font-size: 0.9rem;
        }

        .newsletter-form input:focus {
            border-color: var(--primary);
        }

        .newsletter-btn {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 52px;
            background-color: var(--primary);
            color: var(--text-main);
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            transition: var(--transition-fast);
        }

        .newsletter-btn:hover {
            background-color: var(--primary-hover);
        }

        .footer-bottom {
            background-color: var(--bg-dark);
            padding: 25px 0;
            border-top: 1px solid rgba(255,255,255,0.04);
            text-align: center;
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .footer-bottom p span {
            color: var(--primary);
            font-weight: 600;
        }

        /* Back To Top Floating Action Button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 45px;
            height: 45px;
            background-color: var(--primary);
            color: var(--text-main);
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            z-index: 998;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition-fast);
            box-shadow: 0 5px 15px rgba(0,0,0,0.5);
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            background-color: var(--primary-hover);
            transform: translateY(-5px);
        }

        /* ==========================================================================
           13. COMPLEX MEDIA QUERIES FOR ULTRALIGHT RESPONSIVENESS
           ========================================================================== */
        @media (max-width: 1024px) {
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 30px;
            }
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            .hero h1 {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 768px) {
            html { font-size: 14px; }
            .top-bar { display: none; } /* Hide top-bar on mobile for cleaner look */
            header { top: 0; }
            
            /* Toggle Menu Switch System */
            .hamburger {
                display: block;
                z-index: 1001;
            }

            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                max-width: 350px;
                height: 100vh;
                background-color: rgba(10,10,10,0.98);
                backdrop-filter: blur(15px);
                flex-direction: column;
                justify-content: center;
                align-items: flex-start;
                padding: 50px;
                transition: var(--transition-slow);
                box-shadow: -10px 0 30px rgba(0,0,0,0.7);
                border-left: 1px solid rgba(255,69,0,0.1);
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-item {
                margin-left: 0;
                margin-bottom: 30px;
                width: 100%;
            }

            .nav-link {
                font-size: 1.3rem;
                display: block;
            }

            .nav-btn {
                display: block;
                text-align: center;
                width: 100%;
            }

            .hero h1 {
                font-size: 2.8rem;
            }
            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }
            .checker-form {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .section-header h2 {
                font-size: 2.3rem;
            }
        }
    </style>
</head>
<body>

    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="top-info">
                <span><i class="fa-solid fa-location-dot"></i> Basuara, Darbhanga, Bihar</span>
                
            </div>
            <div class="top-flash">
                <i class="fa-solid fa-bullhorn"></i> New Batch: Bihar Police Constable & SI Special Physical Batch Started!
            </div>
        </div>
    </div>

    <header id="main-header">
        <div class="container navbar">
            <a href="#home" class="logo">Union <span>Physical</span></a>
            
            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#programs" class="nav-link">Programs</a></li>
                <li class="nav-item"><a href="#eligibility" class="nav-link">Check Eligibility</a></li>
                <li class="nav-item"><a href="#schedule" class="nav-link">Schedule</a></li>
                <li class="nav-item"><a href="#faq" class="nav-link">FAQs</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link nav-btn">Join Academy</a></li>
            </ul>

            <button class="hamburger" id="hamburger-toggle" aria-label="Menu Toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </header>

    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">No.1 Physical Academy in Area</span>
                <h1>Vardi Paane Ka <span>Sapna</span> Ab Hoga Poora!</h1>
                <p>Union Physical Academy Basuara mein hum aapko Indian Army, Bihar Police, Daroga, SSC GD aur paramilitary forces ke rigorous standards ke liye taiyar karte hain. Humari grind aapko champion banayegi.</p>
                <div class="hero-btns">
                    <a href="#contact" class="btn-primary">Start Training Today</a>
                    <a href="#programs" class="btn-secondary">Explore Programs</a>
                </div>
            </div>
        </div>
    </section>

    <div class="stats-bar">
        <div class="container stats-grid">
            <div class="stat-item">
                <div class="stat-number">850+</div>
                <div class="stat-label">Total Selections</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">95%</div>
                <div class="stat-label">Success Rate</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">10+</div>
                <div class="stat-label">Expert Instructors</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">5+ Check</div>
                <div class="stat-label">Weekly Mock Tests</div>
            </div>
        </div>
    </div>

    <section class="section-padding reveal" id="about">
        <div class="container">
            <div class="contact-grid">
                <div class="scale-up">
                    <img src="https://images.unsplash.com/photo-1548690312-e3b507d8c110?q=80&w=600&auto=format&fit=crop" alt="Training" style="width: 100%; border-radius: 8px; border: 2px solid var(--primary);">
                </div>
                <div>
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <h2>Hum Hain <span>Union Academy</span></h2>
                    </div>
                    <p style="color: var(--text-muted); margin-bottom: 20px; font-size: 1.05rem;">Basuara mein sthit, Union Physical Academy Bihar ke un sabhi yuvao ka vishwasniya sathi hai jo desh aur rajya ki seva mein apna career banana chahte hain. Hum sirf running nahi karate, balki pure physical parameters aur mental discipline ko build karte hain.</p>
                    <ul class="program-features" style="border: none; padding: 0;">
                        <li style="font-size: 1.05rem; margin-bottom: 15px;"><i class="fa-solid fa-square-check"></i> Standard 1600m Mud Track Practice</li>
                        <li style="font-size: 1.05rem; margin-bottom: 15px;"><i class="fa-solid fa-square-check"></i> High Jump & Long Jump Special Sandpits</li>
                        <li style="font-size: 1.05rem; margin-bottom: 15px;"><i class="fa-solid fa-square-check"></i> Chest Expansion & Weight Balancing Guide</li>
                        <li style="font-size: 1.05rem; margin-bottom: 15px;"><i class="fa-solid fa-square-check"></i> Strict Retest & Progress Tracker Cards</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="programs section-padding" id="programs">
        <div class="container">
            <div class="section-header reveal">
                <h2>Our Elite <span>Training</span> Squads</h2>
                <p>Aapke vision ke mutabiq targeted physical drill formats jo har ek core recruitment exam ko clear karne ke liye fully optimized hain.</p>
            </div>
            
            <div class="program-grid">
                <div class="program-card reveal delay-1">
                    <div class="program-icon">
                        <i class="fa-solid fa-person-military-rifle"></i>
                    </div>
                    <h3>Indian Army (Agniveer)</h3>
                    <p>Rigorous 1600m endurance training under specific time bounds, beam (pull-ups), and balancing setups matching army standards.</p>
                    <ul class="program-features">
                        <li><i class="fa-solid fa-check"></i> Target Time: Under 5:30 Mins</li>
                        <li><i class="fa-solid fa-check"></i> 10/10 Perfect Beam Guide</li>
                        <li><i class="fa-solid fa-check"></i> 9-Feet Ditch Crossing Drill</li>
                    </ul>
                </div>
                <div class="program-card reveal delay-2">
                    <div class="program-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3>Bihar Police & Daroga (SI)</h3>
                    <p>Specialized focused coaching targeting maximum score conversion metrics on High Jump, Shot Put (Gola Fek), and Sprinting dynamics.</p>
                    <ul class="program-features">
                        <li><i class="fa-solid fa-check"></i> High Jump Tigers/Scissor Methods</li>
                        <li><i class="fa-solid fa-check"></i> 16-Pound Shot Put Distance Drills</li>
                        <li><i class="fa-solid fa-check"></i> Height & Chest Expansion Tracker</li>
                    </ul>
                </div>
                <div class="program-card reveal delay-3">
                    <div class="program-icon">
                        <i class="fa-solid fa-person-running"></i>
                    </div>
                    <h3>SSC GD / Paramilitary</h3>
                    <p>Long-distance steady cardiovascular conditioning routines meticulously mapped out for clearing the standard 5KM parameter run formats.</p>
                    <ul class="program-features">
                        <li><i class="fa-solid fa-check"></i> 5 KM Pacing Strategy Matrices</li>
                        <li><i class="fa-solid fa-check"></i> Cardio Recovery Monitoring</li>
                        <li><i class="fa-solid fa-check"></i> Stamina Loading Exercises</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="eligibility-checker section-padding" id="eligibility">
        <div class="container">
            <div class="section-header reveal">
                <h2>Check Your <span>Recruitment</span> Eligibility</h2>
                <p>Apne accurate metrics bhariye aur dekhiye ki aap desired uniform forces physical standards ke criteria me fit baithte hain ya nahi!</p>
            </div>

            <div class="checker-box reveal scale-up">
                <div class="checker-form">
                    <div class="form-group">
                        <label for="target-exam">Target Force/Exam</label>
                        <select id="target-exam">
                            <option value="bihar-police">Bihar Police Constable</option>
                            <option value="bihar-daroga">Bihar Daroga (SI)</option>
                            <option value="indian-army">Indian Army (General)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="height">Height (in CM)</label>
                        <input type="number" id="height" placeholder="e.g. 165">
                    </div>
                    <div class="form-group">
                        <button class="checker-btn" onclick="checkEligibility()">Verify Now</button>
                    </div>
                </div>

                <div class="checker-result" id="checker-result">
                    <h3 class="result-title" id="result-status-title">Status Result</h3>
                    <p class="result-text" id="result-status-desc"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="timetable-section section-padding" id="schedule">
        <div class="container">
            <div class="section-header reveal">
                <h2>Our Daily <span>Routine</span> Chart</h2>
                <p>Discipline hi vardi ki neev hai. Humara systematically timed schedule har ek cadet ko maximum physical throughput achieve karne me help karta hai.</p>
            </div>

            <div class="table-responsive reveal scale-up">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th>Timing Slot</th>
                            <th>Training Drill Core Module</th>
                            <th>Intensity Focus</th>
                            <th>Location Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="time-slot">04:30 AM - 05:00 AM</td>
                            <td>Warm-up & Joint Mobility Drills</td>
                            <td><span class="activity-tag">Low-Medium</span></td>
                            <td>Main Field Assembly Area</td>
                        </tr>
                        <tr>
                            <td class="time-slot">05:00 AM - 06:15 AM</td>
                            <td>1600m Endurance / 5KM Cardio Run Splits</td>
                            <td><span class="activity-tag field">Extreme Peak</span></td>
                            <td>Mud Running Track</td>
                        </tr>
                        <tr>
                            <td class="time-slot">06:15 AM - 07:15 AM</td>
                            <td>High Jump, Long Jump & Shot Put Drills</td>
                            <td><span class="activity-tag">Skill Specific</span></td>
                            <td>Sandpits / Throwing Arena</td>
                        </tr>
                        <tr>
                            <td class="time-slot">07:15 AM - 07:45 AM</td>
                            <td>Core Cooling Down, Stretching & Diet Check</td>
                            <td><span class="activity-tag">Recovery</span></td>
                            <td>Open Pavilion Area</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="faq section-padding" id="faq">
        <div class="container">
            <div class="section-header reveal">
                <h2>Frequently Asked <span>Questions</span></h2>
                <p>Academy join karne se pehle ke aam sawalon ke seedhe aur sateek jawab yahan padhiye.</p>
            </div>

            <div class="faq-wrapper">
                <div class="faq-item reveal delay-1">
                    <div class="faq-header">
                        <h3>Kya naye students ko shuruat se running sikhayi jaati hai?</h3>
                        <i class="fa-solid fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <p>Haan, bilkul! Jo bilkul beginners hain unhe step-by-step pacing, breathing patterns aur stamina loading techniques ke sath running shuru karayi jaati hai taaki unhe koi internal injury na ho.</p>
                    </div>
                </div>

                <div class="faq-item reveal delay-2">
                    <div class="faq-header">
                        <h3>High Jump ke liye kaun si techniques sikhayi jaati hain?</h3>
                        <i class="fa-solid fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <p>Hum Bihar Police aur Daroga ke liye trending 'Scissor Cut' aur scientific 'Tiger Jump' dono systems ki advanced technical practices expert trainers ke super-vision me sand-beds par karate hain.</p>
                    </div>
                </div>

                <div class="faq-item reveal delay-3">
                    <div class="faq-header">
                        <h3>Kya hostel aur rehane ki suvidha bhi upalabdh hai?</h3>
                        <i class="fa-solid fa-chevron-down faq-icon"></i>
                    </div>
                    <div class="faq-content">
                        <p>Basuara ke bahar se aane wale candidates ke liye hum nearby standard hostel tie-ups aur proper strategic military nutrition food plans suggest karne me poori sahayata karte hain.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section section-padding" id="contact">
        <div class="container id-contact-grid-target">
            <div class="contact-grid">
                
                <div class="contact-details reveal-left">
                    <h3>Abhi Register Karein Aur <span>Sieve Selection</span> Pavein</h3>
                    <p>Form bhariay, hamari team aapse 24 ghante ke andor sampark karegi aur aapko free mock trial physical drill session allocate karegi.</p>
                    
                    <div class="info-link-card">
                        <div class="info-link-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <div class="info-link-text">
                            <h4>Ground Location</h4>
                            <p>Main Sports Ground, Basuara, Darbhanga, Bihar - 847106</p>
                        </div>
                    </div>

                    <div class="info-link-card">
                        <div class="info-link-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="info-link-text">
                            <h4>Official Email</h4>
                            <p>contact@unionphysicalacademy.com</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper reveal-right">
                    <form id="academyRegistrationForm" onsubmit="handleRegistration(event)">
                        <div class="form-row">
                            <div class="input-box">
                                <input type="text" id="cand-name" placeholder="Full Name" required>
                            </div>
                            <div class="input-box">
                                <input type="tel" id="cand-phone" placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="input-box">
                            <select id="cand-course" style="background-color: var(--secondary); border: 1px solid rgba(255,255,255,0.08); color: var(--text-main); padding: 15px; border-radius: 4px;">
                                <option value="police">Bihar Police Constable Special</option>
                                <option value="si">Bihar Daroga SI Format</option>
                                <option value="army">Indian Army (Agniveer)</option>
                                <option value="ssc">SSC GD Military Prep</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <textarea id="cand-message" rows="4" placeholder="Koi purani medical history ya physical weak point (Optional)"></textarea>
                        </div>
                        <button type="submit" class="submit-btn">Submit Application</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <footer>
        <div class="container footer-grid">
            
            <div class="footer-column footer-about">
                <h3>Union <span>Academy</span></h3>
                <p>Desh ki seva me tatpar Bihar ke yuvon ko sharirik roop se sashakt aur disciplined banana hi humara param lakshya hai. Aaj hi humare sankalp se judiye.</p>
                <div class="footer-socials">
                    <a href="#" aria-label="Facebook Link"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram Link"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube Link"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" aria-label="WhatsApp Connection"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-column">
                <h3>Quick Nav links</h3>
                <ul class="footer-links">
                    <li><a href="#home"><i class="fa-solid fa-angle-right"></i> Home Portal</a></li>
                    <li><a href="#about"><i class="fa-solid fa-angle-right"></i> Core Philosophy</a></li>
                    <li><a href="#programs"><i class="fa-solid fa-angle-right"></i> Training Squads</a></li>
                    <li><a href="#eligibility"><i class="fa-solid fa-angle-right"></i> Check Metrics</a></li>
                    <li><a href="#schedule"><i class="fa-solid fa-angle-right"></i> Daily Routine</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Our Programs</h3>
                <ul class="footer-links">
                    <li><a href="#programs"><i class="fa-solid fa-angle-right"></i> Indian Army Drill</a></li>
                    <li><a href="#programs"><i class="fa-solid fa-angle-right"></i> Bihar Police Special</a></li>
                    <li><a href="#programs"><i class="fa-solid fa-angle-right"></i> Daroga SI Selection</a></li>
                    <li><a href="#programs"><i class="fa-solid fa-angle-right"></i> SSC GD Endurance</a></li>
                    <li><a href="#programs"><i class="fa-solid fa-angle-right"></i> Custom Core Fitness</a></li>
                </ul>
            </div>

            <div class="footer-column footer-newsletter">
                <h3>Job Alerts & Updates</h3>
                <p>Naye bharti notifications aur physical tests tips pane ke liye apna email register karein.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Newsletter Registered successfully!');">
                    <input type="email" placeholder="Your Email Address" required>
                    <button type="submit" class="newsletter-btn" aria-label="Subscribe Link"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
            </div>

        </div>

        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2026 <span>Union Physical Academy Basuara</span>. Designed by Satyam Kumar. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <div class="back-to-top" id="backToTopBtn" onclick="scrollToTop()">
        <i class="fa-solid fa-arrow-up"></i>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            
            // --- A. MOBILE MENU TOGGLE LOGIC ---
            const hamburger = document.getElementById("hamburger-toggle");
            const navMenu = document.getElementById("nav-menu");
            const navLinks = document.querySelectorAll(".nav-link");

            hamburger.addEventListener("click", () => {
                hamburger.classList.toggle("active");
                navMenu.classList.toggle("active");
            });

            // Menu clicks par automatic sidebar responsive drawer close hona chahiye
            navLinks.forEach(link => {
                link.addEventListener("click", () => {
                    hamburger.classList.remove("active");
                    navMenu.classList.remove("active");
                });
            });

            // --- B. STICKY HEADER & BACK-TO-TOP TRIGGER SYSTEM ---
            const header = document.getElementById("main-header");
            const backToTopBtn = document.getElementById("backToTopBtn");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 80) {
                    header.classList.add("sticky");
                } else {
                    header.classList.remove("sticky");
                }

                if (window.scrollY > 500) {
                    backToTopBtn.classList.add("show");
                } else {
                    backToTopBtn.classList.remove("show");
                }
            });

            // --- C. ACCORDION ENGINE MECHANICS FOR FAQ SECTION ---
            const faqHeaders = document.querySelectorAll(".faq-header");
            
            faqHeaders.forEach(header => {
                header.addEventListener("click", () => {
                    const item = header.parentElement;
                    const content = item.querySelector(".faq-content");
                    const isActive = item.classList.contains("active");
                    
                    // Saare active open tabs ko pehle close karo code logic safe cleanup ke liye
                    document.querySelectorAll(".faq-item").forEach(faqItem => {
                        faqItem.classList.remove("active");
                        faqItem.querySelector(".faq-content").style.maxHeight = "0";
                    });

                    if (!isActive) {
                        item.classList.add("active");
                        content.style.maxHeight = content.scrollHeight + "px";
                    }
                });
            });

            // --- D. INTERSECTION OBSERVER FOR TRIGGERING ON-SCROLL REVEALS ---
            const revealElements = document.querySelectorAll(".reveal, .reveal-left, .reveal-right, .scale-up");
            
            const observerOptions = {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px"
            };

            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    }
                });
            }, observerOptions);

            revealElements.forEach(element => {
                revealObserver.observe(element);
            });
        });

        // Scroll Engine trigger utility for smooth back to top actions
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }

        // --- E. ADMISSION ELIGIBILITY CALCULATION LOGIC ---
        function checkEligibility() {
            const exam = document.getElementById("target-exam").value;
            const gender = document.getElementById("gender").value;
            const heightInput = document.getElementById("height").value;
            const resultBox = document.getElementById("checker-result");
            const titleNode = document.getElementById("result-status-title");
            const descNode = document.getElementById("result-status-desc");

            if (!heightInput) {
                alert("Kripya apni unchai (Height) darj karein.");
                return;
            }

            const height = parseFloat(heightInput);
            let isEligible = false;
            let requiredHeight = 0;

            if (exam === "bihar-police" || exam === "bihar-daroga") {
                if (gender === "male") {
                    requiredHeight = 165; 
                    if (height >= 165) isEligible = true;
                } else {
                    requiredHeight = 155;
                    if (height >= 155) isEligible = true;
                }
            } else if (exam === "indian-army") {
                if (gender === "male") {
                    requiredHeight = 169;
                    if (height >= 169) isEligible = true;
                } else {
                    requiredHeight = 162;
                    if (height >= 162) isEligible = true;
                }
            }

            resultBox.style.display = "block";
            
            if (isEligible) {
                titleNode.className = "result-title result-pass";
                titleNode.innerHTML = "<i class='fa-solid fa-circle-check'></i> Congratulations! Eligible Hain.";
                descNode.innerHTML = `Aapki height is exam ke mandatory standard requirements (Min: ${requiredHeight} CM) ko clear karti hai. Ab time hai physical stamina ko maximize karne ka, Union Academy join karein!`;
            } else {
                titleNode.className = "result-title result-fail";
                titleNode.innerHTML = "<i class='fa-solid fa-circle-xmark'></i> Physical Standard Match Nahi Hua.";
                descNode.innerHTML = `Chuninda test criteria ke mutabiq aapki height mandatory benchmarks (Min: ${requiredHeight} CM) se kam hai. Proper stretching aur nutrition guide ke sath thoda progress recover kiya ja sakta hai.`;
            }
        }

        // --- F. SECURE ACADEMY REGISTRATION SIMULATION ENGINE ---
        function handleRegistration(e) {
            e.preventDefault();
            const name = document.getElementById("cand-name").value;
            const course = document.getElementById("cand-course").value;
            
            alert(`Jai Hind ${name}! Union Physical Academy Basuara me aapka interest secure ho gaya hai. Aapko ${course.toUpperCase()} training batch ka complete roadmap jald hi provide kiya jayega.`);
            document.getElementById("academyRegistrationForm").reset();
        }
    </script>
</body>
</html>