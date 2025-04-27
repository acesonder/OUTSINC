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

// Fetch dashboard data
$active_clients = 0;
$overdue_tasks = 0;
$referral_stats = [];
$supplies_distribution = [];
$housing_placements = 0;
$appointment_tracking = [];
$client_satisfaction = [];

// Fetch data from the database (example queries)
$sql_active_clients = "SELECT COUNT(*) AS count FROM clients WHERE status = 'active'";
$result_active_clients = $conn->query($sql_active_clients);
if ($result_active_clients) {
    $active_clients = $result_active_clients->fetch_assoc()['count'];
}

$sql_overdue_tasks = "SELECT COUNT(*) AS count FROM tasks WHERE due_date < NOW() AND status != 'completed'";
$result_overdue_tasks = $conn->query($sql_overdue_tasks);
if ($result_overdue_tasks) {
    $overdue_tasks = $result_overdue_tasks->fetch_assoc()['count'];
}

// Fetch referral stats
$sql_referral_stats = "SELECT service, COUNT(*) AS count FROM referrals GROUP BY service";
$result_referral_stats = $conn->query($sql_referral_stats);
if ($result_referral_stats) {
    while ($row = $result_referral_stats->fetch_assoc()) {
        $referral_stats[] = $row;
    }
}

// Fetch supplies distribution data
$sql_supplies_distribution = "SELECT supply_type, COUNT(*) AS count FROM supplies GROUP BY supply_type";
$result_supplies_distribution = $conn->query($sql_supplies_distribution);
if ($result_supplies_distribution) {
    while ($row = $result_supplies_distribution->fetch_assoc()) {
        $supplies_distribution[] = $row;
    }
}

// Fetch housing placements
$sql_housing_placements = "SELECT COUNT(*) AS count FROM housing WHERE status = 'placed'";
$result_housing_placements = $conn->query($sql_housing_placements);
if ($result_housing_placements) {
    $housing_placements = $result_housing_placements->fetch_assoc()['count'];
}

// Fetch appointment tracking data
$sql_appointment_tracking = "SELECT appointment_date, COUNT(*) AS count FROM appointments GROUP BY appointment_date";
$result_appointment_tracking = $conn->query($sql_appointment_tracking);
if ($result_appointment_tracking) {
    while ($row = $result_appointment_tracking->fetch_assoc()) {
        $appointment_tracking[] = $row;
    }
}

// Fetch client satisfaction data
$sql_client_satisfaction = "SELECT rating, COUNT(*) AS count FROM satisfaction GROUP BY rating";
$result_client_satisfaction = $conn->query($sql_client_satisfaction);
if ($result_client_satisfaction) {
    while ($row = $result_client_satisfaction->fetch_assoc()) {
        $client_satisfaction[] = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTSINC Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Welcome, <?php echo htmlspecialchars($user['first_name']); ?>!</h1>
    </header>
    <nav>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="intake_form_basic.php">New Client</a></li>
            <li><a href="schedule_visit.php">Schedule Visit</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Dashboard</h2>
            <div class="widget">
                <h3>Active Clients</h3>
                <p><?php echo $active_clients; ?></p>
            </div>
            <div class="widget">
                <h3>Overdue Tasks</h3>
                <p><?php echo $overdue_tasks; ?></p>
            </div>
            <div class="widget">
                <h3>Referral Stats</h3>
                <ul>
                    <?php foreach ($referral_stats as $stat): ?>
                        <li><?php echo htmlspecialchars($stat['service']) . ': ' . $stat['count']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="widget">
                <h3>Supplies Distribution</h3>
                <ul>
                    <?php foreach ($supplies_distribution as $supply): ?>
                        <li><?php echo htmlspecialchars($supply['supply_type']) . ': ' . $supply['count']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="widget">
                <h3>Housing Placements</h3>
                <p><?php echo $housing_placements; ?></p>
            </div>
            <div class="widget">
                <h3>Appointment Tracking</h3>
                <ul>
                    <?php foreach ($appointment_tracking as $appointment): ?>
                        <li><?php echo htmlspecialchars($appointment['appointment_date']) . ': ' . $appointment['count']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="widget">
                <h3>Client Satisfaction</h3>
                <ul>
                    <?php foreach ($client_satisfaction as $satisfaction): ?>
                        <li><?php echo htmlspecialchars($satisfaction['rating']) . ': ' . $satisfaction['count']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 OUTSINC. All rights reserved.</p>
    </footer>
</body>
</html>
