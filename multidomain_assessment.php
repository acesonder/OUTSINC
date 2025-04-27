<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidomain Assessment Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Multidomain Assessment Form</h1>
    </header>
    <main>
        <form class="intake-form" action="submit_multidomain_assessment.php" method="POST">
            <div>
                <label for="mental_health_status">Mental Health Status and History:</label>
                <textarea id="mental_health_status" name="mental_health_status" required></textarea>
            </div>
            <div>
                <label for="physical_health_status">Physical Health Status and History:</label>
                <textarea id="physical_health_status" name="physical_health_status" required></textarea>
            </div>
            <div>
                <label for="legal_issues">Legal Issues and Support Needed:</label>
                <textarea id="legal_issues" name="legal_issues" required></textarea>
            </div>
            <div>
                <label for="family_social_relationships">Family and Social Relationships:</label>
                <textarea id="family_social_relationships" name="family_social_relationships" required></textarea>
            </div>
            <div>
                <label for="employment_income_status">Employment and Income Status:</label>
                <textarea id="employment_income_status" name="employment_income_status" required></textarea>
            </div>
            <div>
                <label for="appointments_commitments">Appointments and Commitments:</label>
                <textarea id="appointments_commitments" name="appointments_commitments" required></textarea>
            </div>
            <div>
                <label for="overall_goals_support">Overall Goals and Support Needed:</label>
                <textarea id="overall_goals_support" name="overall_goals_support" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 OUTSINC. All rights reserved.</p>
    </footer>
</body>
</html>
