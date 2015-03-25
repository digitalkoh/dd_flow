<section id="admin">
	<div class="container clearfix">
        <div class="col-a col-w70">
            <h2>DecisionDirect - Options</h2>
            <p>These settings persist only during browser session. Quitting the browser resets all settings to default. <span style="color:#f00">**</span> 
                
            </p>
            <ul>
                <li id="dd-option-population">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>Population Select
                </li>
                
                <li id="dd-option-homevideo">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>Video: Home
                </li>
                
                <li id="dd-option-video">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>Video: Q/A
                </li>
                
                <li id="dd-option-plm">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>People Like Me
                </li>
                
                <li id="dd-option-vision">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>Vision Plan
                </li>
                
                <li id="dd-option-dental">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>Dental Plan
                </li>
                
                 <li id="dd-option-backto">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>Back to ... Link
                </li>
                
                <li id="dd-option-homeimg">
                    <a href="#" class="on">On</a>
                    <a href="#" class="off">Off</a>
                    <div class="state"></div>Custom Home Image
                </li>
            </ul>
            
            <div>
                <a href="#" class="bt recBtn blueBtn rnd" onclick="history.go(-1); return false">Previous Page</a> &nbsp; | &nbsp; <a href="index">Home Page</a> 
            </div>
            
            <p>
                <br><span style="float:right; padding:1px 14px; font-size:80%; color:#000; background-color:#ddd">for <strong>Firefox:</strong> you may need to "Refresh/Reload" for settings to take effect.</span>
                <br><span style="float:right; padding:1px 14px; font-size:80%; color:#fff; background-color:#f46666">** all browsers: your browser must be set to 'accept cookies'</span>
            </p>
		</div><!--/.col-a-->   
	</div><!--/.container-->

</section>

<script>
    $(document).ready(function(){
        
        // Wrtite ME!
        // Print out default settings as reference. Read off default config from admin.js
        // Yay!
        
        function printDefaultSettings(){
            var li = $("#admin ul li"),
                typesetting = DDX.defaults,  // on or off
                tabs = DDX.keys;            // id names

            $(tabs).each(function(i) {
                if(typesetting[i] === 0){
                    $("#" + tabs[i]).append("<span>(default: OFF)</span>")
                }else if(typesetting[i] === 1){
                    $("#" + tabs[i]).append("<span>(default: ON)</span>")
                }
            });
        }
        
        printDefaultSettings()
    })
</script>

