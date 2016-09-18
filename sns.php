
<?php 
//fb
$this_url = get_permalink(); 
$fb_request_url = 'http://graph.facebook.com/?id=' . rawurlencode( $this_url ) ;
$curl = curl_init() ;
curl_setopt( $curl, CURLOPT_URL, $request_url ) ;
curl_setopt( $curl, CURLOPT_HEADER, 1 ) ;                       // ヘッダーを取得する
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false ) ;           // 証明書の検証を行わない
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true ) ;            // curl_execの結果を文字列で返す
curl_setopt( $curl, CURLOPT_TIMEOUT, 15 ) ;                 // タイムアウトの秒数
curl_setopt( $curl, CURLOPT_FOLLOWLOCATION , true ) ;           // リダイレクト先を追跡するか？
curl_setopt( $curl, CURLOPT_MAXREDIRS, 5 ) ;                    // 追跡する回数
$fb_res1 = curl_exec( $curl ) ;
$fb_res2 = curl_getinfo( $curl ) ;
curl_close( $curl ) ;

$json = substr($fb_res1, $fb_res2['header_size'] ) ;                 // 取得したデータ(JSONなど)
$fb_array = json_decode( $json , true ) ;
if( isset($fb_array['shares']) ) {
    $fb_count = "{$fb_array['shares']}" ;
} else {
    $fb_count = "0" ;
}
//Hb

$hb_request_url = 'http://api.b.st-hatena.com/entry.count?url=' . rawurlencode( $this_url ) ;
$curl = curl_init() ;
curl_setopt( $curl, CURLOPT_URL, $request_url ) ;
curl_setopt( $curl, CURLOPT_HEADER, 1 ) ;                       // ヘッダーを取得する
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false ) ;           // 証明書の検証を行わない
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true ) ;            // curl_execの結果を文字列で返す
curl_setopt( $curl, CURLOPT_TIMEOUT, 15 ) ;                 // タイムアウトの秒数
curl_setopt( $curl, CURLOPT_FOLLOWLOCATION , true ) ;           // リダイレクト先を追跡するか？
curl_setopt( $curl, CURLOPT_MAXREDIRS, 5 ) ;                    // 追跡する回数
$hb_res1 = curl_exec( $curl ) ;
$hb_res2 = curl_getinfo( $curl ) ;
curl_close( $curl ) ;

$hb_count = substr( $res1, $res2['header_size'] ) ;                 // 取得したデータ(JSONなど)
if(!$hb_count) {
    $hb_count = "0";
}
$tw_count = 123;
$fg_count = 0;
$hb_count = 1235;


?>








<ul class="sns__ul flex-wrap-center">
    <li class="sns__ul-li">
        <img src="./wp-content/themes/pyaka-2/img/twitter.svg">
        <div class="sns__ul-li-count">
            <?php echo $tw_count;?>
        </div>
    </li>
    <li class="sns__ul-li">
        <img src="./wp-content/themes/pyaka-2/img/facebook.svg">
        <div class="sns__ul-li-count">
            <?php echo $fb_count;?>
        </div>
    </li>
    <li class="sns__ul-li">
        <img src="./wp-content/themes/pyaka-2/img/hatena.svg">
        <div class="sns__ul-li-count">
            <?php echo $hb_count;?>
        </div>
    </li>
    <li class="sns__ul-li">
        <img src="./wp-content/themes/pyaka-2/img/pinterest.svg">
    </li>
    <li class="sns__ul-li">
        <img src="./wp-content/themes/pyaka-2/img/instagram.svg">
    </li>
    <li class="sns__ul-li">
        <img src="./wp-content/themes/pyaka-2/img/line.svg">
    </li>
</ul>
