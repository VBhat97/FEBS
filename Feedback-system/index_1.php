<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="footer_css/css/zerogrid.css">
        <link rel="stylesheet" href="footer_css/css/style.css">
        <script src="js/bootstrap.min.js"></script>
        <title>Guidance Received</title>
    </head>
    <body style="background-color: whitesmoke">
        <h1>Guidance Received</h1><br><br>
        <div class="container">
            <form class="form-group formwidth" method="post" action="dataUpdate.php">
                <table class="table table-bordered table-hover table-striped table-responsive">
                <tbody>
                    <tr>
                        <td>To what extent is your guide available when you had queries/issues?</td>
                        <td><input type="radio" name="available" value="Always Available">Always Available</td>
                        <td><input type="radio" name="available" value="Available most of the time">Available most of the time</td>
                        <td><input type="radio" name="available" value="Sometimes available">Sometimes available</td>
                        <td><input type="radio" name="available" value="Rarely Available">Rarely Available</td>
                        <td><input type="radio" name="available" value="Not available at all">Not available at all</td>
                    </tr>
                    <tr>
                        <td>How useful is your guide's feedback?</td>
                        <td><input type="radio" name="feedback" value="Extremely useful">Extremely useful</td>
                        <td><input type="radio" name="feedback" value="Very useful">Very useful</td>
                        <td><input type="radio" name="feedback" value="Moderately useful">Moderately useful</td>
                        <td><input type="radio" name="feedback" value="Rarely useful">Rarely useful</td>
                        <td><input type="radio" name="feedback" value="Not useful at all">Not useful at all</td>
                    </tr>
                    <tr>
                        <td>To what extent does your guide review the paper/report and presentation on time?</td>
                        <td><input type="radio" name="review" value="Always on time">Always on time</td>
                        <td><input type="radio" name="review" value="Mostly on time">Mostly on time</td>
                        <td><input type="radio" name="review" value="Sometimes on time">Sometimes on time</td>
                        <td><input type="radio" name="review" value="Rarely on time">Rarely on time</td>
                        <td><input type="radio" name="review" value="Not at all">Not at all</td>
                    </tr>
                    <tr>
                        <td>To what extend has your guide encouraged you to interact with external experts?</td>
                        <td><input type="radio" name="encourage" value="Greatly encouraged">Greatly encouraged</td>
                        <td><input type="radio" name="encourage" value="Encouraged">Encouraged</td>
                        <td><input type="radio" name="encourage" value="Moderately encouraged">Moderately encouraged</td>
                        <td><input type="radio" name="encourage" value="Rarely encouraged">Rarely encouraged</td>
                        <td><input type="radio" name="encourage" value="Not at all">Not at all</td>
                    </tr>
                </tbody>
            </table><br><br>
            <h5>How often do you receive guidance or feedback from your guide?</h5>
            <select name="guidance">
                <option  value="Weekly" >Weekly</option>
                <option  value="Once a month">Once a month</option>
                <option  value="Twice a month">Twice a month</option>
                <option  value="Once a semester">Once a semester</option>
            </select>
            
            
            <h5>DO you feel your guide/co-guide is biased?</h5>
            <input type="radio" name="biased" value="Yes">Yes
            <input type="radio" name="biased" value="No">No<br><br>
            
            <h5>Have you noticed any improvement in guidance from last feedback submitted?</h5>
            <input type="radio" name="improvement" value="Yes">Yes
            <input type="radio" name="improvement" value="No">No<br><br>
            
            <h5>Would you recommend your guide to other candidates?</h5>
            <input type="radio" name="recommend" value="Yes">Yes
            <input type="radio" name="recommend" value="No">No<br><br>
            
            <button class="btn btn-primary">Submit</button>
            </form>   
        </div>
</body>
</html>
