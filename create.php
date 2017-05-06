<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Create an account | SmallPupper Campus Map</title>
    
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/animation.js" type="text/javascript"></script>
    <script src="js/ajax.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <h1>Create an account</h1>
        <img id="navtoggle" src="assets/arrow-w.svg" alt="Navigation toggle" />
    </header>
    
    <?php 
    
    include 'component/nav.php';
    include 'component/loader.php';
    
    ?>
    
    <div id="wrapper">
        
        <section id="create">
            
            <h2>Welcome! Just a few things to get started.</h2>
            
            <form id="frmCreate" name="frmCreate" action="" method="post">
                
                <p>Credentials</p>
                <input type="text" name="username" id="username" placeholder="Username" required />
                <input type="password" name="password" id="password" placeholder="Password" required />
                <p id="insecure">Caution: Passwords sent using this form are not secure. Do not enter passwords used on other websites.</p>
                
                <p>About you</p>
                <input type="text" name="name" id="name" placeholder="Your full name" required />
                <input type="text" name="name" id="name" placeholder="Student number (e.g. S1234567)" required />
                
                <p>Your course</p>
                <input type="text" name="course" id="course" placeholder="Course title (e.g. Business Computing)" required />
                <input class="button" type="button" name="srchCourse" id="srchCourse" value="Find course" />
                
                <p id="srchFailed" class="hide">Sorry, we had trouble finding your course. Please try searching again.</p>
                
                <div id="courseresults" class="hide">
                    <ul id="resultcontainer">
                        
                    </ul>
                    
                    <input type="text" name="level" id="level" placeholder="Current level (e.g. 4)" required />
                </div>
                
                <div class="separator"></div>
                
                <p class="failed hide">Sorry, but we couldn't create your account at this time. Please refresh the page or try again later.</p>
                
                <input class="button hide" name="submit" id="createSubmit" type="submit" value="Create account" />
                <input class="button" name="cancel" id="cancel" type="button" value="Cancel" onclick="location.href='login.php';"  />
                
            </form>
        </section>
        
    </div>
</body>
</html>