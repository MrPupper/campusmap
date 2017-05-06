<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Login | SmallPupper Campus Map</title>
    
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/ajax.js" type="text/javascript"></script>
    <script src="js/animation.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <h1>Login to CampusMap</h1>
        <img id="navtoggle" src="assets/arrow-w.svg" alt="Navigation toggle" />
    </header>
    
    <?php
    
    include('component/nav.php');
    include('component/loader.php');
    
    ?>
    
    <div id="wrapper">
        
        <section id="login">
            
            <h2>Login to customise your CampusMap.</h2>
            
            <ul class="list">
                <li>Get recommendations based on your course</li>
                <li>Find routes to your next lecture</li>
                <li>Save rooms to your Favourites for easy access</li>
            </ul>
            
            <form id="frmLogin" name="frmLogin" action="" method="post">
                
                <input type="text" name="username" id="username" placeholder="Username" required />
                <input type="password" name="password" id="password" placeholder="Password" required />
                
                <p class="failed hide">The username or password you entered didn't match our records. Please try again.</p>
                
                <input class="button" name="submit" id="submit" type="submit" value="Login" />
                <input class="button" name="create" id="create" type="button" value="Create an account" onclick="location.href='create.html';" />
                
                <p id="insecure">Caution: Passwords sent using this form are not secure. Do not enter passwords used on other websites.</p>
                
            </form>
        </section>
        
    </div>
</body>
</html>