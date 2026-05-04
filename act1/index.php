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

                <?php
                $skills = ["UX/UX Design", "Networking", "Data Analytics", "Brand Strategy"];
                ?>
                <!-- Sidebar -->
                <aside>
                    <section>
                        <h2 class="section-title"> About Me</h2>
                        <p style="font-size: 0.875rem; color: var(--text-secondary);">Aspiring Full-Stack Developer and 2nd-year BSIT student with a deep interest in modern JavaScript frameworks and mobile-first architecture. A proactive learner with experience in database management and end-to-end application development, seeking to apply technical skills in a collaborative professional environment.</p>
                    </section>

                    <section>
                        <h2 class="section-title">Core Skills</h2>
                        <div class="skills-container">
                            <?php foreach ($skills as $skill): ?>
                                <span class="skill-tag"><?= $skill; ?></span>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <?php
                    $education_history = [
                        ["level" => "COLLEGE", "school" => "Far Eastern University Institute of Technology"],
                        ["level" => "SENIOR HIGH SCHOOL", "school" => "Arellano University Andres Bonifacio Campus"],
                        ["level" => "JUNIOR HIGH SCHOOL", "school" => "APEC Schools C. Raymundo"],
                        ["level" => "ELEMENTARY", "school" => "Dean Learning School"],
                        ["level" => "KINDERGARTEN", "school" => "St. Joseph Children Centre"]
                    ];
                    ?>

                    <section>
                        <h2 class="section-title">Education</h2>

                        <?php foreach ($education_history as $item): ?>
                            <div style="margin-bottom: 1rem;">
                                <p style="font-weight: 600; font-size: 0.875rem;">
                                    <?php echo $item['level']; ?>
                                </p>
                                <p style="font-style: 0.75rem; color: var(--text-muted)">
                                    <?php echo $item['school']; ?>
                                </p>
                            </div>
                        <?php endforeach; ?>
                    </section>
                </aside>

                <!-- Main Section -->
                <main>
                    <section>
                        <h2 class="section-title">Experience</h2>
                        <div class="experience-item">
                            <div class="experience-header">
                                <span class="job-title">Logistic Director</span>
                                <span class="date-badge">2025 - PRESENT</span>
                            </div>
                            <p class="company-name">PRISM</p>
                            <ul class="bullet-points">
                                <li>Handles logistics operations for the organization</li>
                                <li>Coordinating with various departments to ensure smooth operations</li>
                            </ul>
                        </div>
                    </section>

                    <?php
                    $achievements = [
                        [
                            "title" => "FEU Tech 1TSY2526 CCSMA Dean's Lister (Bronze)",
                            "issuer" => "Issued by FEU Tech Registrar's Office on January 07, 2026"
                        ],
                        [
                            "title" => "FEU Tech 1TSY2425 CCSMA Dean's Lister (Bronze)",
                            "issuer" => "Issued by FEU Tech Registrar's Office on December 10, 2024"
                        ],
                        [
                            "title" => "Information Technology Specialist in JavaScript",
                            "issuer" => "Administered by: FEU - Institute of Technology"
                        ],
                        [
                            "title" => "Information Technology Specialist in Python",
                            "issuer" => "Administered by: FEU - Institute of Technology"
                        ],
                        [
                            "title" => "Information Technology Specialist in Databases",
                            "issuer" => "Administered by: FEU - Institute of Technology"
                        ],
                        [
                            "title" => "Information Technology Specialist in Java",
                            "issuer" => "Administered by: FEU - Institute of Technology"
                        ],
                        [
                            "title" => "Information Technology Specialist in HTML and CSS",
                            "issuer" => "Administered by: FEU - Institute of Technology"
                        ]
                    ];
                    ?>
                    <section>
                        <h2 class="section-title">Achievements</h2>
                        <div class="achievement-grid">

                            <?php foreach ($achievements as $award): ?>
                                <div class="achievement-card">
                                    <h4><?php echo $award['title']; ?></h4>
                                    <p><?php echo $award['issuer']; ?></p>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </section>
                </main>
            </div>
        </div>

        <div style="margin-top: 2rem; text-align: center;" class="no-print">
            <button onclick="window.print()"
                style="padding: 0.75rem; background: var(--dark-header); color: white; border: none; border-radius: 2rem; cursor: pointer; font-weight: 600;">
                Download PDF
            </button>
        </div>
    </div>
</body>

</html>