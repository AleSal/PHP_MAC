<?php
$ip_address = $_SERVER['REMOTE_ADDR'];
$mac = `arp $ip_address | cut -d " " -f4`;
echo "<br />Seu Mac é: ";  
echo $mac;
?>