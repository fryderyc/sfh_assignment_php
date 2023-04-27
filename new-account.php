<html>
<head>
    <?php include('header.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe & Kayak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="content">
    <h1>Create a New Account</h1>
    <?php
    echo $_SESSION["current_user"];
    ?>
    <form method="POST" action="send-email.php">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <input type="hidden" name="emailType" value="newAccount">
        
        <button type="submit">Submit</button>
    </form>
    <script src="main.js"></script>
</main>
</body>
</html>
