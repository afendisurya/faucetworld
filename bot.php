<?php
// HEAD

/*

// SERVER
include('/home/asus/Desktop/0/header/header.php');
include('/home/asus/Desktop/0/badan_atas/badan_atas.php');
include('/home/asus/Desktop/0/curl/curl.php');
include('/home/asus/Desktop/0/parsing/parsing.php');
include('/home/asus/Desktop/0/countdown/countdown.php');
include('/home/asus/Desktop/0/CLI/CLI.php');
include('/home/asus/Desktop/0/warna/warna.php');
include('/home/asus/Desktop/0/garis/garis.php');
include('/home/asus/Desktop/0/notif/notif.php');

*/

// TERMUX
include('0/header/header.php');
include('0/badan_atas/badan_atas.php');
include('0/curl/curl.php');
include('0/parsing/parsing.php');
include('0/countdown/countdown.php');
include('0/CLI/CLI.php');
include('0/warna/warna.php');
include('0/garis/garis.php');
include('0/notif/notif.php');

// SCRIPT
include('config.php');

/*

function fungsi_menulis_config($isi){
	$file = "config.php";
	$teks = '<?php
	$EC = "'.$isi.'";

	?>';
	file_put_contents($file, $teks);
	}
*/
	
/* ======================================================================================================== */ 

//waktu 
$waktu = date('H:i:s');

// BODY

// CLEAR
fungsi_reset();

fungsi_badan_atas("FAUCETWORLD", "1.1.0");

//echo "\n".$EC;

echo "\n".$warna_isi_kuning_terang."Yuk Mulung...\n$warna_reset\n";

while (true) {

	$url = "https://faucetworld.in/payout-to-expresscrypto/?address=".$EC;
	$cookie = $Coki;

	//echo "\n".$cookie;

	// VAR
	$var_untuk_fungsi_curl_get_web = fungsi_curl_get($url, $cookie);
	$var_untuk_fungsi_parsing_html_ec = fungsi_parsing_html($var_untuk_fungsi_curl_get_web, '<span class="white-text">Welcome: ', "</span>", 1);
	//$var_untuk_fungsi_parsing_html = fungsi_parsing_html($var_untuk_fungsi_curl_get_web, "<title>", "</title>", 1);
	$var_untuk_fungsi_parsing_html_coin = fungsi_parsing_html($var_untuk_fungsi_curl_get_web, '<div class="card center-align green darken-4 white-text z-depth-5 faa-horizontal animated">', '</div>', 1);
	$var_untuk_fungsi_parsing_html_token = fungsi_parsing_html($var_untuk_fungsi_curl_get_web, '<title>
        [', ']', 1);

	// ECHO
	//echo "\n".$var_untuk_fungsi_curl_get_web;
	//echo "\n".$var_untuk_fungsi_parsing_html;
	//echo "\n".$var_untuk_fungsi_parsing_html_ec;
	//echo "\n".$var_untuk_fungsi_parsing_html_coin;
	//echo "\n".$var_untuk_fungsi_parsing_html_token;

	$var_teks = "[*] EC = ".$warna_isi_kuning_terang.$var_untuk_fungsi_parsing_html_ec.$warna_reset." | ".$warna_isi_hijau_terang.$var_untuk_fungsi_parsing_html_coin.$warna_reset." | Token = ".$warna_isi_merah_terang.$var_untuk_fungsi_parsing_html_token.$warna_reset;
	echo $var_teks;

echo "\n";
fungsi_countdown(65, 0);
//echo "\r$garis_dua";
}
?>