<?php

    // creating database
    $host = "localhost";
    $user = "root";
    $pass = "";

    $server = mysqli_connect($host , $user , $pass);
    

    $dbquery ="create database gym_database";
    $mydb = mysqli_query($server , $dbquery );

    if($mydb){
        echo " new database created ";
    }else{
        echo " gym database already exist!";
    }


    // creating tables
    $dbname = "gym_database";
    $connection = mysqli_connect($host,$user,$pass,$dbname);


    // User table

    $userTableQuery = "create table user( userId int primary key , firstname varchar(50) , lastname varchar(50) , email varchar(50) , postcode varchar(10) ,password varchar(20) )";

    $userTable = mysqli_query($connection , $userTableQuery);
    
    if($userTable){
        echo "<br /> user table created";
    }else{
        echo "<br /> user table exist!";
    }


    //feedback table

    $feedbackTableQuery = "create table feedback( feedback_id int primary key , feedbackMessage varchar(100) , user_id int)";

    $feedbackTableCreated = mysqli_query($connection , $feedbackTableQuery);
   
    if($feedbackTableCreated){
        echo "<br /> feedback table created";
    }else{
        echo "<br /> feedback table exist!";
    }


    //feedback fk updated
    $feedFk= "ALTER TABLE `feedback` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`userId`) ON DELETE RESTRICT ON UPDATE RESTRICT";

   $feedbackTableCreated2 = mysqli_query($connection , $feedFk);

   if($feedbackTableCreated2){
    echo "<br /> feedback table fk updated";
    }else{
    echo "<br /> feedback table fk not updated!";
    }


    //  gym table
    $gymTableQuery = "create table gym( gymId int primary key , gymName varchar(50) , gymLocation varchar(50) , gymImages JSON , gymPass JSON , gymEquipment JSON , gymAmenities JSON , aboutGym varchar(400))";

    $gymTable = mysqli_query($connection , $gymTableQuery);

    if($gymTable){
        echo "<br> gym table created";
    }else{
        echo "<br> gym table exist";
    }

    // subscription pass table
    $subscription = "create table pass( passId int primary key , passName varchar(20) , passPrice int , passType varchar(100) , date varchar(100) , user_id int , gym_id int )";

    $subTable = mysqli_query($connection , $subscription);

    if($subTable){
        echo "<br> subscription table created";
    }else{
        echo "<br> subscription table exist";
    }

    // user fk updated
    $subFk= "ALTER TABLE `pass` ADD FOREIGN KEY (`user_id`) REFERENCES `user`(`userId`) ON DELETE RESTRICT ON UPDATE RESTRICT";

    $subscriptionTableCreated2 = mysqli_query($connection , $subFk);

   if($subscriptionTableCreated2){
    echo "<br /> subscription table fk updated";
    }else{
    echo "<br /> subscription table fk not updated!";
    }

    // gym fk update
    $subFk2= "ALTER TABLE `pass` ADD FOREIGN KEY (`gym_id`) REFERENCES `gym`(`gymId`) ON DELETE RESTRICT ON UPDATE RESTRICT";

    $subscriptionTableCreated3 = mysqli_query($connection , $subFk2);

   if($subscriptionTableCreated3){
    echo "<br /> subscription table fk updated";
    }else{
    echo "<br /> subscription table fk not updated!";
    }


?>

<!-- 
    insert query

    insert into gym values(2546 , 'Aura fitness' , 'Behrampura' , '["https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e" , "https://images.unsplash.com/photo-1571388208497-71bedc66e932" , "https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e"]' , '{"Platinum":0}' , '["Cardio machines", "Fitness studio", "Resistance machines", "Olympic weights", "Functional Training", "Free weights", "Personal Training", "Towels"]' , '["Changing Rooms", "Lockers", "Showers"]' , "aura fitness wonderfull gym");
Query OK, 1 row affected (0.49 sec)

 -->