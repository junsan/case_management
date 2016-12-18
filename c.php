<?php
$ch = curl_init("https://community-legal-solutions.chargify.com/subscriptions.json");

$credential = "fWw5N4Wx6FtYUSpHO51XgseGOhzAjgK4AL0X1Mczw:x";

curl_setopt_array($ch, array(
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_USERPWD => $credential, // assume this is correct
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  )
));

$output = curl_exec($ch);

if($output === false)
{
    echo 'Curl error: ' . curl_error($ch);
}
else
{
   echo $output;
   echo "shit";
}

curl_close($ch);

?>