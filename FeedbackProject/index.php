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
    <body style="background-color: whitesmoke;">
        <h1>Facilities Available</h1><br><br>
        <div class="container">
            <form class="form-group formwidth" method="post" action="page2.php">
            <h2>How do you rate the quality of the following facilities and services available in the campus?</h2><br><br>
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>Options</th>
                        <th>Excellent</th>
                        <th>Good</th>
                        <th>Satisfactory</th>
                        <th>Poor</th>
                        <th>Not Applicable</th>
                    </tr>
                    <tr>
                        <td>Leave</td>
                        <td><input type="radio" name="leave" value="Excellent"></td>
                        <td><input type="radio" name="leave" value="Good"></td>
                        <td><input type="radio" name="leave" value="Satisfactory"></td>
                        <td><input type="radio" name="leave" value="Poor"></td>
                        <td><input type="radio" name="leave" value="Not Applicable"></td>
                    </tr>
                    <tr>
                        <td>HealthCare</td>
                        <td><input type="radio" name="healthcare" value="Excellent"></td>
                        <td><input type="radio" name="healthcare" value="Good"></td>
                        <td><input type="radio" name="healthcare" value="Satisfactory"></td>
                        <td><input type="radio" name="healthcare" value="Poor"></td>
                        <td><input type="radio" name="healthcare" value="Not Applicable"></td>
                    </tr>
                    <tr>
                        <td>Infrastructure</td>
                        <td><input type="radio" name="infrastructure" value="Excellent"></td>
                        <td><input type="radio" name="infrastructure" value="Good"></td>
                        <td><input type="radio" name="infrastructure" value="Satisfactory"></td>
                        <td><input type="radio" name="infrastructure" value="Poor"></td>
                        <td><input type="radio" name="infrastructure" value="Not Applicable"></td>
                    </tr>
                    <tr>
                        <td>Resource<br>(Ex: Software,Equipments, Chemicals)</td>
                        <td><input type="radio" name="resource" value="Excellent"></td>
                        <td><input type="radio" name="resource" value="Good"></td>
                        <td><input type="radio" name="resource" value="Satisfactory"></td>
                        <td><input type="radio" name="resource" value="Poor"></td>
                        <td><input type="radio" name="resource" value="Not Applicable"></td>
                    </tr>
                </tbody>
            </table><br><br>
            <h5>Have you applied for funds from the institute/department in the last 6 months?</h5>
            <input type="radio" name="q5" value="Yes">Yes
            <input type="radio" name="q5" value="No">No<br><br>
            
            <h5>Have you initiated research grant submission in the last 6 months?</h5>
            <input type="radio" name="q6" value="Yes">Yes
            <input type="radio" name="q6" value="No">No<br><br>
            
            <h5>Have you availed facilities from the University to attend workshop/publish research work?</h5>
            <input type="radio" name="q7" value="Yes">Yes
            <input type="radio" name="q7" value="No">No<br><br>
            
            <h5>Have you initiated requests to procure new paid resources (ex: software, equipment, chemicals)?</h5>
            <input type="radio" name="q8" value="Yes">Yes
            <input type="radio" name="q8" value="No">No<br><br>
            
            <button class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
