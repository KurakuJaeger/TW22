<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tropa Story Posts</title>
    <style>
        :root {
            color-scheme: light;
            background: #f0f4fb;
            color: #1f2937;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            min-height: 100vh;
            padding: 24px;
            background: radial-gradient(circle at top, rgba(59,130,246,0.12), transparent 36%),
                        linear-gradient(180deg, #eef2ff 0%, #f8fafc 100%);
        }
        .page-shell {
            max-width: 1280px;
            margin: 0 auto;
        }
        header {
            text-align: center;
            margin-bottom: 28px;
            padding: 24px 20px;
            background: rgba(255,255,255,0.84);
            border: 1px solid rgba(203,213,225,0.9);
            border-radius: 24px;
            box-shadow: 0 18px 40px rgba(15,23,42,0.06);
        }
        h1 {
            margin: 0 0 12px;
            font-size: clamp(2rem, 2.5vw, 3rem);
            letter-spacing: -0.04em;
            color: #0f172a;
        }
        .intro {
            margin: 0 auto;
            max-width: 720px;
            color: #334155;
            font-size: 1rem;
            line-height: 1.8;
        }
        .story-grid {
            display: grid;
            grid-template-columns: repeat(5, minmax(0, 1fr));
            gap: 22px;
            margin-top: 22px;
        }
        .story-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 22px;
            overflow: hidden;
            transition: transform 200ms ease, box-shadow 200ms ease;
            box-shadow: 0 12px 35px rgba(15,23,42,0.05);
            display: flex;
            flex-direction: column;
            min-height: 320px;
        }
        .story-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(15,23,42,0.1);
        }
        .story-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }
        .story-card-content {
            padding: 18px 18px 22px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex: 1;
        }
        .story-card h3 {
            margin: 0 0 10px;
            color: #1e3a8a;
            font-size: 1.15rem;
            line-height: 1.3;
        }
        .story-card p {
            margin: 0 0 14px;
            color: #334155;
            font-size: 0.95rem;
            line-height: 1.7;
        }
        .story-card .tag {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 8px 12px;
            border-radius: 999px;
            background: #e0f2fe;
            color: #0369a1;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.02em;
        }
        @media (max-width: 1160px) {
            .story-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
        }
        @media (max-width: 820px) {
            .story-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        @media (max-width: 620px) {
            .story-grid {
                grid-template-columns: 1fr;
            }
            body {
                padding: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="page-shell">
        <header>
            <h1>Story Posts from My Tropa</h1>
            <p class="intro">These are the short posts for the people who shape our group. Each card captures a friend’s spark, from discipline and charm to kindness, humor, and gentle strength.</p>
        </header>

        <div class="story-grid">
            <div class="story-card"><?php include 'story1.php'; ?></div>
            <div class="story-card"><?php include 'story2.php'; ?></div>
            <div class="story-card"><?php include 'story3.php'; ?></div>
            <div class="story-card"><?php include 'story4.php'; ?></div>
            <div class="story-card"><?php require 'story5.php'; ?></div>
        </div>
    </div>
</body>
</html>