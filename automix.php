<?php
system("clear");
$red = "\033[1;31m";
$yellow = "\033[1;33m";
$white = "\033[1;37m";
$normal = "\033[0m";
echo "\n$yellow
$yellow        , 
$yellow      0/
$yellow     /7,
$yellow   .'(
$yellow '^ / >
$yellow   / <  Mehmet Demirbaş      $normal";
echo "\n     $yellow:::$red Automix Web Scanner v1.0 - 13 Haziran 2020 (11:30)      $normal";
echo "\n     $yellow:::$red Yazan: Mehmet Demirbaş | Frued  $normal";
echo "\n     $yellow:::$red Diyarbakırlı | O~WEB Tarama V1.0 $normal";
echo $yellow."\n     [Diyarbakırlı@root]$red Taramak Istediginiz Siteyi Giriniz$red(".$white."örnek: www.mehmetdemirbas.com$red):$normal ";
$webURL = trim(fgets(STDIN));
if ( $webURL != NULL ) {
	echo "\n\n$yellow:::$white Whois Lookup$yellow:$normal\n";
	$whoisURL = "http://api.hackertarget.com/whois/?q=".$webURL;
	$whoisDATA = file_get_contents($whoisURL);
	echo $whoisDATA;
	echo "\n\n$yellow:::$white DNS Lookup$yellow:$normal\n";
	$dnsURL = "http://api.hackertarget.com/dnslookup/?q=".$webURL;
	$dnsDATA = file_get_contents($dnsURL);
	echo $dnsDATA;
	echo "\n\n$yellow:::$white Zone Transfer$yellow:$normal\n";
	$zonetransURL = "http://api.hackertarget.com/zonetransfer/?q=".$webURL;
	$zonetransDATA = file_get_contents($zonetransURL);
	echo $zonetransDATA;
	echo "\n\n$yellow:::$white Traceroute$yellow:$normal\n";
	$traceURL = "https://api.hackertarget.com/mtr/?q=".$webURL;
	$traceDATA = file_get_contents($traceURL);
	echo $traceDATA;
	echo "\n\n$yellow:::$white PORT Scan$yellow:$normal\n";
	$pscanURL = "http://api.hackertarget.com/nmap/?q=".$webURL;
	$pscanDATA = file_get_contents($pscanURL);
	echo $pscanDATA;
	echo "\n\n$yellow:::$white Link Grabber$yellow:$normal\n";
	$linkgrabURL = "https://api.hackertarget.com/pagelinks/?q=http://".$webURL;
	$linkgrabDATA = file_get_contents($linkgrabURL);
	echo $linkgrabDATA;
	echo "\n\n$yellow:::$white IPGeolocation$yellow:$normal\n";
	$geoipURL = "https://tools.keycdn.com/geo.json?host=".$webURL;
	$geoipDATA = file_get_contents($geoipURL);
	echo $geoipDATA;
	echo "\n\n$yellow:::$white HTTP Header Grabber$yellow:$normal\n";
	$httphgrabURL = "http://api.hackertarget.com/httpheaders/?q=".$webURL;
	$httphgrabDATA = file_get_contents($httphgrabURL);
	echo $httphgrabDATA;
	echo "\n$yellow:::$white Programı Kullandıgınız İcin Tesekurler :)\n$yellow:::$white bay bay -_- $normal\n";
}
else {
	echo "\n$red:::$white Yeni Site İcin Enterla krall $normal\n";
}
?>
