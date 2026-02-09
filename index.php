<?php
session_start();
if (isset($_SESSION['role'])) {
    header("Location: ".$_SESSION['role'].".php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Ihawan sa Gertrudes | POS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* === BACKGROUND FIRE EFFECT === */
body {
    height: 100vh;
    margin: 0;
    overflow: hidden;
    background:
        radial-gradient(circle at bottom, #ff5722, #b71c1c 40%, #000 75%);
    font-family: system-ui, sans-serif;
}

/* Floating embers */
body::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        repeating-radial-gradient(circle, rgba(255,140,0,.15) 0 2px, transparent 3px 40px);
    animation: embers 8s linear infinite;
    pointer-events: none;
}

@keyframes embers {
    from { background-position: 0 0; }
    to { background-position: 0 -500px; }
}

/* === SPLASH CARD === */
.splash {
    background: #fff;
    border-radius: 20px;
    padding: 30px 25px;
    width: 92%;
    max-width: 380px;
    text-align: center;
    box-shadow: 0 20px 40px rgba(0,0,0,.5);
}

/* === LOGO === */
.logo {
    font-size: 26px;
    font-weight: 900;
    color: #b71c1c;
}
.sub {
    color: #2e7d32;
    font-weight: 600;
    margin-bottom: 15px;
}

/* === GRILL === */
.grill {
    position: relative;
    height: 70px;
    margin: 20px auto 10px;
}

/* Grill bars */
.grill::before {
    content: "";
    position: absolute;
    inset: 0;
    background:
        repeating-linear-gradient(
            90deg,
            #333 0 6px,
            transparent 6px 14px
        );
    border-radius: 6px;
}

/* BBQ meat */
.bbq {
    position: absolute;
    width: 60px;
    height: 14px;
    background: linear-gradient(#8d2b1f, #5d160f);
    border-radius: 20px;
    top: 26px;
    left: 50%;
    transform: translateX(-50%);
    animation: grillMove 2s ease-in-out infinite alternate;
}

@keyframes grillMove {
    from { transform: translateX(-60px); }
    to { transform: translateX(0px); }
}

/* Smoke */
.smoke {
    position: absolute;
    width: 6px;
    height: 6px;
    background: rgba(200,200,200,.6);
    border-radius: 50%;
    top: 0;
    left: 50%;
    animation: smoke 2s infinite;
}

@keyframes smoke {
    from { transform: translate(-50%,0) scale(1); opacity:.6; }
    to { transform: translate(-50%,-30px) scale(2); opacity:0; }
}

/* === PROGRESS BAR === */
.progress {
    height: 12px;
    border-radius: 10px;
}
.progress-bar {
    background: linear-gradient(90deg,#ff9800,#d84315);
    animation: load 3s linear forwards;
}

@keyframes load {
    from { width: 0%; }
    to { width: 100%; }
}

.loading-text {
    font-size: 13px;
    margin-top: 8px;
    color: #555;
}
</style>

<script>
setTimeout(() => {
    window.location.href = "login.php";
}, 3200);
</script>
</head>

<body class="d-flex justify-content-center align-items-center">

<div class="splash">
    <div class="logo">🍢 Ihawan sa Gertrudes</div>
    <div class="sub">Point of Sale System</div>

    <!-- GRILL ANIMATION -->
    <div class="grill">
        <div class="bbq"></div>
        <div class="smoke"></div>
    </div>

    <!-- PROGRESS -->
    <div class="progress mt-3">
        <div class="progress-bar"></div>
    </div>
    <div class="loading-text">Grilling your POS…</div>
</div>

</body>
</html>
