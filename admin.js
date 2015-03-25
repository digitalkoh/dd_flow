$(document).ready(function () {

    function readOverrideCookie(){
		var override = DDX.custom;
		$(override).each(function(i) {
			var cookieName = override[i];
			if(get_cookie(cookieName) != ""){
				if(get_cookie(cookieName) === "on"){
                    
                    // Based on whether PLM is on/off, modify column width
                    if(override[i] === "dd-option-plm"){
						$(".toggleColWidth-70-100").removeClass("col-w100").addClass("col-w70");
						$(".toggleColWidth-30-25").removeClass("col-w25").addClass("col-w30");
						$(".toggleColWidth-70-75").removeClass("col-w75").addClass("col-w70");
                        $('#ui-'+cookieName).show();
					} else if(override[i] === "dd-option-homeimg"){
                        $("#ui-dd-option-homeimg").addClass("useimage")
                    } else {
                        $('#ui-'+cookieName).show();
                    }
					$('#'+cookieName+' .on').addClass('active');
					$('#'+cookieName+' .off').removeClass('active');
				}else{
                    
                    // Based on whether PLM is on/off, modify column width
                    if(override[i] === "dd-option-plm"){
						$(".toggleColWidth-70-100").addClass("col-w100").removeClass("col-w70");
						$(".toggleColWidth-30-25").addClass("col-w25").removeClass("col-w30");
						$(".toggleColWidth-70-75").addClass("col-w75").removeClass("col-w70");
                        $('#ui-'+cookieName).hide();
					} else if(override[i] === "dd-option-homeimg"){
                        $("#ui-dd-option-homeimg").removeClass("useimage")
                    } else {
                        $('#ui-'+cookieName).hide();
                    }
					$('#'+cookieName+' .off').addClass('active');
					$('#'+cookieName+' .on').removeClass('active');
				}
		  	}
		})
	}
    
    function readOptionsCookie(){
		if(get_cookie('sitetype') === "custom"){
            
            // If custome, go right to override readings
            readOverrideCookie();
            
		} else {
            var typesetting = DDX.defaults;
			var tabs = DDX.keys;
			
            // If default, set each cookie to match default
			$(typesetting).each(function(i) {
				if(typesetting[i] === 0){
                    document.cookie=tabs[i]+"=off"
				}else if(typesetting[i] === 1){
                    document.cookie=tabs[i]+"=on"
				}
			});
            
            // And then read override... Override will pick up on the cookies set above
			readOverrideCookie();
		}
	}
    
    readOptionsCookie();
    
    $('#admin li a.on').click(function(){
		var cookieKey = $(this).parent().attr('id');
		document.cookie=cookieKey+"=on";
		document.cookie="sitetype=custom"; // any click of option button turns site into custom
		readOptionsCookie();
		return false;
	});
	
	$('#admin li a.off').click(function(){
		var cookieKey = $(this).parent().attr('id');
		document.cookie=cookieKey+"=off";
		document.cookie="sitetype=custom"; // any click of option button turns site into custom
		readOptionsCookie();
		return false;
	});
    
    if($("#admin").length){
        $("footer").hide();
    }

})
// END jq document ready