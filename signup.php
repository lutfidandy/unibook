<?php 
    if (isset($_POST["signup"] )){
        if ($_POST["firstname"]!=="" && $_POST["lastname"]!=="" && $_POST["email"]!=="" && $_POST["password"]!=="" ){
            echo "berhasil";
            $berhasil = true;
        }else{
            echo "gagal";
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
    <title>sign up</title>
</head>
<body>
    
<div class="signup-container">
    <div class="signup-header">
        <h1>Sign Up Here!</h1>
        <p>it's fast and easy.</p>
    </div>
    <div class="signup-content">
        <form method="post">
        <input type="text" name="firstname" class="firstname" placeholder="first name" >
        <input type="text" name="lastname" class="lastname" placeholder="last name">
        <input type="email" name="email" class="email" placeholder="email">
        <input type="password" name="password" class="password" placeholder="password">
        <p>date of birth</p>

        <select name="day"> 
            <?php for($i = 1; $i <=31 ; $i++){
                ?> <option> <?php echo $i ?> </option> <?php 
            } ?>
        </select>
        <select name="month"> 
            <?php $months = ["january", "febuary", "march" ,"april" ,"may" ,"june" ,"july" , "august", "september" , "october" , "november" , "desember"]; ?>
            <?php foreach ($months as $month ){
                ?> <option> <?php echo $month?> </option> <?php 
            } ?>
        </select>
        <select name="year"> 
            <?php for($i = 2021; $i >=1905 ; $i--){
                ?> <option> <?php echo $i ?> </option> <?php 
            } ?>
        </select>

        <p>gender</p>
        <select name="gender"> 
            <?php $genders = ["male", "female", "march" ,"april" ,"may" ,"june" ,"july" , "august", "september" , "october" , "november" , "desember"]; ?>
            <?php foreach ($genders as $gender){
                ?> <option> <?php echo $gender ?> </option> <?php 
            } ?>
        </select>


        <button type="submit" name="signup">sign up</button>
        </form>
        
        <?php 
            if(isset($berhasil)){
                ?>   
                <form action="login.php" method="post">
                    <button name="login">login</button> 
                    <?php 
                        $_POST["email"] ; 
                        $_POST["password"];
                    ?>
                </form>
                                
                <?php 
            }
        ?>
        













    </div>
</div>


















</body>
</html>