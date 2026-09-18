<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // ************************************************* new ********************************************
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "biwismakou@gmail.com";
    $sujet = "Formulaire de Contact : $subject";
    $contenu = "Nom : $name\nEmail : $email\n\nMessage : \n$message";
    $headers = "From: $email";

    if (mail($to, $sujet, $contenu, $headers)){
      echo "Message envoyé avec succès.";
    }
    else{
      echo "Une erreur s'est produite.";
    }

  }

  // ***********************************************End new *******************************************
  
  
  
  
  // Replace contact@example.com with your real receiving email address
  // **************************************** ORIGINAL ***********************************************
  
  
  /*
  $receiving_email_address = 'biwismakou@gmail.com';

  if( file_exists($php_email_form = 'php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  */

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */


  /*
  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  isset($_POST['phone']) && $contact->add_message($_POST['phone'], 'Phone');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  */

?>
