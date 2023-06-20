<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='Register.css'>
    <link rel="icon" href='./Images/bb_logo(black).png' type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<title>Start Saving Lives </title>
<body>
<header>
    <nav>
    <div class="header-logo"><img src="./Images/bb_logo(black).png"></div>
    <div class="header-list">
        <ul>
            <li><a href="help.php">Get Help</li></a>
            <li><a href="donate.php">Donate</li></a>
            <li><a href="index.php#vol-sect">Volunteer</li></a>
            <li><a href="index.php#about-us">About Us</a></li>
            </ul>
    </div>
    </nav>
</header>

<div class="inner">
    <div class="photo">
        <img src="./Images/regphoto.png">
    </div>
    <div class="user-form">
        <h1>Start Saving Lives</h1>
        <form action="connect.php" method="post">
            <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName"/>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName"/>
                </div>
            <div class="form-group">
                <label for="email">Gender</label>
                <div>
                    <label for="male" class="radio-inline"><input type="radio" name="gender" id="male">Male</label>
                    <label for="female" class="radio-inline"><input type="radio" name="gender" id="female">Female</label>
                    <label for="others" class="radio-inline"><input type="radio" name="gender" id="others">Others</label>
                </div>
      </div>
      <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email"/>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password"class="form-control" id="password"/>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</div>
<script src="./Register.js"></script>
</body>
</html>