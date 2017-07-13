<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    <body>
        <form method="post" action="page1.php" class="form-group" >
            <h3>To what extent is your guide available when you had queries/issues?</h3>
            <input type="radio" name="q1" value="Always available">Always available<br>
            <input type="radio" name="q1" value="Available most of the time">Available most of the time<br>
            <input type="radio" name="q1" value="Sometimes available">Sometimes available<br>
            <input type="radio" name="q1" value="Rarely available">Rarely available<br>
            <input type="radio" name="q1" value="Not Available at all">Not Available at all<br>
            
            <h3>How useful is your guide's feedback?</h3>
            <input type="radio" name="q2" value="Extremely useful">Extremely useful<br>
            <input type="radio" name="q2" value="Very useful">Very useful<br>
            <input type="radio" name="q2" value="Moderately useful">Moderately useful<br>
            <input type="radio" name="q2" value="Rarely useful">Rarely useful<br>
            <input type="radio" name="q2" value="Not useful at all">Not useful at all<br>
            
            <h3>To what extent does your guide review the paper/report and presentation on time?</h3>
            <input type="radio" name="q3" value="Always on time">Always on time<br>
            <input type="radio" name="q3" value="Mostly on time">Mostly on time<br>
            <input type="radio" name="q3" value="Sometimes on time">Sometimes on time<br>
            <input type="radio" name="q3" value="Rarely on time">Rarely on time<br>
            <input type="radio" name="q3" value="Not at all">Not at all<br>
            
            <h3>To what extent has your guide encouraged you to interact with external experts? </h3>
            <input type="radio" name="q4" value="Greatly encouraged">Greatly encouraged<br>
            <input type="radio" name="q4" value="Encouraged">Encouraged<br>
            <input type="radio" name="q4" value="Moderately encouraged">Moderately encouraged<br>
            <input type="radio" name="q4" value="Rarely encouraged">Rarely encouraged<br>
            <input type="radio" name="q4" value="Not at all">Not at all<br><br>
            
            <h3>How often do you receive feedback from your guide?</h3>
            <select name="q5">
                <option value="weekly">Weekly</option>
                <option value="Once a Month">Once a Month</option>
                <option value="Twice a Month">Twice a Month</option>
                <option value="Once a Semester">Once a Semester</option>
            </select><br><br>
            
            <h3>Do you feel your guide/co-guide is biased?</h3>
            <input type="radio" name="q6" value="Yes">Yes<br>
            <input type="radio" name="q6" value="No">No<br>
            
            <h3>Have you noticed any improvement in guidance from last feedback submitted?</h3>
            <input type="radio" name="q7" value="Yes">Yes<br>
            <input type="radio" name="q7" value="No">No<br>
            
            <h3>Would you recommend you guide to other candidates?(final years only)</h3>
            <input type="radio" name="q8" value="Yes">Yes<br>
            <input type="radio" name="q8" value="No">No<br><br>
            
            <button class="btn btn-primary">Submit</button>
            
            
        </form>
        
    </body>
</html>
