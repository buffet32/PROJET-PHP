
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>PAGE1</title>
</head>
<body>
    <?php
     include("navbar.php");
echo 'Welcome to home 3, your informarion: <br>';
echo 'Email :' .$_SESSION['emailS']. '<br>';
echo 'Password :' .$_SESSION['passS']. '<br>';
    ?>
   
</body>
</html>