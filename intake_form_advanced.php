<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Intake Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Advanced Intake Form</h1>
    </header>
    <main>
        <form class="intake-form" action="submit_advanced_intake_form.php" method="POST">
            <div>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div>
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>
            <div>
                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender" required>
            </div>
            <div>
                <label for="ethnicity">Ethnicity:</label>
                <input type="text" id="ethnicity" name="ethnicity" required>
            </div>
            <div>
                <label for="language">Language:</label>
                <input type="text" id="language" name="language" required>
            </div>
            <div>
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div>
                <label for="emergency_contact">Emergency Contact:</label>
                <input type="text" id="emergency_contact" name="emergency_contact" required>
            </div>
            <div>
                <label for="health_status">Health Status:</label>
                <textarea id="health_status" name="health_status" required></textarea>
            </div>
            <div>
                <label for="medications">Medications:</label>
                <textarea id="medications" name="medications" required></textarea>
            </div>
            <div>
                <label for="allergies">Allergies:</label>
                <textarea id="allergies" name="allergies" required></textarea>
            </div>
            <div>
                <label for="social_background">Social Background:</label>
                <textarea id="social_background" name="social_background" required></textarea>
            </div>
            <div>
                <label for="employment_income">Employment and Income:</label>
                <textarea id="employment_income" name="employment_income" required></textarea>
            </div>
            <div>
                <label for="housing_status">Housing Status:</label>
                <textarea id="housing_status" name="housing_status" required></textarea>
            </div>
            <div>
                <label for="legal_issues">Legal Issues:</label>
                <textarea id="legal_issues" name="legal_issues" required></textarea>
            </div>
            <div>
                <label for="support_network">Support Network:</label>
                <textarea id="support_network" name="support_network" required></textarea>
            </div>
            <div>
                <label for="goals">Goals:</label>
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
