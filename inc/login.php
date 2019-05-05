<?php
    session_start();
    print ("\n");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Tingting Wu</title>

    <meta name="description" content="Personal website of Tingting Wu">
    <meta name="author" content="Tingting Wu">
    <meta name="keywords" content="tingting wu cornell, tw283, tingting wu design, tingting wu portfolio, tingting wu deloitte">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="styles/reset.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="styles/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/nav.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="styles/main.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="styles/toggle.css" rel="stylesheet" type="text/css" media="screen" />


    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300|Lato:300,400|Tangerine' rel='stylesheet' type='text/css'>
    <link rel="icon" type="image/png"  href="img/favicon.ico">
    
</head>

<body>
<div id="wrap">
    <div class="container-fluid">
    <?php require ("inc/header.php");?>
    </div>

<?php
    // require header & nav
    include ('inc/functions.php');
    include ('inc/password.php');
    print ("\n");
?>
    
    <div id="container">
        <div id="vline"></div>
        <img src="img/stamp.png" alt="postage" width="87" height="115" id="stamp-position" />
        <p class="vert">Login</p>
        <div id="write">
        </div>
        
        <div id="address">
            <?php
            
            if (isset($_POST['username']) && isset($_POST['password']) ) {
                // establish connection to the SQL database
                $mysqli = new mysqli($host, $login, $password, $databaseName);
                
                $query = "SELECT * FROM user WHERE username = '". $_POST['username'] ."' AND password = '". hash("sha256",$_POST['password']) ."'";
                
                $result = $mysqli->query($query);
                
                if ($result->num_rows == 1) {
                    $array = $result->fetch_assoc();
                    $_SESSION['username'] = $array['username'];
                    $_SESSION['loggedin'] = true;
                } else {
                    print("<p>Login unsuccessful. Pleast try again.</p>\n");
                    unset($_POST['username']);
                    unset($_POST['password']);
                    include('inc/login-form.php');
                }
            }
            // if session variable is not set
            if (!isset($_SESSION['loggedin'])) {
                // present login form
                include('inc/login-form.php');
                } else {
                    print("<br /><br /><br /><br /><br />");
                    print("<p>Hello, ". $_SESSION['username'] .", you have successfully logged in.</p>\n");
                    print("<p>You may now edit the <a href=\"gallery.php\">gallery</a> or <a href=\"catalog/index.php\">catalog</a>.</p>\n");
                    }
            ?>
        </div>
    </div>

    <div class="container-fluid">
    <?php require ("inc/footer.php");?>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="styles/js/bootstrap.min.js"></script>
</body>
</html>
