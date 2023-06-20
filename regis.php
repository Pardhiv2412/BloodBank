<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="regform"><h1>Blood Donation form</h1></div>
    <div class="regform">Give blood save life</div>
    <div class="regform">Doners registration form</div>
    <form action ="connect.php" method="POST">
        <!-- <div class ="name"> -->
            
            <h3 class="name">Name</h2>

            <input class="firstName" type="text" name="first_name" size=35></br>

       <!-- </div> -->
        <h3 class="name">Date of birth:</h2>
        <input type="date" id="birthday" name="birthday">

        <h3 class="name">Last Donate Date</h2>
        <input type="date" id="date" name="date">

        <h3 class="name">Address</h2>
        <textarea id="address" name="address" rows="4" cols="35"></textarea>
        
        <h3 class="name">Email</h2>
        <input class="email"type="text"name="email">
        
        <h3 class="name">Phone</h2>
        <!-- <label class="phone-number">Phone number&nbsp</label> -->
        <input class ="number"type="text"name="phone">
       
        <h3 class="name">Blood Group</h2>
        <select class="option" name="blood_group">
         <option group="option" selected="selected">--choose option</option>
         <option>A+</option>
         <option>O+</option>
         <option>B+</option>
         <option>AB+</option>
         <option>A-</option>
         <option>B-</option>
         <option>O-</option>
         <option>AB-</option>
        </select>
        <h2 class="name">Feedback</h2>
        <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea></br></br>
        <input type="submit"><br></form><br>
    </form>
    </div>
</body>
</html>