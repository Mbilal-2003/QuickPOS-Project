<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You – QuickPOS</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 2rem; }
        .card { background: var(--white); border: 1px solid var(--border); border-radius: 24px; padding: 56px 48px; max-width: 480px; width: 100%; text-align: center; box-shadow: 0 12px 40px rgba(0,0,0,0.07); }
        .icon-wrap { width: 72px; height: 72px; background: var(--success-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 28px; }
        .icon-wrap svg { width: 34px; height: 34px; stroke: var(--success); fill: none; stroke-width: 2.2; }
        h1 { font-family: 'DM Serif Display', serif; font-size: 2.2rem; margin-bottom: 12px; }
        p { color: var(--ink-soft); margin-bottom: 32px; }
    </style>
</head>
<body>
    <div class="card">
        <a href="index.php" class="logo" style="justify-content: center; margin-bottom: 36px;">
            <div class="logo-icon"><svg viewBox="0 0 18 18"><rect x="2" y="3" width="14" height="12" rx="2"/><path d="M6 3v12M2 8h16"/></svg></div>
            <span class="logo-text">QuickPOS</span>
        </a>
        <div class="icon-wrap"><svg viewBox="0 0 34 34"><path d="M6 17l7 7 15-15"/></svg></div>
        <h1>Message received!</h1>
        <p>Thanks for reaching out. Our team will review your message and get back to you within one business day.</p>
        <a href="index.php" class="btn">Back to homepage</a>
    </div>
</body>
</html>