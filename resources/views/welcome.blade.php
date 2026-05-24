<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Padli — Full Stack Developer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg: #050816;
            --bg2: #0b1120;
            --card: rgba(255, 255, 255, 0.05);

            --purple: #7c3aed;
            --purple2: #a855f7;
            --cyan: #06b6d4;
            --green: #10b981;

            --white: #f8fafc;
            --muted: rgba(255, 255, 255, 0.55);
            --border: rgba(255, 255, 255, 0.08);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background:
                radial-gradient(circle at top left, rgba(31, 11, 66, 0.48), transparent 30%),
                radial-gradient(circle at bottom right, rgba(6, 182, 212, 0.15), transparent 30%),
                var(--bg);
            color: var(--white);
            font-family: 'Sora', sans-serif;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        /* ===== GRID BACKGROUND ===== */
        .grid-bg {
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 45px 45px;
            z-index: -1;
        }

        /* ===== NAVBAR ===== */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 75px;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 0 7%;
            z-index: 999;

            backdrop-filter: blur(16px);
            background: rgba(5, 8, 22, 0.7);
            border-bottom: 1px solid var(--border);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .logo-box {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: blue;

            display: flex;
            justify-content: center;
            align-items: center;

            font-weight: 700;
            font-size: 18px;
        }

        .logo span {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: .5px;
        }

        .nav-links {
            display: flex;
            gap: 18px;
            align-items: center;
        }

        .nav-links a {

            color: white;
            font-size: 14px;

            padding: 10px 18px;

            border: 1px solid rgba(255, 255, 255, .08);

            border-radius: 12px;

            background: rgba(255, 255, 255, .03);

            transition: .3s;
        }

        .nav-links a:hover {

            border-color: blue;

            background: rgba(37, 99, 235, .12);

            transform: translateY(-2px);
        }

        .btn-nav {

            background: blue;

            border: 1px solid rgba(255, 255, 255, .08);

            color: white !important;

            font-weight: 600;
        }

        /* ===== HERO ===== */
        .hero {
            min-height: 100vh;
            padding: 130px 7% 70px;

            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 50px;
            align-items: center;
        }

        .hero-left {
            animation: fadeUp 1s ease;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;

            padding: 10px 18px;
            border-radius: 999px;

            background: rgb(52, 5, 244);
            border: 1px solid rgba(168, 85, 247, .35);

            color: white;
            font-size: 13px;
            margin-bottom: 28px;
        }

        .badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--green);

            box-shadow: 0 0 12px var(--green);
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(.7);
                opacity: .5;
            }
        }

        .hero h1 {
            font-size: clamp(58px, 10vw, 120px);
            line-height: 1;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .hero h1 span {

            background: linear-gradient(135deg,
                    #ffffff,
                    #060dd4);

            background-clip: text;
            -webkit-background-clip: text;

            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .typing {
            font-family: "JetBrains Mono", monospace;
            color: blue;
            margin-bottom: 30px;
            font-size: 15px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .hero-desc {
            max-width: 650px;
            line-height: 1.9;
            color: rgba(255, 255, 255, .45);
            font-size: 16px;
            margin-bottom: 40px;
        }

        .hero-btns {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .btn-primary,
        .btn-secondary {
            padding: 14px 28px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            gap: 10px;

            font-weight: 600;
            transition: .3s;
        }

        .btn-primary {
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, .03);
            color: rgba(255, 255, 255, .75);
        }

        .btn-primary:hover {
            transform: translateY(-4px);
            border: 2px solid blue;
        }

        .btn-secondary {
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, .03);
            color: rgba(255, 255, 255, .75);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, .07);
            transform: translateY(-3px);
            border: 2px solid blue;
        }

        /* ===== STATS ===== */
        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            border: 1px solid var(--border);
            border-radius: 20px;
            overflow: hidden;
            background: rgba(255, 255, 255, .03);
            backdrop-filter: blur(20px);
            border-color: blue;
        }

        .stat {
            padding: 28px;
            text-align: center;
            border-right: 1px solid var(--border);
            border-color: blue;
        }

        .stat:last-child {
            border-right: none;
        }

        .stat h2 {
            font-size: 32px;
            margin-bottom: 8px;

            background: #4ade80;

            background-clip: text;
            -webkit-background-clip: text;

            color: transparent;
            -webkit-text-fill-color: transparent;
        }

        .stat p {
            color: rgba(255, 255, 255, .45);
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* ===== HERO CARD ===== */
        .hero-card {
            position: relative;
        }

        .glass-card {
            background: rgba(21, 7, 221, 0.96);
            border: 1px solid rgba(255, 255, 255, .08);

            backdrop-filter: blur(20px);

            border-radius: 30px;
            padding: 35px;
            position: relative;

            overflow: hidden;
        }

        .glass-card::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;

            background: radial-gradient(circle,
                    rgba(168, 85, 247, .25),
                    transparent 70%);

            top: -100px;
            right: -100px;
        }

        .code-window {
            background: #020617;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, .06);
        }

        .code-header {
            height: 48px;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 0 18px;
            background: rgba(255, 255, 255, .03);
            border-bottom: 1px solid rgba(255, 255, 255, .05);
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .red {
            background: #ef4444;
        }

        .yellow {
            background: #f59e0b;
        }

        .green {
            background: #10b981;
        }

        .code-content {
            padding: 25px;
            font-family: "JetBrains Mono", monospace;
            font-size: 14px;
            line-height: 2;
            color: #dbeafe;
        }

        .purple {
            color: #c084fc;
        }

        .cyan {
            color: #22d3ee;
        }

        .green-text {
            color: #4ade80;
        }

        /* ===== TECH STACK ===== */
        .stack {
            padding: 20px 7% 110px;
        }

        .stack-title {
            text-align: center;
            margin-bottom: 40px;
            color: blue;
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 18px;
        }

        .tech-box {
            background: rgba(255, 255, 255, .04);
            border: 1px solid var(--border);
            border-radius: 15px;

            padding: 25px 15px;
            text-align: center;
            transition: .35s;
        }

        .tech-box:hover {
            transform: translateY(-8px);
            border-color: rgba(19, 4, 240, 0.89);

            background: rgba(124, 58, 237, .08);
            border: 2px solid blue;
        }

        .tech-box i {
            font-size: 38px;
            margin-bottom: 14px;
        }

        .tech-box p {
            font-size: 14px;
            color: rgba(255, 255, 255, .75);
        }

        /* ===== SERVICES ===== */
        .section {
            padding: 20px 7% 120px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header span {
            color: blue;
            letter-spacing: 3px;
            font-size: 13px;
            text-transform: uppercase;
        }

        .section-header h2 {
            margin-top: 14px;
            font-size: clamp(32px, 6vw, 55px);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .card {
            background: rgba(255, 255, 255, .04);
            border: 1px solid var(--border);

            border-radius: 24px;
            padding: 35px;

            transition: .35s;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: blue;
            border: 2 solid blue;
        }

        .card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg,
                    rgba(124, 58, 237, .15),
                    transparent 40%);
            opacity: 0;
            transition: .4s;
        }

        .card:hover::before {
            opacity: 1;
        }

        .card-icon {
            width: 65px;
            height: 65px;
            border-radius: 18px;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 28px;
            margin-bottom: 25px;

            background: rgba(124, 58, 237, .15);
            color: blue;
        }

        .card h3 {
            margin-bottom: 16px;
            font-size: 21px;
        }

        .card p {
            color: rgba(255, 255, 255, .55);
            line-height: 1.9;
            font-size: 15px;
        }

        /* ===== CTA ===== */
        .cta {
            padding: 0 7% 120px;
        }

        .cta-box {
            position: relative;
            overflow: hidden;

            border-radius: 35px;
            padding: 70px 40px;

            background:
                linear-gradient(135deg,
                    rgba(124, 58, 237, .18),
                    rgba(6, 182, 212, .08));

            border: 1px solid blue;

            text-align: center;
        }

        .cta-box::before {
            content: "";
            position: absolute;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle,
                    rgba(168, 85, 247, .2),
                    transparent 70%);
            top: -250px;
            right: -250px;
        }

        .cta h2 {
            font-size: clamp(36px, 6vw, 60px);
            margin-bottom: 20px;
            position: relative;
        }

        .cta p {
            max-width: 700px;
            margin: auto;
            line-height: 1.9;
            color: rgba(255, 255, 255, .6);
            margin-bottom: 40px;
            position: relative;
        }

        /* ===== FOOTER ===== */
        footer {
            border-top: 1px solid var(--border);
            padding: 35px 7%;

            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer p {
            color: rgb(255, 255, 255);
            font-size: 14px;
        }

        .socials {
            display: flex;
            gap: 15px;
        }

        .socials a {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #1e1e1e;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 24px;
            transition: 0.3s ease;
        }

        /* Instagram */
        .socials a:nth-child(1):hover {
            background: linear-gradient(45deg,
                    #feda75,
                    #fa7e1e,
                    #d62976,
                    #962fbf,
                    #4f5bd5);
            transform: translateY(-5px);
        }

        /* LinkedIn */
        .socials a:nth-child(2):hover {
            background: #0077b5;
            transform: translateY(-5px);
        }

        /* GitHub */
        .socials a:nth-child(3):hover {
            background: #333;
            transform: translateY(-5px);
        }

        /* ===== ANIMATION ===== */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== RESPONSIVE ===== */
        @media(max-width:1100px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .tech-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }

        @media(max-width:700px) {
            .nav-links a:not(.btn-nav) {
                display: none;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .tech-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            footer {
                flex-direction: column;
                gap: 20px;
            }

            .hero {
                padding-top: 120px;
            }
        }

        @media(max-width:500px) {
            .stats {
                grid-template-columns: 1fr;
            }

            .tech-grid {
                grid-template-columns: 1fr;
            }

            .hero-btns {
                flex-direction: column;
            }

            .btn-primary,
            .btn-secondary {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <div class="grid-bg"></div>

    <!-- ===== NAVBAR ===== -->
    <nav>
        <div class="logo">
            <div class="logo-box">P</div>
            <span>PADLI</span>
        </div>

        <div class="nav-links">
            <a href="{{ route('projects') }}">Projects</a>
            <a href="{{ route('skills') }}">Skills</a>
            <a href="{{ route('experience') }}">Experience</a>
            <a href="{{ route('contact') }}">Contact</a>

            <a href="{{ route('dashboard') }}" class="btn-nav">
                Dashboard
            </a>
        </div>
    </nav>

    <!-- ===== HERO ===== -->
    <section class="hero">

        <div class="hero-left">

            <div class="badge">
                <div class="badge-dot"></div>
                HELLO
            </div>

            <h1>
                I'M <span>PADLI</span>
            </h1>

            <div class="typing">
                FRONT END DEVELOPER
            </div>

            <p class="hero-desc">
                Saya adalah mahasiswa Teknik Informatika yang memiliki minat besar dalam
                pengembangan website modern dan teknologi digital. Saya terbiasa membangun
                aplikasi web menggunakan Laravel, Vue.js, Tailwind CSS, dan MySQL dengan
                fokus pada tampilan yang responsif, performa yang optimal, serta clean code.
                Saya juga senang mempelajari teknologi baru dan terus mengembangkan skill
                di bidang Full Stack Development.
            </p>

            <div class="hero-btns">
                <a href="#" class="btn-primary">
                    <i class="ti ti-layout-dashboard"></i>
                    Lihat Portfolio
                </a>

                <a href="#" class="btn-secondary">
                    <i class="ti ti-brand-github"></i>
                    GitHub
                </a>

                <a href="#" class="btn-secondary">
                    <i class="ti ti-download"></i>
                    Download CV
                </a>
            </div>

            <div class="stats">

                <div class="stat">
                    <h2>5+</h2>
                    <p>Projects</p>
                </div>

                <div class="stat">
                    <h2>2+</h2>
                    <p>Years Experience</p>
                </div>

                <div class="stat">
                    <h2>8+</h2>
                    <p>Tech Stack</p>
                </div>

                <div class="stat">
                    <h2>99%</h2>
                    <p>Client Satisfaction</p>
                </div>

            </div>

        </div>

        <div class="hero-card">

            <div class="glass-card">

                <div class="code-window">

                    <div class="code-header">
                        <div class="dot red"></div>
                        <div class="dot yellow"></div>
                        <div class="dot green"></div>
                    </div>

                    <div class="code-content">

                        <div>
                            <span class="purple">const</span>
                            <span class="cyan">developer</span> = {
                        </div>

                        <div style="padding-left:25px">
                            name:
                            <span class="green-text">"Padli"</span>,
                        </div>

                        <div style="padding-left:25px">
                            role
                            <span class="green-text">"Front End Developer"</span>,
                        </div>

                        <div style="padding-left:25px">
                            backend:
                            <span class="green-text">["Laravel","PHP","Node.Js"]</span>,
                        </div>

                        <div style="padding-left:25px">
                            frontend:
                            <span class="green-text">["Html","Css","Javascript","Boostrap",]</span>,
                        </div>

                        <div style="padding-left:25px">
                            database:
                            <span class="green-text">["MySQL","MariaDB"]</span>,
                        </div>

                        <div style="padding-left:25px">
                            passion:
                            <span class="green-text">"Clean Code"</span>
                        </div>

                        <div>};</div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ===== STACK ===== -->
    <section id="stack" class="stack">

        <div class="stack-title">
            TEKNOLOGI YANG SAYA GUNAKAN
        </div>

        <div class="tech-grid">

            <div class="tech-box">
                <i class="ti ti-brand-laravel" style="color:#f87171"></i>
                <p>Laravel</p>
            </div>

            <div class="tech-box">
                <i class="ti ti-brand-nodejs" style="color:#34d399"></i>
                <p>Node.js</p>
            </div>

            <div class="tech-box">
                <i class="ti ti-brand-tailwind" style="color:#22d3ee"></i>
                <p>Tailwind CSS</p>
            </div>

            <div class="tech-box">
                <i class="ti ti-brand-codepen" style="color:#f97316"></i>
                <p>CodeIgniter</p>
            </div>

            <div class="tech-box">
                <i class="ti ti-brand-php" style="color:#818cf8"></i>
                <p>PHP</p>
            </div>

            <div class="tech-box">
                <i class="ti ti-database" style="color:#f472b6"></i>
                <p>MySQL</p>
            </div>

        </div>

    </section>

    <!-- ===== SERVICES ===== -->
    <section id="services" class="section">

        <div class="section-header">
            <span>APA YANG SAYA LAKUKAN</span>
            <h2>Keahlian & Layanan</h2>
        </div>

        <div class="cards">

            <div class="card">
                <div class="card-icon">
                    <i class="ti ti-server"></i>
                </div>

                <h3>Backend Development</h3>

                <p>
                    Membangun REST API, authentication system, dan business logic
                    menggunakan Laravel & PHP modern architecture.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="ti ti-layout"></i>
                </div>

                <h3>Frontend Development</h3>

                <p>
                    Membuat UI modern, responsive, dan interactive menggunakan
                    Vue.js, Tailwind CSS, dan JavaScript.
                </p>
            </div>

            <div class="card">
                <div class="card-icon">
                    <i class="ti ti-brand-docker"></i>
                </div>

                <h3>Deployment & DevOps</h3>

                <p>
                    Setup VPS, Docker containerization, CI/CD deployment,
                    dan optimasi production server.
                </p>
            </div>

        </div>

    </section>

    <!-- ===== CTA ===== -->
    <section id="contact" class="cta">

        <div class="cta-box">

            <h2>
                Mari Kita Bangun Sesuatu yang Menakjubkan 🚀
            </h2>

            <p>
                Saya terbuka untuk internship, freelance project,
                dan kolaborasi membangun web application modern.
            </p>

            <div class="hero-btns" style="justify-content:center">
                <a href="#" class="btn-primary">
                    <i class="ti ti-send"></i>
                    Hubungi Saya
                </a>

                <a href="#" class="btn-secondary">
                    <i class="ti ti-brand-github"></i>
                    GitHub
                </a>
            </div>

        </div>

    </section>

    <!-- ===== FOOTER ===== -->
    <footer>

        <p>
            © 2026 Padli
        </p>

        <div class="socials">

            <a href="https://www.instagram.com/padli23_" target="_blank">
                <i class="ti ti-brand-instagram"></i>
            </a>

            <a href="https://www.linkedin.com/in/padli-padli-36336b3b2" target="_blank">
                <i class="ti ti-brand-linkedin"></i>
            </a>

            <a href="https://github.com/username_github_kamu" target="_blank">
                <i class="ti ti-brand-github"></i>
            </a>

        </div>

    </footer>

</body>

</html>