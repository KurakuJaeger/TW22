<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Bagtas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $name = "Clark Wayne D. Bagtas";
        $profession = "Full-Stack Developer";
        $residence = "008 Willa Rey Road 2, Pinagbuhatan";
        $city = "Pasig, Manila";
        $phoneNumber = "+63-9270621838";
        $personalEmail = "bagtasclarkwayne.pipoy@gmail.com";
        $schoolEmail = "cdbagtas@fit.edu.ph";
    ?>

    <div class="container">
        <div class="resume-card">
            <header>
                <div class="name-box">
                    <h1><?= $name; ?></h1>
                    <p class="subtitle"><?= $profession; ?></p>
                </div>
                <div class="contact-info">
                    <div class="contact-item"><?= $personalEmail; ?></div>
                    <div class="contact-item"><?= $phoneNumber; ?></div>
                    <div class="contact-item"><?= $city; ?></div>
                </div>
            </header>

            <div class="content-grid">
                <!-- Sidebar -->
                 <aside>
                    <section>
                        <h2 class="section-title"> About Me</h2>
                        <p style ="font-size: 0.875rem; color: var(--text-secondary);">Output-driven motivation with 2+ years of experience in an evolving emerging technologies</p>
                    </section>

                    <section>
                        <h2 class="section-title">Core Skills</h2>
                        <div class="skills-container">
                            <span class="skill-tag">UX/UX Design</span>
                            <span class="skill-tag">Networking</span>
                            <span class="skill-tag">Data Analytics</span>
                            <span class="skill-tag">Brand Strategy</span>
                        </div>
                    </section>

                    <section>
                        <h2 class="section-title">Education</h2>
                        <div style="margin-bottom: 1rem;">
                            <p style="font-weight: 600; font-size: 0.875rem;">BSIT-WMA</p>
                            <p style="font-style: 0.75rem; color: var(--text-muted)">Far Eastern University Institute of Technology</p>
                        </div>
                    </section>
                 </aside>

                 <!-- Main Section -->
                  <main>
                    <section>
                        <h2 class="section-title">Experience</h2>
                        <div class="experience-item">
                            <div class="experience-header">
                                <span class="job-title">2nd Year Undergraduate of BSIT-WMA</span>
                                <span class="date-badge">2026 - PRESENT</span>
                            </div>
                            <p class="company-name">Far Eastern Univeristy Institute of Technology</p>
                            <ul class="bullet-points">
                                <li>Lorem ipsum dolor sit amet.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        <div class="experience-item" style ="border-color: #f1f5f9">
                            <div class="experience-header">
                                    <span class="job-title">Lorem, ipsum dolor.</span>
                                    <span class="date-badge">2020 - 2024</span>
                            </div>
                            
                            <p class="company-name">Lorem, ipsum.</p>
                            <ul class="bullet-points">
                                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis!</li>
                            </ul>
                        </div>
                    </section>

                    <section>
                        <h2 class="section-title">Achievements</h2>
                        <div class="achievement-grid">
                            <div class="achievement-card">
                                <h4>FEU Scholar</h4>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="achievement-card">
                                <h4>Lorem, ipsum dolor.</h4>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                    </section>
                  </main>
            </div>
        </div>

        <div style="margin-top: 2rem; text-align: center;" class="no-print">
            <button onclick="window.print()" style="padding: 0.75rem; background: var(--dark-header); color: white; border: none; border-radius: 2rem; cursor: pointer; font-weight: 600;">
                Download PDF
            </button>
        </div>
    </div>
</body>
</html>