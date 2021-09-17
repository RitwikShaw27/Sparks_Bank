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
    
    <title>Services - SPARKS Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
</head>


<body style="background-image:url('statics/5570834-min.jpg'); ">
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
        table, th, td {
            text-align: center;
            border: 1px solid grey;
            border-collapse: collapse;
            margin: auto;
            width: 900px;
            padding:10px;
        }
    </style>

    <center>
    <div class="container" style="margin-top: 9%; padding:10px 80px 10px 80px; ">
            <div
                style="width:80%; background-color:rgba(0,0,0,.5); padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">All Customers</h1>
            </div>
            <br><br>
            
            <br><br>
      <table id="tab" style="color:white;">
      <tr>        
        <th>S. No.</th>
        <th>Name</th>
        <th>Login</th>        
      </tr>

      <style>
                    .mybtn {

                        box-shadow: 2px 2px 10px black;
                        border-radius: 30px;
                        font-weight: bold;
                        background-color: lightgreen;
                        color: green;
                    }

                    .mybtn:active {
                        background-color: green;
                        color: lightgreen;
                    }
                </style>


      <tr>
      <td>1</td>
      <td>Ritwik Shaw</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
        <button type="submit" name="name" value="Ritwik Shaw" class="btn mybtn btn-outline-light">Login</button>
      </form></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Ratul Chatterjee</td>
        <td><form action="account.php" method="post">
        <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Ratul Chatterjee" class="btn mybtn btn-outline-light">Login</button></form></td>
        </tr>
      <tr>
      <td>3</td>
      <td>Bannani Deb</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Bannani Deb" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Soham Das</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Soham Das" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Diya Neogi</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Diya Neogi" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>
    <tr>
      <td>6</td>
      <td>Ashif Mondal</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Ashif Mondal" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Arpon Roy</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Arpon Roy" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Bidisha Saha</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Bidisha Saha" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>
    <tr>
      <td>9</td>
      <td>Bidipta Saha</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Bidipta Saha" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>
    <tr>
      <td>10</td>
      <td>Shuvayan Roy Chowdhury</td>
      <td><form action="account.php" method="post">
      <!-- <td style="padding:10px 10px 10px 10px"> -->
          <button type="submit" name="name" value="Shuvayan Roy Chowdhury" class="btn mybtn btn-outline-light">Login</button></form></td>
    </tr>

      </table>
</div>
      </center>
</body>
</html>