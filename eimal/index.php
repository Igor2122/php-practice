<?php 
    // to test this out 
        // check for the submit filter_has_var & we will check ther for the submit
        /*if(filter_has_var(INPUT_POST, 'submit')) {
          echo 'submitted';
        }  --- this was only for testing the input */ 
        
        // MESSAGES VARS 
            // 
            $msg = '';
            $msgClass = 'alert alert-danger';  // we can add classes to alert the usefs with bootsrap
        
        // GET FORM DATA 
            // name 
            $name = htmlspecialchars($_POST['name']);
            // email 
            $email = htmlspecialchars($_POST['email']);
            // message 
            $message = htmlspecialchars($_POST['message']);
            
            
            
            // CHECK REQUIRED FIELDS 
            if(!empty($email) && !empty($name) && !empty($message)) {
                // if above is true we passed than we need to validate the email 
                // check email 
                $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    // failed 
                    $msg = ' Please use a vlid email';
                    $msgClass = 'alert alert-danger';
                } else {
                    // passed
                    echo 'emial if valid = ' . $email;
                    // set up recepient email 
                    $toEmail = 'igor_pavlenko@yahoo.com';
                    $subject = 'Contact Request from ' . $name;
                    $body = '<h2> Contact Request </h2>
                        <h4>Name</h4><p>'. $name . ' </p>
                        <h4>Email</h4><p>'. $email .  ' </p>
                        <h4>Message</h4><p>'. $message . ' </p>
                    ';
                    
                    // Email headers 
                    $headers = "MINE-Version: 1.0" . "\r\n";
                    $headers .= "Content-Type: text/html;charset=UTF-8" . "\r\n";
                    
                    
                    // ADDITIONAL HEADERS 
                    $headers .= "From:" . $name . "<" . $email . ">"  . "\r\n";
                }
                
                
                if(mail($toEmail, $subject, $body, $headers)) {
                    //if email is sent
                    $msg = 'Your Email has been sent';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your email was not sent';
                    $msgClass = 'alert-danger';
                }
                
            } else {
                // we failed we need to show the message to warn the user 
                $msg = 'Please fill in all Fields';
                $msgClass = 'alert-danger';
            }
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css" type="text/css" />
</head>
<body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">My Website</a>
        </div>
      </div>
    </nav>
    <div class="container">
        <?php if($msg != '') : ?>
            <div class="<?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
                                                <!-- this will submit to this file -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name :  ''; ?>">
            </div> 
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email :  ''; ?>">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <input type="text" name="message" class="form-control" value="<?php echo isset($_POST['message']) ? $message :  ''; ?>"></textarea> 
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary"> Submit</button>
            
        </form>
    </div>
    
</body>
</html>