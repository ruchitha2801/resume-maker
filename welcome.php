<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper">
        <nav class="navbar">
            <ul>
                <li><a class="active" href="home.html">Home</a></li>
                <li><a href="resume.html">Resume Generator</a></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <div class="center">
        <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        </div>
    </div>    
</body>
</html> 