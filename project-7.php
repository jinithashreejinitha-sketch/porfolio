<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Jinithashree — B.Sc IT</title>
  <meta name="description" content="Jinithashree — B.Sc IT Student. Passionate about technology and web development." />
  <style>
    :root{--bg:#111827;--card:#1f2937;--muted:#9ca3af;--accent:#2563eb}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial;background:linear-gradient(180deg,#0f172a,#111827);color:#f9fafb;line-height:1.5}
    .container{max-width:1100px;margin:32px auto;padding:24px}
    header{display:flex;align-items:center;justify-content:space-between;gap:16px}
    .brand{display:flex;gap:12px;align-items:center}
    .avatar{width:56px;height:56px;border-radius:12px;background:linear-gradient(135deg,var(--accent),#06b6d4);display:flex;align-items:center;justify-content:center;font-weight:700;color:#fff}
    nav{display:flex;gap:12px;align-items:center}
    nav a{color:var(--muted);text-decoration:none;padding:8px;border-radius:8px}
    nav a.primary{background:var(--accent);color:white}
    .hero{display:grid;grid-template-columns:1fr 340px;gap:28px;align-items:center;margin-top:28px}
    .card{background:rgba(255,255,255,0.03);padding:22px;border-radius:14px;box-shadow:0 6px 18px rgba(0,0,0,0.5)}
    h1{margin:0;font-size:28px}
    .role{color:var(--accent);font-weight:600;margin-top:6px}
    p.lead{color:var(--muted);margin-top:12px}
    .about-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-top:18px}
    .meta{color:var(--muted);font-size:14px}
    .skills{display:flex;flex-wrap:wrap;gap:8px;margin-top:10px}
    .skill{padding:8px 10px;border-radius:10px;background:rgba(255,255,255,0.05);font-weight:600}
    .projects{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:18px}
    .project{padding:16px;border-radius:12px;background:linear-gradient(180deg, rgba(255,255,255,0.04), rgba(255,255,255,0.02));min-height:120px}
    .project h3{margin:0 0 8px 0}
    .project p{color:var(--muted);font-size:14px}
    footer{margin-top:24px;padding:18px;text-align:center;color:var(--muted);font-size:14px}
    @media (max-width: 900px){.hero{grid-template-columns:1fr}.projects{grid-template-columns:repeat(2,1fr)}}
    @media (max-width: 560px){nav{display:none}.projects{grid-template-columns:1fr}.avatar{width:48px;height:48px}}
  </style>
</head>
<body>
  <div class="container">
    <header>
      <div class="brand">
        <div class="avatar">J</div>
        <div>
          <div style="font-weight:700">Jinithashree</div>
          <div style="font-size:13px;color:var(--muted)">B.Sc IT Student</div>
        </div>
      </div>
      <nav>
        <a href="#about">About</a>
        <a href="#projects">Projects</a>
        <a href="#contact" class="primary btn">Contact</a>
      </nav>
    </header>

    <section class="hero">
      <div class="card">
        <h1>Hello, I'm <span style="color:var(--accent)">Jinithashree</span></h1>
        <div class="role">2nd Year · B.Sc IT</div>
        <p class="lead">I am a passionate student exploring <strong>Information Technology</strong> and learning to build modern, responsive websites and applications.</p>
        <div class="about-grid">
          <div>
            <div class="meta">Department</div>
            <div style="margin-top:6px">B.Sc Information Technology</div>
            <div style="margin-top:12px" class="meta">Year</div>
            <div style="margin-top:6px">2nd Year</div>
          </div>
          <div>
            <div class="meta">Skills</div>
            <div class="skills">
              <span class="skill">HTML</span>
              <span class="skill">CSS</span>
              <span class="skill">JavaScript</span>
              <span class="skill">Python</span>
              <span class="skill">SQL</span>
            </div>
          </div>
        </div>
      </div>

      <aside class="card">
        <h3 style="margin-top:0">Quick Info</h3>
        <p class="meta">Department</p>
        <p>B.Sc IT</p>
        <p class="meta">Year</p>
        <p>2nd Year</p>
        <hr style="border:none;border-top:1px solid rgba(255,255,255,0.1);margin:14px 0" />
        <div class="meta">Focus</div>
        <p>Learning Web Development, Programming, and Database Management</p>
      </aside>
    </section>

    <section id="projects">
      <h2 style="margin-top:22px">Projects</h2>
      <div class="projects">
        <article class="project">
          <h3>Mini Portfolio Website</h3>
          <p>Simple portfolio built with HTML and CSS to showcase my profile and skills.</p>
        </article>
        <article class="project">
          <h3>Student Info System</h3>
          <p>A small project for managing student details using HTML, CSS, and PHP.</p>
        </article>
        <article class="project">
          <h3>Basic Calculator</h3>
          <p>A functional calculator made with HTML, CSS, and JavaScript.</p>
        </article>
      </div>
    </section>

    <section id="contact" style="margin-top:18px">
      <div class="card">
        <h2>Contact Me</h2>
        <p class="meta">You can connect with me via email for collaboration or project work.</p>
        <form onsubmit="sendMail(event)" style="margin-top:12px">
          <div style="display:flex;gap:8px;flex-wrap:wrap">
            <input id="name" type="text" placeholder="Your name" required style="flex:1;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.1);background:transparent;color:inherit" />
            <input id="email" type="email" placeholder="Your email" required style="flex:1;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.1);background:transparent;color:inherit" />
          </div>
          <textarea id="msg" placeholder="Message" required style="width:100%;margin-top:8px;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.1);background:transparent;color:inherit;height:110px"></textarea>
          <div style="margin-top:8px"><button style="padding:10px 14px;border:none;border-radius:8px;background:var(--accent);color:white;font-weight:600" type="submit">Send Email</button></div>
        </form>
      </div>
    </section>

    <footer>
      Built with ❤️ — Jinithashree · B.Sc IT Student
    </footer>
  </div>

  <script>
    function sendMail(e){
      e.preventDefault();
      const n=document.getElementById('name').value;
      const em=document.getElementById('email').value;
      const m=document.getElementById('msg').value;
      const subject=encodeURIComponent('Portfolio Contact from '+n);
      const body=encodeURIComponent('Name: '+n+'\nEmail: '+em+'\n\n'+m);
      window.location.href='mailto:jinithashree@example.com?subject='+subject+'&body='+body;
    }
  </script>
</body>
</html>
