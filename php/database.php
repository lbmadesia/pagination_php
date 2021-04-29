<?php  
   header('Content-Type: text/html; charset=utf-8');
   $db = new mysqli("localhost","root","","clavax");
  if($db->connect_error)
    {
	   die("<h2 style='padding:10px;margin-top:20px;background-color:black;color:white;>Server down, connection failed.</h2>");
    }
