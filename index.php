<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern Point of Sale</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php" class="logo">
            <div class="logo-icon">
                <svg viewBox="0 0 18 18"><rect x="2" y="3" width="14" height="12" rx="2"/><path d="M6 3v12M2 8h16"/></svg>
            </div>
            <span class="logo-text">QuickPOS</span>
        </a>
        <nav>
            <ul>
                <li><a href="#features">Features</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <a href="#contact" class="btn">Sign Up</a>
    </header>

    <section class="hero">
        <h1>Smarter Sales, Seamless Business.</h1>
        <p>The pixel-perfect Point of Sale system designed to streamline your inventory, manage employees, and boost your retail revenue.</p>
        <a href="#pricing" class="btn" style="font-size: 1.2rem; padding: 14px 32px;">Get Started Today</a>
    </section>

    <section id="features" class="features">
        <div class="features-grid">
            <div class="feature-card">
                <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <h3>Lightning Fast</h3>
                <p>Process transactions in milliseconds to keep your lines moving.</p>
            </div>
            <div class="feature-card">
                <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <h3>Live Analytics</h3>
                <p>Track your daily sales and inventory metrics in real-time.</p>
            </div>
            <div class="feature-card">
                <svg viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                <h3>Bank-grade Security</h3>
                <p>End-to-end encryption ensures your business data is always safe.</p>
            </div>
        </div>
    </section>

    <section id="pricing" class="pricing">
        <h2 style="font-family: 'DM Serif Display', serif; font-size: 2.5rem; margin-bottom: 1rem;">Simple, Transparent Pricing</h2>
        <div class="pricing-grid">
            <div class="price-card">
                <h3>Basic</h3>
                <div class="amount">$29<span style="font-size: 1rem; color: var(--ink-soft)">/mo</span></div>
                <p style="color: var(--ink-soft); margin-bottom: 2rem;">Perfect for small pop-up shops.</p>
                <a href="#contact" class="btn" style="width: 100%; background: var(--ink);">Choose Basic</a>
            </div>
            <div class="price-card pro">
                <h3>Pro</h3>
                <div class="amount">$79<span style="font-size: 1rem; color: var(--ink-soft)">/mo</span></div>
                <p style="color: var(--ink-soft); margin-bottom: 2rem;">Everything you need for a growing store.</p>
                <a href="#contact" class="btn" style="width: 100%;">Choose Pro</a>
            </div>
            <div class="price-card">
                <h3>Enterprise</h3>
                <div class="amount">$199<span style="font-size: 1rem; color: var(--ink-soft)">/mo</span></div>
                <p style="color: var(--ink-soft); margin-bottom: 2rem;">Advanced controls for multi-location chains.</p>
                <a href="#contact" class="btn" style="width: 100%; background: var(--ink);">Contact Sales</a>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="contact-card">
            <h2>Get in Touch</h2>
            <p style="text-align: center; color: var(--ink-soft); margin-bottom: 2rem;">Have questions? Send us a message.</p>
            
            <form action="process_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe">
                    <?php if(isset($_SESSION['errors']['name'])) echo '<span class="error-msg">'.$_SESSION['errors']['name'].'</span>'; ?>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" placeholder="john@example.com">
                    <?php if(isset($_SESSION['errors']['email'])) echo '<span class="error-msg">'.$_SESSION['errors']['email'].'</span>'; ?>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="How can we help you?"></textarea>
                    <?php if(isset($_SESSION['errors']['message'])) echo '<span class="error-msg">'.$_SESSION['errors']['message'].'</span>'; ?>
                </div>
                <button type="submit" class="btn btn-submit">Send Message</button>
            </form>
            <?php unset($_SESSION['errors']); // Clear errors after showing them ?>
        </div>
    </section>

    <footer>
        <div class="social-links">
            <a href="#">Twitter</a> | <a href="#">LinkedIn</a> | <a href="#">Facebook</a>
        </div>
        <p>&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.</p>
    </footer>
</body>
</html>