<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Intake Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Basic Intake Form</h1>
    </header>
    <main>
        <form class="intake-form" action="submit_intake_form.php" method="POST">
            <div>
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div>
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div>
                <label for="age">Age (optional):</label>
                <input type="number" id="age" name="age">
            </div>
            <div>
                <label for="gender">Gender (optional):</label>
                <input type="text" id="gender" name="gender">
            </div>
            <div>
                <label for="ethnicity">Ethnicity (optional):</label>
                <input type="text" id="ethnicity" name="ethnicity">
            </div>
            <div>
                <label for="phone">Phone Number (optional):</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div>
                <label for="email">Email (optional):</label>
                <input type="email" id="email" name="email">
            </div>
            <button type="submit">Submit</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2023 OUTSINC. All rights reserved.</p>
    </footer>
</body>
</html>
