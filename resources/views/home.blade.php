<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Padli - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Sora', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e1a2e 0%, #16213e 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            text-align: center;
            max-width: 600px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 10px;
            background: linear-gradient(to right, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        p {
            font-size: 1.1em;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 30px;
        }
        .btn-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }
        a {
            display: inline-block;
            padding: 12px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }
        .btn-secondary {
            border: 2px solid #667eea;
            color: #667eea;
        }
        .btn-secondary:hover {
            background: #667eea;
            color: white;
        }
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-top: 50px;
        }
        .feature {
            padding: 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }
        .feature h3 {
            margin-bottom: 10px;
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎉 Selamat Datang!</h1>
        <p>Portfolio Padli - Frontend Developer</p>
        
        <div class="btn-group">
            <a href="/dashboard" class="btn-primary">Dashboard</a>
            <a href="/joke" class="btn-primary">😂 Joke Generator</a>
        </div>

        <div class="features">
            <div class="feature">
                <h3>📱 About</h3>
                <p style="font-size: 0.9em; margin: 0;">Tentang Saya</p>
            </div>
            <div class="feature">
                <h3>💼 Projects</h3>
                <p style="font-size: 0.9em; margin: 0;">Project Terbaru</p>
            </div>
            <div class="feature">
                <h3>🎯 Skills</h3>
                <p style="font-size: 0.9em; margin: 0;">Keterampilan</p>
            </div>
            <div class="feature">
                <h3>📧 Contact</h3>
                <p style="font-size: 0.9em; margin: 0;">Hubungi Saya</p>
            </div>
        </div>
    </div>
</body>
</html>
