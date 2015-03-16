<?php
    session_start();
    $CLIENTID="78nvt8s3paww5u";
    $CLIENTSECRET="Rfm3lG5yZOc3DJIL";
    define('BASEURL','http://localhost/Linkedin/auth.php');
    $CALLBACKURL='http://localhost/Linkedin/first.php';
    print_r($_REQUEST);
    $CODE=$_REQUEST['code'];
    
    
echo "grant_type=authorization_code&code=$CODE&redirect_uri$CALLBACKURL&client_id=$CLIENTID&client_secret=$CLIENTSECRET";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"https://www.linkedin.com/uas/oauth2/accessToken");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"grant_type=authorization_code&code=$CODE&redirect_uri=$CALLBACKURL&client_id=$CLIENTID&client_secret=$CLIENTSECRET");

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
print_r($server_output);
curl_close ($ch);



?>
