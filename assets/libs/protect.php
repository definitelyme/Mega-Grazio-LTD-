<?php
if (session_id() == "")
{
   session_start();
}

if (!isset($_SESSION['username']))
{
   header('Location: ../../login');
   exit;
}

if (isset($_SESSION['expires_by']))
{
   $expires_by = intval($_SESSION['expires_by']);
   if (time() < $expires_by)
   {
      $_SESSION['expires_by'] = time() + intval($_SESSION['expires_timeout']);
   }
   else
   {
      unset($_SESSION['username']);
      unset($_SESSION['expires_by']);
      unset($_SESSION['expires_timeout']);
      header('Location: ../../login');
      exit;
   }
}
?>