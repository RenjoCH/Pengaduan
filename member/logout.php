<?php
session_start();

session_destroy();
echo "
<script>
alert('sukses logout');
window.location.href = '../login.php';
</script>
";
?>