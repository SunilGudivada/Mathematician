<html>
<head>
 <?php  $str = file_get_contents('axiom-8ca22-export.json');
 function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$ip = get_client_ip();
if($ip== "::1"){
  $ip = '192.168.1.02';
}
$ip = str_replace(".","",$ip);
$ip = ($ip+gmdate("s", time()))% 100;
 $json = json_decode($str, true);
?>
<title><?php echo print_r($json['Mathematicians'][$ip]['Mathematician'], true).' - Axiom';?> </title>
<meta name="description" content="<?php echo print_r($json['Mathematicians'][$ip]['Contribution'], true); ?>">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />

    <link rel="shortcut icon" href="1545998_691370894274334_5139618401896529136_n.png">
</head>
<!-- <script type="text/javascript">window.location.href="https://fb.com/axiom.nitr"</script> -->