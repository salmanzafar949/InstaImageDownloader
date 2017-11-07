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
        echo $code;
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
