<?php
    $name = $_POST['name'];   //I changed it here
    // echo "Welcome ".$name;

?>
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
    <title>Transfer-Sparks Bank</title>
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
            /* font-size: 30px; */
            text-align: center;
            font-family: 'Titillium Web', sans-serif;
            color: white;           
            
        }

        .container1{
            text-align: center;
            font-family: 'Titillium Web', sans-serif;
            color: white;
            font-size: 25px;
        }

        table, th, td {
            text-align: center;
            border: 1px solid grey;
            border-collapse: collapse;
            margin: auto;
            width: 500px;
            padding:10px;
        }

        input, textarea {
            border: 2px solid green;
            border-radius: 6px;
            outline: none;
            font-size: 16px;
            width: 80%;
            margin: 11px 0;
            padding: 7px;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .mybtn {
            margin-top: 40px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            font-weight: bold;
            background-color: lightgreen;
            color: green;
            padding: 5px 40px;
            font-size: 20px;
        }

        .mybtn:active {
            background-color: green;
            color: lightgreen;
            padding: 8px 50px;
        }
    </style>


    <center>
    
    <div class="container1" style="margin-top: 9%; padding:10px 80px 10px 80px; font-size: 40px; ">
        <?php
        echo "Welcome ".$name;
        ?>
    </div>
    <div class="container" style="margin-top: 4%; padding:10px 80px 10px 80px; ">
        <form action="tran.php" method="post" >

        <?php

        if($name == "Ritwik Shaw"){
        echo "<label for id='sender'>The sender is:</label>
            <input type='text' name='sender' id='sender' value='Ritwik Shaw' readonly>";
        }

        if($name == "Ratul Chatterjee"){
            echo "<label for id='sender'>The sender is:</label>
                <input type='text' name='sender' id='sender' value='Ratul Chatterjee' readonly>";
            }

        if($name == "Bannani Deb"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Bannani Deb' readonly>";
            }

        if($name == "Soham Das"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Soham Das' readonly>";
        }

        if($name == "Diya Neogi"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Diya Neogi' readonly>";
        }

        if($name == "Ashif Mondal"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Ashif Mondal' readonly>";
        }

        if($name == "Arpon Roy"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Arpon Roy' readonly>";
        }

        if($name == "Bidisha Saha"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Bidisha Saha' readonly>";
        }

        if($name == "Bidipta Saha"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Bidipta Saha' readonly>";
        }

        if($name == "Shuvayan Roy Chowdhury"){
            echo "<label for id='sender'>The sender is:</label>
                    <input type='text' name='sender' id='sender' value='Shuvayan Roy Chowdhury' readonly>";
        }

        ?>

        <label for id="val">Enter the amount to be sent:</label>
        <input type="number" name="val" id="val" value="10" placeholder="Enter your value" min="1">   
    
    <table>
  <tr>
    <th>Name</th>
    <th>Send</th>
  </tr>
  <?php
  echo "Choose the receiver: ";
  if($name != "Ritwik Shaw"){
  echo "<tr>
    <td>Ritwik Shaw</td>
    <td><form action='test.php' method='post'>
        <input type='radio' name='receiver' value='Ritwik Shaw'>
    </form></td>
  </tr>";
  }
  
  if($name != "Ratul Chatterjee"){
  echo "<tr>
    <td>Ratul Chatterjee</td>
    <td>
        <input type='radio' name='receiver' value='Ratul Chatterjee'>
    </td>
  </tr>";
  }
  
  if($name != "Bannani Deb"){
  echo "<tr>
    <td>Bannani Deb</td>
    <td>
        <input type='radio' name='receiver' value='Bannani Deb'>
    </td>
  </tr>";
  }
  
  if($name != "Soham Das"){
  echo "<tr>
    <td>Soham Das</td>
    <td>
        <input type='radio' name='receiver' value='Soham Das'>
    </td>
  </tr>";
  }

  if($name != "Diya Neogi"){
  echo "<tr>
    <td>Diya Neogi</td>
    <td>
        <input type='radio' name='receiver' value='Diya Neogi'>
    </td>
  </tr>";
  }

if($name != "Ashif Mondal"){
  echo "<tr>
    <td>Ashif Mondal</td>
    <td>
        <input type='radio' name='receiver' value='Ashif Mondal'>
    </td>
  </tr>";
  }
  
if($name != "Arpon Roy"){
  echo "<tr>
    <td>Arpon Roy</td>
    <td>
        <input type='radio' name='receiver' value='Arpon Roy'>
    </td>
  </tr>";
  }

if($name != "Bidisha Saha"){
  echo "<tr>
    <td>Bidisha Saha</td>
    <td>
        <input type='radio' name='receiver' value='Bidisha Saha'>
    </td>
  </tr>";
  }

if($name != "Bidipta Saha"){
  echo "<tr>
    <td>Bidipta Saha</td>
    <td>
         <input type='radio' name='receiver' value='Bidipta Saha'>
    </td>
  </tr>";
  }

if($name != "Shuvayan Roy Chowdhury"){
  echo "<tr>
    <td>Shuvayan Roy Chowdhury</td>
    <td>
        <input type='radio' name='receiver' value='Shuvayan Roy Chowdhury'>
    </td>
  </tr>";
  }

  ?>
</table>
<button class='btn mybtn btn-outline-light'>Submit</button> 
</form>
</div>
</center>
</body>
</html>