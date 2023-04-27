<?php
$first_name = $_POST['firstNames'];
$last_name = $_POST['lastName'];
$role = $_POST['role'];

session_start();
$_SESSION["current_user"] = $first_name . " " . $last_name;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halifax Canoe & Kayak</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main class="content">
        <h1>Welcome
            <?php echo $first_name . ' ' . $last_name; ?>!
        </h1>

        <p>Please select one of the following options:</p>
        <ul>

            <?php
            if ($role == 'admin') {
                ?>
                <li><a href="new-account.php">Create a New Account</a></li>
                <li><a href="isnt-working.php">My Computer Isn't Working</a></li>
                <?php
            } elseif ($role == 'manager') {
                ?>
                <li><a href="lost-password.php">I forgot my password</a></li>
                <li><a href="isnt-working.php">My Computer Isn't Working</a></li>
                <?php
            } elseif ($role == 'ceo') {
                ?>
                <li><a href="need-help.php">Need Help!</a></li>
                <li><a href="isnt-working.php">My Computer Isn't Working</a></li>
                <?php
            }
            ?>


        </ul>
        <script src="main.js"></script>
    </main>
</body>

</html>