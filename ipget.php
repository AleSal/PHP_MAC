<?php

$ip_address = $_SERVER['REMOTE_ADDR']; //Check ip address
$mac = `arp $ip_address | cut -d " " -f4`; // Get mac from arp table using IP
//Outputs mac
echo "<br />Seu Mac é: ";  
echo $mac;

?>
