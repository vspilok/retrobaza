﻿<?php
session_start();
session_destroy();
header('Location: reg.php');
exit;

?>