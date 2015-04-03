<?php
//Code By Ali Razmjoo
#!@$%^&*()-_+=`~[]\{}|;':",./<>?
$deny = array('#',
'!',
'@',
'$',
'%',
'^',
'&',
'*',
'(',
')',
'-',
'_',
'+',
'=',
'`',
'~',
'[',
']',
'\\',
'{',
'}',
'|',
';',
'\'',
':',
'"',
',',
'.',
'/',
'<',
'>',
'?');

$denytoken = array('#',
'!',
'@',
'$',
'%',
'^',
'&',
'*',
'(',
')',
'_',
'+',
'=',
'`',
'~',
'[',
']',
'\\',
'{',
'}',
'|',
';',
'\'',
':',
'"',
',',
'.',
'/',
'<',
'>',
'?');

$denymail = array('#',
'!',
'$',
'%',
'^',
'&',
'*',
'(',
')',
'+',
'=',
'`',
'~',
'[',
']',
'\\',
'{',
'}',
'|',
';',
'\'',
':',
'"',
',',
'/',
'<',
'>',
'?');
$agent_deny = array_diff($deny, array("/" , "." , "(" , ")" , ";" , "+" , ":" , "_" , "-"));

for($i=0; $i<count($agent_deny); $i++){
        if(strpos($_SERVER["HTTP_USER_AGENT"],$agent_deny[$i]) !== false){
                $_SERVER["HTTP_USER_AGENT"] = str_replace($agent_deny[$i],"*F*",$_SERVER["HTTP_USER_AGENT"]);
        }
}

for($i=0; $i<count($deny); $i++){
        if(strpos($_SERVER["HTTP_REFERER"],$deny[$i]) !== false){
                $_SERVER["HTTP_REFERER"] = str_replace($deny[$i],"*F*",$_SERVER["HTTP_REFERER"]);
        }
}

for($i=0; $i<count($deny); $i++){
        if(strpos($_SERVER["HTTP_ACCEPT"],$deny[$i]) !== false){
                $_SERVER["HTTP_ACCEPT"] = str_replace($deny[$i],"*F*",$_SERVER["HTTP_ACCEPT"]);
        }
}

for($i=0; $i<count($deny); $i++){
        if(strpos($_SERVER["HTTP_ACCEPT_LANGUAGE"],$deny[$i]) !== false){
                $_SERVER["HTTP_ACCEPT_LANGUAGE"] = str_replace($deny[$i],"*F*",$_SERVER["HTTP_ACCEPT_LANGUAGE"]);
        }
}

for($i=0; $i<count($deny); $i++){
        if(strpos($_SERVER["HTTP_ACCEPT_ENCODING"],$deny[$i]) !== false){
                $_SERVER["HTTP_ACCEPT_ENCODING"] = str_replace($deny[$i],"*F*",$_SERVER["HTTP_ACCEPT_ENCODING"]);
        }
}

for($i=0; $i<count($deny); $i++){
        if(strpos($_SERVER["HTTP_ACCEPT_ENCODING"],$deny[$i]) !== false){
                $_SERVER["HTTP_ACCEPT_ENCODING"] = str_replace($deny[$i],"*F*",$_SERVER["HTTP_ACCEPT_ENCODING"]);
        }
}


for($i=0; $i<count($deny); $i++){
        if(strpos($_SERVER["HTTP_ACCEPT_ENCODING"],$deny[$i]) !== false){
                $_SERVER["HTTP_ACCEPT_ENCODING"] = str_replace($deny[$i],"*F*",$_SERVER["HTTP_ACCEPT_ENCODING"]);
        }
}


$cookie_deny = array_diff($deny, array(";", "_",".","=","-",",","/",":"));
for($i=0; $i<count($cookie_deny); $i++){
        if(strpos($_SERVER["HTTP_COOKIE"],$cookie_deny[$i]) !== false){
                $_SERVER["HTTP_COOKIE"] = str_replace($cookie_deny[$i],"*F*",$_SERVER["HTTP_COOKIE"]);
        }
}

$cache_deny = array_diff($deny, array("-"));
for($i=0; $i<count($cache_deny); $i++){
        if(strpos($_SERVER["HTTP_PRAGMA"],$cache_deny[$i]) !== false){
                $_SERVER["HTTP_PRAGMA"] = str_replace($cache_deny[$i],"*F*",$_SERVER["HTTP_PRAGMA"]);
        }
}

for($i=0; $i<count($cache_deny); $i++){
        if(strpos($_SERVER["HTTP_CACHE_CONTROL"],$cache_deny[$i]) !== false){
                $_SERVER["HTTP_CACHE_CONTROL"] = str_replace($cache_deny[$i],"*F*",$_SERVER["HTTP_CACHE_CONTROL"]);
        }
}

