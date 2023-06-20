<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="regform"><h1>Blood Donation form</h1></div>
    <div class="regform">Give blood save life</div>
    <div class="regform">Doners registration form</div>
    <form>
        <form action ="connect.php" method="post"></form>
        <div class ="name">
            <h0 class="userid">username</h0>
            <input class="username" type="text" name="userid" size=19>
            <h2 class="name">Name</h2>
			<label class="firstlabel">First name: &nbsp &nbsp</label>
            <input class="firstname"type="text" name="first_name" size=19></br>
            <label class="lastlabel">Last name: &nbsp &nbsp </label>
            <input class="lastname"type="text"name="last_name" size=19>   
        </div>
        <h2 class="name">Date of birth</h2>
        <label for="birthday">Birthday:&nbsp&nbsp</label>
        <input type="date" id="birthday" name="birthday">

        <h2 class="name">Last Donate Date</h2>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">

        <h2 class="name">Address</h2>
        <textarea id="address" name="address" rows="4" cols="50"></textarea>
        
        <h2 class="name">Email</h2>
        <input class="email"type="text"name="email">
        
        <h2 class="name">Phone</h2>
        <label class="phone-number">Phone number&nbsp</label>
        <input class ="number"type="text"name="phone">
       
        <h2 class="name">Blood Group</h2>
        <select class="option" name="blood group">
         <option group="option"selected="selected">--choose option</option>
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
<a href = "register.html">        
<button type="submit" value="Submit">Submit</button>
</form>
	</a>
    </div>
</body>
</html>