<!DOCTYPE html>
<html lang="en">
<head>

<style>
div {
  
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 400px;
  margin-left: 400px;
}
</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_else</title>
</head>
<body>
    <div>
    <fieldset style= "width: 20rem;">
            <legend>Student Marksheet</legend>
                <form method = "POST">
                    <label>Physics:</label>
                    <input type = "number" name = "physics"><br><br>

                    <label>Chemistry:</label>
                    <input type = "number" name = "chemistry"><br><br>

                    <label>Biology:</label>
                    <input type = "number" name = "biology"><br><br>

                    <label>Mathmatics:</label>
                    <input type = "number" name = "maths"><br><br>

                    <label>Computer:</label>
                    <input type = "number" name = "computer"><br><br>


                    <input type = "submit" name = "submit"><hr>
                </form>
    </feildset>

    <?php

    $physics = $_POST['physics'];
    $chemistry = $_POST['chemistry'];
    $biology = $_POST['biology'];
    $maths = $_POST['maths'];
    $computer = $_POST['computer'];

    $total = $physics + $chemistry + $biology + $maths + $computer;
    $avg = $total/ 5.0;
    $percentage = ($total/500)*100;
    //echo"$percentage";    


    if($avg < 35){
        echo"<b style= 'color: #ff0000'>You'r percentage is $percentage% 'You'r are Fail.!'</b>";
    }else if($avg >= 35 && $avg <= 40){
        echo"<b style = 'color: #00ff00'>You'r Sucessfully Passed With $percentage% Grade D2.!</b> ";
    }else if($avg >= 41 && $avg <= 50){
        echo"<b style = 'color: #00ff00'>You'r Sucessfully Passed With $percentage% Grade D1.!</b> ";
    }else if($avg >= 51 && $avg <= 60){
        echo"<b style = 'color: #00ff00'>You'r Sucessfully Passed With $percentage% 'Grade C2'.!</b> ";
    }else if($avg >=61 && $avg <= 70){
        echo"<b style = 'color: #00ff00'>You'r Sucessfully Passed With $percentage% 'Grade C1'.!</b> ";
    }else if($avg >= 71 && $avg <=80){
        echo"<b style = 'color: #00ff00'>You'r Sucessfully Passed With $percentage% Grade B2'.!</b> ";
    }else if($avg >=81 && $avg <= 90){
        echo"<b style = 'color: #00ff00'>You'r Sucessfully Passed With $percentage% Grade B1 '.!</b>";
    }else if($avg >= 91 && $avg <= 100){
        echo"<b style = 'color: #00ff00'>You'r Sucessfully Passed With $percentage% Grade A'.! </b>";
    }else{
        echo"<b style = 'color: #ff0000'>Invalid Entery.! </b>";
        
    }


?>
</div>
</body>
</html>

