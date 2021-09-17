<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark SRC Bank</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bank.jpg" alt="BANK image">
    <div class= "container">
        <h1>SPARK SRC BANKING SYSTEM</h1>
    </div>
    <div class="topnav">
            <a href="index.php">Home</a>
            <a href="login.php">Services</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
    </div>
        
    </div>
    <div class="container">
        <?php 
        
            $server = "localhost";
            $username = "root";
            $password = "";

            $con = mysqli_connect($server, $username, $password);

            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
             }

            $names = $_POST["sender"];
            $namer = $_POST["receiver"];
            $tran = $_POST["val"];
            $flag = 0;
            $f = 0;

            if($names == $namer){
                $f=1;
            }

            // echo $names;
            // echo "<br>";
            // echo $namer;

            $sqls = "SELECT * FROM `bank`.`bank` WHERE name='$names' " ;
            $results = mysqli_query($con, $sqls);
            $sqlr = "SELECT * FROM `bank`.`bank` WHERE name='$namer' " ;
            $resultr = mysqli_query($con, $sqlr);

            $sql = "INSERT INTO `bank`.`history` (`sender`, `receiver`, `amount`, `dt`) 
            VALUES ('$names', '$namer', '$tran', current_timestamp());";

            $rows = mysqli_fetch_assoc($results);
            $balns = $rows['balance'];
            $rowr = mysqli_fetch_assoc($resultr);
            $balnr = $rowr['balance'];

            if(((int)$tran <= $balns) && ($f !=1)){
                $vals= $balns - (int)$tran;
                $valr= $balnr + (int)$tran;
                $flag = 0;
            }
            else{
                $vals= $balns - 0; 
                $valr= $balnr + 0;
                $flag = 1;
            }
            

            echo "The sender ".$names."'s bank balance after money transfer: ".$vals;
            echo "<br>";
            echo "The receiver ".$namer."'s bank balance after money transfer: ".$valr;

            $ups = "UPDATE `bank`.`bank` SET balance='$vals' WHERE name= '$names'";
            $upr = "UPDATE `bank`.`bank` SET balance='$valr' WHERE name= '$namer'";
            
            echo "<br>";

            if ($con->query($ups) === TRUE && $con->query($upr) === TRUE && $con->query($sql) === TRUE && $flag == 0) {
                echo "Money Transferred Successfully.Record Updated.";
                header('location: success.php');
              } 
            elseif(($flag == 1) && ($f == 1)) {
                echo "Money Transfer Unsuccessful.Sender and Receiver can't be same.";
              }
            elseif($flag == 1) {
                echo "Money Transfer Unsuccessful due to sender being bankrupt";
                header('location: failure.php');
              }
            else {
                echo "Error updating record: " . $con->error;
              }
            
            $con->close();

            // header('location: login.php'); //I changed here.

        ?>
    </div>
    </body>
</html>