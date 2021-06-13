<?php 

if(isset($_POST["submit"])){
    if($_POST["email-login"] == $_POST["email"] && $_POST["password-login"]== $_POST["password"]){
        header("location:home.php");
        exit;   
    }else{ 
        $wrong = true;
    }

}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="apple-touch-icon" sizes="180x180" href="img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/ico/favicon-16x16.png">
    <link rel="manifest" href="img/ico/site.webmanifest">

    <title>Unibook</title>
</head>
<body>

    <div class="formcontainer">
        
        <div class="loginform">
            <form method="post">
               <input class="email" type="email" name="email-login" id="email" placeholder="email">
               <input class="password" type="password" name="password-login" id="password" placeholder="password"> 
               <button type="submit" name="submit">login</button>
            </form>  
            <?php 
                if(isset($wrong)){ ?>
                    <p style=" 
                        color:red;
                        width:200px ;
                        font-style:italic;
                    ">
                    username and password incorrect!
                    </p>
              <?php  }
            ?>
            <p><a href="reset.php">forget password?</a></p>
        </div>
        <div class="signupbutton">
            <a href="signup.php">
                <button>sign up</button>
            </a>
        </div>
    </div>

</body>
</html>