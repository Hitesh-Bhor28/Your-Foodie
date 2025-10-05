<?php
//Delete id Numbers

// SET @num :=0;
// UPDATE signup SET id = @num := (@num+1);
// ALTER TABLE signup AUTO_INCREMENT =1;

//Database
    $server = "sql200.infinityfree.com";
    $username = "if0_39577752";
    $password = "D3moY423Gp";
    $db = "if0_39577752_userregistration";


    //Database Connection
    $conn = mysqli_connect($server,$username,$password,$db);
        if(!$conn){
            echo "not connected";
        }
