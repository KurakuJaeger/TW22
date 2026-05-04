<?php
// Initialized Values
$firstName = "Clark Wayne";
$lastName = "Bagtas";
$middleInitial = "D.";
$grade = 95;
$ranking = "";
$statusColor = "";

// Conditional Logic for Ranking and Color Branding
if ($grade >= 93) {
    $ranking = "A";
    $statusColor = "#fbbf24"; // Gold
} elseif ($grade >= 90) {
    $ranking = "A-";
    $statusColor = "#34d399"; // Emerald
} elseif ($grade >= 80) {
    $ranking = "B";
    $statusColor = "#60a5fa"; // Blue
} elseif ($grade >= 70) {
    $ranking = "C";
    $statusColor = "#fb923c"; // Orange
} elseif ($grade >= 60) {
    $ranking = "D";
    $statusColor = "#a8a29e"; // Stone
} else {
    $ranking = "F";
    $statusColor = "#f87171"; // Red
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Profile</title>
    <style>
        :root {
            --accent-color:
                <?php echo $statusColor; ?>
            ;
            --glass-bg: rgba(255, 255, 255, 0.85);
            --text-main: #1e293b;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            padding: 20px;
        }

        /* Ambient Background Glows */
        body::before {
            content: "";
            position: absolute;
            width: 300px;
            height: 300px;
            background: var(--accent-color);
            filter: blur(120px);
            opacity: 0.15;
            top: 10%;
            left: 10%;
            z-index: -1;
        }

        .profile-card {
            width: min(550px, 100%);
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            border-radius: 32px;
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            padding: 32px;
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
        }

        .profile-header {
            margin: 0 0 24px 0;
            text-align: left;
        }

        .profile-header h1 {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.15em;
            color: #64748b;
            margin: 0;
        }

        .name-display {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--text-main);
            margin-top: 4px;
        }

        .content-grid {
            display: grid;
            grid-template-columns: 160px 1fr;
            gap: 24px;
            margin-top: 24px;
        }

        .picture-wrapper {
            position: relative;
        }

        .picture-box {
            width: 160px;
            height: 190px;
            border-radius: 20px;
            overflow: hidden;
            border: 3px solid white;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .picture-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .stats-stack {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .stat-card {
            background: white;
            padding: 16px 20px;
            border-radius: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .stat-label {
            font-size: 0.8rem;
            font-weight: 600;
            color: #94a3b8;
            text-transform: uppercase;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-main);
        }

        .rank-badge {
            color: var(--accent-color);
            background: rgba(0, 0, 0, 0.03);
            padding: 4px 12px;
            border-radius: 10px;
        }

        @media (max-width: 500px) {
            .content-grid {
                grid-template-columns: 1fr;
            }

            .picture-box {
                width: 120px;
                height: 120px;
                margin: 0 auto;
                border-radius: 50%;
            }

            .name-display {
                text-align: center;
            }

            .profile-header h1 {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="profile-card">
        <header class="profile-header">
            <h1>Student Profile</h1>
            <div class="name-display">
                <?php echo "$firstName $middleInitial $lastName"; ?>
            </div>
        </header>

        <div class="content-grid">
            <div class="picture-wrapper">
                <div class="picture-box">
                    <img src="Clark.jpg" alt="Student"
                        onerror="this.src='https://ui-avatars.com/api/?name=Clark+Bagtas&background=random'">
                </div>
            </div>

            <div class="stats-stack">
                <div class="stat-card">
                    <span class="stat-label">Final Grade</span>
                    <span class="stat-value"><?php echo $grade; ?>%</span>
                </div>

                <div class="stat-card">
                    <span class="stat-label">Standing</span>
                    <span class="stat-value rank-badge"><?php echo $ranking; ?></span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>