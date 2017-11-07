<?php
/**
 * Created by Salman Zafar.
 * User: Salman zafar
 * Date: 11/7/17
 * Time: 11:49 AM
 */

include 'InstaApi.php';


if(isset($_GET['code'])) {
    $code = $_GET['code'];
    if (!empty($code)) {

        $url ="https://www.instagram.com/oauth/access_token";
        $access_token_settings=array(
            'client_id' =>  client_id,
            'client_secret' =>  client_secret,
            'grant_type'   => 'authorization_code',
            'redirect_uri' => redirect_uri,
            'code'  => $code
        );
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $access_token_settings);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
        $res = curl_exec($curl);
        curl_close($curl);

        $user_data = json_decode($res,true);
        $username = $user_data['user']['name'];
        echo $username;



    }
}
else
{
?>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <div class="container">

    <span align="center" id="link">
        <a href="https://www.instagram.com/oauth/authorize/?client_id=<?php echo client_id; ?>&type=web_server&response_type=code&scope=basic&redirect_uri=<?php echo redirect_uri;?>" class="btn btn-primary">Login</a>
    </span>

    </div>

    <?php
}

?>
