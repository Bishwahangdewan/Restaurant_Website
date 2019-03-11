<?php
  //validate contact form and send the email
  
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['name'];
      $from = $_POST['email'];
      $subject = "Feedback on the Restaurant";
      $message = $_POST['message'];
      $to = 'bishwahangdewan123@gmail.com';

     // Always set content-type when sending HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

     // More headers
     $headers .= "From: $from" . "\r\n";
     $headers .= 'Cc: myboss@example.com' . "\r\n";

     if(mail($to,$subject,$message,$headers)){
       $msg = "Your mail has been sent";
       $msgclass = "success";
     }else{
      $msg = "Something went wrong";
      $msgclass = "alert";
     }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant</title>
    <link rel="stylesheet" href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <header class="rest-header">           
                <div class="nav-container sticky2">
                   
                     
                    <div class="brand-wrapper"> 
                    <div class="navbar-brand">
                        <a class="logo" href="#">Brimstone</a>
                    </div>
               
                <a class="icon"><i class="fa fa-bars"></i></a>

                </div>  
        
                  <nav>
                     <ul class="topnav">
                      <li><a href="<?php echo HOME; ?>">Home</a></li>
                      <li><a href="<?php echo MENU; ?>">Menu</a></li>
                      <li><a href="<?php echo ABOUT; ?>">About us</a></li>
                      <li><a href="<?php echo CONTACT; ?>">Contact</a></li>
                     </ul>
                  </nav>
               
            </div>
            </header>

            <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
              <div class="<?php echo $msgclass;?>"><p><?php echo $msg; ?></p></div>
            <?php endif;?>

            <!--CONTACT-->
            <div class="container">
            <section id="contact-form">
                    <h2 class="contact-text">Contact us</h2>

                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" id="contact" name="contact" accept-charset="utf-8">
                      <label><span>Name</span><input name="name" type="text" placeholder="Name" required/></label>
                      <label><span>Email</span><input name="email" type="email" placeholder="Email" required/></label>
                      <label><span>Message</span><textarea name="message" placeholder="Message" required></textarea></label>
                      <input name="submit" type="submit" value="Send"/>
                    </form>

                    <aside>
                      <p>Phone : 123456879</p>
                    </aside>
                  </section>
                </div>

        
            <footer class="footer">

                    <div class="follow">
                        <h1 class="follow-text">Follow us:</h1>
                        <ul>
                            <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="copyright">
                    <p class="copyright-text">&copy;brimstone2019</p>
                    </div>
                </footer>

            
    

            <script src="js/all.js"></script>
</body>
</html>