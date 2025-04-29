<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Use Self-Assessment Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Drug Use Self-Assessment Form</h1>
    </header>
    <main>
        <form class="intake-form" action="submit_drug_use_self_assessment.php" method="POST">
            <div>
                <label for="frequency">Frequency of Drug Use:</label>
                <input type="text" id="frequency" name="frequency" required>
            </div>
            <div>
                <label for="type">Type of Drug Use:</label>
                <input type="text" id="type" name="type" required>
            </div>
            <div>
                <label for="history">History of Substance Use:</label>
                <textarea id="history" name="history" required></textarea>
            </div>
            <div>
                <label for="previous_treatment">Previous Treatment or Support Received:</label>
                <textarea id="previous_treatment" name="previous_treatment" required></textarea>
            </div>
            <div>
                <label for="current_support">Current Support Systems:</label>
                <textarea id="current_support" name="current_support" required></textarea>
            </div>
            <div>
                <label for="goals">Goals for Reducing or Stopping Drug Use:</label>
                <textarea id="goals" name="goals" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 OUTSINC. All rights reserved.</p>
    </footer>
</body>
</html>
