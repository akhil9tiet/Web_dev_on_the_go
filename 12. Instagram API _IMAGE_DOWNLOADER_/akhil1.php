<?php
set_time_limit(0);
ini_set('default_socket_timeout',300);
session_start();
/*.............Instagram API Keys.............*/

define("clientID",'d****************************27');
define("clientSecret",'b*******************************3');
define("redirectURI",'http://localhost/php_dev_akhil/8.instagramAPI/akhil1.php');
//Replace this URI with valid website link here and make a new one for the application in validation page on indtagram developer page
define("imageDirectory",'instaPics/');//create this folder in the same file where we have index.php

//connect with instagram
function connectToInstagram($url){
    $ch= curl_init();
    curl_setopt_array($ch,array(
        CURLOPT_URL=>$url,
        CURLOPT_RETURNTRANSFER=>true,
        CURLOPT_SSL_VERIFYPEER=>false,
        CURLOPT_SSL_VERIFYHOST=>2 //this means we wont really verify the host
    ));
    $result=curl_exec($ch);
    curl_close($ch);
    return $result;
}

//Print out images on the screen
function printImages($userID,$access_token){
    $url='https://api.instagram.com/v1/users/'.$userID.'/media/recent/?access_token='.$access_token.'&count=5';//count=-1 means return all pictures
    $instagramInfo= connectToInstagram($url);
    $results=json_decode($instagramInfo,true);
    
    //parse through images
    echo '<p>The following pictures will be saved on to your local InstaPics folder</p><br/>';
    foreach($results['data'] as $items){
        $image_url= $items['images']['low_resolution']['url'];
        echo '<img src="'.$image_url.'"/><br/>';
        savePictures($image_url); 
    }
}

//save the pictures
function savePictures($image_url){
    $filename= basename($image_url);
    list($true_url) = explode('?', $filename);
    $destination= imageDirectory.$true_url;   
	
	file_put_contents($destination,file_get_contents($image_url));
}

if($_GET['code']){
    //logged in
    $code= $_GET['code'];
    $url= "https://api.instagram.com/oauth/access_token";
    $access_token_settings= array(
        'client_id'     =>  clientID,
        'client_secret' =>  clientSecret,
        'grant_type'    =>  'authorization_code',
        'redirect_uri'  =>  redirectURI,
        'code'          =>  $code
    );
    //now we'll be startimg a curl session which helps a website to transfer data from one website to another
    $curl= curl_init($url);
    //settings for the transfer
    curl_setopt($curl,CURLOPT_POST, true);
    curl_setopt($curl,CURLOPT_POSTFIELDS, $access_token_settings);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1); //1 stands for return all the strings
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, false);//for commerical applications this should be true as it manages the peer to peer transfer between our website and Instagram's

    $result= curl_exec($curl);//this starts the commincation process
    curl_close($curl);
    
    $results= json_decode($result, true);
    $username= $results['user']['username'];    //username
    $access_token=$results['access_token'];    //access_token
    $userID= $results['user']['id'];           //userid
    //echo $username." ".$access_token."========> ".$userID;
    //$userID=getUserID($username,$access_token);
   printImages($userID,$access_token);
}else{
    //logged out
?>
    <!DOCTYPE html>
    <html>
        <head></head>
        <body>
            <a href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID;?>&redirect_uri=<?php echo redirectURI;?>&response_type=code">Login Now</a>
            <hr>
        </body>
    </html>
<?php
}
?>
