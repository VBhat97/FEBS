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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="footer_css/css/zerogrid.css">
        <link rel="stylesheet" href="footer_css/css/style.css">
        <script src="js/bootstrap.min.js"></script>
        <title></title>
         <style>
             
            .btn[disabled]{
                 background-color: black;
                opacity: 1;
            }
           
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: fit-content;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 100px;
    left: 0;
    background-color:whitesmoke ;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 50px;
}
.scrollable {
    margin-top: 90px;
    height: 500px; /* or any value */
    overflow-y: auto;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 22px;}
}
</style>
</head>
<body style="background-color: whitesmoke">
   <nav class="navbar navbar navbar-fixed-top" style="height: 50px">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><img src="icon9.jpg" alt="MIT Logo"/></a>
        </div>
        <ul class="nav navbar-nav navbar-header">
            <li style="padding-left: 250px ; padding-top: 30px; color: #BF360C"><h3>Manipal Institute of technology</h3></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li style="margin-top: 20px;" class="btn btn-default"><a href="#">LOGOUT</a></li>
        </ul>
    </div>
</nav>
    <div class="container">
        <div id="mySidenav" class="sidenav" style="width:25%">
            <a href="page2.php" class="btn active" style="background-color: #FF8A65; height: 70px" >GUIDANCE<br> RECEIVED</a>
            <a class="btn " disabled href="#" style="background-color: #C21E17; height: 70px">FACILITIES <br>AVAILABLE</a>
            <a class="btn " disabled href="#" style="background-color: #A11913 ;height: 70px">WORK AND LIFE<br> BALANCE</a>
            <a class="btn " disabled href="#" style="background-color: #861510; height: 70px; padding-top: 20px;" >PROGRESS</a>
            <a class="btn " disabled href="#" style="background-color: #670F0B; height: 70px; padding-top: 20px;">CHALLENGES</a>
        </div>
        <div class="scrollable">
        <div style="margin-left: 25%">
            <br>
            <form class="form-group formwidth" method="post" action="dataUpdate.php">
                <table class="table table-bordered table-hover table-striped table-responsive">
                <tbody>
                    <tr class="success">
                        <td>To what extent is your guide available when you had queries/issues?</td>
                        <td><input type="radio" name="available" value="Always Available">Always Available</td>
                        <td><input type="radio" name="available" value="Available most of the time">Available most of the time</td>
                        <td><input type="radio" name="available" value="Sometimes available">Sometimes available</td>
                        <td><input type="radio" name="available" value="Rarely Available">Rarely Available</td>
                        <td><input type="radio" name="available" value="Not available at all">Not available at all</td>
                    </tr>
                    <tr class="danger">
                        <td>How useful is your guide's feedback?</td>
                        <td><input type="radio" name="feedback" value="Extremely useful">Extremely useful</td>
                        <td><input type="radio" name="feedback" value="Very useful">Very useful</td>
                        <td><input type="radio" name="feedback" value="Moderately useful">Moderately useful</td>
                        <td><input type="radio" name="feedback" value="Rarely useful">Rarely useful</td>
                        <td><input type="radio" name="feedback" value="Not useful at all">Not useful at all</td>
                    </tr>
                    <tr class="info">
                        <td>To what extent does your guide review the paper/report and presentation on time?</td>
                        <td><input type="radio" name="review" value="Always on time">Always on time</td>
                        <td><input type="radio" name="review" value="Mostly on time">Mostly on time</td>
                        <td><input type="radio" name="review" value="Sometimes on time">Sometimes on time</td>
                        <td><input type="radio" name="review" value="Rarely on time">Rarely on time</td>
                        <td><input type="radio" name="review" value="Not at all">Not at all</td>
                    </tr>
                    <tr class="warning">
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
            </div>
    </div>
    
</body>
</html>
