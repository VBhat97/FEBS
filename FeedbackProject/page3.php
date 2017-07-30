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
        <h1>Work and Life Balance</h1><br><br>
        <div class="container">
            <form class="form-group formwidth" method="post" action="page3-script.php">
                <h3>How do you rate the work atmosphere in your department?</h3>
                <select style="width : 500px; height: 50px;" name="q1">
                    <option value="Excellent" class="form-control">Excellent</option>
                    <option value="Good" class="form-control">Good</option>
                    <option value="Satisfactory" class="form-control">Satisfactory</option>
                    <option value="Poor" class="form-control">Poor</option>
                </select><br><br>
                
                <h3>How many hours do you put in for research work per week? </h3>
                <select style="width : 500px; height: 50px;" name="q2">
                    <option value="Less than 11 hours" class="form-control">Less than 11 hours</option>
                    <option value="11-20 hours" class="form-control">11-20 hours</option>
                    <option value="21-20 hours" class="form-control">21-30 hours</option>
                    <option value="31-40 hours" class="form-control">31-40 hours</option>
                    <option value="41-50 hours" class="form-control">41-50 hours</option>
                    <option value="51-60 hours" class="form-control">51-60 hours</option>
                    <option value="61-70 hours" class="form-control">61-70 hours</option>
                    <option value="71-80 hours" class="form-control">71-80 hours</option>
                    <option value="More than 80 hours" class="form-control">More than 80 hours</option>
                </select><br><br>
                
                <h3>To what extent do you receive support from the Head of the Department?</h3>
                <select style="width : 500px; height: 50px;" name="q3">
                    <option value="Extremely Supportive" class="form-control">Extremely Supportive</option>
                    <option value="Very Supportive" class="form-control">Very Supportive</option>
                    <option value="Moderately Supportive" class="form-control">Moderately Supportive</option>
                    <option value="Slightly Supportive" class="form-control">Slightly Supportive</option>
                    <option value="Not at all supportive" class="form-control">Not at all supportive</option>
                </select><br><br>
                
                <h3>Are you able to balance your personal life and research work? </h3>
                <input type="radio" name="q4" value="Yes">Yes
                <input type="radio" name="q4" value="No">No
                <br><br>
                
                <h3>Do you receive appreciation and encouragement from your guide?</h3>
                <input type="radio" name="q5" value="Yes">Yes
                <input type="radio" name="q5" value="No">No
                
                <br><br><br>
                
                <button class="btn btn-primary">Submit</button> 
            </form>
        </div>
    </body>
</html>