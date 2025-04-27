<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Include the database connection
require_once 'config.php';

// Fetch user data
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Fetch gamified engagement data
$community_challenges = [];
$personal_achievements = [];
$milestones = [];
$daily_login_incentives = [];
$wellness_tracking = [];

// Fetch data from the database (example queries)
$sql_community_challenges = "SELECT * FROM community_challenges";
$result_community_challenges = $conn->query($sql_community_challenges);
if ($result_community_challenges) {
    while ($row = $result_community_challenges->fetch_assoc()) {
        $community_challenges[] = $row;
    }
}

$sql_personal_achievements = "SELECT * FROM personal_achievements WHERE user_id = ?";
$stmt_personal_achievements = $conn->prepare($sql_personal_achievements);
$stmt_personal_achievements->bind_param('i', $user_id);
$stmt_personal_achievements->execute();
$result_personal_achievements = $stmt_personal_achievements->get_result();
while ($row = $result_personal_achievements->fetch_assoc()) {
    $personal_achievements[] = $row;
}

$sql_milestones = "SELECT * FROM milestones WHERE user_id = ?";
$stmt_milestones = $conn->prepare($sql_milestones);
$stmt_milestones->bind_param('i', $user_id);
$stmt_milestones->execute();
$result_milestones = $stmt_milestones->get_result();
while ($row = $result_milestones->fetch_assoc()) {
    $milestones[] = $row;
}

$sql_daily_login_incentives = "SELECT * FROM daily_login_incentives WHERE user_id = ?";
$stmt_daily_login_incentives = $conn->prepare($sql_daily_login_incentives);
$stmt_daily_login_incentives->bind_param('i', $user_id);
$stmt_daily_login_incentives->execute();
$result_daily_login_incentives = $stmt_daily_login_incentives->get_result();
while ($row = $result_daily_login_incentives->fetch_assoc()) {
    $daily_login_incentives[] = $row;
}

$sql_wellness_tracking = "SELECT * FROM wellness_tracking WHERE user_id = ?";
$stmt_wellness_tracking = $conn->prepare($sql_wellness_tracking);
$stmt_wellness_tracking->bind_param('i', $user_id);
$stmt_wellness_tracking->execute();
$result_wellness_tracking = $stmt_wellness_tracking->get_result();
while ($row = $result_wellness_tracking->fetch_assoc()) {
    $wellness_tracking[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamified Engagement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($user['first_name']); ?>!</h1>
    </header>
    <nav>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="gamified_engagement.php">Gamified Engagement</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Community Challenges</h2>
            <ul>
                <?php foreach ($community_challenges as $challenge): ?>
                    <li><?php echo htmlspecialchars($challenge['description']); ?> - Progress: <?php echo htmlspecialchars($challenge['progress']); ?>%</li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2>Personal Achievements</h2>
            <ul>
                <?php foreach ($personal_achievements as $achievement): ?>
                    <li><?php echo htmlspecialchars($achievement['description']); ?> - Date: <?php echo htmlspecialchars($achievement['date']); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2>Milestones</h2>
            <ul>
                <?php foreach ($milestones as $milestone): ?>
                    <li><?php echo htmlspecialchars($milestone['description']); ?> - Date: <?php echo htmlspecialchars($milestone['date']); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2>Daily Login Incentives</h2>
            <ul>
                <?php foreach ($daily_login_incentives as $incentive): ?>
                    <li><?php echo htmlspecialchars($incentive['description']); ?> - Date: <?php echo htmlspecialchars($incentive['date']); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section>
            <h2>Wellness Tracking</h2>
            <ul>
                <?php foreach ($wellness_tracking as $tracking): ?>
                    <li><?php echo htmlspecialchars($tracking['description']); ?> - Date: <?php echo htmlspecialchars($tracking['date']); ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 OUTSINC. All rights reserved.</p>
    </footer>
</body>
</html>
