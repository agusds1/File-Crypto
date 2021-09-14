<?php

//color
$hijau = "\33[0;32m";
$hijau1 = "\33[32;1m";
$hijau2 = "\e[1;32m";
$biru = "\33[0;36m";
$biru1 = "\33[36;1m";
$biru2 = "\e[1;34m";
$merah = "\33[31;1m";
$merah2 = "\e[1;31m";
$putih2 = "\33[37;1m";
$putih1 = "\e[1;37m";
$hitam = "\33[30;1m";
$kuning = "\33[33;1m";
$kuning1 = "\33[1;33m";
$kuning2 = "\e[1;33m";
$cyan = "\e[0;36m";
$cyan1 = "\e[1;36m";
$ungu = "\e[0;35m";
$ungu2 = "\e[1;35m";
$abu =	"\e[0;33m";
$abu1 = "\e[0;37m";
$abu2 = "\e[1;30m";
$nc = "\e[0m";
$resred="\033[101m\033[1;37m";
$resgreen="\033[102m\033[1;37m";
$resyellow="\033[103m\033[1;30m";
$respurple1="\033[104m\033[1;37m";
$respurple2="\033[105m\033[1;37m";
$resterkois="\033[106m\033[1;31m";
$resputih="\033[107m\033[1;31m";
$hitam="\033[0;30m";

system('clear');
sleep(2);
echo$hijau2."Mohon tunggu 3 ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu 2 ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu 1 ";
sleep(1);
system('clear');
sleep(1);
echo$hijau2."Selamat Datang!\n";
sleep(1);
echo$hijau2."di script\n";
sleep(2);
echo$hijau2."STANDBY WEBSITE UNIVERSAL\n";
sleep(3);
echo$hijau2."SIMPLE\n";
sleep(2);
echo$hijau2."ANTI-RIBET !\n";
sleep(2);
echo$hijau2."CREATED BY...\n";
sleep(2);
echo $banner = "
$hijau2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$hijau1 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $hijau ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $merah ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $merah2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $abu ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n\n";

sleep(2);
echo$kuning2."Silahkan persiapkan DATA CAPTURE dari website\n";
echo$kuning2."yang ingin anda kunci untuk dijalankan via TERMUX! \n";
sleep(3);
echo$kuning2."Script ini membutuhkan USER-AGENT, URL, COOKIE, dan\n";
echo$kuning2."TIMER CLAIM\n";
echo$kuning2."Silahkan isi data tersebut di dalam file cfg.php\n";
sleep(2);
echo$merah2."PERHATIKAN INSTRUKSI DALAM VIDEO!\n";
sleep(5);
system('clear');

echo$hijau2."Mencoba inject data dari file cfg.php! \n\n";

include('cfg.php');

sleep(3);
system('clear');

echo$hijau2."Mohon tunggu. ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu. . ";
sleep(1);
system('clear');
echo$hijau2."Mohon tunggu. . . ";
sleep(1);

system('clear');

//banner
echo $banner = "
$hijau2 ██╗   ██╗███████╗███████╗███████╗████████╗██╗   ██╗    
$hijau1 ╚██╗ ██╔╝╚══███╔╝╚══███╔╝╚══███╔╝╚══██╔══╝██║   ██║    
 $hijau ╚████╔╝   ███╔╝   ███╔╝   ███╔╝    ██║   ██║   ██║    
  $merah ╚██╔╝   ███╔╝   ███╔╝   ███╔╝     ██║   ╚██╗ ██╔╝    
  $merah2  ██║   ███████╗███████╗███████╗   ██║    ╚████╔╝ 
   $abu ╚═╝   ╚══════╝╚══════╝╚══════╝   ╚═╝     ╚═══╝\n\n";

while(true){
$header = array();
$header[] = "user-agent:".$user;
$header[] = "cookie:".$cookie;
$header[] = "url:".$webtarget;

    $ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $webtarget);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_ENCODING, "");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_TIMEOUT, $tmr);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	$result = curl_exec($ch);
	
	$has1 = explode('<title>', $result)[1];
    $hasil1 = explode('</title>', $has1)[0];
	echo$biru."√ ".$kuning1."Anda mengunci website ".$hijau2.$hasil1."\n";
	echo$biru2."Silahkan cek akun anda untuk memastikan hasilnya!\n";
	echo$merah2."Jika".$hijau2." Judul Website".$merah." tampil berantakan,\n";
	echo$merah2."silahkan ganti".$kuning2." COOKIE!\n";
	echo$abu2.">>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>\n";
sleep($tmr);
}