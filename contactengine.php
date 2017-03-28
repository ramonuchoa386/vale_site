<?php
  $EmailTo = "ramonuchoa386@gmail.com";
  $Name = Trim(stripslashes($_POST['nome']));
  $Email = Trim(stripslashes($_POST['email']));
  $Message = Trim(stripslashes($_POST['mensagem']));

  // validation
  $validationOK=true;
    if (!$validationOK) {
      print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
      exit;
    }

  // prepare email body text
  $Body = "";
  $Body .= "Nome: ";
  $Body .= $Name;
  $Body .= "\n";
  $Body .= "Email: ";
  $Body .= $Email;
  $Body .= "\n";
  $Body .= "Mensagem: ";
  $Body .= $Message;
  $Body .= "\n";

  // send email
  $success = mail($EmailTo, $Body, "From: <$Email>");

  // redirect to success page
    if ($success){
      print "<meta http-equiv=\"refresh\" content=\"0;URL=success.html\">";
    }
    else{
      print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
    }
?>
