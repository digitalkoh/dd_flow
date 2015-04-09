<section id="home">
	<div class="container clearfix">
		<div id="intrographic">
            <div id="ui-dd-option-homeimg">
                <div class="circle" id="homecircle-1"></div>
                <div class="circle" id="homecircle-2"></div>
                <div class="circle" id="homecircle-3"></div>
                <div class="circle" id="homecircle-4"></div>
                <div class="circle" id="homecircle-5"></div>
            </div>
		</div><!--/#intrographic-->
        
        <div class="col-a col-w50">
            <div class="maintext">
                <h1><?php echo _home_intro_headline ?></h1>
                <p><?php echo _home_intro_paragraph ?></p>
                
                <form name="startform" id="startform" class="mt20">
                    
                    <div class="option-population" id="ui-dd-option-population">
                        <label>To  get started, tell us who you are.</label>
                        <select>
                            <option value="0">Select</option>
                            <option value="1">Population One</option>
                            <option value="2">Population Two</option>
                            <option value="3">Population Three</option>
                        </select>
                    </div>
                    
                    <div class="btrow">
                        <a href="?section=qa" class="bt mdBtn rnd blueBtn">Get Started</a>
                        <a href="#" class="icon vid-play" id="ui-dd-option-homevideo">Enable Video</a>
                    </div>
                </form>
            </div><!-- /.maintext -->
		</div><!--/.col-a-->
        
        <div class="col-b col-w50 hide" id="vid-home">
            <div>
                <!-- temp demo only ! -->
                <img style="width:100%; margin:auto; position:relative; border:solid 1px #555" src="img/sample_vid_player_0.jpg" />
            </div>
		</div><!--/.col-b-->
        
	</div><!--/.container-->
</section>