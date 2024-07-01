<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, follow">				
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="true" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="description" content="VIVAone">
<link rel="preconnect" href="https://www.thevivanetworks.com">
<link rel="dns-prefetch" href="https://www.thevivanetworks.com" />
<link rel="preconnect" href="https://ajax.googleapis.com">
<link rel="dns-prefetch" href="https://ajax.googleapis.com"/>
<link href="img/favicon.ico?<?php echo $anticache; ?>" rel="icon" type="image/ico" />
<title><?php if (isset($page)) {echo $page;}  ?></title>

<link rel="preload" href="fonts/inter/Inter-VariableFont_slnt,wght.woff2" as="font" type="font/ttf" crossorigin>
<link rel="preload" href="fonts/nunito/XRXV3I6Li01BKofINeaB.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="css/rancak.css?<?php echo $anticache; ?>" as="style">
<link rel="preload" as="script" href="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

<style><?php require ($_SERVER['VIVABASE'].'css/font.css')?></style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../vivanetworks/global-js/jquery.js"><\/script>');</script>
<script async>
$("body,html").bind("touchstart touchmove scroll mousedown DOMMouseScroll mousewheel keyup", function(e){
  $("script").each(function(){
    var get_script = $(this).attr("rancak-hold");
    $(this).attr('src', get_script);
  })
});
</script>

<link rel="stylesheet" type="text/css" href="css/rancak.css?<?php echo $anticache; ?>"/>

</head>
<body>