<!DOCTYPE html>
<html lang="en">
<head>
<title> first attempt </title>
<link href="style.css"rel="stylesheet">
</head><br><br>
<h1> <marquee>hello its me neeraj kumar sunar </marquee> </h1>
<h2> fill your information for registration </h2>
<body class="bg-light">

<div class="container">
<div class="py-5 text-center">
       
        <h2>Contact us form</h2>
        <p class="lead"><b> <u> <?php if(isset($_GET['message'])){echo $_GET['message'];} if(isset($_GET['error'])){echo $_GET['error'];} ?></u></b></p>
      </div>
<fieldset>
  
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
      <label for="message">Message</label>
      <textarea name="txtMessage" class="form-control"  id="txtMessage"  placeholder="Message" required></textarea>
    </p>
    <p>&nbsp;</p>
    <p>
      <input type="submit" name="Submit" id="Submit" value="Click me to Contact"  class="btn btn-primary btn-lg btn-block">
    </p>
  </form>
</fieldset>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>