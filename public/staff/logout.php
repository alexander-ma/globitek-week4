<?php
require_once('../../private/initialize.php');
log_out_user();
redirect_to('login.php');
session_unset();
session_destroy();
?>
