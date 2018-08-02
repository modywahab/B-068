<?php
setcookie("user", "" ,time() - 86400*30);
?>
<html>
<body>
<?php
echo "Cookie 'user' is deleted.";
?>
</body>
</html>