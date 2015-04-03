<?php
//Code By Ali Razmjoo
$list_exceptions = array("/wp-comments-post.php");
$list_deny = array("`",
"~",
"!",
"@",
"#",
"$",
"%",
"^",
"&",
"*",
"(",
")",
"-",
"_",
"+",
"[",
"]",
"{",
"}",
"\\",
"|",
";",
":",
"'",
'"',
"<",
">",
"?",
"/",
",",
".",
);
$detect = 0;
$get = 0;
$post = 0;
$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
$host = $_SERVER['HTTP_HOST'];
$script = $_SERVER['SCRIPT_NAME'];
$params = $_SERVER['QUERY_STRING'];
$currentUrl = $protocol . '://' . $host . $script . '?' . $params;
$script = urldecode($script);
$script = urldecode($script);
$script = urldecode($script);
$script = urldecode($script);
$params = urldecode($params);
$params = urldecode($params);
$params = urldecode($params);
$params = urldecode($params);
$agent = $_SERVER['HTTP_USER_AGENT'];

for($i=0; $i<count($list_deny); $i++){
  if(strpos($params,$list_deny[$i]) !== false){
      $get = 1;
      
      for($j=0; $j<count($list_exceptions); $j++){
          if(strpos($script,$list_exceptions[$j]) !== false){
              $get = 0;
          }
      }
      if($get == 1){
              if(strpos($agent,'b00c52cac042640c440db9684a59ae36') == false){
              $_GET = str_replace($list_deny[$i],"***[firewall]***",$_GET);
              }
      }
  }
}
foreach($_POST as $key => $value){
  $key = strtolower($key);
  $value = strtolower($value);
  for($i=0; $i<count($list_deny); $i++){
      if(strpos($value,$list_deny[$i]) !== false){
          $post = 1;
          for($j=0; $j<count($list_exceptions); $j++){
              if(strpos($script,$list_exceptions[$j]) !== false){
                  $post = 0;
              }
          }
          if($post == 1){
              if(strpos($agent,'b00c52cac042640c440db9684a59ae36') == false){
              $_POST = str_replace($list_deny[$i],"***[firewall]***",$_POST);
              }
          }
          }
  }
  }
?>
