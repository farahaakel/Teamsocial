<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5D4R6DF1EH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5D4R6DF1EH');
</script>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Teamsocial</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="assets/img/ic.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
     
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">


  
  <link href="https://cdn.jsdelivr.net/npm/glightbox@3.1.0/css/glightbox.min.css" rel="stylesheet" type="text/css">


  <link href="assets/css/style.min.css?version=2.1.5435.22633?version=2.1.5435.22633" rel="stylesheet" type="text/css">

    <!-- YOUR CUSTOM CSS -->
  
    
	<script type="text/javascript">
    function delayedRedirect(){
        window.location = "home.html"
    }
    </script>

</head>
<body style="background-color:#fff;" onLoad="setTimeout('delayedRedirect()', 5000)">
<?php
if(isset($_POST['submit'])) {
 
$to = "info@teamsocial.ae";
$subject = "Request Service";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$subject = $_POST['subject'];
 
$message = $_POST['message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n subject: $subject\n message: $message";
 

mail($to, $subject, $body);
 
} else {
echo "something wrong!";
}

?>
<div id="success">
    <div class="icon icon--order-success svg">
         <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
          <g fill="none" stroke="#8EC343" stroke-width="2">
             <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
             <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
          </g>
         </svg>
     </div>
	<h4><span>The message has been sent successfully  </span></h4>
	<small>You will be redirected to the home page with five seconds </small>
</div>
</body>
</html>