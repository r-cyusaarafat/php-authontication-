<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css"rel="stylesheet"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'poppins', sans-serif;
    }


    body{
        background-color: #f2f2f2;
        font-family: 'poppins', sans-serif;
    }

    .form{
        margin: 150px auto;
        width: 400px;
        padding: 40px 45px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    input[type="text"], input[type="email"], input[type="password"]{
        width: 100%;
        padding: 10px 38px;
        margin-bottom: 23px;
        border: 2px solid #f2f2f2;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        border-radius: 5px;
        overflow: hidden;
        outline: none;
    }
    #submit{
        width: 100%;
        padding: 10px;
        background-color: #000;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 28px;
        margin-top: 10px;
    }
    .header{
        text-align: center;
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: 600;
    }
    i{
        position: absolute;
        margin-left: 15px;
        margin-top: 11px;
        display: block;
        color: #464545;
    }
    .par p{
        margin-bottom: 10px;
        font-size: 14px;
        margin-left: 6px;
    }
    .par p a{
        color: #000;
        text-decoration: none;
        font-weight: 600;
    }
    .header p{
        font-size: 28px;
        font-weight: 600;
    }
    ::placeholder{
        font-size: 17px;
        font-weight: 400;
    }
    </style>
</head>
<body>
    <form action="" method="POST" class="form">
        <div class="header">
            <p>Log in</p>
        </div>
        <i class="ri-mail-fill"></i>
        <input type="email" name="email" placeholder="Email" required>
        <br>
        <i class="ri-lock-fill"></i>
        <input type="password" name="password" placeholder="Password" required>
        <br>
        <div class="par">
            <p>Already have an account? <a href="index.php">Sign up</a></p>
        </div>
        <input type="submit" value="Submit" name="submit"id="submit">
    </form>
</body>
</html>