<!--
Matric Number: A219834
Name: Muhammad Haris Syahmi bin Nasurudin
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cascading Style Sheets</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Page theme (same as biodata.html). Always applied, so it comes BEFORE the swappable sheet. -->
    <style>
        :root {
            --green: #1ed760;
            --panel: #121212;
            --card: #181818;
            --subdued: #b3b3b3;
            --accent: #8d67ab;
            --tint: #3b2a5a;
            --font: "Circular Std", "Spotify Mix", "Figtree", "Helvetica Neue", Arial, sans-serif;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        html { color-scheme: dark; }
        body {
            min-height: 100vh;
            background: linear-gradient(180deg, var(--tint) 0, #1b1429 220px, var(--panel) 420px);
            background-color: var(--panel);
            color: #fff;
            font-family: var(--font);
            -webkit-font-smoothing: antialiased;
            padding: 32px;
        }
        :focus-visible { outline: 2px solid #fff; outline-offset: 2px; }
        .wrap { max-width: 900px; margin: 0 auto; }

        .head { display: flex; align-items: flex-end; gap: 24px; margin-bottom: 32px; }
        .cover {
            width: 140px; height: 140px; flex-shrink: 0; border-radius: 4px;
            background: var(--accent); color: #fff;
            display: grid; place-items: center; font-size: 64px;
            box-shadow: 0 4px 60px rgba(0, 0, 0, .5);
        }
        .head .kind { font-size: 14px; font-weight: 700; margin-bottom: 8px; }
        .head h1 {
            font-size: clamp(32px, 6vw, 64px); font-weight: 900;
            line-height: 1; letter-spacing: -.03em; margin-bottom: 14px;
        }
        .head .meta { font-size: 14px; color: #ffffffcc; }
        .head .meta strong { color: #fff; font-weight: 700; }
        .intro { color: #e6e6e6; font-size: 16px; line-height: 1.7; max-width: 70ch; margin-bottom: 28px; }

        .section { margin-bottom: 32px; }
        .section-title { font-size: 22px; font-weight: 700; margin-bottom: 16px; }
        .panel { background: var(--card); border-radius: 8px; padding: 20px; }

        /* readable fallback when "No Stylesheet" is chosen */
        .demo { line-height: 1.6; }
        .demo a { color: #b99ad6; }
        .demo li { margin-left: 20px; }

        @media (max-width: 640px) {
            body { padding: 20px 16px; }
            .head { flex-direction: column; align-items: flex-start; gap: 16px; }
            .cover { width: 100px; height: 100px; font-size: 44px; }
            .panel { padding: 12px; }
        }
    </style>

    <!-- Swappable stylesheet (id="mycss") — only styles the demo inside .demo -->
    <link id="mycss" rel="stylesheet" href="style1.css">
</head>
<body>
<div class="wrap">

    <header class="head">
        <div class="cover" aria-hidden="true"><i class="bi bi-palette-fill"></i></div>
        <div>
            <p class="kind">Page</p>
            <h1>Cascading Style Sheets</h1>
            <p class="meta"><strong>Muhammad Haris Syahmi</strong> • A219834 • Lab 3: CSS</p>
        </div>
    </header>

    <p class="intro">Use the menu inside the demo to switch between <strong>Stylesheet 1, 2 and 3</strong>, or remove the stylesheet completely.</p>

    <section class="section">
        <h2 class="section-title">Stylesheet demo</h2>
        <div class="panel">

            <div class="demo">
                <div class="wrapper">

                    <div id="top">
                        <h1>Welcome to My Homepage</h1>
                        <p>Use the menu to select different Stylesheets</p>
                    </div>

                    <div class="wrapper">

                        <div id="menubar">
                            <ul id="menulist">
                                <li class="menuitem" onclick="changeCSS('style1.css'); return false;">Stylesheet 1</li>
                                <li class="menuitem" onclick="changeCSS('style2.css'); return false;">Stylesheet 2</li>
                                <li class="menuitem" onclick="changeCSS('style3.css'); return false;">Stylesheet 3</li>
                                <li class="menuitem" onclick="changeCSS(''); return false;">No Stylesheet</li>
                            </ul>
                        </div>

                        <div id="main">
                            <h1>Same Page Different Stylesheets</h1>
                            <p>
                                This is a demonstration of how different stylesheets can change the layout of your HTML page. You can change the layout of this page by selecting different stylesheets in the menu, or by selecting one of the following links:<br>
                                <a href="#" onclick="changeCSS('style1.css'); return false;">Stylesheet1</a>,
                                <a href="#" onclick="changeCSS('style2.css'); return false;">Stylesheet2</a>,
                                <a href="#" onclick="changeCSS('style3.css'); return false;">Stylesheet3</a>
                            </p>
                            <h2>No Styles</h2>
                            <p>
                                This page uses DIV elements to group different sections of the HTML page. Click here to see how the page looks like with no stylesheet:<br><a href="#" onclick="changeCSS(''); return false;">No Stylesheet</a>.
                            </p>
                        </div>

                        <div id="sidebar">
                            <h3>Side-Bar</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                            </p>
                        </div>

                    </div>

                    <div id="bottom">
                        <p>Copyright &copy; 2026 My Website. All rights reserved.</p>
                    </div>

                </div>
            </div>

        </div>
    </section>

</div>

<script>
    // Swap the stylesheet; an empty name removes it completely
    function changeCSS(filename) {
        var link = document.getElementById("mycss");
        if (filename) { link.setAttribute("href", filename); }
        else { link.removeAttribute("href"); }
    }
</script>
</body>
</html>