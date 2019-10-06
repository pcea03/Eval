<?php
session_start();
	
function logged_in() {
    return isset($_SESSION['userFname']);
    return isset($_SESSION['userLname']);
    return isset($_SESSION['userEmail']);
    return isset($_SESSION['userPass']);
}

function confirm_logged_in() {
    if (!logged_in()) {
?>
        <script type="text/javascript">
            window.location = "index.php";
        </script>
<?php
    }
}
?>