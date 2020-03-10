<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include("config/connect.php");
include("includes/fetch_users_info.php");
include ("includes/time_function.php");
if(!isset($_SESSION['Username'])){
    header("location: index");
}
?>
<html dir="<?php echo lang('html_dir'); ?>">
<head>
    <title>Bildirimler | Vice Social</title>
    <meta charset="UTF-8">
    <meta name="description" content="Vice Social, GTA San Andreas oyunun çok oyunculu SAMP modülünde hizmet veren Vice Roleplay isimli roleplay sunucusunun oyun içi sosyal medya platformudur. Tüm karakterler hayal ürünüdür.">
    <meta name="keywords" content="vice city,vice roleplay,samp,Vice Social,sosyal,roleplay,gta,gta san andreas">
    <meta name="author" content="Batuhan 'Nyarko' Kaçar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head_imports_main.php";?>
</head>
<body onload="fetchNotifications()">
<!--=============================[ NavBar ]========================================-->
<?php include "includes/navbar_main.php"; ?>
<!--=============================[ Div_Container ]========================================-->
<div class="main_container" align="center">
    <div style="display: inline-flex" align="center">
        <div style="text-align: <?php echo lang('textAlign'); ?>">
            <div class="fetchNotifications">
                <div id="notificationsP_data" data-load="0"></div>
                <p style='width: 100%;border:none;display: none' id="notificationsP_loading" align='center'><img src='<?php echo $dircheckPath; ?>imgs/loading_video.gif' style='width:20px;box-shadow: none;height: 20px;'></p>
                <p id="notificationsP_noMore" style='display:none;color:#9a9a9a;font-size:14px;text-align:center;'><?php echo lang('no_notifications'); ?></p>
                <input type="hidden" id="notificationsP_load" value="0"> 
                <p id="notifi_loadmoreBtn" style="text-align: center;display: none;"><button style="width: 50%" class="blue_flat_btn"><?php echo lang('loadmore'); ?></button></p>
            </div>
        </div>
    </div>

</div>
<!--===============================[ End ]==========================================-->
<?php include("includes/footer.php");?>
<?php include "includes/endJScodes.php"; ?>
<script type="text/javascript">
    getNotifications('notificationsP');
$('#notifi_loadmoreBtn').click(function(){
    getNotifications2('notificationsP');
});
</script>
</body>
</html>