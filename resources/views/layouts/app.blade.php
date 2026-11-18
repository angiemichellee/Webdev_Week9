<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laptop Store')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #fdf6f8;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #e5e7eb;
            --primary: #e11d48;
            --primary-dark: #be123c;
            --primary-soft: #fff1f2;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
        }

        .navbar {
            background: linear-gradient(135deg, #e11d48, #ec4899);
            color: #fff;
            padding: 18px 0;
            box-shadow: 0 2px 12px rgba(225, 29, 72, .25);
        }

        .navbar .inner {
            max-width: 960px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .brand {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            text-decoration: none;
        }

        .nav-links { display: flex; gap: 6px; }

        .nav-links a {
            color: rgba(255, 255, 255, .85);
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            padding: 8px 14px;
            border-radius: 8px;
            transition: background .2s;
        }

        .nav-links a:hover,
        .nav-links a.active { background: rgba(255, 255, 255, .18); color: #fff; }

        .container {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: var(--card);
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, .06);
            padding: 32px;
        }

        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }

        h1 { margin: 0; font-size: 24px; font-weight: 700; }

        .subtitle { margin: 4px 0 0; color: var(--muted); font-size: 14px; }

        .btn {
            display: inline-block;
            background: var(--primary);
            color: #fff;
            border: none;
            padding: 12px 22px;
            border-radius: 10px;
            font: inherit;
            font-weight: 600;
            font-size: 14px;
            text-decoration: none;
            cursor: pointer;
            transition: background .2s, transform .1s;
        }

        .btn:hover { background: var(--primary-dark); }
        .btn:active { transform: scale(.98); }

        @media (max-width: 600px) {
            .container { margin: 24px auto; padding: 0 16px; }
            .card { padding: 20px; }
            .brand { font-size: 17px; }
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar">
        <div class="inner">
            <a href="{{ url('/') }}" class="brand">💻 Laptop Store</a>
            <div class="nav-links">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">List</a>
                <a href="{{ url('/create-laptop') }}" class="{{ request()->is('create-laptop') ? 'active' : '' }}">Add Laptop</a>
            </div>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
