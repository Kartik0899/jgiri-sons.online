<!--Copyright 2020,Mayank Laxkar And Kartik Budhraja, All rights reserved.-->
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: cONTACTuSbOT';   
    $to = 'jgiri.indore@gmail.com'; 
    $subject = 'Hello';
			
    $body = "From: $name\nE-Mail: $email\nPhone: $phone\nMessage: $message";
				
    if ($_POST['submit'] ) {				 
        if (mail ($to, $subject, $body, $from)) { 
            echo '<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ThankYou !!!</title>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
		.ft-legal {
	padding: 0.1em 1.875rem;
	background-color: #333;
  }
  .ft-legal h2{
	  font-size: 16px;
	  color:white;
  }
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body">Thanks a lot for reaching out to us. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today.<br><br>
		We will contact you as soon as possible and if you want to reach us early then do make a call on the phone numbers provided.
		</p>
	</div>

	
	<section class="ft-legal">
      <h2 style="text-align: center;"> &copy; 2020 Copyright, &nbsp; Designed and developed by Mayank & Kartik</h2>
    </section>
</body>
</html>' ;
	    /*echo '<p>Your message has been sent!</p>';*/
	    echo '<script>
                    setTimeout(function(){location.href="index.html#home"} , 30000)
              </script>';
	    } else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
    }
?>