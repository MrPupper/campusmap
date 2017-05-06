<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Account created successfully | SmallPupper Campus Map</title>
    
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Muli:400,800" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/ajax.js" type="text/javascript"></script>
    <script src="js/animation.js" type="text/javascript"></script>
</head>
<body>
    <header>
        <h1>Your Campus</h1>
        <img id="navtoggle" src="assets/arrow-w.svg" alt="Navigation toggle" />
    </header>
    
    <?php
    
    include 'component/nav.php';
    
    ?>
    
    <div id="wrapper">
        
        <section id="create">
            
            <h1>Account created successfully</h1>
            
            <h2>Great to have you on board!</h2>
            
            <p>Head over to 'Your Campus' to edit your profile, see rooms and locations relevant to your course, and check IT availability.</p>
            
            <input type="button" class="button" name="goProfile" id="goProfile" value="View Your Campus" />
            
        </section>
        
    </div>
</body>
</html>