<?php
// HEAD

// SERVER
include('include.php');

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

fungsi_badan_atas("FAUCETWORLD", "1.1.1");

//echo "\n".$EC;

echo "\n".$warna_isi_kuning_terang."Yuk Mulung...\n$warna_reset\n";

$url_verify = "https://faucetworld.in/verify.php";
$data_verify = "address=".$EC."&DOGE=on&refresh_time=60&booster=1&action=&g-recaptcha-response=";
$cookie = $Coki;

$var_untuk_fungsi_curl_post_verify = fungsi_curl_post($url_verify, $cookie, $data_verify);
//echo $var_untuk_fungsi_curl_post_verify;

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

	$var_teks = $waktu_sekarang." ID = ".$warna_isi_kuning_terang.$EC.$warna_reset." | PAYOUT = ".$warna_isi_hijau_terang.$var_untuk_fungsi_parsing_html_coin.$warna_reset." | TOKEN = ".$warna_isi_merah_terang.$var_untuk_fungsi_parsing_html_token.$warna_reset;
	echo $var_teks;

echo "\n";
fungsi_countdown(65, 0);
//echo "\r$garis_dua";
}
?>