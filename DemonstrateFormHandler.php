<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
<style>
body {
      width: 700px;
      height: auto;
      margin: auto;
      background-color: rgb(250, 250, 250);
      
    }

    div {
      width: 600px;
	  padding: 20px 0 20px 0;
      margin-left: 0px;
      background-color: white;
      border-radius: 5px;
      box-shadow: 0 0 20px rgb(0 0 0 /15%);
      padding-left: 50px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

	h1 {
      margin-top: 5%;
      margin-bottom: 3px;
    }

    h2 {
      margin-top: 0;
    }
    


</style>
</head>

<body>
<h1>WDV101 Intro HTML and CSS</h1>
<h2>UNIT 3 Forms - Lesson 2 Server Side Processes</h2>


<div>
<p>Dear <?php echo $_POST['first_name']; ?>,</p>
<p>Thank you for your interest in DMACC.</p>
<p>We have you listed as an <?php echo $_POST['academic_standing']; ?> starting this fall.</p>
<p>You have declared <?php echo $_POST['selected_major']; ?> as your major.</p>
<p>Based upon your responses we will provide the following information in our confirmation email to you at <?php echo $_POST['email_address']; ?>.</p>
<p><?php echo $_POST['contact_options']; ?></p>
<p><?php echo $_POST['contact_options']; ?></p>
<p>You have shared the following comment which we will review:</p>
<p><?php echo $_POST['message']; ?></p>
</div>

</body>
</html>
