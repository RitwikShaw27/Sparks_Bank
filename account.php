<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Account-Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
</head>


<body style="background-color:#212529;">
<style>
        .nav-link:hover {
            text-decoration: underline;
            
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">
            <a href="index.php"><img src="statics\logo.png" alt=""
                    style="height: 80px; margin-left:25px; margin-top:10px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
            <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a class="nav-link  text-nowrap" aria-current="page" href="index.php">Home</a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link active text-nowrap" href="login.php">Services</a>
                    </li>

                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link text-nowrap" href="history.php">Transactions</a>
                    </li>
                    
                    <li class="nav-item" style="margin-left:15px;">
                        <a class="nav-link  text-nowrap" href="contact.php">Contact Us</a>
                    </li>

                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a class="nav-link  text-nowrap" href="about.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav>


    <style>
        .container{
            font-size: 30px;
            text-align: center;
            /* font-family: 'Sriracha', cursive; */
            font-family: 'Titillium Web', sans-serif;
            color: white;
            
        }

        .mybtn {
            margin-top: 40px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            font-weight: bold;
            background-color: lightgreen;
            color: green;
            padding: 8px 50px;
            font-size: 20px;
        }

        .mybtn:active {
            background-color: green;
            color: lightgreen;
            padding: 8px 50px;
        }
    </style>


    <center>
    
    <div class="container" style="margin-top: 9%; padding:10px 80px 10px 80px; ">
            
            <br>
           
            
        <?php 
        
            $server = "localhost";
            $username = "root";
            $password = "";

            $con = mysqli_connect($server, $username, $password);

            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
             }

            $name = $_POST['name'];   //I changed it here
            echo "Welcome ".$name;
            $sql = "SELECT * FROM `bank`.`bank` WHERE name='$name' " ;
            $result = mysqli_query($con, $sql);
            // $num = mysqli_num_rows($result);
            // echo $num;
            if($result){
                $row = mysqli_fetch_assoc($result);
                $baln = $row['balance'];
                echo "<br>";
                echo "The account balance of ". $row['name']. " is: ₹" . $baln;
               // echo "<br>";

               if($name == "Ritwik Shaw"){
               echo "<form action='transfer.php' method='post'>
               <button type='submit' name='name' value= 'Ritwik Shaw' class='btn mybtn btn-outline-light'>Transfer</button>  
               </form>  ";
               }
               if($name == "Ratul Chatterjee"){
                echo "<form action='transfer.php' method='post'>
                <button type='submit' name='name' value= 'Ratul Chatterjee' class='btn mybtn btn-outline-light'>Transfer</button>  
                </form>  ";
                }
                if($name == "Bannani Deb"){
                    echo "<form action='transfer.php' method='post'>
                    <button type='submit' name='name' value= 'Bannani Deb' class='btn mybtn btn-outline-light'>Transfer</button>  
                    </form>  ";
                    }
                if($name == "Soham Das"){
                        echo "<form action='transfer.php' method='post'>
                        <button type='submit' name='name' value= 'Soham Das' class='btn mybtn btn-outline-light'>Transfer</button>  
                        </form>  ";
                }
                if($name == "Diya Neogi"){
                    echo "<form action='transfer.php' method='post'>
                    <button type='submit' name='name' value= 'Diya Neogi' class='btn mybtn btn-outline-light'>Transfer</button>  
                    </form>  ";
                }
                if($name == "Ashif Mondal"){
                    echo "<form action='transfer.php' method='post'>
                    <button type='submit' name='name' value= 'Ashif Mondal' class='btn mybtn btn-outline-light'>Transfer</button>  
                    </form>  ";
                }
                if($name == "Arpon Roy"){
                    echo "<form action='transfer.php' method='post'>
                    <button type='submit' name='name' value= 'Arpon Roy' class='btn mybtn btn-outline-light'>Transfer</button>  
                    </form>  ";
                }
                if($name == "Bidisha Saha"){
                    echo "<form action='transfer.php' method='post'>
                    <button type='submit' name='name' value= 'Bidisha Saha' class='btn mybtn btn-outline-light'>Transfer</button>  
                    </form>  ";
                }
                if($name == "Bidipta Saha"){
                    echo "<form action='transfer.php' method='post'>
                    <button type='submit' name='name' value= 'Bidipta Saha' class='btn mybtn btn-outline-light'>Transfer</button>  
                    </form>  ";
                }
                if($name == "Shuvayan Roy Chowdhury"){
                    echo "<form action='transfer.php' method='post'>
                    <button type='submit' name='name' value= 'Shuvayan Roy Chowdhury' class='btn mybtn btn-outline-light'>Transfer</button>  
                    </form>  ";
                }

            }

            $con->close();

        ?>
        <!-- <form action="transfer.php" method="post">
            <button type="submit" name="name" value=$name class="btn-link">Transfer</button>  
        </form>   -->
    </div>
    </center>
    </body>
</html>