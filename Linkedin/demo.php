<?php
function pr($data)
{
 echo "<pre>";
 print_r($data);
 echo "</pre>";
}
    session_start();
    $CLIENTID="78nvt8s3paww5u";
    $CLIENTSECRET="Rfm3lG5yZOc3DJIL";
    define('BASEURL','http://localhost/Linkedin/auth.php');
    $CALLBACKURL='http://localhost/Linkedin/demo.php';
    pr($_REQUEST);
    $CODE=$_REQUEST['code'];
    
    
    
    if(!empty($CODE) )
    {
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,"https://www.linkedin.com/uas/oauth2/accessToken");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"grant_type=authorization_code&code=$CODE&redirect_uri=$CALLBACKURL&client_id=$CLIENTID&client_secret=$CLIENTSECRET");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec ($ch);
	$TOKEN = (json_decode($server_output, true));
	$ACCESSTOKEN=$TOKEN['access_token'];
    
	curl_close ($ch);
	
	
	$ch1 = curl_init();
pr("https://api.linkedin.com/v1/people/~?format=json&oauth2_access_token=$ACCESSTOKEN"); 
	curl_setopt($ch1, CURLOPT_URL,"https://api.linkedin.com/v1/people/~?format=json&oauth2_access_token=$ACCESSTOKEN");
	curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

	$server_output1 = curl_exec ($ch1);
	pr($server_output1);
	
	
	
	
	exit;
	}
    


28175.68
28000



Application Details
Company:

MyProfile

Application Name:

MyProfile

API Key:

78nvt8s3paww5u

Secret Key:

Rfm3lG5yZOc3DJIL

OAuth User Token:

5e900c76-0764-4b9e-b8ad-f032db8da501

OAuth User Secret:

8e348f6f-57ce-481b-b85f-e6f79e780a12

~:(id,first-name,last-name,maiden-name,formatted-name,headline,location,industry,num-connections,summary,specialties,positions,picture-urls::(original),public-profile-url,skills,languages,last-modified-timestamp,proposal-comments,associations,interests,educations,three-current-positions,three-past-positions,num-recommenders,recommendations-received,following,date-of-birth,honors-awards)


https://www.linkedin.com/uas/oauth2/authorization?response_type=code&client_id=78nvt8s3paww5u&redirect_uri=http://localhost/Linkedin/demo.php&state=987654321&scope=r_fullprofile

?>
