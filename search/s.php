<?php 
define("site","http://yukiteru.xyz/");
include_once site.'/dist/head.php';
include "../simple_html_dom.php";
    $query = $_GET['query'];
  $req = file_get_html("https://www.samehadaku.tv/?s=".urlencode($query));
 ?>

<div class="rainbow-line"></div>
<div class="content shadow-lg p-3 mb-5 bg-white rounded">
  <div class="paralog">
      <h3>
        Update Anime
      </h3>
    </div>

<?php
function getBetween($content, $start, $end)
{
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}
    $get = $req->find('div[class=mag-box-container]',0);
	preg_match_all('/<h3 class="post-title"><a href="(.*?)" title=/', $get, $links);
	preg_match_all('/<h3 class="post-title"><a href=".*?" title="(.*?)"/', $get, $judul);
    preg_match_all('/<img width="390" height="220" src="(.*?)" class=/', $get, $img);

	$arr = array();
   $i = 0;
  
	for($i = 0;$i < count($links[1]); $i++){
    $key = $links[1][$i];
    $value = $judul[1][$i];
    $image = $img[1][$i];
	
    ?>
		  <div class="table-responsive">
      <table class="table">         
          <tr>

            <form action="/download.php" method="post" target="_blank">
            <input type="hidden" name="link" value="<?php echo $key; ?>">
            <input type="hidden" name="judul" value="<?php echo $value; ?>">

            <td>
              <img src="https://proxy.duckduckgo.com/iu/?u=<?= $image ?>">
            </td>
            <td>
              <?php echo $value; ?><br>
              

            </td>
          </tr>
          <tr>
            <td>
              <select class="custom-select" id="kualitas" name="kualitas" required>
                <option value="">Kualitas/Resolusi</option>
                <option value="360p">360p</option>
                <option value="480p">480p</option>
                <option value="720p">720p</option>
              <option value="1080p">1080p</option>
              </select>
            </td>
            <td>









              <select class="custom-select" id="format" name="format" required>
                <option value="">Format Video</option>
                <option value="MKV">MKV</option>
                <option value="MP4">MP4</option>
                <option value="x265">x265</option>
              </select>
            </td>
          </tr>
            <td>
              <select class="custom-select" id="server" name="server" required>
                <option value="">Server</option>
                <option value="UF">Upfile</option>
                <option value="CU">Clicknupload</option>
                <option value="GD">Google Drive</option>
                <option value="ZS">Zippyshare</option>
                <option value="SC">Sendit</option>
                <option value="MU">Megaup</option>
              </td>
            <td>
              <button type="download" class="btn btn-success form-control" name="download">Download</button>
            </td>
          </form>
        </tr>
      </table>
    </div>
    <div class="rainbow-td"></div>
	
	<?php
	}
	?>
	
		
<!-- pagination -->


<?php 
  require_once site.'dist/foot.php';
 ?>
