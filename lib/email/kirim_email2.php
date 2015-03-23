<?php
$to= "andri@elkabumi.com";
$subject= "kirim email dari localhost";
$body= "ini bagian isi";
$kirim=mail($to,$subject,$body);
if($kirim)
{
                Echo "Email berhasil dikirim";
}
else
{
                Echo "Email gagal dikirim";
}

?>