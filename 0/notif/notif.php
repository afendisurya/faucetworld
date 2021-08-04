<?php

function fungsi_notif_perhatian($isi_notif){
include('/home/asus/Desktop/0/warna/warna.php');
	include('/home/asus/Desktop/0/garis/garis.php');
	$a = $warna_luar_kuning_terang."     $warna_reset\t=\t $warna_isi_kuning_terang$isi_notif";
	echo $garis_dua;
	echo $a;
	echo $garis_dua;
}

function fungsi_notif_berhasil($isi_notif){
include('/home/asus/Desktop/0/warna/warna.php');
	include('/home/asus/Desktop/0/garis/garis.php');

	$a = $warna_luar_hijau_terang."     $warna_reset\t=\t $isi_notif";
		echo $garis_dua;
	echo $a;
	echo $garis_dua;
}

function fungsi_notif_gagal($isi_notif){
include('/home/asus/Desktop/0/warna/warna.php');
	include('/home/asus/Desktop/0/garis/garis.php');

	$a = $warna_luar_merah_gelap."     $warna_reset\t=\t $isi_notif";
		echo $garis_dua;
	echo $a;
	echo $garis_dua;
}

?>