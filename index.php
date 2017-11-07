<?php
/**
 * Created by Salman Zafar.
 * User: Salman zafar
 * Date: 11/7/17
 * Time: 11:49 AM
 */

include 'InstaApi.php';


?>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="conatiner">

    <span>
        <a href="https://api.instagram.com/oauth/auhtorize/?client_id=<?php echo client_id; ?>&redirect_uri=<?php echo redirect_uri;?>&response_type=code" class="btn btn-primary">Login</a>
    </span>

</div>
