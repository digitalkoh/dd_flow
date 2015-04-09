<section id="result">
    <?php include 'inc/inc_nav.php'; ?>
	<div class="container clearfix">
        <div class="col-a col-w70 toggleColWidth-70-100">
            <div class="block bb1">
                <div class="col-nested col-w30 toggleColWidth-30-25"><h3 class="label">Text</h3></div>
                <div class="col-nested col-w70 toggleColWidth-70-75"><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2></div>
                <div class="clear"></div>
            </div><!-- /.block -->
            
            <div class="block bb1">
                <div class="col-nested col-w30 toggleColWidth-30-25"><h3 class="label">Text</h3></div>
                <div class="col-nested col-w70 toggleColWidth-70-75">
                    <h3>Text:</h3>
                    <ul>
                        <li class="icon"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                        <li class="icon"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                        <li class="icon"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div><!-- /.block -->
            
            <div class="block mb10" id="remember">
                <div class="col-nested col-w30 toggleColWidth-30-25"><div class="icon-bulb"></div></div>
                <div class="col-nested col-w70 toggleColWidth-70-75"><?php echo _result_medical_remember ?></div>
                <div class="clear"></div>
            </div><!-- /.block #remember -->
            
            <div class="block bt1">
                <div class="col-nested col-w30 toggleColWidth-30-25"><h3 class="label">Text</h3></div>
                <div class="col-nested col-w70 toggleColWidth-70-75"><?php echo _result_medical_additionalInfo ?></div>
                <div class="clear"></div>
            </div><!-- /.block -->
        
		</div><!--/.col-a-->
        
        
        <div class="col-b col-w30">
            <!-- IF PLM -->
            <?php include 'inc/inc_plm_text.php'; ?>
		</div><!--/.col-b-->
        
        
	</div><!--/.container-->

</section>

