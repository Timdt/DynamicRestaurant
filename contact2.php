<?php
  define("TITLE", "Contact us");
  include('includes/header.php');;
?>

<hr>

<h1>Get in Touch with us</h1>

<?php

//controleer voor header injection

fucntion has_header_injection($str){
  return preg_match('/[\r\n]/', $str);
}

if (isset ($_post['contact-submit'])){
  $name  =       trim($_post['name']);
  $email =       trim($_post['email']);
  $msg   =       $_post['message'];

   //controleren om te kijken of $name of $email header injecties hebben
   if(has_header_injection($name) || has_header_injection($email)) {
     die();
   }

   if(!$name || !$email || !$msg) {
     echo '<h4 class="error">All fields required.</h4><a href="contact.php" class="button block">Go back and try again</a>';
     exit;
   }
   // ontvanger email toevoegen aan variabel
   $to = "your@email.com";
   $subject = "name sent you a message via your contact form";

   //bericht
   $message = "Name: $name\r\n";
   $message .= "Email: $email\r\n";
   $message .= "Message:\r\n$msg";

   //subscribe checkbox angevinkt
   if(isset($_post['subscribe']) && $_post['subscribe'] =='Subscribe'){
     $message .='\r\n\r\n please add $email to the mailing list.\r\n';

}
$message = wordwrap($message, 72);

//set mail header variabel
$headers ="MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: $name <$email> \r\n";
$headers .= "X-Priority: 1\r\n";
$headers .= "X-MSMail-Priority: High \r\n\r\n";

//send mailing
mail($to, $subject, $message, $headers);

 ?>
<!-- laat succes bericht zien na email verstuurd -->
<h5>Thanks for contacting franklins</h5>
<p>please allow 24 hours for a response</p>
<p><a href="/final" class="button block">&laquo; Go to home page</a></p>

<?php } else {  ?>

<form action="" method="post" id="contact-form">

  <label for='name'>Your name</label>
  <input type="text" id="name" name="name">

  <label for='email'>Your email</label>
  <input type="email" id="email" name="email">

  <label for='name'>and your message</label>
  <textarea name="message" id="message" ></textarea>
  <br>

  <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
  <label for='subscribe'>Subscribe to newsletter</label>
<br>
  <input type="submit" class="button next" name="contact_submit" value="Send message">

</form>
<?php } ?>
<hr>

<?php
  include('includes/footer.php');
?>
