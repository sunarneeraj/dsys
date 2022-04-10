<!DOCTYPE html>
<html lang="en">
<head>
<title> first attempt </title>
<link href="style.css"rel="stylesheet">
</head><br><br><fieldset>
<h1> <marquee><img src=" bajeou.jpg" height="70 px" width="70px" boeder=2 >hello its me neeraj kumar sunar </marquee> </h1>
<h2> fill your information for registration </h2>
<img src="goddes.jpg" width="120px" height="120px" border=2>
<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
       
        <h2>Contact us form</h2>
        <p class="lead"><b> <u> <?php if(isset($_GET['message'])){echo $_GET['message'];} if(isset($_GET['error'])){echo $_GET['error'];} ?></u></b></p>
      </div>
<fieldset><legend>  यदि तपाइ फर्म भर्न अशमर्थ हुनु भो मलाइ यो नम्बर मा सम्पर्क गर्नु होस ।  :- <u> ९८६४६०६१९० </u> </legend>
  
  <form name="frmContact" class="needs-validation " method="post" action="contact.php">
    <p>
      <label for="Name">Your Name </label>
      <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Valid first name is required." value="" required>
	  <div class="invalid-feedback">
                  
                </div>
    </p>
    <p>
      <label for="email">Your Email</label>
      <input type="text"  class="form-control"  name="txtEmail" id="txtEmail" placeholder="Email" value="" required>
    </p>
    <p>
      <label for="phone">Your Phone</label>
      <input type="text"  class="form-control" name="txtPhone" id="txtPhone" placeholder="Phone" value="" required>
    </p>
    <p>
      <label for="message"> <b>what goods do you want  to deliver </b>:- </label>
      <textarea name="txtMessage" class="form-control"  id="txtMessage"  placeholder="Message" required></textarea><br><br>
      
    <marquee direction=" right "  color="red"> If you are unabel to fill the form then contact me with this number :- <u>9864606190 </u></marquee>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="click for order"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>

</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<marquee style="font-family: Book Antiqua; color: #FFFFFF" bgcolor="#000080"  direction="right">Thank you for ordering </marquee>
</fieldset>
</body>
</html>