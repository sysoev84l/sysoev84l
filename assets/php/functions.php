<?php
function start() {
  header("X-XSS-Protection: 1; mode=block");
  header("Referrer-Policy: no-referrer");
  header("Referrer-Policy: strict-origin-when-cross-origin");
  header("X-Frame-Options:sameorigin");
  header("X-Permitted-Cross-Domain-Policies: none");
  header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
  header("X-Content-Type-Options: nosniff");
  header_remove('x-powered-by');
  error_reporting(-1);
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
}
function telegramForwardButton($url, $text = '') {
 return 'https://t.me/share/url?url='.rawurlencode($url).'&text='.rawurlencode($text);
}
function getAge($y, $m, $d) {
  if($m > date('m') || $m == date('m') && $d > date('d')) 
    return (date('Y') - $y - 1);
  else return (date('Y') - $y);
}
function load() {
$destiation = $_SERVER['DOCUMENT_ROOT'].'/upload/load/'.$_FILES['load']['name']; // Директория для размещения файла
move_uploaded_file($_FILES['load']['tmp_name'], $destiation); //Перемещаем файл в 
echo 'File Uploaded'; // Оповещаем пользователя об успешной загрузке файла
}
function get_sn() {
  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') 
    $protocol = 'https://';
else $protocol = 'http://';
return $protocol.$_SERVER['HTTP_HOST'];
}
function get_patch($file){ return get_sn().'/'.$file; }
function get_dr() { return $_SERVER['DOCUMENT_ROOT']; }
function insert($name, $dir = '/assets/php/') {
  require get_dr().$dir.$name;
}
function header_delay($delay=10, $url='') {
  header ("Refresh:".$delay."; URL=".get_sn().$url);
}

function get_fp($file_name,$file_extension='php', $dir = '/assets/php/') {
  switch ($file_name) {
    case 'foo':
    $file_name = 'footer';
    break;
    case 'hdr':
    $file_name = 'header';
    break;
    case 'acs':
    $file_name='analytics';
    break;
    case 'con':
    $file_name='connect';
    break;
    case 'hd':
    $file_name='head';
    break;
    case 'st':
    $file_name='style';
    break;
  }
  return get_dr().$dir.$file_name.'.'.$file_extension;}
  
  function in_header(){
   require ($_SERVER['DOCUMENT_ROOT']."/php/header.php");
 }
 function in_footer(){
   require ($_SERVER['DOCUMENT_ROOT']."/php/footer.php");
 }

 function in_head(){
   require ($_SERVER['DOCUMENT_ROOT']."/php/head.php");
 }
 function make_short_url($url,$alias) {
  $url = urlencode($url);
  $api_token = '3c6bea339631462e276990ad72e77e6a062fa95c';
  $alias = urlencode($alias);
  $api_url = "https://goo-gl.su/api?api={$api_token}&url={$url}&alias={$alias}";
  $result = @json_decode(file_get_contents($api_url),TRUE);
  return $result['shortenedUrl'];
}
function get_status(){
  $user_name = '-Queen-Maria-';
  $xml = simplexml_load_file(urlencode('https://bngpt.com/promo.php?c=614262&type=api&api_v=1&api_type=xml'));
  $name_arr=[];
  foreach ($xml->xpath('/online_models/model') as $model) {
    $name=((string)$model->username);
    array_push($name_arr,$name);
  }
  if (in_array($user_name, $name_arr)) return true;
  else return false;
}
   /* function get_status_cb(){
  $user_name = 'queen_maria';
    $xml = simplexml_load_file(urlencode('https://chaturbate.com/affiliates/api/onlinerooms/?format=xml&wm=WCL3Y'));
      $name_arr=[];
    foreach ($xml as $model) {
      $name=((string)$model->username);
      array_push($name_arr,$name);
      }
      if (in_array($user_name, $name_arr)) {return true;}
      else {return false;}
    }*/

    function get_arr_url() {
      $mysqli = new mysqli("localhost","sysoev","6596sA$#", 'qm');
      $mysqli->set_charset("utf8");
      $chats = $mysqli->query("SELECT * FROM url WHERE `type`='chat'");
      $s_nws =  $mysqli->query("SELECT * FROM url WHERE `type`='social_network'");
      $url = $mysqli->query("SELECT `url`, `name` FROM url WHERE `no_echo`=0");
      $url_arr=[];
      while ($row = $url->fetch_assoc()) {
       $url_arr += array($row['name'] => $row['url']);
     }
     return $url_arr;
   }
   function print_r_pre($pre){
     echo "<pre>";
     print_r($pre);
     echo "</pre>";
   }
   
   function var_dump_pre($pre){
    echo "<pre>";
    var_dump($pre);
    echo "</pre>";
  }
  function get_iwc_url(){return get_arr_url()['iwcchat'];}
  function get_bonga_url(){return get_arr_url()['bongachat'];}
  function get_chaturbate_url(){return get_arr_url()['chaturbate'];}
  function get_twitter_url(){return get_arr_url()['twitter
  '];}

  function get_patch_ap($file){
    $patch=get_patch($file);
    $patch_ap="'".$patch."'";
    return $patch_ap;
  }
  function get_in_ap($argument){
    return "'".$argument."'";
  }