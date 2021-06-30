
    <?php
    $servernam= 'localhost';
    $db_name = 'r_engines';
    $username = "root";
    $password = "";
    
    //post variable 
    $Engine1 = $_POST['Engine1'];
    $Engine2 = $_POST['Engine2'];
    $Engine3 = $_POST['Engine3'];
    $Engine4 = $_POST['Engine4'];
    $Engine5 = $_POST['Engine5'];
    $Engine6 = $_POST['Engine6'];
    
    // DB Connecting
    $conn = new mysqli($servernam,$username, $password,$db_name);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      echo "Connected successfully";
    
      // insert in database 
    //$rs = mysqli_query($con, $sql);
    
    if(isset($_POST['save'])){
    
        echo "<br>";
    
        $sql = "";
    
        $sql = "SELECT * FROM `eng_rob`;";
        $rs = mysqli_query($conn, $sql);
    
        $sql  = "INSERT INTO eng_rob (Engine1, Engine2, Engine3, Engine4, Engine5, Engine6) 
        VALUES ('$Engine1', '$Engine2', '$Engine3', '$Engine4', '$Engine5', '$Engine6')";
        $rs = mysqli_query($conn, $sql);
        if($rs)
        {
            echo "Movement Save Successfuly ";
        }
        else{
            echo "ERROR: please check again <br>";
        }
    
    }else if(isset($_POST['run'])) {
            echo "<br>";
        
            $sql  = "";
        
            $sql = "SELECT * FROM `run_on`;";
            $rs = mysqli($con, $sql);
        
            $sql  = "INSERT INTO run_on VALUES (1)";
            $rs = mysqliy($conn, $sql);
            if($rs2)
            {
                echo "Run complete";
            }
            else{
                echo "ERROR: please check again <br>";
            }
        
        }
        
    
    
    
    
    ?>
