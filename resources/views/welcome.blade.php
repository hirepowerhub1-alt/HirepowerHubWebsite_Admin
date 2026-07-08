<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to HirePower Hub</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 600px;
            width: 100%;
            padding: 60px 40px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 15px;
            font-size: 2.5em;
        }
        p {
            color: #666;
            margin-bottom: 30px;
            font-size: 1.1em;
            line-height: 1.6;
        }
        .info {
            background: #f5f5f5;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            text-align: left;
        }
        .info h3 {
            color: #333;
            margin-bottom: 10px;
        }
        .info ul {
            list-style-position: inside;
            color: #666;
        }
        .info li {
            margin-bottom: 8px;
        }
        .buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        .btn {
            padding: 12px 30px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }
        .btn-secondary {
            background: #f0f0f0;
            color: #333;
            border: 2px solid #ddd;
        }
        .btn-secondary:hover {
            background: #e0e0e0;
        }
        .tech-stack {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            text-align: left;
        }
        .tech-stack h3 {
            color: #333;
            margin-bottom: 15px;
        }
        .tech-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 10px;
        }
        .tech-item {
            background: white;
            padding: 10px;
            border-radius: 6px;
            color: #667eea;
            font-weight: 600;
            text-align: center;
            border: 1px solid #eee;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🚀 HirePower Hub</h1>
        <p>Multi-Purpose Classified Application v1.5.6</p>
        
        <p>Welcome to your local development environment! The application has been successfully configured for local development.</p>
        
        <div class="info">
            <h3>✅ Local Configuration Completed</h3>
            <ul>
                <li><strong>Database:</strong> hirepower_db (MySQL)</li>
                <li><strong>Backend:</strong> Laravel 9.52.0 + PHP 8.1.25</li>
                <li><strong>Frontend:</strong> Vue 3 + Inertia.js</li>
                <li><strong>Build Tool:</strong> Vite</li>
                <li><strong>Installation Process:</strong> Disabled for local development</li>
            </ul>
        </div>
        
        <div class="buttons">
            <a href="/admin" class="btn btn-primary">→ Go to Dashboard</a>
            <a href="/login" class="btn btn-secondary">→ Login</a>
        </div>
        
        <div class="tech-stack">
            <h3>Technology Stack</h3>
            <div class="tech-list">
                <div class="tech-item">Laravel 9</div>
                <div class="tech-item">Vue 3</div>
                <div class="tech-item">Inertia.js</div>
                <div class="tech-item">Vite</div>
                <div class="tech-item">Tailwind CSS</div>
                <div class="tech-item">MySQL</div>
            </div>
        </div>
        
        <div class="info" style="margin-top: 30px;">
            <h3>📝 Admin Credentials</h3>
            <ul>
                <li><strong>Email:</strong> admin@hirepower.local</li>
                <li><strong>Password:</strong> admin123</li>
            </ul>
        </div>
    </div>
</body>
</html>