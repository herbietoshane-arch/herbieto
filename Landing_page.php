<?php
// personal_landing_page.php
// Edit the $profile array below with your real details.
$profile = [
    'name' => 'Shane P. Herbieto',
    'age' => '20',
    'birthdate' => 'September 4, 2004',
    'favorite_color' => '#blue', 
    'likes' => ['Example: Coffee', 'Example: Coding', 'Example: Music'],
    'dislikes' => ['Example: Traffic', 'Example: Spam emails'],
    'motto' => 'Your personal motto goes here — a short phrase that inspires you.',
    'address' => '123 Example Street, City, Country',
    'father' => 'Father\'s Name',
    'mother' => 'Mother\'s Name',
    'sisters' => ['Sister One', 'Sister Two'],
    'background_image' => '', // optional: path or URL to a background image
];
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($profile['name']) ?> — Personal Landing Page</title>
  <style>
    :root{
      --accent: <?= htmlspecialchars($profile['favorite_color']) ?>;
      --bg: linear-gradient(135deg, rgba(255,255,255,0.03), rgba(0,0,0,0.03));
      --card-bg: rgba(255,255,255,0.06);
      --glass: rgba(255,255,255,0.06);
      --text: #f8fafc;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      background: radial-gradient(circle at 10% 10%, rgba(0,0,0,0.25), transparent 20%),
                  radial-gradient(circle at 90% 90%, rgba(0,0,0,0.18), transparent 15%),
                  <?php if (!empty($profile['background_image'])): ?>
                    url('<?= addslashes($profile['background_image']) ?>'),
                  <?php endif; ?>
                  linear-gradient(135deg, rgba(20,20,40,1), rgba(10,10,20,1));
      color:var(--text);
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      padding:40px;
    }
    .container{max-width:1000px; width:100%; display:grid; grid-template-columns: 360px 1fr; gap:28px}
    .card{
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius:16px;
      padding:22px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.6);
      backdrop-filter: blur(6px) saturate(120%);
      border:1px solid rgba(255,255,255,0.04);
    }
    .profile-photo{
      height:160px; width:160px; border-radius:12px; overflow:hidden; display:block; margin:0 auto 14px auto; background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01)); border:4px solid rgba(255,255,255,0.03);
    }
    .profile-photo img{width:100%; height:100%; object-fit:cover; display:block}
    h1{margin:8px 0 2px 0; font-size:22px}
    p.sub{margin:0;color:rgba(255,255,255,0.7)}
    .badge{display:inline-block; padding:6px 10px; border-radius:999px; background:var(--accent); color:white; font-weight:600; margin-top:12px}

    .info-grid{display:grid; grid-template-columns:repeat(2,1fr); gap:10px; margin-top:16px}
    .info-item{background:rgba(255,255,255,0.02); padding:10px; border-radius:10px}
    .info-item strong{display:block; font-size:12px; color:rgba(255,255,255,0.9)}
    .content{padding:22px}
    .section{margin-bottom:18px}
    ul.clean{list-style:none; padding:0; margin:0}
    ul.clean li{padding:8px 0; border-bottom:1px dashed rgba(255,255,255,0.04)}
    .cta{display:inline-block; padding:12px 18px; border-radius:12px; background:var(--accent); color:white; text-decoration:none; font-weight:700}

    /* Responsive */
    @media (max-width:880px){
      .container{grid-template-columns:1fr;}
      .profile-photo{height:140px; width:140px}
    }
  </style>
</head>
<body>
  <main class="container">
    <aside class="card" aria-labelledby="profile-name">
      <div class="profile-photo">
        <!-- Replace src with your photo path or gravatar URL -->
        <img src="shane.jpg" alt="Profile photo">
      </div>
      <h1 id="profile-name"><?= htmlspecialchars($profile['name']) ?></h1>
      <p class="sub"><?= htmlspecialchars($profile['age']) ?> • <?= htmlspecialchars($profile['gender']) ?></p>
      <span class="badge">Favorite color</span>
      <div style="margin-top:10px; display:flex; gap:8px; align-items:center">
        <div style="width:28px; height:28px; border-radius:6px; background:<?= htmlspecialchars($profile['favorite_color']) ?>; border:1px solid rgba(0,0,0,0.2)"></div>
        <div style="color:rgba(255,255,255,0.8)"><?= htmlspecialchars($profile['favorite_color']) ?></div>
      </div>

      <div class="info-grid">
        <div class="info-item"><strong>Address</strong><?= htmlspecialchars($profile['address']) ?></div>
        <div class="info-item"><strong>Motto</strong><?= htmlspecialchars($profile['motto']) ?></div>
        <div class="info-item"><strong>Father</strong><?= htmlspecialchars($profile['father']) ?></div>
        <div class="info-item"><strong>Mother</strong><?= htmlspecialchars($profile['mother']) ?></div>
        <div class="info-item"><strong>Sisters</strong><?= htmlspecialchars(implode(', ', $profile['sisters'])) ?></div>
      </div>

      <div style="margin-top:18px; text-align:center">
        <a class="cta" href="#contact">Contact</a>
      </div>
    </aside>

    <section class="card content">
      <div class="section">
        <h2>About</h2>
        <p>Hi — I'm <strong><?= htmlspecialchars($profile['name']) ?></strong>. <?= htmlspecialchars($profile['motto']) ?></p>
      </div>

      <div class="section">
        <h3>Likes</h3>
        <ul class="clean">
          <?php foreach ($profile['likes'] as $like): ?>
            <li>• <?= htmlspecialchars($like) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="section">
        <h3>Dislikes</h3>
        <ul class="clean">
          <?php foreach ($profile['dislikes'] as $dislike): ?>
            <li>• <?= htmlspecialchars($dislike) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="section" id="contact">
        <h3>Contact & Quick Info</h3>
        <p>If you'd like to reach me, the best place to start is to edit this template and add your contact details (email, phone, social links).</p>
        <p style="margin-top:12px"><strong>Quick actions:</strong></p>
        <p style="display:flex; gap:12px; flex-wrap:wrap; margin-top:12px">
          <a class="cta" href="#" onclick="alert('This button is a demo — replace the href with your contact or mailto:')">Message me</a>
          <a style="padding:12px 18px; border-radius:12px; background:transparent; color:var(--accent); text-decoration:none; font-weight:700; border:1px solid rgba(255,255,255,0.06)" href="#">Download CV</a>
        </p>
      </div>

    </section>
  </main>

  <!-- Optional script: demonstrate how to replace the placeholder with real data via query string (example: ?name=Shane&age=23) -->
  <script>
    // This small snippet reads URL params and asks user to reload with params to preview.
    // It intentionally does not write to the page for security reasons (server-side is recommended).
  </script>
</body>
</html>

