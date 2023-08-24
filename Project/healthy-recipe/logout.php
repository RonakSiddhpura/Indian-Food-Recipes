<?php
session_start();
unset($_SESSION['user']);
?>
<script>
	 alert('you hav to login first');
	 window.location="signin.php";
</script>
