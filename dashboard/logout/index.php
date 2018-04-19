<?php
if (session_id() == "")
{
  session_start();
}
session_unset($_SESSION['user']);
session_destroy();
header("Location: ../../login/");
?>