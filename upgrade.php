<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/hsm/include/initialize.php");
    require($_SERVER['DOCUMENT_ROOT']."/hsm/upgrade_execute.php");    
?>
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>fdXtended upgrade</title>
    <script src="include/hsm.js" type="text/javascript"></script>
    </head> 
    <body <?=$focus?> leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0"> 
    <table width="100%" height="100%" class="bodycolor"> <br />
    <tr>
        <td align="center" ><img src="logo_fd_xtended.gif"></td>
    </tr>
      <tr>
        <td valign="middle" align="center">
          <table width="600" align="center">
            <tr>
              <td valign="middle">
                  <form name="loginForm" method="post" action="upgrade.php">
                    <table width="100%" cellpadding=0 cellspacing=0 class=pagecell1>
                        <tr>
                          <td valign=top>
                            <table width="100%">
                                 <tr>
                                     <td colspan=3 class=feature_h valign=top>User account</td>
                                 </tr>
                                 <tr>
                                     <td valign=top class=feature colspan=3>Username: <?=$_SESSION['PORTAL']['upgrade_user']?></td>
                                 </tr>
                                 <tr>
                                     <td valign=top class=feature colspan=3>Current billing plan: <?=$current_plan->name?></td>
                                 </tr>
                                 <tr>
                                     <td valign=top class=feature colspan=3>Time left: <?=calculateTimeUser_3(active_time_left($_SESSION['PORTAL']['upgrade_user']))?></td>
                                 </tr>
                                 <tr><td>&nbsp;</td></tr>
<?php
                                if($error!="")
                                {
                                    echo '<tr>';
                                    echo '<td style="color:#FF0000" valign=top class=feature colspan=3>'.$error.'</td>';
                                    echo '</tr>';            
                                 }
                                if($_SESSION['upgrade']!="successful")
                                {
?> 
                                     <tr>
                                     
                                         <td  colspan=3 class=feature valign=top>Update my account:</td>
                                     </tr>
<?php
                    
                                    $plan = hsm_fetch_object($plans);
                                    echo '<tr><td width="15"><input type="radio" class="radio" checked name="plan" value="' . $plan->id . '"></td><td width="95%"><b>' . $plan->name . '</b></td></tr><tr><td colspan="2" style="padding-left:50px;">' . $plan->description . '</td></tr>';
                                    while(@$plan = hsm_fetch_object($plans))
                                    {
                                        echo '<tr><td width="15"><input type="radio" class="radio" name="plan" value="' . $plan->id . '"></td><td><b>' . $plan->name . '</b></td></tr><tr><td colspan="2" style="padding-left:50px;">' . $plan->description . '</td></tr>';
                                    }
                                }
                                else
                                {
                                    echo '<td align="center">Your account has been updated</td>';
                                }
                                
?>

                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                     
                                 </tr>
                            </table>
                         </td>
                      </tr>
<?php
                    if($_SESSION['upgrade']!="successful")
                    {
?>
                      <tr>
                         <td  align="center" valign=top><input type="submit" name="buy_plan" value="Update my account"/></td>
                      </tr>
<?php
                    }
                    else
                        unset($_SESSION['upgrade']);
?>
                      <tr><td>&nbsp;</td></tr>
                   </table>
                </form>         

            <table class="siteInfo" width="100%">
              <tr>   
                <td><?=date("Y")?> fdXtended</td> 
              </tr> 
            </table>
          </td>
        </tr>
      </table> 
    </td>
  </tr>
</table>
</body>
</html>

                      
