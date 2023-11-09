<?php 

session_start();
session_unset();
session_destroy();

echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Done!</strong> Sucessfully logged out.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div> ';

?>
<?php
    require 'login.php' ?>