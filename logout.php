<?php
session_start();
session_destroy();
header('Location: auth_form.php');
