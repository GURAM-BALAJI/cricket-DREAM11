<?php include 'includes/session.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];
    $conn = $pdo->open();
        $sql = "INSERT INTO contact (contact_name, contact_phone, contact_email, contact_country, contact_subject)
VALUES ('$name', '$phone', '$email', '$country', '$subject')";
if ($conn->query($sql) == TRUE) {
    echo "<center><h2 style='color:green;'>Sent successfully</h2></center>";
}else {
    echo "<center><h2 style='color:red;'>Something Went Wrong!</h2></center>";
}
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="./style_nav_bar.css">

</head>
<style>
    body{
        background-color: #cfcfd2;
        align-content: center;
    }


* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 100%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body unload='index.php'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="container">
  <div style="text-align:center">
    <h2><u>Contact Us:</u></h2>
    <p style="color:green";>Here we are to help you, leave us a message</p>
  </div>
  <div class="row">
    <div class="column">
      <form action="" method="post">
        <label for="name"> Name</label>
        <input type="text" id="name" name="name" placeholder="Your name..">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your Email..">
            <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="India">India</option>
           <option value="Other">Other</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" name="submit" id="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

    
    <br><br><br><br>
<nav class="nav">

    <a href="index.php" class="nav__link ">
        <i class="material-icons nav__icon">home</i>
        <span class="nav__text">Home</span>
    </a>

    <a href="account.php" class="nav__link ">
        <i class="material-icons nav__icon">account_balance_wallet</i>
        <span class="nav__text">Wallet</span>
    </a>

    <a href="profile.php" class="nav__link ">
        <i class="material-icons nav__icon">person</i>
        <span class="nav__text">Profile</span>
    </a>

    <a href="settings.php" class="nav__link nav__link--active">
        <i class="material-icons nav__icon">settings</i>
        <span class="nav__text">Settings</span>
    </a>

</nav>
    
</body>
</html>
