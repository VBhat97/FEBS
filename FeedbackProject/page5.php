<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css">
        <title>Feedback Project</title>
    </head>
    <body style="background-color: whitesmoke;">
        <h1>Challenges</h1>
        <div class="container">
            <form class="form-group formwidth" method="post" action="page5-script.php">
                <h3>Which of the following would you say is the most difficult for PhD's in your discipline? </h3><br>
                <input type="radio" name="q1" value="Learning what career possibilities exist">Learning what career possibilities exist<br>
                <input type="radio" name="q1" value="Finding research careers within academia">Finding research careers within academia<br>
                <input type="radio" name="q1" value="Finding research careers within industry">Finding research careers within industry<br>
                <input type="radio" name="q1" value="Finding research careers within government">Finding research careers within government<br>
                <input type="radio" name="q1" value="Finding research careers with charity/non-profit organisations">Finding research careers with charity/non-profit organisations<br>
                <input type="radio" name="q1" value="Finding non-research careers that use your skills">Finding non-research careers that use your skills<br>
                <input type="radio" name="q1" value="Others">Others<br>
                
                <h3>Any other Comments</h3>
                <input type="text" name="q2" style="width:500px; height: 100px; padding: 0;"><br><br>
                
                <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>