$req_deny = array_diff($deny, array("/","."));
for($i=0; $i<count($req_deny); $i++){
        if(strpos($_SERVER["SERVER_PROTOCOL"],$req_deny[$i]) !== false){
                $_SERVER["SERVER_PROTOCOL"] = str_replace($req_deny[$i],"*F*",$_SERVER["SERVER_PROTOCOL"]);
        }
}


for($i=0; $i<count($deny); $i++){
        if(strpos($_SERVER["reqtype"],$deny[$i]) !== false){
                $_SERVER["reqtype"] = str_replace($deny[$i],"*F*",$_SERVER["reqtype"]);
        }
}



$fields = array('customtext','homepage','bccrecipients','recipients','message_backup','title','forward','securitytoken','url','username','vb_login_username','vb_login_password','vb_login_password_hint','confirm','message','message_backup','sbutton','passwordconfirm','postvars');


$_POST['email'] = str_replace("@","ZZZZ1",$_POST['email']);
$_POST['email'] = str_replace(".","ZZZZ2",$_POST['email']);
$_POST['email'] = str_replace("-","ZZZZ3",$_POST['email']);
$_POST['email'] = str_replace("_","ZZZZ4",$_POST['email']);
$_POST['emailconfirm'] = str_replace("@","ZZZZ1",$_POST['emailconfirm']);
$_POST['emailconfirm'] = str_replace(".","ZZZZ2",$_POST['emailconfirm']);
$_POST['emailconfirm'] = str_replace("-","ZZZZ3",$_POST['emailconfirm']);
$_POST['emailconfirm'] = str_replace("_","ZZZZ4",$_POST['emailconfirm']);
$_POST['securitytoken'] = str_replace("-","ZZZZ3",$_POST['securitytoken']);

$_POST['yahoo'] = str_replace("@","ZZZZ1",$_POST['yahoo']);
$_POST['yahoo'] = str_replace(".","ZZZZ2",$_POST['yahoo']);
$_POST['yahoo'] = str_replace("-","ZZZZ3",$_POST['yahoo']);
$_POST['yahoo'] = str_replace("_","ZZZZ4",$_POST['yahoo']);

$_POST['msn'] = str_replace("@","ZZZZ1",$_POST['msn']);
$_POST['msn'] = str_replace(".","ZZZZ2",$_POST['msn']);
$_POST['msn'] = str_replace("-","ZZZZ3",$_POST['msn']);
$_POST['msn'] = str_replace("_","ZZZZ4",$_POST['msn']);




foreach($_POST as $key => $value){
  $key = strtolower($key);
  $value = strtolower($value);
  for($i=0; $i<count($deny); $i++){
      if(strpos($value,$deny[$i]) !== false){
          $post = 1;
          for($j=0; $j<count($fields); $j++){
              if(strpos($key,$fields[$j]) !== false){
                  $post = 0;
              }
          }
          if($post == 1){
              $_POST = str_replace($deny[$i],"*F*",$_POST);

          }

          }
  }
}

$_POST['email'] = str_replace("ZZZZ1","@",$_POST['email']);
$_POST['email'] = str_replace("ZZZZ2",".",$_POST['email']);
$_POST['email'] = str_replace("ZZZZ3","-",$_POST['email']);
$_POST['email'] = str_replace("ZZZZ4","_",$_POST['email']);
$_POST['emailconfirm'] = str_replace("ZZZZ1","@",$_POST['emailconfirm']);
$_POST['emailconfirm'] = str_replace("ZZZZ2",".",$_POST['emailconfirm']);
$_POST['emailconfirm'] = str_replace("ZZZZ3","-",$_POST['emailconfirm']);
$_POST['emailconfirm'] = str_replace("ZZZZ4","_",$_POST['emailconfirm']);


$_POST['securitytoken'] = str_replace("ZZZZ3","-",$_POST['securitytoken']);

$_POST['yahoo'] = str_replace("ZZZZ1","@",$_POST['yahoo']);
$_POST['yahoo'] = str_replace("ZZZZ2",".",$_POST['yahoo']);
$_POST['yahoo'] = str_replace("ZZZZ3","-",$_POST['yahoo']);
$_POST['yahoo'] = str_replace("ZZZZ4","_",$_POST['yahoo']);


$_POST['msn'] = str_replace("ZZZZ1","@",$_POST['msn']);
$_POST['msn'] = str_replace("ZZZZ2",".",$_POST['msn']);
$_POST['msn'] = str_replace("ZZZZ3","-",$_POST['msn']);
$_POST['msn'] = str_replace("ZZZZ4","_",$_POST['msn']);

foreach($_GET as $key => $value){
  $key = strtolower($key);
  $value = strtolower($value);
  for($i=0; $i<count($deny); $i++){
      if(strpos($value,$deny[$i]) !== false){
          $post = 1;
          if($post == 1){
              $_GET = str_replace($deny[$i],"*F*",$_GET);

          }
          }
  }
}
//?> if you want add it on vbulletin you shouldn't close it with ?>
