<?php
set_time_limit(0);
ini_set('default_socket_timeout',300);
session_start();
/*.............Instagram API Keys.............*/

define("clientID",'d86*************************7'); //use your own clientID
define("clientSecret",'b9******************************d3');// use your own clientSecret
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
    echo '<h1>The following pictures will be saved on to your local InstaPics folder</h1><br/>';

    foreach($results['data'] as $items){
        $image_url= $items['images']['low_resolution']['url'];
        echo '<img src="'.$image_url.'"/><br/>';
        savePictures($image_url); 
    }
}

//save the pictures
function savePictures($image_url){
    $arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  
    $filename= basename($image_url);
    list($true_url) = explode('?', $filename);
    
    list($search_url)= explode('?',$image_url);
    
    $destination= imageDirectory.$true_url;    
    file_put_contents($destination,file_get_contents($search_url));
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
   printImages($userID,$access_token);
}else{
    //logged out
?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>InstaImageDownloader</title>
            <meta charset="utf-8"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" type="text/css" href="akhil1.css">
        </head>
        <body>
            <section class="jumbotron">
                <div class="container">
                    <div class="row text-center">
                        <h2>Instagram Image Dowloader</h2>
                        <h3>Download Images to your local computer.</h3>
                        <a class="btn btn-primary" href="https://api.instagram.com/oauth/authorize/?client_id=<?php echo clientID;?>&redirect_uri=<?php echo redirectURI;?>&response_type=code" role="button">Login Now</a>
                    </div>
                </div>
            </section>
            <!--<a href="https://api.instagram.com/oauth/authorize/?client_id=<?php //echo clientID;?>&redirect_uri=<?php //echo redirectURI;?>&response_type=code">Login Now</a>-->
            <hr>
        </body>
    </html>
<?php
}
?>
