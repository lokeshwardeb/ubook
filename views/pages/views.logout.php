<?php

session_start();
unset($_SESSION['login_status']);
session_destroy();

echo '

<script>

document.location.href = "/";

</script>


';


?>