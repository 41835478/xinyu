<?php
/****
爱网购cms 作者：金柯
网址：cms.alqwang.com
QQ：805694800
 ****/
function get_between($input, $start, $end) {
  $substr = substr($input, strlen($start)+strpos($input, $start),
  (strlen($input) - strpos($input, $end))*(-1));
  return $substr;
}
function str_del($a,$e){
    for($i=0;$i<count($a);$i++){
        $e = str_replace($a[$i],'',$e);
    }
    return $e;
}

function curl_get($u,$t=true){
    $c = curl_init();
    curl_setopt($c,CURLOPT_URL,$u);
    curl_setopt ($c,CURLOPT_RETURNTRANSFER,true); 
    curl_setopt ($c,CURLOPT_CONNECTTIMEOUT, 10);
    $e = curl_exec($c);
    curl_close($c);  
    return $t==true?json_decode($e,true):$e;
}
function encrypt($data, $key) {
    $prep_code = serialize($data);
    $block = mcrypt_get_block_size('des', 'cbc');
    if (($pad = $block - (strlen($prep_code) % $block)) < $block) {
        $prep_code.= str_repeat(chr($pad), $pad);
    }
    $encrypt = mcrypt_encrypt(MCRYPT_DES, $key, $prep_code, MCRYPT_MODE_ECB);
    return base64_encode($encrypt);
}
function decrypt($str, $key) {
    $str = base64_decode($str);
    $str = mcrypt_decrypt(MCRYPT_DES, $key, $str, MCRYPT_MODE_ECB);
    $block = mcrypt_get_block_size('des', 'cbc');
    $pad = ord($str[($len = strlen($str)) - 1]);
    if ($pad && $pad < $block && preg_match('/' . chr($pad) . '{' . $pad . '}$/', $str)) {
        $str = substr($str, 0, strlen($str) - $pad);
    }
    return unserialize($str);
}
function is_mobile() {/*判断用户设备是不是手机*/
    $user_agent = @$_SERVER['HTTP_USER_AGENT'];
    $mobile_agents = Array("240x320", "acer", "acoon", "acs-", "abacho", "ahong", "airness", "alcatel", "amoi", "android", "anywhereyougo.com", "applewebkit/525", "applewebkit/532", "asus", "audio", "au-mic", "avantogo", "becker", "benq", "bilbo", "bird", "blackberry", "blazer", "bleu", "cdm-", "compal", "coolpad", "danger", "dbtel", "dopod", "elaine", "eric", "etouch", "fly ", "fly_", "fly-", "go.web", "goodaccess", "gradiente", "grundig", "haier", "hedy", "hitachi", "htc", "huawei", "hutchison", "inno", "ipad", "ipaq", "ipod", "jbrowser", "kddi", "kgt", "kwc", "lenovo", "lg ", "lg2", "lg3", "lg4", "lg5", "lg7", "lg8", "lg9", "lg-", "lge-", "lge9", "longcos", "maemo", "mercator", "meridian", "micromax", "midp", "mini", "mitsu", "mmm", "mmp", "mobi", "mot-", "moto", "nec-", "netfront", "newgen", "nexian", "nf-browser", "nintendo", "nitro", "nokia", "nook", "novarra", "obigo", "palm", "panasonic", "pantech", "philips", "phone", "pg-", "playstation", "pocket", "pt-", "qc-", "qtek", "rover", "sagem", "sama", "samu", "sanyo", "samsung", "sch-", "scooter", "sec-", "sendo", "sgh-", "sharp", "siemens", "sie-", "softbank", "sony", "spice", "sprint", "spv", "symbian", "tablet", "talkabout", "tcl-", "teleca", "telit", "tianyu", "tim-", "toshiba", "tsm", "up.browser", "utec", "utstar", "verykool", "virgin", "vk-", "voda", "voxtel", "vx", "wap", "wellco", "wig browser", "wii", "windows ce", "wireless", "xda", "xde", "zte");
    $is_mobile = false;
    foreach ($mobile_agents as $device) {
        if (stristr($user_agent, $device)) {
            $is_mobile = true;
            break;
        }
    }
    return $is_mobile;
}
?>