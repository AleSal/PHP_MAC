# PHP_MAC
PHP script that gets mac from LAN connected computers when accessing the page. 

After a long search over the web for some script that could get the correct mac address of clients trying to connect to my
PfSense Captive Portal and finding a lot of lines that didn't worked, I wrote this, works on any server with any device connected to the network. 

**This script is formatted for BSD ARP, if you use it under Linux or Windows change the line according to the platform,i.e. "arp -a"  or "arp -n"

Feel free to use it as you wish, don't forget to check the upgraded version here: 

https://github.com/AleSal/PHP_MAC2
