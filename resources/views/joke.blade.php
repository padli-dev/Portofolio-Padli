<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Joke Generator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
            font-size: 2.5em;
        }

        .subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1em;
        }

        .joke-box {
            background: #f8f9fa;
            border-left: 5px solid #667eea;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            min-height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .joke-content {
            display: none;
            width: 100%;
        }

        .joke-content.active {
            display: block;
        }

        .joke-setup {
            font-size: 1.2em;
            color: #333;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .joke-punchline {
            font-size: 1.1em;
            color: #667eea;
            font-weight: 500;
            padding-top: 15px;
            border-top: 2px solid #e0e0e0;
            margin-top: 15px;
        }

        .loading {
            text-align: center;
            color: #667eea;
            font-weight: 600;
            display: none;
        }

        .loading.active {
            display: block;
        }

        .buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        button {
            padding: 12px 20px;
            font-size: 1em;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-random {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            grid-column: 1 / -1;
        }

        .btn-random:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-type {
            background: #e8eaf6;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-type:hover {
            background: #667eea;
            color: white;
        }

        .btn-type.active {
            background: #667eea;
            color: white;
        }

        .error {
            background: #ffebee;
            color: #c62828;
            padding: 15px;
            border-radius: 8px;
            border-left: 5px solid #c62828;
            display: none;
            margin-bottom: 20px;
        }

        .error.active {
            display: block;
        }

        .info {
            text-align: center;
            color: #999;
            font-size: 0.9em;
            margin-top: 20px;
        }

        .joke-type-badge {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8em;
            margin-top: 10px;
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #e8eaf6;
            color: #667eea;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .back-link:hover {
            background: #667eea;
            color: white;
        }

        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }

            h1 {
                font-size: 2em;
            }

            .buttons {
                grid-template-columns: 1fr;
            }

            .btn-random {
                grid-column: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>😂 Joke Generator</h1>
        <p class="subtitle">Get random jokes instantly!</p>

        <div class="error" id="error"></div>

        <div class="joke-box">
            <div class="loading" id="loading">
                ⏳ Loading joke...
            </div>
            <div class="joke-content" id="jokeContent">
                <div class="joke-setup" id="setup"></div>
                <div class="joke-punchline" id="punchline"></div>
                <div class="joke-type-badge" id="typeBadge"></div>
            </div>
            <div id="placeholder" style="color: #ccc; text-align: center;">
                Click a button to get started! 👇
            </div>
        </div>

        <div class="buttons">
            <button class="btn-random" onclick="getRandomJoke()">Get Random Joke</button>
            <button class="btn-type" onclick="getJokeByType('programming')">👨‍💻 Programming</button>
            <button class="btn-type" onclick="getJokeByType('general')">😄 General</button>
            <button class="btn-type" onclick="getJokeByType('knock-knock')">🚪 Knock-Knock</button>
        </div>

        <div class="info">
            Powered by Official Joke API
            <br>
            <a href="/" class="back-link">← Back to Portfolio</a>
        </div>
    </div>

    <script>
        const placeholderEl = document.getElementById('placeholder');
        const loadingEl = document.getElementById('loading');
        const jokeContentEl = document.getElementById('jokeContent');
        const errorEl = document.getElementById('error');
        const setupEl = document.getElementById('setup');
        const punchlineEl = document.getElementById('punchline');
        const typeBadgeEl = document.getElementById('typeBadge');

        function showLoading() {
            placeholderEl.style.display = 'none';
            jokeContentEl.classList.remove('active');
            loadingEl.classList.add('active');
            errorEl.classList.remove('active');
        }

        function showJoke(setup, punchline, type = '') {
            loadingEl.classList.remove('active');
            setupEl.textContent = setup;
            punchlineEl.textContent = punchline;
            if (type) {
                typeBadgeEl.textContent = type.toUpperCase();
                typeBadgeEl.style.display = 'inline-block';
            }
            jokeContentEl.classList.add('active');
        }

        function showError(message) {
            loadingEl.classList.remove('active');
            jokeContentEl.classList.remove('active');
            errorEl.textContent = '❌ ' + message;
            errorEl.classList.add('active');
            placeholderEl.style.display = 'none';
        }

        async function getRandomJoke() {
            showLoading();
            try {
                const response = await fetch('/api/joke/random');
                const data = await response.json();

                if (response.ok) {
                    showJoke(data.setup, data.punchline, data.type || 'random');
                } else {
                    showError(data.error || 'Failed to fetch joke');
                }
            } catch (error) {
                showError('Network error: ' + error.message);
            }
        }

        async function getJokeByType(type) {
            showLoading();
            try {
                const response = await fetch(`/api/joke/type/${type}`);
                const data = await response.json();

                if (response.ok) {
                    if (Array.isArray(data)) {
                        const joke = data[0];
                        showJoke(joke.setup, joke.punchline, joke.type || type);
                    } else {
                        showJoke(data.setup, data.punchline, data.type || type);
                    }
                } else {
                    showError(data.error || 'Failed to fetch joke');
                }
            } catch (error) {
                showError('Network error: ' + error.message);
            }
        }

        // Load initial joke on page load
        window.addEventListener('load', () => {
            getRandomJoke();
        });
    </script>
</body>
</html>
