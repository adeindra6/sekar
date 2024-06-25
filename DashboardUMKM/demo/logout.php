<?php
session_start();

  // Destroy the session data
  session_destroy();

  // Redirect to login page or a confirmation page
  header("Location: ../../Login/index.php"); // Replace with desired redirect path
?>