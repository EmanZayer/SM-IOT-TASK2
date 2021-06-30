<?php

    $servernam= 'localhost';
    $username = "root";
    $password = "";
    $db_name = 'r_engines';
   
      
    // DB Connecting
    $conn = new mysqli($servernam,$username, $password,$db_name);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";

      if(isset($_POST['Leftt'])){
        $Leftt = $_POST['Leftt'];
        echo "<br>";
    
        $sql = "";
    
      $sql = "SELECT * FROM base_control";
        $rs = mysqli_query($conn, $sql);
    
        $sql  = "INSERT INTO base_control= (Leftt) 
        VALUES ('$Leftt')";
        $rs = mysqli_query($conn, $sql); 
      }
      
      
        else if(isset($_POST['Forword'])){
          $Forword = $_POST['Forword'];
          echo "<br>";
      
          $sql = "";
      
        $sql = "SELECT * FROM base_control";
          $rs = mysqli_query($conn, $sql);
      
          $sql  = "INSERT INTO base_control= (Forword) 
          VALUES ('$Forword')";
          $rs = mysqli_query($conn, $sql); }
      
          else if(isset($_POST['Stopp'])){
            $Stopp = $_POST['Stopp'];
            echo "<br>";
        
            $sql = "";
        
          $sql = "SELECT * FROM base_control";
            $rs = mysqli_query($conn, $sql);
        
            $sql  = "INSERT INTO base_control= (Stopp) 
            VALUES ('$Stopp')";
            $rs = mysqli_query($conn, $sql); }

            else if(isset($_POST['Rightt'])){
              $Rightt = $_POST['Rightt'];
    
              echo "<br>";
          
              $sql = "";
          
            $sql = "SELECT * FROM base_control";
              $rs = mysqli_query($conn, $sql);
          
              $sql  = "INSERT INTO base_control= (Rightt) 
              VALUES ('$Rightt')";
              $rs = mysqli_query($conn, $sql); }

              else if(isset($_POST['Backword'])){
                $Backword = $_POST['Backword'];
    
                echo "<br>";
            
                $sql = "";
            
              $sql = "SELECT * FROM base_control";
                $rs = mysqli_query($conn, $sql);
            
                $sql  = "INSERT INTO base_control= (Backword) 
                VALUES ('$Backword')";
                $rs = mysqli_query($conn, $sql); }

      ?> 