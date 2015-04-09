$(document).ready(function () {
		
    function scrollTo(d) {$('html, body').animate({scrollTop: $(d).offset().top}, 800)}
    
    // auto append <span> inside <a> with icon
    $('.icon').prepend("<span></span>"); //<-- Must include end tag "...</xxx>" for $append to work in IE.
    
    // PLUGIN ======= Text toggle plugin ===========================
    $.fn.toggleText = function (t1, t2) {
        if (this.text() === t1) this.html("<span></span>" + t2);
        else                   this.html("<span></span>" + t1);
        return this;
    };
    
    // PLUGIN ======= Class toggle plugin ==========================
    $.fn.toggleClass = function (c1, c2) {
        if (this.hasClass(c1)) this.addClass(c2).removeClass(c1);
        else                   this.addClass(c1).removeClass(c2);
        return this;
    };
    
    // MOBILE MENU TOGGLE =======
	$("#m-menu").click(function(){$("nav").slideToggle(function(){if($("nav").is(":visible")){$("nav").addClass("hambactive")}else{$("nav").removeClass("hambactive")}})});
	// recover nav @ > 580
	$(window).resize(function(){if($(window).width() > 580){$("nav").show().removeClass("hambactive")}else{if(!$("nav").hasClass("hambactive")){$("nav").hide()}}});

    
    // PARENT-CHILD-CENTER function =================================================================================
    // CIRCLE
    var circleSizer = function () {
        var aColWidth = $(".ce-parent").width();
        var topTextWidth = $(".ce-child").width();
        var topTextHeight = $(".ce-child").height();
        var topTextLeft = (aColWidth-topTextWidth)/2;
        var topTextTop = (aColWidth-topTextHeight)/2;
        $(".ce-parent").height(aColWidth);
        $(".ce-child").css({"left": topTextLeft, "top": topTextTop});
    };
    
    // HORIZONTAL + VERTICAL
    var centerElementBoth = function () {
         $(".ce-parent").each(function () {
             var pw = $(this).width();                          // parnt width
             var cw = $(".ce-child", this).width();             // child width
             var ch = $(".ce-child", this).height();            // child height
             var cl = (pw-cw)/2;                                // child left offset
             var ct = (pw-ch)/2;                                // child top offset
             $(this).height(pw);                                // match height to width
             $(".ce-child", this).css({"left": cl, "top": ct}); // apply offset
         });
    }
    
    // VERTICAL ONLY
    var centerElementVertical = function () {
         $(".cev-parent").each(function () {
             var ph = $(this).height();                         // parnt height
             var ch = $(".cev-child", this).outerHeight();      // child height
             var ct = (ph-ch)/2;                                // child top offset
             $(".cev-child", this).css({"top": ct});            // apply offset
         });
    }
    
    // HORIZONTAL ONLY
    var centerElementHorizontal = function () {
         $(".ceh-parent").each(function () {
             var pw = $(this).width();                         // parnt width
             var cw = $(".ceh-child", this).outerWidth();      // child width
             var cl = (pw-cw)/2;                               // child left offset
             $(".ceh-child", this).css({"left": cl});          // apply offset
         });
    }
    // END PARENT-CHILD-CENTER function ==========================================================================
    
    // resize circle container as home section grows
    var resizeChild = function (el) {
        var parentHeight = el.innerHeight()+12; // 12px offset added to fill gap caused by lazy gfont loading.
        $("#intrographic", el).css({"height" :parentHeight + "px"});
        $("#ui-dd-option-homeimg", el).css({"height" :parentHeight + "px", "width" :parentHeight + "px"});
        
        // grab #ui-dd-option-homeimg width after width has been calculated and added from above line
        var childHeight = $("#ui-dd-option-homeimg", el).innerHeight();
        
        // Constrain overall graphic size
        if(childHeight > 360){
            $("#ui-dd-option-homeimg", el).css({"height" : "360px", "width" : "360px"});
        }
    };  
    
    
    // VIDEO Player
    if($("#ui-dd-option-video").length){
        var wrapper = $("#ui-dd-option-video"), text = $(".vid-toggle", wrapper);
        $("#vid-player", wrapper).hide();
        $(".vid-toggle", wrapper).click(function(){
            $("#vid-player", wrapper).slideToggle(function(){
                $(text).toggleText("Disable Video", "Enable Video");
                centerElementVertical();
            });
            $(this).toggleClass("vid-enable", "vid-disable");
        });
        centerElementVertical(); // re-center the arrow after video player is hiiden
    }
    
    // Home Video Button
    $("#ui-dd-option-homevideo").click(function(){
        var bt = $(this);
        $("#vid-home").toggle(function(){
             $(bt).toggleText("Disable Video", "Enable Video");
        });
        
        if( $("#vid-home").is(":visible")){
            scrollTo("#vid-home");
        }
    })
    
    // PLM text population
    if($("#ui-dd-option-plm").length){
        $(".plm-header a").click(function(e){
            $(".plm-content").html("");
            $(".plm-content").hide();
            $(".plm-header a").removeClass("active");
            $(this).addClass("active");
            
            // TODO: Need to change path + .php to actual file path when implementing live.
            // Populate content 
            $.post("inc/text_plm_" + ($(this).index()+1) + ".php",
            function(data){
                $(".plm-content").append(data);
                $(".plm-content").slideDown();
            }); // end .post > data	
            
            e.preventDefault();
        })
    };
    
    
    // Assign different width class based on parent container size
    // Because column width differ for page w/wo PLM
    $.fn.toggleWidthClass = function () {
        if(this.parent().hasClass("col-w70")){
            $("div:first", this).addClass("col-w30").removeClass("col-w25");
        }
        if(this.parent().hasClass("col-w100")){
            $("div:first", this).addClass("col-w25").removeClass("col-w30");
        }
    };
    
    function placeReminder(){
        var winWidth = $(window).width();
        if(winWidth > 840){
            $("#remember").toggleWidthClass();
        }
    }
    
    function switchArrow(){
        var winWidth = $(window).width();  
        if(winWidth > 840){
            $("#qa .col-a .maintext").addClass("cev-parent").removeClass("ceh-parent");
            $("#question-arrow").addClass("cev-child").removeClass("ceh-child").css({"left":"auto"});
        }else{
            $("#qa .col-a .maintext").addClass("ceh-parent").removeClass("cev-parent");
            $("#question-arrow").addClass("ceh-child").removeClass("cev-child").css({"top":"auto"});
        }
    }
    
    
    // DEMO FORM FLOW =====================================================================================================================
    // ====================================================================================================================================
    // ====================================================================================================================================
    
    /*  -- Developers, please note: this form flow may need to be modified for production.
        -- This flow is created specifically for the demo purposes and may or may not be compatible.
        -- Sample branching located: dd.obj.js 
    */
    
    if ($(".response").length) { // Run below only QA form exists
        var form = $("form.response");
        
        // Populate question
        var populateQ = function(n){
            var q = DD_QA_TXT.qanda[n-1].q,
                el = $("#question-wrapper");
            
            $("h2", el).html(q);
            centerElementVertical(); // re-position arrow vertically
            
            // Switch "Why we ask?" path
            $("a", el).attr("href", "#lbtext-whydoweask" + n);
            
            // Switch video path
            if($("#ui-dd-option-video", el).length){ // If Video is activated ~
                /* CHANGE!~!~!~!~!~  ---- Image is used for demo only. The path needs to be applied to the real video player */
                $("#vid-player", el).html("<img src='img/sample_vid_player_" + n + ".jpg' />");
                // TO DO: Use real vide player.
            }
        }

        // Onload, hide all fields except the first flow.
        $(".flowgroup", form).not(".firstflow").hide();
        
        // Populate first question
        populateQ(1);
        
        // Activate/Deactivate "Get Result" button
        var btLableSwitch = function(b){
            if ($(".flowgroup.lastflow").is(":visible")) {
                $(".qa-next", form).addClass("btText").html("<span>Get Results</span>")
            } else {
                $(".qa-next", form).removeClass("btText").html("<span></span>Next")
            } 
        }
        
        // NEXT BUTTON ==================================
        $(".qa-next", form).click(function (e) {
            var thisBt = $(this),
                activeGroup = $(".flowgroup:visible"),
                flowID = $(activeGroup).attr("data-flowid"),
                selectedID = $("input:checked" ,activeGroup).attr("id"),    // id of radio button selected
                nextID = DDX.sampleFlow(flowID, selectedID),                // read off predefined sample flow in dd.obj.js
                nextGroup = $(".flowgroup[data-flowid=" + nextID + "]"),
                qid = $(nextGroup).index();
            
            DDX.qflow.push(nextID);  // populate temp aray of branching
            
            // Hide current group only if next group exists
            if (nextGroup.length) {
                activeGroup.fadeTo("fast", 0, function(){
                    activeGroup.hide();
                    nextGroup.fadeTo("slow", 1);
                    btLableSwitch();
                    populateQ(qid);
                });
            } else {
                // Replace this with SUBMIT action !
                 window.location.href = "?section=medical";   
            }
            e.preventDefault();
        }) // end next bt
        
        // PREV BUTTON ==================================
        $(".qa-prev", form).click(function (e) {
            var thisBt = $(this),
                activeGroup = $(".flowgroup:visible"),
                flowID = $(activeGroup).attr("data-flowid");
                // indexOfCurrent = DDX.qflow.indexOf(flowID),   
                // countToRemove = DDX.qflow.length - (indexOfCurrent);
            if(DDX.qflow.length > 1){
                DDX.qflow.splice(-1, 1)  // Remove last array
            }

            if(flowID > 1) {
                var nextID = DDX.qflow[DDX.qflow.length - 1],
                    nextGroup = $(".flowgroup[data-flowid=" + nextID + "]"),
                    qid = $(nextGroup).index();
                
                activeGroup.fadeTo("fast", 0, function(){
                    activeGroup.hide();
                    nextGroup.fadeTo("slow", 1);
                    btLableSwitch();
                    populateQ(qid);
                })
            } else {
                 window.location.href = "index"; 
            }
            e.preventDefault();
        }) // end prev bt
        
    } // END FORM FLOW =====================================================================================================================
    // =====================================================================================================================================
    // =====================================================================================================================================

    
    $(window).resize(function(){
        centerElementVertical();
        centerElementHorizontal();
        switchArrow();
        if($("#home").length){resizeChild($("#home"))};
        if($("#result").length){placeReminder()}
    })
    
    // Onload ---
    switchArrow();
    if($("#home").length){resizeChild($("#home"))};
    if($(".cev-parent").length && $(".cev-child").length){centerElementVertical()};
    if($(".ceh-parent").length && $(".ceh-child").length){centerElementHorizontal()};
    if($("#result").length){placeReminder()};
    
    // LIGHTBOX OPTIONS ==============================
    $(".various").fancybox({maxWidth:800,maxHeight:600,fitToView:false,width:'70%',height:'70%',autoSize:false,closeClick:false,openEffect:'none',closeEffect:'none'});
    $(".fancybox").fancybox({maxWidth:600,maxHeight:500});
    $(".fancybox-form").fancybox({maxWidth:600,maxHeight:500,modal:true,closeClick:true});
    $(".fancybox-media").fancybox({openEffect:'none',closeEffect:'none',helpers:{media:{}}});
    
    
    // =(____  ie stuff
    function detectIE() {
        var ua = window.navigator.userAgent,
            msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
            DDX.isie = 1
            //alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
        } else {
            DDX.isie = 0
        }
        return false;
    }
    detectIE();
    
    $(".response li label").click(function(){
        if(DDX.isie === 1){ // if IE
            var thisSet = $(this).parent().parent();
            $("label" , thisSet).removeClass("selected");
            $(this).addClass("selected");
        }
    })
    
})
// END jq document ready