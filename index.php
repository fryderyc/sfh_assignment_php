<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe & Kayak</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'header.php'; ?>
</head>

<body>
    <main class="form-page">
        <div class="form-box">
            <form method="POST" action="problem.php" required>
                <select id="title" name="title" required>
                    <option value="">Select title</option>
                    <option value="Mr">Mr.</option>
                    <option value="Ms">Ms.</option>
                    <option value="Mrs">Mrs.</option>
                    <option value="Dr">Dr.</option>
                </select>
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required minlength='2' maxlength='100'><br>
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required minlength='2' maxlength='100'><br>
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="">Select Role</option>
                    <option value="admin">Admin</option>
                    <option value="manager">Manager</option>
                    <option value="ceo">CEO</option>
                </select>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
    <script src="main.js"></script>
</body>

</html>