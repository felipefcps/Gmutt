<?php
// captura dados
$nome = $_POST["nome"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$popimap = $_POST["imap"];
$smtp = $_POST["smtp"];
$ppi = $_POST["pimap"];
$ps = $_POST["psmtp"];
$menu = $_POST["m"];
//coloca em ação
$fl = fopen (".muttrc","w");
$dgt = fwrite ($fl, "set realname = \"<$nome>\"");
$bf = fwrite ($fl, "\n");
$dgt0 = fwrite ($fl, "set from = \"<$email>\"");
$bf0 = fwrite ($fl, "\n");
$dgt1 = fwrite ($fl, "set use_from = yes");
$bf1 = fwrite ($fl, "\n");
$dgt2 = fwrite ($fl, "set envelope_from = yes");
$bf2 = fwrite ($fl, "\n");
$dgt3 = fwrite ($fl, "set smtp_url = \"smtps://$email@$popimap:$ps/\"");
$bf3 = fwrite ($fl, "\n");
$dgt4 = fwrite ($fl, "set smtp_pass = \"<$pass>\"");
$bf4 = fwrite ($fl, "\n");
$dgt5 = fwrite ($fl, "set imap_user = \"<$email>\"");
$bf5 = fwrite ($fl, "\n");
$dgt6 = fwrite ($fl, "set imap_pass = \"<$pass>\"");
$bf6 = fwrite ($fl, "\n");
$dgt7 = fwrite ($fl, "set folder = \"imaps://$popimap:$ppi\"");
$bf7 = fwrite ($fl, "\n");
$dgt8 = fwrite ($fl, "set spoolfile = \"+INBOX\"");
$bf8 = fwrite ($fl, "\n");
if ($menu == "1"){
  $dgt9 = fwrite ($fl, "set ssl_force_tls = yes");
}
else{
  $dgt9 = fwrite ($fl, "set ssl_force_tls = no");
}
$bf9 = fwrite ($fl, "\n");
$dgt10 = fwrite ($fl, "bind index G imap-fetch-mail");
$bf10 = fwrite ($fl, "\n");
$dgt11 = fwrite ($fl, "set editor = \"nano\"");
$bf11 = fwrite ($fl, "\n");
$dgt12 = fwrite ($fl, "set charset = \"utf-8\"");
$bf11 = fwrite ($fl, "\n");
$dgt12 = fwrite ($fl, "set record = ''");
$bf12 = fwrite ($fl, "\n");

fclose($fl);
header("location: view.html");
?>
