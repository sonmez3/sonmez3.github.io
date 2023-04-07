<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My php Page</title>
</head>
<body>
   <?php
   //Name
   if(empty($_POST['Name'])==false){
    echo $_POST['Name'] ."<br>"     ;
   }
   else{
    echo  "Name: Not provided <br>";
   }
   
   //Username
   if(empty($_POST['Username'])==false){
    echo $_POST['Username'] ."<br>";
   }
   else{
    echo   "Username: Not provided <br>" ;
   }

   //Password
   if(empty($_POST['Password'])==false){
    echo $_POST['Password'] ."<br>";
   }
   else{
    echo   "Password: Not provided <br>" ;
   }

   //Address
   if(empty($_POST['Address'])==false){
    echo $_POST['Address'] ."<br>";
   }
   else{
    echo   "Address: Not provided <br>" ;
   }

   //Country
   if(empty($_POST['Country'])==false){
    echo $_POST['Country'] ."<br>";
   }
   else{
    echo   "Country: Not provided <br>" ;
   }

   //ZIP Code
   if(empty($_POST['ZIP Code'])==false){
    echo $_POST['ZIP Code'] ."<br>";
   }
   else{
    echo   "Zip: Not provided <br>" ;
   }

   //Email
   if(empty($_POST['Email'])==false){
    echo $_POST['Email'] ."<br>";
   }
   else{
    echo   "Email: Not provided <br>" ;
   }
   
   //Sex
   if(empty($_POST['gender'])==false & $_POST['gender']=="male"){
    echo "Male <br>";
   }
   else if(empty($_POST['gender'])==false & $_POST['gender']=="female"){
    echo   "Female <br>" ;
   }
   else{
    echo "Sex: Not provided <br>";
   }
   
   //Language
   if(empty($_POST["language"])==false){
    for($i=0 ; $i<sizeof($_POST["language"]); $i++){
        echo $_POST["language"][$i]."<br>";
    }
   }
   else{
    echo "Language: Not provided <br>";
   }

   //About
   if(empty($_POST['About'])==false){
    echo $_POST['About'] ."<br>";
   }
   else{
    echo   "About: Not provided <br>" ;
   }


   ?>
</body>
</html>