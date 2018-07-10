<!DOCTYPE HTML>
<html>
<head>
    <title>Contact Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link rel="stylesheet" type="text/css" href="CSS/mainStyle.css">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

</head>
<body>

    <div id="wrapper">
            <header>
                <img alt = "logo" src="Images/javitechbanner-01.png">
            </header>

            <!-- navigation bar section -->
            <hr id="thinhr">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <li><a href="aboutme.html">About me</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                    <li><a class="current" href="javiForm.php">Form</a></li>
                    <li><a href="servicemap.php">Map</a></li>
                </ul>
            </nav>
            <hr id="thinhr">

<?php
// define variables and initialize
$name = $email =$phone= $tier = $comment = $city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $city= test_input($_POST["city"]);
  $tier=test_input($_POST["tier"]);
  $comment = test_input($_POST["comment"]);

}

/*check against injections and validate*/
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
        
        <h2 class="formTitle">Contact Form</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          <h5>Name</h5> <input type="text" name="name" required>
          <br><br>
          <h5>E-mail</h5> <input type="email" name="email" required>
          <br><br>
          <h5>Phone</h5> <input type="text" name="phone" placeholder= "xxx-xxx-xxxx" pattern="^\d{3}-\d{3}-\d{4}$|\d{10}$" required>
          <br><br>
          <h5>City</h5> <input type="text" name="city" required>
          <br><br>
          <select name="tier" required>
            <option value="I need something fixed">I need something fixed</option>
            <option value="I need something setup">I need something setup</option>
            <option value="I need to learn something">I need to learn something</option>
            <option value="Other">Other</option>
          </select>
          <br><br>
          <h5>Describe in detail</h5> <textarea name="comment" rows="5" cols="50" required></textarea>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
          <br><br>
          
        </form>
    </div>

    
<?php
/*****************************SEND FORM ******************/
if(isset($_POST['submit']))
{
    $from ="obliviux91@javihelptech.com";
    $to = "javi.helptech@gmail.com";
    $subject = "Form from $name";
    $msg = "From $name who lives in $city.\nSays '$tier' and says $comment.\nYou can contact $name through the email: $email or phone number: $phone";
    
    
    $msg = wordwrap($msg,70);
    //debug message: echo $msg;
    
    $headers = 'From: javi.helptech@gmail.com' . "\n" .
    'Reply-To: javi.helptech@gmail.com' . "\n" .
    'X-Mailer: PHP/' . phpversion();
    
    if(mail($to, $subject, $msg,$headers)) {
        echo '<script type="text/javascript">
           window.location = "http://www.javihelptech.com/Main/thankyou.html"
      </script>';
    }
    else 
    {
        echo("<p>Email Message delivery failed.</p>");
    }
}
?>


</body>
</html>