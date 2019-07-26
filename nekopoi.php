<?php 
set_time_limit(0);
file_get_contents("http://link.safelinkconverter.com/epub.php?id=aHR0cHM6Ly93d3c2NS56aXBweXNoYXJlLmNvbS92L3d6Q0lUdnBGL2ZpbGUuaHRtbA==&c=0&user=44285");
// require_once 'simple_html_dom.php';
function getBetween($content, $start, $end)
{
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}
function getstringbetween($teks, $sebelum, $sesudah){
	$teks = ' ' . $teks;
	$ini = strpos($teks, $sebelum);
	if ($ini ==0) return '';
	$ini += strlen($sebelum);
	$panjang = strpos($teks, $sesudah, $ini) - $ini;
	return substr($teks, $ini, $panjang);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Samehadaku</title>
	
	<?php
	// if(isset($_GET['download'])) {
		// $link = "http://nekopoi.ga/en/cost/www65.zippyshare.com?id=aHR0cHM6Ly93d3c2NS56aXBweXNoYXJlLmNvbS92L3d6Q0lUdnBGL2ZpbGUuaHRtbA==&c=0&user=44285";
		// $judul = $_GET['judul'];
		// $kualitas = $_GET['kualitas'];
		// $format = $_GET['format'];
		// $server = $_GET['server'];
		// $req = file_get_html("https://linkpoi.in/XpCN9");
		// $get = $req->find('div[class=panel]',1);
		// $tempik1 = getBetween($get, '<a href="','"');
		// $req2 = file_get_html($tempik1);
		// echo "$tempik1";
		// $satu = getstringbetween($req, "$format", "</ul>");
		// $dua = getstringbetween($satu, "$kualitas", "</li>");
		// $onclick = getBetween($req, "<div class=\"button green\" onclick=\"window.open('","',");
		// echo $onclick;

		// 	preg_match("@<a[^>]*href\s*=(?<HRef>[^>]+)>$server@", $dua, $tiga);
		// 	preg_match("@\"(.*?)\" target=\"_blank\"@", $tiga[1], $empat);
		// 	$req2 = file_get_contents($empat[1]);
		// 	preg_match('@<a href="(.*?)" rel="nofollow" target=@', $req2, $tetew);
		// 	$req3 = file_get_contents($tetew[1]);
		// 	preg_match('@<a href="(.*?)" target="_blank"@', $req3, $greget);
		// 	// preg_match('@<a href="(.*?)" target="_blank"@', $req3, $greget);
		// 	print_r($greget);
		// 	$url = $tetew[1];
		// try {
		// 	$ch = curl_init();
		// 	curl_setopt($ch, CURLOPT_URL, $url);
		// 	curl_setopt($ch, CURLOPT_HEADER, true);
		// 	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Must be set to true so that PHP follows any "Location:" header
		// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// 	$a = curl_exec($ch); // $a will contain all headers
		// 	$url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL); // This is what you need, it will return you the last effective URL
		// } catch (Exception $e) {
		// 	echo "<h3>Link download tidak ditemukan!</h3>";}
		?>
		<!-- <a href="<?php echo $url; ?>" class="btn btn-success">DOWNLOAD</a></center> <?php  ?> -->
</body>
</html>