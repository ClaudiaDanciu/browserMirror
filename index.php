<!DOCTYPE html>
<html>
    <head>
        <meta charset ="UTF-8">
        <title>Browser Mirror</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
       <div id="main-content">
        <h1>Browser Mirror</h1>
       <?php
       require_once('browser_detective.php');
       $bd = new BrowserDetective();
       $bd->detect();
       
       ?>     
            <p>Remote IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
            <p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
            <p>Platform:<?php echo $bd->platform; ?></p>
            <p>Browser:<?php echo $bd->browser_name; ?></p>
            <p>Browser window width:<span id ="window-width"> </span></p>
            <p>Browser window height:<span id ="window-height"> </span></p>
                
            <p>Referer: <?php echo $_SERVER['HTTP_REFERER']; ?></p>
            <p>Request Time (Unix): <?php echo $_SERVER['REQUEST_TIME']; ?></p>
            <?php date_default_timezone_set("Europe/London");?>
            <p>Request Time (formatted): <?php echo date('l, F j, Y g:ia', $_SERVER['REQUEST_TIME']); ?></p>

            <p>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></p>
            <p>Request Method: <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
            <p>Query String: <?php echo $_SERVER['QUERY_STRING']; ?></p>
            <p>HTTP Accept: <?php echo $_SERVER['HTTP_ACCEPT']; ?></p>
            <p>HTTP Accept Charset: <?php echo $_SERVER['HTTP_ACCEPT_CHARSET']; ?></p>
            <p>HTTP Accept Encoding: <?php echo $_SERVER['HTTP_ACCEPT_ENCODING']; ?></p>
            <p>HTTP Accept Language: <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></p>
            <p>HTTPS: <?php if (isset ($_SERVER['HTTPS'])) {echo 'Yes'; }else{echo 'No';} ?></p>
            <p>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></p>

        </div>
    <script>
      var width = window.innerWidth || document.documentElement.clientWidth ||
document.body.clientWidth || document.body.offsetWidth;
      var height = window.innerHeight || document.documentElement.clientHeight ||
document.body.clientHeight || document.body.offsetHeight;
      document.getElementById("window-width").innerHTML = width + "px";
      document.getElementById("window-height").innerHTML = height + "px";
      
    </script>
    </body>
</html>