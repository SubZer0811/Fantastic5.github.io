<?php 

session_start();
if(session_destroy())
{ echo " Successfully logged out!!!";
echo " <a href='login.php'>Click here to log in</a>";
}
?>
