<?php

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: index.php');
}

?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="admin-section-header">
<input type="checkbox" data-toggle="toggle" data-on="Enabled" data-off="Disabled">
    <div class="admin-login-info">
        <div style="padding: 0 20px;">
            <h2><a href="#">Admin Panel</a></h2>
        </div>
        <form method='post' action="">
            <input type="submit" value="Logout" class="btn btn-outline-warning" name="but_logout">
        </form>
    </div>
</div>