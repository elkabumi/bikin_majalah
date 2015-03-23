<?php
require_once "Mail.php";

$name = "name";
$prenom = "prenom";
$enterpriese = "enterprise";
$tel = "tel";
$email = "email";
$votre_message = "votre message";

$subject = "Test mail PHP";
 $body = "Nom : ".$name."\n";
 $body .= "prenom : ".$prenom."\n";
 $body .= "enterpriese : ".$enterpriese."\n";
 $body .= "tel : ".$tel."\n";
	$body .= "email : ".$email."\n";
	$body .= "votre_message : ".$votre_message."\n";
  //$to = "jca-sapar@orange.fr,remy.lescure@granitpassion.com";
//ganti dengan emailmu /email resmi website
$to="andri@elkabumi.com";
  $from = "selubungers@gmail.com";
  $host = "ssl://smtp.gmail.com";
  $port = "465";
  //emailmu untuk login k gmail
  $username = "selubungers@gmail.com";
   
  //passwordmu waktu login gmail
  $password = "cm3l0n pc";
 
 
$headers = array('From' => $from, 'To' => $to,
'Subject' => $subject);


//mengirim email

$smtp = Mail::factory('smtp', array('host' => $host,
 'port' => $port, 'auth' => true,
 'username' => $username, 'password' => $password));
 
  $mail = $smtp -> send($to, $headers, $message );
 
if (PEAR::isError($mail)) {
echo("<p> Email Gagal dikirim" . $mail -> getMessage() . "</p>");
}else{
echo "email terkirim";
}


		

?>