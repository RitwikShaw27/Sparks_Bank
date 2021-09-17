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

    <title>Success-Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    
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
        .container{
            font-size: 30px;
            text-align: center;
            /* font-family: 'Sriracha', cursive; */
            font-family: 'Titillium Web', sans-serif;
            color: white;  
            
        }

        .container1{
            text-align: center;
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

    <div class="container" style="margin-top: 15%; padding:10px 80px 10px 80px; ">
        <p style="color: red">Money Transfer Unsuccessful.</p>
        
        <p> Amount greater than account balance not allowed.</p>
    </div>
    <div class= "container1">
    <form action='login.php' method='post'>
            <button type='submit' name='name' class='btn mybtn btn-outline-light'>Back To Services Page</button>  
    </form>  
    </div>
</body>
</html>