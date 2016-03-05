<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/hsm/include/initialize.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/hsm/status_execute.php");
?>
<html>
    <head>
        <title>HSMX sample portal</title>
        <script type='text/javascript' src='../hsm/status.js'></script>
    </head>
    <body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" onload="refresh_status('<?=($_GET["sessionid"]!=""?$_GET["sessionid"]:"")?>');refresh_bandwidth('<?=($_GET["sessionid"]!=""?$_GET["sessionid"]:"")?>');refresh_sessions('<?=($_GET["sessionid"]!=""?$_GET["sessionid"]:"")?>');" >
            <canvas style='width:50%;height:50%;font-family:Arial;font-size:9pt;color:#000000;font-weight:bold;' width='50%' height='50%' id='bandwidth_graph'>
                <?=$arr_portal_lang["html5_not_supported"]?>
            </canvas>
        
        <div id="sessions">
            
        </div>
    </body>
</html>

