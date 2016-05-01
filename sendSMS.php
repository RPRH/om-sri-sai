<?PHP
function openurl($url) {

$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$postvars);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); curl_setopt($ch,CURLOPT_TIMEOUT, '3');  $content = trim(curl_exec($ch));  curl_close($ch); 
echo $url;
  }
$username="kapbulk"; //use your sms api username
$pass    =     "kap@user!23";  //enter your password
$message = "SMS From sai";
$dest_mobileno   =     "9886809834";//reciever 10 digit number (use comma (,) for multiple users. eg: 9999999999,8888888888,7777777777)
$sms         =     "Test Message from HTTP API";//sms content
$senderid    =     "kap@user!23";//use your sms api sender id
$sms_url = sprintf("http://123.63.33.43/blank/sms/user/urlsmstemp.php?username=kapbulk&pass=kap@user!23&senderid=kap@user!23&dest_mobileno=9886809834&message=TestFromSai&mtype=UNI&response=Y", $username, $pass , $senderid, $dest_mobileno, $message, urlencode($sms) );
openurl($sms_url);
?>