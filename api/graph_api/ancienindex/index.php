<?php 
session_start();
require_once __DIR__ . '/Facebook/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' => '677693956781379',
  'app_secret' => '453e465acb8d6d1a64b86eeb7d27d556',
  'default_graph_version' => 'v13.0',
]);

   $permissions = ['user_photos']; // optional
   $helper = $fb->getRedirectLoginHelper();
   $accessToken = $helper->getAccessToken();
   
if (isset($accessToken)) {
	
 		$url = "https://graph.facebook.com/v13.0/ 103036302283930/likes?&summary=total_count&access_token={}";
		$headers = array("Content-type: application/json");
		
			 
		 $ch = curl_init();
		 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		 curl_setopt($ch, CURLOPT_URL, $url);
	         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
		 curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');  
		 curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');  
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
		 curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3"); 
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		   
		 $st=curl_exec($ch); 
		 $result=json_decode($st,TRUE);
		 echo "<pre>";
		 var_dump($result);
		 echo "</pre>";
		 // $likes = $result['summary']['total_count'];
		 // echo "<center>";
		 // echo "<img width='700' height='450' src=https://scontent-kul1-1.xx.fbcdn.net/t31.0-8/15137500_10151131757949953_4183847601030332798_o.jpg><br><br>";
		 // echo "<img width='90' height='90' src=http://i.imgur.com/wVAJS8T.png>";
		 // echo "<h3>$likes</h3>";
		 // echo "</center>";
		 
		

} else {

	$loginUrl = $helper->getLoginUrl('http://ahsdok.net/ATNSTUDIO/', $permissions);
	echo '<a href="' . $loginUrl . '">Login with Facebook</a>';
}