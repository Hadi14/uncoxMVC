<?
require_once("./Config/main.php");
session_destroy();
header("Location: ./signin.php");
